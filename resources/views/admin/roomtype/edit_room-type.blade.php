@extends('layouts.admin.app')

@section('title')
    <title>Chỉnh sửa loại phòng</title>
@endsection

@section('content')
    <div class="content-wrapper">
        <form method="post" class="container-fluid" enctype="multipart/form-data"
              action="{{ route('room-type.update', $roomtype->id) }}">
            @csrf
            @method('PATCH')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card card-primary mb-0">
                <div class="card-header">
                    <h3 class="card-title">Chỉnh sửa loại phòng</h3>
                </div>
                <div class="card-body">
                    <!-- Tiêu đề -->
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                               placeholder="Nhập tiêu đề" name="title" value="{{ old('title', $roomtype->title) }}">
                        @error('title')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Mô tả ngắn -->
                    <div class="form-group">
                        <label for="description">Mô tả ngắn</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                  placeholder="Viết một đoạn mô tả ngắn tại đây"
                                  name="description">{{ old('description', $roomtype->description) }}</textarea>
                        @error('description')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Hiển thị -->
                    <div class="form-group">
                        <label for="is_public">Hiển thị</label>
                        <select name="is_public" class="form-control @error('is_public') is-invalid @enderror">
                            <option value="1" {{ old('is_public', $roomtype->is_public) == '1' ? 'selected' : '' }}>
                                Hiện
                            </option>
                            <option value="0" {{ old('is_public', $roomtype->is_public) == '0' ? 'selected' : '' }}>Ẩn
                            </option>
                        </select>
                        @error('is_public')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Giá mỗi đêm -->
                    <div class="form-group">
                        <label for="price_per_night">Giá mỗi đêm</label>
                        <input type="number" step="0.01"
                               class="form-control @error('price_per_night') is-invalid @enderror" id="price_per_night"
                               placeholder="VND" name="price_per_night"
                               value="{{ old('price_per_night', $roomtype->price_per_night) }}">
                        @error('price_per_night')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Số lượng khách -->
                    <div class="form-group">
                        <label for="room_quality">Số lượng khách</label>
                        <input type="number" step="1" class="form-control @error('room_quality') is-invalid @enderror"
                               id="room_quality" placeholder="Số khách tối đa" name="room_quality"
                               value="{{ old('room_quality', $roomtype->room_quality) }}">
                        @error('room_quality')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Ảnh -->
                    <div class="form-group">
                        <label for="image">Ảnh (nếu muốn thay đổi)</label>
                        <input name="image" type="file" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </div>
        </form>
    </div>
@endsection