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
        $categories = Category::orderBy('id', 'DESC')->get();
        // $categories = Category::with('parent')->get();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->getCategoriesProduct();
        return view('admin.categories.create', compact('categories'));
    }
    public function getCategoriesProduct()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        $listCategory = [];
        Category::recursive($categories, $parents = 0, $level = 1, $listCategory);
        return $listCategory;
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
            'title' => 'required|unique:categories|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
            'parent_id' => 'nullable|exists:categories,id',
        ],[
            'title.required' => 'Vui lòng không để trống tên Danh mục',
            'title.unique' => 'Danh mục đã tồn tại',
            'status.required' => 'Vui lòng chọn trạng thái cho Danh mục',
        ]);

        // Tạo đối tượng Category và lưu dữ liệu
        $category = new Category();
        $category->title = $data['title'];
        $category->slug = Str::slug($data['title'], '-');
        $category->description = $data['description'] ?? null;

        // Xử lý upload file hình ảnh (nếu có)
        if ($request->hasFile('image')) {
            $get_image = $request->image;
            $path = 'upload/categories';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 999) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $category->image = $new_image;
        }

        // Lưu dữ liệu vào database
        $category->status = $data['status'];
        $category->parent_id = $data['parent_id'] ?? null;
        $category->save();

        // Chuyển hướng lại với thông báo thành công
        toastr()->success('Danh mục đã được tạo thành công!');
        // return redirect()->route('categories.create');


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
        $category = Category::find(($id));
        $categories = $this->getCategoriesProduct();
        return view('admin.categories.edit', compact('category','categories'));
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
        // Tìm danh mục dựa trên id
        $category = Category::findOrFail($id);

        // Xác thực dữ liệu
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
            'parent_id' => 'nullable|exists:categories,id',
        ],[
            'title.required' => 'Vui lòng không để trống tên Danh mục',
            'status.required' => 'Vui lòng chọn trạng thái cho Danh mục',
        ]);

        // Cập nhật thông tin danh mục
        $category->title = $request->input('title');
        $category->slug = Str::slug($request->input('title'), '-');
        $category->status = $request->input('status');
        $category->parent_id = $data['parent_id'];
        $category->description = $request->input('description');

        // Xử lý hình ảnh
        if ($request->hasFile('image')) {
            // Xóa hình ảnh cũ nếu có
            if ($category->image && file_exists(public_path('upload/categories/' . $category->image))) {
                unlink(public_path('upload/categories/' . $category->image));
            }

            // Lưu hình ảnh mới
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('upload/categories'), $imageName);
            $category->image = $imageName;
        }

        $category->save();

        toastr()->success('Danh mục đã được cập nhật thành công!');
        return redirect()->route('categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::find($id);

        if (!$categories) {
            toastr()->warning('Danh mục không tồn tại');
        }

        try {
            $categories->delete();
            toastr()->success('Đã xóa Tour');
            return redirect()->route('tours.index');
        } catch (\Exception $e) {
            toastr()->warning('Không thể xóa danh mục này do nó có liên kết với dữ liệu khác');
        }
    }
}
