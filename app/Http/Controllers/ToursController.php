<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Category;
use Carbon\Carbon;
use Str;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::with('category')->get(); // Sử dụng eager loading
        return view('admin.tours.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.tours.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Xác thực dữ liệu
        $data = $request->validate([
            'title' => 'required|unique:tours|string|max:255',
            'description' => 'required',
            'vehicle' => 'required|string|max:255',
            'residence' => 'nullable|string|max:255',
            'price' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'category_id' => 'required',
            'tour_from' => 'required|string|max:255',
            'tour_to' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],[
            'title.required' => 'Vui lòng không để trống tên Tour',
            'title.unique' => 'Tour đã tồn tại',
            'description.required' => 'Vui lòng mô tả chuyến đi',
            'vehicle.required' => 'Vui lòng không để trống phương tiện di chuyển trong Tour',
            'category_id.required' => 'Vui lòng chọn Danh mục cho Tour',
            'start_date.required' => 'Vui lòng không để trống ngày khởi hành Tour',
            'end_date.required' => 'Vui lòng không để trống ngày kết thúc Tour',
            'end_date.after_or_equal' => 'Ngày kết thúc phải bằng hoặc sau ngày khởi hành',
            'tour_from.required' => 'Vui lòng không để trống địa điểm khởi hành của Tour',
            'tour_to.required' => 'Vui lòng không để trống địa điểm đến của Tour',
            'price.required' => 'Vui lòng không để trống giá Tour',
            'quantity.required' => 'Vui lòng không để trống số lượng khách Tour',
            'quantity.integer' => 'Số lượng khách Tour phải là số nguyên',
            'quantity.min' => 'Số lượng khách Tour phải ít nhất là 1',
            'image.required' => 'Vui lòng không để trống Hình ảnh',
            'image.image' => 'File tải lên phải là hình ảnh',
            'image.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, hoặc gif',
            'image.max' => 'Hình ảnh tải lên phải nhỏ hơn 2MB',
        ]);

        // Khởi tạo đối tượng tour trước khi gán giá trị
        $tour = new Tour();

        // Xử lý giá tiền
        $data['price'] = str_replace('.', '', $request->price);
        $tour->price = (float) $data['price'];

        // Xử lý file hình ảnh
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/tours'), $imageName);
            $tour->image = $imageName; // Gán tên file ảnh vào đối tượng tour
        }

        // Lưu các thông tin khác
        $tour->title = $request->title;
        $tour->slug = Str::slug($data['title'], '-');
        $tour->status = $request->status;
        $tour->description = $request->description;
        $tour->vehicle = $request->vehicle;
        $tour->residence = $request->residence;
        $tour->start_date = $request->start_date;
        $tour->end_date = $request->end_date;
        $tour->duration = Carbon::parse($request->start_date)->diffInDays(Carbon::parse($request->end_date)) + 1;
        $tour->category_id = $request->category_id;
        $tour->tour_from = $request->tour_from;
        $tour->tour_to = $request->tour_to;
        $tour->quantity = $request->quantity;

        // Lưu dữ liệu vào cơ sở dữ liệu
        $tour->save();

        toastr()->success('Tour đã được tạo thành công!');
        return redirect()->route('tours.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // Lấy thông tin tour theo slug
        $tour = Tour::where('slug', $slug)->firstOrFail();

        // Truyền dữ liệu sang view
        return view('pages.tour.detail', compact('tour'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Tour::find(($id));
        $categories = Category::all();
        return view('admin.tours.edit', compact('tour', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Lấy tour cần cập nhật
        $tour = Tour::findOrFail($id);

        // Xác thực dữ liệu đầu vào
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'vehicle' => 'required|string|max:255',
            'residence' => 'nullable|string|max:255',
            'price' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'category_id' => 'required|exists:categories,id',
            'tour_from' => 'required|string|max:255',
            'tour_to' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|in:0,1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'title.required' => 'Vui lòng không để trống tên Tour',
            'description.required' => 'Vui lòng mô tả chuyến đi',
            'vehicle.required' => 'Vui lòng không để trống phương tiện di chuyển trong Tour',
            'category_id.required' => 'Vui lòng chọn Danh mục cho Tour',
            'start_date.required' => 'Vui lòng không để trống ngày khởi hành Tour',
            'end_date.required' => 'Vui lòng không để trống ngày kết thúc Tour',
            'end_date.after_or_equal' => 'Ngày kết thúc phải bằng hoặc sau ngày khởi hành',
            'tour_from.required' => 'Vui lòng không để trống địa điểm khởi hành của Tour',
            'tour_to.required' => 'Vui lòng không để trống địa điểm đến của Tour',
            'price.required' => 'Vui lòng không để trống giá Tour',
            'quantity.required' => 'Vui lòng không để trống số lượng khách Tour',
            'quantity.integer' => 'Số lượng khách Tour phải là số nguyên',
            'quantity.min' => 'Số lượng khách Tour phải ít nhất là 1',
            'image.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, hoặc gif',
            'image.max' => 'Hình ảnh tải lên phải nhỏ hơn 2MB',
        ]);

        // Xử lý giá tiền: Loại bỏ dấu phân cách và chuyển thành số thực
        $data['price'] = str_replace('.', '', $data['price']); // Xóa dấu '.'
        $tour->price = (float)$data['price'];

        // Xử lý các thông tin khác
        $tour->title = $data['title'];
        $tour->slug = Str::slug($data['title'], '-');
        $tour->description = $data['description'];
        $tour->vehicle = $data['vehicle'];
        $tour->residence = $data['residence'];
        $tour->start_date = $data['start_date'];
        $tour->end_date = $data['end_date'];
        $tour->duration = Carbon::parse($data['start_date'])->diffInDays(Carbon::parse($data['end_date'])) + 1;
        $tour->category_id = $data['category_id'];
        $tour->tour_from = $data['tour_from'];
        $tour->tour_to = $data['tour_to'];
        $tour->quantity = $data['quantity'];
        $tour->status = $data['status'];

        // Kiểm tra và xử lý hình ảnh mới
        if ($request->hasFile('image')) {
            // Xóa ảnh cũ nếu tồn tại
            if ($tour->image && file_exists(public_path('upload/tours/' . $tour->image))) {
                unlink(public_path('upload/tours/' . $tour->image));
            }

            // Lưu ảnh mới
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/tours'), $imageName);
            $tour->image = $imageName;
        }

        // Lưu thay đổi vào cơ sở dữ liệu
        $tour->save();
        toastr()->success('Tour đã được cập nhật thành công!');
        return redirect()->route('tours.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tours = Tour::find($id);

        if (!$tours) {
            toastr()->warning('Tour không tồn tại');
        }

        try {
            $tours->delete();
            toastr()->success('Đã xóa Tour thành công');
            return redirect()->route('tours.index');
        } catch (\Exception $e) {
            toastr()->warning('Không thể xóa tour này do nó có liên kết với dữ liệu khác');
        }
    }
}
