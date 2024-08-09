<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Rqconvenient;
use App\Models\image;
use App\Models\convenient;

class ConvenientController extends Controller
{
    public function read()
    {

        $convenients = Convenient::get();
        return view('admin.convenients.convenient', ['convenients' => $convenients]);
    }

    public function create()
    {
        return view('admin.convenients.insert_convenient');
    }

    public function store(Rqconvenient $request)
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
        Convenient::create([
            'name' => $validated['name'],
            'image_id' => $imageId // Lưu image_id từ bảng 'images'
        ]);

        // Redirect hoặc thông báo thành công
        return redirect()->route('convenient.dashboard')->with('success', 'Tiện ích đã được thêm thành công!');
    }


    public function destroy(string $id)
    {
        $convenients = Convenient::find($id);
        $convenients->delete();
        return redirect()->back()->with('success', 'Xóa Thành Công');
    }

    public function edit($id)
    {
        $convenients = Convenient::find($id);
        return view('admin.convenients.edit_convenient', compact('convenients'));
    }

    public function update(Rqconvenient $request, $id)
    {
        // Xác thực dữ liệu
        $validated = $request->validated();

        // Tìm loại phòng cần cập nhật
        $convenients = Convenient::find($id);

        if (!$convenients) {
            return redirect()->route('convenient.dashboard')->with('error', 'Tiện ích không tồn tại.');
        }

        // Xử lý tệp tin hình ảnh nếu có
        $imageId = $convenients->image_id; // Giữ lại ID hình ảnh hiện tại nếu không thay đổi
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
                if ($convenients->image_id) {
                    $oldImage = Image::find($convenients->image_id);
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
        $convenients->update([
            'name' => $validated['name'],
            'image_id' => $imageId // Cập nhật image_id
        ]);

        // Redirect hoặc thông báo thành công
        return redirect()->route('convenient.dashboard')->with('success', 'Tiện ích đã được cập nhật thành công!');
    }
}
