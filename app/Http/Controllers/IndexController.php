<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tour;
use App\Models\Residence;
use App\Models\Vehicle;

class IndexController extends Controller
{
    public function index(Request $request){
        $query = Tour::query()->where('status', 1); // Chỉ lấy các tour có status = 1

        // Lọc theo từ khóa
        if ($request->filled('keyword')) {
            $keyword = $request->input('keyword');
            $query->where('title', 'LIKE', "%$keyword%")
                  ->orWhere('description', 'LIKE', "%$keyword%");
        }

        // Lọc theo danh mục
        if ($request->filled('tour-type')) {
            $selectedCategoryId = $request->input('tour-type');
            $categoryIds = Category::where('id', $selectedCategoryId)
                ->orWhere('parent_id', $selectedCategoryId)
                ->pluck('id');

            $query->whereIn('category_id', $categoryIds);
        }

        // Lọc theo giá
        if ($request->filled('price')) {
            [$min, $max] = explode('-', $request->input('price'));
            $query->whereBetween('price', [$min * 1_000_000, $max * 1_000_000]);
        }

        // Lọc theo khuyến mãi
        if ($request->filled('promotion')) {
            $promotion = $request->input('promotion') === 'yes';
            $query->whereNotNull('promotion', $promotion);
        }

        $tours = $query->get(); // Lấy danh sách tour sau khi áp dụng tất cả bộ lọc
        $categories = Category::all(); // Lấy danh mục cho bộ lọc

        return view('pages.home', compact('tours', 'categories'));
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
            return view('pages.category.home', compact('category', 'tours'));
    }

    public function introduce(){
        return view('pages.include.introduce');
    }

    public function residence(){
        $residences = Residence::all()->where('status', 1);
        return view('pages.residence.home', compact('residences'));
    }

    public function vehicle(){
        $vehicles = Vehicle::all()->where('status', 1);
        return view('pages.vehicle.home', compact('vehicles'));
    }

    public function filter(Request $request)
    {
        $query = Tour::query();

        // Lọc theo loại tour
        if ($request->filled('tour-type')) {
            $query->where('category_id', $request->input('tour-type'));
        }

        // Lọc theo ngày khởi hành
        if ($request->filled('start_date')) {
            $query->whereDate('start_date', '>=', $request->input('start_date'));
        }

        // Lọc theo ngày về
        if ($request->filled('end_date')) {
            $query->whereDate('end_date', '<=', $request->input('end_date'));
        }

        // Lọc theo giảm giá
        if ($request->filled('promotion')) {
            $promotion = $request->input('promotion') === 'yes';
            $query->whereNotNull('promotion', $promotion);
        }

        // Lọc theo giá
        if ($request->filled('price')) {
            [$min, $max] = explode('-', $request->input('price'));
            $query->whereBetween('price', [$min * 1_000_000, $max * 1_000_000]);
        }

        // Lấy danh sách tour sau khi lọc
        $tours = $query->get();

        // Gửi dữ liệu về view
        return view('home', compact('tours'));
    }




}
