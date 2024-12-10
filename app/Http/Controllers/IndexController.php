<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tour;

class IndexController extends Controller
{
    public function index(){
        // Lấy danh sách tour từ cơ sở dữ liệu
        $tours = Tour::where('status', 1)->get(); // Lọc các tour hiển thị (status = 1)
        return view('pages.home', compact('tours'));
    }

    public function tour($slug){
            // Lấy danh mục dựa trên slug
            $category = Category::where('slug', $slug)->firstOrFail();

            // Lấy tất cả các ID của danh mục cha và các danh mục con
            $categoryIds = Category::where('id', $category->id)
                            ->orWhere('parent_id', $category->id)
                            ->pluck('id');

            // Lấy danh sách các tour thuộc các danh mục này và có status = 1
            $tours = Tour::whereIn('category_id', $categoryIds)
                         ->where('status', 1)
                         ->get();

            // Trả về view với dữ liệu
            return view('pages.tour.home', compact('category', 'tours'));
    }

    public function detail_tour($slug)
    {
        // Lấy thông tin tour theo slug
        $tour = Tour::where('slug', $slug)->firstOrFail();

        // Truyền dữ liệu sang view
        return view('pages.tour.detail', compact('tour'));
    }

    public function filterTours(Request $request)
    {
        // Bắt đầu query cơ bản
        $query = Tour::query();

        // Lọc theo loại tour (nội địa hoặc quốc tế)
        if ($request->has('tour-type') && !empty($request->input('tour-type'))) {
            $selectedCategoryId = $request->input('tour-type');

            // Lọc theo category_id hoặc các danh mục con
            $query->where(function ($q) use ($selectedCategoryId) {
                // Lọc các tour thuộc danh mục được chọn hoặc các danh mục con
                $q->where('category_id', $selectedCategoryId)
                  ->orWhereHas('category', function ($subQuery) use ($selectedCategoryId) {
                      $subQuery->where('parent_id', $selectedCategoryId);
                  });
            });
        }


        // Lọc theo điểm khởi hành
        if ($request->has('place_departure_category_id') && !empty($request->input('place_departure_category_id'))) {
            $query->where('tour_from', $request->input('place_departure_category_id'));
        }

        // Lọc theo điểm đến
        if ($request->has('category_id_nd') && !empty($request->input('category_id_nd'))) {
            $query->where('tour_to', $request->input('category_id_nd'));
        }

        if ($request->has('category_id_qt') && !empty($request->input('category_id_qt'))) {
            $query->where('tour_to', $request->input('category_id_qt'));
        }

        // Lọc theo ngày khởi hành
        if ($request->has('start_date') && !empty($request->input('start_date'))) {
            $query->whereDate('start_date', '>=', $request->input('start_date'));
        }

        // Lọc theo giảm giá
        if ($request->has('promotion') && !empty($request->input('promotion'))) {
            $query->where('promotion', $request->input('promotion') === 'yes' ? 1 : 0);
        }

        // Lọc theo giá
        if ($request->has('price') && !empty($request->input('price'))) {
            [$minPrice, $maxPrice] = explode('-', $request->input('price'));
            $query->whereBetween('price', [$minPrice * 1000000, $maxPrice * 1000000]);
        }

        // Lọc theo trạng thái (chỉ hiển thị tour đang hoạt động)
        $query->where('status', 1);

        // Thực hiện truy vấn và lấy dữ liệu
        $tours = $query->get();

        // Trả về view kèm danh sách tour đã lọc
        return view('pages.tour_list', compact('tours'));
    }


}
