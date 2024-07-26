@extends('layouts.admin.app')
@section('title')
    <title>Thêm khách sạn</title>
@endsection
@section('content')


<div class="content-wrapper">
    <form method="post" class="container-fluid" enctype="multipart/form-data" action="">
        <div class="card card-primary mb-0">
            <div class="card-header">
                <h3 class="card-title">Thêm khách sạn </h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Tên khách sạn</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"  class="error">
                </div>
                <div class="form-group">
                    <label for="name">Dịch vụ</label>
                    <input type="text" name='tags-outside' class='form-control tagify--outside' value='tag1, tag2, tag3'>
                </div>
                <div class="form-group">
                    <label for="status">Trạng thái</label>
                    <select name="option" class="form-control">
                        <option value="">Chọn trạng thái</option>
                        <option value="1">Hiện</option>
                        <option value="0">Ẩn</option>
                    </select>
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
