<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
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
        return view('admin.tours.create');
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
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'vehicle' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'tour_time' => 'required|string|max:255',
            'tour_from' => 'required|string|max:255',
            'tour_to' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Giới hạn kích thước file ảnh
        ],[
            'title.required' => 'Vui lòng không để trống tên Tour',
            'vehicle.required' => 'Vui lòng không để trống phương tiện di chuyển trong Tour',
            'title.unique' => 'Tour đã tồn tại',
            'description.required' => 'Vui lòng không để trống mô tả',
            'start_date,require' => 'Vui lòng không để trống ngày khởi hành Tour',
            'end_date,require' => 'Vui lòng không để trống ngày kết thúc Tour',
            'tour_from,require' => 'Vui lòng không để trống địa điểm khởi hành của Tour',
            'tour_to,require' => 'Vui lòng không để trống địa điểm đến của Tour',
            'price.require' => 'Vui lòng không để trống giá Tour',
            'quantity.require' => 'Vui lòng không để trống số lượng khách Tour',
            'image.required' => 'Vui lòng không để trống Hình ảnh',
            'status.required' => 'Vui lòng chọn trạng thái cho Danh mục',
        ]);

        // Xử lý file hình ảnh
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/tours'), $imageName); // Lưu ảnh vào thư mục public/upload/tours
        }

        // Lưu dữ liệu tour vào cơ sở dữ liệu
        $tour = new Tour();
        $tour->title = $request->title;
        $tour->slug = Str::slug($request['title'], '-');
        $tour->status = $request['status'];
        $tour->description = $request->description;
        $tour->vehicle = $request->vehicle;
        $tour->price = $request->price;
        $tour->start_date = $request->start_date;
        $tour->end_date = $request->end_date;
        $tour->tour_code = rand(0000,9999);
        $tour->tour_time = $request->tour_time;
        $tour->tour_from = $request->tour_from;
        $tour->tour_to = $request->tour_to;
        $tour->quantity = $request->quantity;
        $tour->image = $imageName; // Lưu tên file ảnh
        $tour->save();

        // Điều hướng về trang danh sách tour với thông báo thành công
        toastr()->success('Danh mục đã được tạo thành công!');
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
        return view('admin.tours.edit', compact('tours'));
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
        //
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

        $tours->delete();
        toastr()->warning('Đã xóa Tour');
        return redirect()->route('tours.index');    }
}
