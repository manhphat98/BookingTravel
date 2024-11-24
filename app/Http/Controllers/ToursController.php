<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Category;
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
        $tours = Tour::all();
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
            'description' => 'required|string',
            'vehicle' => 'required|string|max:255',
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
            'description.required' => 'Vui lòng nhập mô tả hành trình Tour',
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


        // Xử lý file hình ảnh
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/tours'), $imageName); // Lưu ảnh vào thư mục public/upload/tours
        }

        //Xử lý giá tiền
        $data['price'] = str_replace('.', '', $request->price);

        // Lưu dữ liệu tour vào cơ sở dữ liệu
        $tour = new Tour();
        $tour->title = $request->title;
        $tour->slug = Str::slug($request['title'], '-');
        $tour->status = $request['status'];
        $tour->description = $request->description;
        $tour->vehicle = $request->vehicle;
        $tour->price = $data['price'];
        $tour->start_date = $request->start_date;
        $tour->end_date = $request->end_date;
        $tour->category_id = $data['category_id'];
        $tour->tour_from = $request->tour_from;
        $tour->tour_to = $request->tour_to;
        $tour->quantity = $request->quantity;
        $tour->image = $imageName; // Lưu tên file ảnh
        $tour->save();

        // Điều hướng về trang danh sách tour với thông báo thành công
        toastr()->success('Tour đã được tạo thành công!');
        return redirect()->route('tours.create')->with('success', 'Tour đã được thêm thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tours = Tour::find(($id));
        $categories = Category::all();
        return view('admin.tours.edit', compact('tours', 'categories'));
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
        // Xác thực dữ liệu từ form
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'tour_from' => 'required|string|max:255',
            'tour_to' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'vehicle' => 'required|string|max:255',
            'status' => 'required|boolean',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Tìm tour theo ID
        $tour = Tour::findOrFail($id);

        // Cập nhật thông tin tour từ dữ liệu yêu cầu
        $tour->title = $request->input('title');
        $tour->category_id = $request->input('category_id');
        $tour->start_date = $request->input('start_date');
        $tour->end_date = $request->input('end_date');
        $tour->tour_from = $request->input('tour_from');
        $tour->tour_to = $request->input('tour_to');
        $tour->price = str_replace(',', '', $request->input('price')); // Loại bỏ dấu phẩy trong giá
        $tour->quantity = $request->input('quantity');
        $tour->vehicle = $request->input('vehicle');
        $tour->status = $request->input('status');
        $tour->description = $request->input('description');

        // Kiểm tra nếu người dùng đã chọn ảnh mới
        if ($request->hasFile('image')) {
            // Xóa ảnh cũ nếu có
            if ($tour->image) {
                Storage::delete($tour->image);
            }

            // Lưu ảnh mới
            $tour->image = $request->file('image')->store('tours');
        }

        // Lưu lại thông tin cập nhật
        $tour->save();

        // Chuyển hướng và gửi thông báo thành công
        return redirect()->route('tours.index')->with('success', 'Tour đã được cập nhật thành công');
        toastr()->success('Tour đã được cập nhật thành công!');
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
            toastr()->success('Đã xóa Tour');
            return redirect()->route('tours.index');
        } catch (\Exception $e) {
            toastr()->warning('Không thể xóa tour này do nó có liên kết với dữ liệu khác');
        }
    }
}
