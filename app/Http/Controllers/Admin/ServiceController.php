<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Rqservice;
use App\Models\image;
use App\Models\service;

class ServiceController extends Controller
{
    //
    public function read()
    {

        $services = Service::get();
        return view('admin.services.service', ['services' => $services]);
    }

    public function create()
    {
        return view('admin.services.insert_service');
    }

    public function store(Rqservice $request)
    {
        // Xác thực dữ liệu
        $validated = $request->validated();

        // Xử lý tệp tin hình ảnh
        $imageId = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('images'); // Đường dẫn đến thư mục 'public/images'

            // Đảm bảo thư mục tồn tại
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Di chuyển tệp tin đến thư mục 'public/images'
            try {
                $image->move($destinationPath, $imageName);
                $imagePath = $imageName;

                // Lưu thông tin hình ảnh vào bảng 'images'
                $imageRecord = Image::create([
                    'path' => $imagePath,
                    'name' => $imageName
                ]);

                $imageId = $imageRecord->id;
            } catch (\Exception $e) {
                // Xử lý lỗi nếu có
                return redirect()->back()->withErrors(['image' => 'Không thể lưu hình ảnh.'])->withInput();
            }
        }

        // Lưu dữ liệu vào cơ sở dữ liệu
        Service::create([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'image_id' => $imageId // Lưu image_id từ bảng 'images'
        ]);

        // Redirect hoặc thông báo thành công
        return redirect()->route('service.dashboard')->with('success', 'Dịch vụ đã được thêm thành công!');
    }


    public function destroy(string $id)
    {
        $services = Service::find($id);
        $services->delete();
        return redirect()->back()->with('success', 'Xóa Thành Công');
    }

    public function edit($id)
    {
        $services = Service::find($id);
        return view('admin.services.edit_service', compact('services'));
    }

    public function update(Rqservice $request, $id)
    {
        // Xác thực dữ liệu
        $validated = $request->validated();

        // Tìm loại phòng cần cập nhật
        $services = Service::find($id);

        if (!$services) {
            return redirect()->route('service.dashboard')->with('error', 'Dịch vụ không tồn tại.');
        }

        // Xử lý tệp tin hình ảnh nếu có
        $imageId = $services->image_id; // Giữ lại ID hình ảnh hiện tại nếu không thay đổi
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $destinationPath = public_path('images'); // Đường dẫn đến thư mục 'public/images'

            // Đảm bảo thư mục tồn tại
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Di chuyển tệp tin đến thư mục 'public/images'
            try {
                $image->move($destinationPath, $imageName);
                $imagePath = $imageName;

                // Xóa hình ảnh cũ nếu có
                if ($services->image_id) {
                    $oldImage = Image::find($services->image_id);
                    if ($oldImage) {
                        $oldImagePath = public_path('images/' . $oldImage->path);
                        if (file_exists($oldImagePath)) {
                            @unlink($oldImagePath); // Xóa tệp tin hình ảnh
                        }
                        $oldImage->delete(); // Xóa bản ghi hình ảnh cũ
                    }
                }

                // Lưu thông tin hình ảnh mới vào bảng 'images'
                $imageRecord = Image::create([
                    'path' => $imagePath,
                    'name' => $imageName
                ]);

                $imageId = $imageRecord->id;
            } catch (\Exception $e) {
                // Xử lý lỗi nếu có
                return redirect()->back()->withErrors(['image' => 'Không thể lưu hình ảnh.'])->withInput();
            }
        }

        // Cập nhật dữ liệu vào cơ sở dữ liệu
        $services->update([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'image_id' => $imageId // Cập nhật image_id
        ]);

        // Redirect hoặc thông báo thành công
        return redirect()->route('service.dashboard')->with('success', 'Dịch vụ đã được cập nhật thành công!');
    }
}
