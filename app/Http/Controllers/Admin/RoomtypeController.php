<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Rqroomtype;
use App\Models\image;
use App\Models\roomtype;

class RoomtypeController extends Controller
{
    public function read()
    {

        $roomtypes = RoomType::get();
        return view('admin.roomtype.room-type', ['roomtypes' => $roomtypes]);
    }

    public function create()
    {
        return view('admin.roomtype.insert_room-type');
    }

    public function store(Rqroomtype $request)
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
        RoomType::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'is_public' => $validated['is_public'],
            'price_per_night' => $validated['price_per_night'],
            'room_quality' => $validated['room_quality'],
            'image_id' => $imageId, // Lưu image_id từ bảng 'images'
        ]);

        // Redirect hoặc thông báo thành công
        return redirect()->route('room-type.dashboard')->with('success', 'Loại phòng đã được thêm thành công!');
    }


    public function destroy(string $id)
    {
        $roomtype = Roomtype::find($id);
        $roomtype->delete();
        return redirect()->back()->with('success', 'Xóa Thành Công');
    }

    public function edit($id)
    {
        $roomtype = Roomtype::find($id);
        return view('admin.roomtype.edit_room-type', compact('roomtype'));
    }

    public function update(Rqroomtype $request, $id)
    {
        // Xác thực dữ liệu
        $validated = $request->validated();

        // Tìm loại phòng cần cập nhật
        $roomtype = RoomType::find($id);

        if (!$roomtype) {
            return redirect()->route('room-type.dashboard')->with('error', 'Loại phòng không tồn tại.');
        }

        // Xử lý tệp tin hình ảnh nếu có
        $imageId = $roomtype->image_id; // Giữ lại ID hình ảnh hiện tại nếu không thay đổi
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
                if ($roomtype->image_id) {
                    $oldImage = Image::find($roomtype->image_id);
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
        $roomtype->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'is_public' => $validated['is_public'],
            'price_per_night' => $validated['price_per_night'],
            'room_quality' => $validated['room_quality'],
            'image_id' => $imageId, // Cập nhật image_id
        ]);

        // Redirect hoặc thông báo thành công
        return redirect()->route('room-type.dashboard')->with('success', 'Loại phòng đã được cập nhật thành công!');
    }

}
