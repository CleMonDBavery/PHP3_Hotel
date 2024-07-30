@extends('layouts.admin.app')
@section('title')
    <title>Quản lí Danh mục phòng</title>
@endsection
@section('content')
    <style>
        .text-public {
            color: green; /* Màu xanh lá cho trạng thái 'Hiện' */
        }

        .text-private {
            color: gray; /* Màu xám cho trạng thái 'Ẩn' */
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
                        <h1>Danh mục phòng</h1>
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

                                        <th>#</th>
                                        <th>Ảnh</th>
                                        <th>Tên</th>
                                        <th>Giới thiệu</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($roomtypes as $result)
                                        <tr>
                                            <td>
                                                {{$result->id}}
                                            </td>
                                            <td>
                                                <img src="{{ asset('uploads/' . $result->image->path) }}"
                                                     alt="{{$result->image->name}}" height="150">

                                            </td>
                                            <td>
                                                {{$result->title}}
                                            </td>
                                            <td>
                                                {{ Str::limit($result->description, 25, '...') }}
                                            </td>
                                            <td class="text-center">
                                                <span class="{{ $result->is_public ? 'text-public' : 'text-private' }}">
                                                    {{ $result->is_public ? 'Hiện' : 'Ẩn' }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <a href="" class="btn btn-primary"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="" class="btn  btn-danger"><i class="fa-solid fa-trash"></i></a>
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
