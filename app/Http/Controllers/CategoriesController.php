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
        $categories = Category::all();
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
        // Xác thực dữ liệu từ form
        $data = $request->validate([
            'title' => 'required|unique:categories|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
            'parent_id' => 'nullable|exists:categories,id', // Cho phép null nếu không chọn danh mục cha
        ], [
            'title.required' => 'Vui lòng không để trống tên Danh mục',
            'title.unique' => 'Danh mục đã tồn tại',
            'status.required' => 'Vui lòng chọn trạng thái cho Danh mục',
            'image.mimes' => 'Chỉ hỗ trợ định dạng jpeg, png, jpg, gif, svg',
            'parent_id.exists' => 'Danh mục cha không hợp lệ',
        ]);

        // Tạo đối tượng Category và lưu dữ liệu
        $category = new Category();

        $category->title = $data['title'];
        $category->slug = Str::slug($data['title'], '-');
        $category->description = $data['description'] ?? null;
        $category->status = $data['status'];
        $category->parent_id = $data['parent_id'] ?? null; // Đảm bảo giá trị null nếu không chọn

        // Xử lý upload file hình ảnh (nếu có)
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = 'upload/categories';
            $imageName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $newImageName = $imageName . rand(0, 999) . '.' . $image->getClientOriginalExtension();
            $image->move($path, $newImageName);
            $category->image = $newImageName;
        }

        // Lưu dữ liệu vào database
        $category->save();

        toastr()->success('Danh mục đã được tạo thành công!');
        return redirect()->route('categories.index');
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tour = Tour::with('category')->findOrFail($id);
        return view('tours.detail', compact('tour'));
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
            'parent_id' => 'nullable|exists:categories,id', // Đảm bảo parent_id hợp lệ hoặc null
        ], [
            'title.required' => 'Vui lòng không để trống tên Danh mục',
            'status.required' => 'Vui lòng chọn trạng thái cho Danh mục',
            'parent_id.exists' => 'Danh mục cha không hợp lệ',
        ]);

        // Cập nhật thông tin danh mục
        $category->title = $data['title'];
        $category->slug = Str::slug($data['title'], '-');
        $category->status = $data['status'];
        $category->parent_id = $data['parent_id'] ?? null; // Gán null nếu không chọn
        $category->description = $data['description'] ?? null;

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
            toastr()->success('Đã xóa Danh mục thành công!');
            return redirect()->route('categories.index');
        } catch (\Exception $e) {
            toastr()->warning('Không thể xóa danh mục này do nó có liên kết với dữ liệu khác');
        }
    }
}
