<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Xác thực dữ liệu từ form
    $data = $request->validate([
        'title' => 'required|unique:categories|max:255',
        'description' => 'required|max:220',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'status' => 'required',
    ],[
        'title.required' => 'Không để trống tên Danh mục',
        'title.unique' => 'Danh mục đã tồn tại',
        'image.required' => 'Không để trống Hình ảnh',
        'status.required' => 'Vui lòng xác nhận',
    ]);

    // Xử lý upload file hình ảnh
    if($request->hasFile('image')){
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $data['image'] = $imageName;
    }

    // Tạo đối tượng Category và lưu dữ liệu
    $category = new Category();
    $category->title = $data['title'];
    $category->slug = Str::slug($data['title'], '-');
    $category->description = $data['description'];
    $category->image = $data['image'];
    $category->status = $data['status'];
    $category->save();

    // Chuyển hướng lại với thông báo thành công
    return redirect()->back()->with('success', 'Danh mục đã được tạo thành công!');
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
        //
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
        //
    }
}
