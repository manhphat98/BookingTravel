<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Residence;
use Str;

class ResidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $residences = Residence::all();
        return view('admin.residence.index', compact('residences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('admin.residence.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'province' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'price_per_night' => 'required',
            'rating' => 'nullable|numeric|min:0|max:5',
            'status' => 'required|boolean',
        ], [
            'name.required' => 'Vui lòng nhập tên Lưu trú',
            'address.required' => 'Vui lòng nhập địa chỉ Lưu trú',
            'province.required' => 'Vui lòng chọn Tỉnh/Thành phố',
            'district.required' => 'Vui lòng chọn Quận/Huyện',
            'ward.required' => 'Vui lòng chọn Phường/Xã',
            'image.required' => 'Vui lòng cung cấp hình ảnh nơi Lưu trú',
            'price_per_night.required' => 'Vui lòng nhập giá một đêm',
            'status.required' => 'Vui lòng chọn trạng thái',
        ]);

        $residence = new Residence();

        $validatedData['price_per_night'] = str_replace('.', '', $request->price_per_night);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/residences'), $imageName);
            $residence->image = $imageName;
        }

        $residence->name = $validatedData['name'];
        $residence->slug = Str::slug($validatedData['name'], '-');
        $residence->address = $validatedData['address'];
        $residence->province = $validatedData['province'];
        $residence->district = $validatedData['district'];
        $residence->ward = $validatedData['ward'];
        $residence->description = $validatedData['description'] ?? null;
        $residence->price_per_night = $validatedData['price_per_night'];
        $residence->rating = $validatedData['rating'] ?? null;
        $residence->status = $validatedData['status'];

        $residence->save();

        toastr()->success('residence đã được tạo thành công!');
        return redirect()->route('residences.index');
    }


    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        // Lấy thông tin tour theo slug
        $residence = Residence::where('slug', $slug)->firstOrFail();

        // Truyền dữ liệu sang view
        return view('pages.residence.detail', compact('residence'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $residence = Residence::find($id);
        return view('admin.residence.edit', compact('residence'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $residence = Residence::find($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'province' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'price_per_night' => 'required',
            'rating' => 'nullable|numeric|min:0|max:5',
            'status' => 'required|boolean',
        ], [
            'name.required' => 'Vui lòng nhập tên Lưu trú',
            'address.required' => 'Vui lòng nhập địa chỉ Lưu trú',
            'province.required' => 'Vui lòng chọn Tỉnh/Thành phố',
            'district.required' => 'Vui lòng chọn Quận/Huyện',
            'ward.required' => 'Vui lòng chọn Phường/Xã',
            'price_per_night.required' => 'Vui lòng nhập giá một đêm',
            'status.required' => 'Vui lòng chọn trạng thái',
        ]);

        $validatedData['price_per_night'] = str_replace('.', '', $request->price_per_night);

        if ($request->hasFile('image')) {
            // Xóa ảnh cũ nếu tồn tại
            if ($residence->image && file_exists(public_path('upload/residence/' . $residence->image))) {
                unlink(public_path('upload/residences/' . $residence->image));
            }

            // Lưu ảnh mới
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/residences'), $imageName);
            $residence->image = $imageName;
        }
        // Assign other validated data to the model
        $residence->name = $validatedData['name'];
        $residence->slug = Str::slug($validatedData['name'], '-');
        $residence->address = $validatedData['address'];
        $residence->province = $validatedData['province'];
        $residence->district = $validatedData['district'];
        $residence->ward = $validatedData['ward'];
        $residence->description = $validatedData['description'] ?? null;
        $residence->price_per_night = $validatedData['price_per_night'];
        $residence->rating = $validatedData['rating'] ?? null;
        $residence->status = $validatedData['status'];

        // Save the residence
        $residence->save();

        toastr()->success('Nơi lưu trú đã được cập nhật thành công!');
        return redirect()->route('residences.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $residence = Residence::find($id);

        if (!$residence) {
            toastr()->warning('Nơi lưu trú không tồn tại');
        }

        try {
            $residence->delete();
            toastr()->success('Đã xóa Nơi lưu trú thành công!');
            return redirect()->route('residences.index');
        } catch (\Exception $e) {
            toastr()->warning('Không thể xóa nơi lưu trú này do nó có liên kết với dữ liệu khác');
        }
    }
}
