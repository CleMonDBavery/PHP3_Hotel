@extends('layouts.admin.app')
@section('title')
<title>Thêm tiện ích</title>
@endsection
@section('content')


<div class="content-wrapper">
    <form method="post" class="container-fluid" enctype="multipart/form-data" action="{{ route('convenient.insert') }}">
        @csrf

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
                <h3 class="card-title">Thêm tiện ích</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Tên tiện ích</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        placeholder="Nhập tiện ích" name="name" value="{{ old('name') }}">
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Ảnh</label>
                    <input name="image" type="file" class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tải lên</button>
            </div>
        </div>
    </form>

</div>
@endsection
