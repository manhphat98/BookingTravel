<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Str;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('admin.vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        return view('admin.vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         $data = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'seats' => 'required|integer|min:1',
            'quantity' => 'required|integer|min:1',
            'color' => 'required|string|max:50',
            'price_per_day' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
         ],[
            'name.required' => 'Vui lòng nhập tên Phương tiện',
            'brand.required' => 'Vui lòng nhập hãng của Phương tiện',
            'seats.required' => 'Vui lòng nhập số lượng chỗ cho Phương tiện',
            'quantity.required' => 'Vui lòng nhập số lượng Phương tiện',
            'color.required' => 'Vui lòng nhập ít nhất một màu',
            'image.required' => 'Vui lòng cung cấp hình ảnh Phương tiện',
            'image.mimes' => 'Ảnh chỉ hỗ trợ các định dạng jpeg,png,jpg',
            'price_per_day.required' => 'Vui lòng nhập giá thuê một ngày',
            'status.required' => 'Vui lòng chọn trạng thái',
         ]);

        $vehicle = new Vehicle();

        $data['price_per_day'] = str_replace('.', '', $request->price_per_day);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/vehicles'), $imageName);
            $vehicle->image = $imageName;
        }

        $vehicle->name = $data['name'];
        $vehicle->slug = Str::slug($data['name'], '-');
        $vehicle->brand = $data['brand'];
        $vehicle->seats = $data['seats'];
        $vehicle->quantity = $data['quantity'];
        $vehicle->color = $data['color'];
        $vehicle->description = $data['description'] ?? null;
        $vehicle->price_per_day = $data['price_per_day'];
        $vehicle->status = $data['status'];

        $vehicle->save();

        toastr()->success('Phương tiện đã được thêm thành công!');
        return redirect()->route('vehicles.index');
     }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        // Lấy thông tin tour theo slug
        $vehicle = Vehicle::where('slug', $slug)->firstOrFail();

        // Truyền dữ liệu sang view
        return view('pages.vehicle.detail', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vehicle = Vehicle::find($id);
        return view('admin.vehicles.edit', compact('vehicle'));
    }

    public function update(Request $request, string $id)
    {
        $vehicle = Vehicle::find($id);

        $data = $request->validate([
           'name' => 'required|string|max:255',
           'brand' => 'required|string|max:255',
           'seats' => 'required|integer|min:1',
           'quantity' => 'required|integer|min:1',
           'color' => 'required|string|max:50',
           'price_per_day' => 'required|numeric|min:0',
           'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
           'description' => 'nullable|string',
           'status' => 'required|boolean',
        ],[
           'name.required' => 'Vui lòng nhập tên Phương tiện',
           'brand.required' => 'Vui lòng nhập hãng của Phương tiện',
           'seats.required' => 'Vui lòng nhập số lượng chỗ cho Phương tiện',
           'quantity.required' => 'Vui lòng nhập số lượng Phương tiện',
           'color.required' => 'Vui lòng nhập ít nhất một màu',
           'image.required' => 'Vui lòng cung cấp hình ảnh Phương tiện',
           'image.mimes' => 'Ảnh chỉ hỗ trợ các định dạng jpeg,png,jpg',
           'price_per_day.required' => 'Vui lòng nhập giá thuê một ngày',
           'status.required' => 'Vui lòng chọn trạng thái',
        ]);

       $data['price_per_day'] = str_replace('.', '', $request->price_per_day);

       if ($request->hasFile('image')) {
        // Xóa ảnh cũ nếu tồn tại
        if ($vehicle->image && file_exists(public_path('upload/vehicles/' . $vehicle->image))) {
            unlink(public_path('upload/vehicles/' . $vehicle->image));
        }

        // Lưu ảnh mới
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload/vehicles'), $imageName);
        $vehicle->image = $imageName;
    }

       $vehicle->name = $data['name'];
       $vehicle->slug = Str::slug($data['name'], '-');
       $vehicle->brand = $data['brand'];
       $vehicle->seats = $data['seats'];
       $vehicle->quantity = $data['quantity'];
       $vehicle->color = $data['color'];
       $vehicle->description = $data['description'] ?? null;
       $vehicle->price_per_day = $data['price_per_day'];
       $vehicle->status = $data['status'];

       $vehicle->save();

       toastr()->success('Phương tiện đã được cập nhật thành công!');
       return redirect()->route('vehicles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehicle = Vehicle::find($id);

        if (!$vehicle) {
            toastr()->warning('Phương tiện không tồn tại');
        }

        try {
            $vehicle->delete();
            toastr()->success('Đã xóa Phương tiện thành công!');
            return redirect()->route('vehicles.index');
        } catch (\Exception $e) {
            toastr()->warning('Không thể xóa phương tiện này do nó có liên kết với dữ liệu khác');
        }
    }
}
