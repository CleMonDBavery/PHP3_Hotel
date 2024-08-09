@extends('layouts.admin.app')
@section('title')
    <title>Quản lí dịch vụ</title>
@endsection
@section('content')
    <style>
        .pagination{
            justify-content: flex-end;
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
                        <a href="{{route('insert_service')}}" class="btn btn-block btn-primary border w-20">Thêm mới</a>
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
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên dịch vụ</th>
                                        <th>Ảnh</th>
                                        <th>Giá</th>
                                        <th>Ghi chú</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>01</th>
                                        <th>
                                            Dọn dẹp phòng
                                        </th>
                                        <th>
                                            <img src="{{asset('images/maxresdefault.jpg')}}" alt="Hotel 1" width="100" height="100">
                                        </th>
                                        <th>
                                            120.000đ
                                        </th>
                                        <th>
                                            Nhanh, gọn, lẹ
                                        </th>
                                        <th>
                                            <a href="#" class="btn btn-block btn-primary">Xóa</a>
                                            <a href="#" class="btn btn-block btn-primary">Sửa</a>
                                        </th>
                                    </tr>
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
