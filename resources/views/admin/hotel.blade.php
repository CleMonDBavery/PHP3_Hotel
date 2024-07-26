@extends('layouts.admin.app')
@section('title')
    <title>Quản lí khách sạn</title>
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
                        <h1>Thông tin khách sạn</h1>
                    </div>
                    <div class="col-sm-2 float-right">
                        <a href="{{route('insert_hotel')}}" class="btn btn-block btn-primary border w-20">Thêm mới</a>
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
                                            <th>Ảnh</th>
                                            <th>Tên khách sạn</th>
                                            <th>Giới thiệu</th>
                                            <th>Dịch vụ</th>
                                            <th>Dánh giá</th>
                                            <th>Trạng thái</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>01</th>
                                            <th>
                                               <img src="{{asset('images/maxresdefault.jpg')}}" alt="Hotel 1" width="100" height="100">
                                            </th>
                                            <th>
                                                sheraton cần thơ
                                            </th>
                                            <th>
                                                15 phòng đơn phương, 10 phòng suites, 5 phòng deluxe, 2 phòng vip.
                                            </th>
                                            <th>
                                                100% dịch vụ nghỉ dưỡng, 100% dịch vụ phát sinh, 100% dịch vụ đặc biệt.
                                            </th>
                                            <th>
                                                9.5/10 (45 đánh giá)
                                            </th>
                                            <th>
                                                1 (hiện)
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
