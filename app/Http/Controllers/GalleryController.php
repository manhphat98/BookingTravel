<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Xác thực dữ liệu từ form (không bắt buộc hình ảnh)
    $data = $request->validate([
        'title' => 'required|unique:galleries|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'tour_id' => 'nullable|exists:tours,id',
    ],[
        'title.required' => 'Vui lòng không để trống tên ảnh',
        'title.unique' => 'Tên ảnh đã tồn tại',
        'image.required' => 'Vui lòng không để trống Hình ảnh',
        'image.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, hoặc gif',
        'image.max' => 'Hình ảnh tải lên phải nhỏ hơn 2MB',
        'tour_id.exists' => 'Vui lòng chọn Tour hợp lệ',
    ]);

    // Tạo đối tượng gallery và lưu dữ liệu
    $gallery = new Gallery();
    $gallery->title = $data['title'];
    $gallery->tour_id = $data['tour_id'];

    // Xử lý ảnh nếu có
    if ($request->hasFile('image')) {
        foreach($request->file('image') as $image) {
            $get_name_image = $image->getClientOriginalName();
            $name_image = pathinfo($get_name_image, PATHINFO_FILENAME);
            $new_image = $name_image . rand(0, 999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/galleries'), $new_image);

            // Lưu đường dẫn ảnh vào trường 'image'
            $gallery->image = $new_image;
        }
    }

    $gallery->save();

    toastr()->success('Ảnh đã thêm thành công!');
    return redirect()->back();
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
        $tour = Tour::find($id);
        $galleries = Gallery::where('tour_id', $id)->get();
        return view('admin.galleries.create', compact('tour', 'id', 'galleries'));
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
        $galleries = Gallery::find($id);

        $galleries->delete();
        toastr()->success('Đã xóa Ảnh');
        return redirect()->back();
    }
}
