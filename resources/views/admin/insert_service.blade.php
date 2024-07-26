@extends('layouts.admin.app')
@section('title')
    <title>Thêm dịch vụ</title>
@endsection
@section('content')


    <div class="content-wrapper">
        <form method="post" class="container-fluid" enctype="multipart/form-data" action="">
            <div class="card card-primary mb-0">
                <div class="card-header">
                    <h3 class="card-title">Thêm dịch vụ</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Tên dịch vụ</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"  class="error">
                    </div>
                    <div class="form-group">
                        <label for="name">Giá</label>
                        <input type="number" class='form-control tagify--outside' >
                    </div>
                    <div class="form-group">
                        <label for="name">Ghi chú</label>
                        <input type="text"  class='form-control tagify--outside' >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh</label>
                        <input name="image" type="file" multiple  class="form-control" />
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="upload" class="btn btn-primary">Tải lên</button>
                </div>
            </div>
        </form>

    </div>
@endsection
