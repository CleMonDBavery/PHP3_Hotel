@extends('layouts.admin.app')
@section('title')
    <title>Quản lí phòng</title>
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-10">
                        <h1>Quản lí phòng</h1>
                    </div>
                    <div class="col-sm-2 float-right">
                        <a href="{{route('insert_room')}}" class="btn btn-block btn-primary border w-20">Thêm phòng</a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                            <div class="card bg-light d-flex flex-fill">
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-5">
                                            <h2 class="lead"><b>Phòng: </b></h2>
                                            <p class="text-muted text-sm"><b>Tầng: 1</p>
                                            <p class="text-muted text-sm"><b>Hạng phòng: thường </p>
                                            <p class="text-muted text-sm"><b>Trạng thái: Mở</p>
                                            <p class="text-muted text-sm"><b>Giá: 450.000 vnd</p>
                                        </div>
                                        <div class="col-7 text-center">
                                            <img src="{{asset('client/images/gallery1.jpg')}}" alt="user-avatar"
                                                class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-left">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fa-solid fa-gear"></i> Thiết lập
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fa-solid fa-trash-can"></i> Xóa
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <nav aria-label="Contacts Page Navigation">
                        <ul class="pagination justify-content-center m-0">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
