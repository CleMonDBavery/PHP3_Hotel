@extends('layouts.admin.app')
@section('title')
<title>Quản lí dịch vụ</title>
@endsection
@section('content')
<style>
    .pagination {
        justify-content: flex-end;
    }

    .d-flex {
            gap: 10px;
            height: 100%;
        }
</style>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h1>Thông tin dịch vụ</h1>
                </div>
                <div class="col-sm-2 float-right">
                    <a href="{{route('service.insert')}}" class="btn btn-block btn-primary border w-20">Thêm mới</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ảnh</th>
                                        <th>Tên dịch vụ</th>
                                        <th>Giá</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $result)
                                        <tr>
                                            <td>
                                                {{ $result->id }}
                                            </td>
                                            <td>
                                                <img src="{{ asset('images/' . ($result->image ? $result->image->path : 'default.jpg')) }}"
                                                    alt="{{ $result->image ? $result->image->name : 'Default Image' }}"
                                                    height="150">
                                            </td>
                                            <td>
                                                {{ $result->name }}
                                            </td>
                                            <td>
                                                {{ number_format($result->price, 0, ',', '.') }} VND
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <a href="{{ route('service.edit', $result->id) }}"
                                                        class="btn btn-primary"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>

                                                    <form action="{{ route('service.destroy', $result->id) }}"
                                                        method="post"
                                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa không?');">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="fa-solid fa-trash"></i></button>
                                                    </form>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
