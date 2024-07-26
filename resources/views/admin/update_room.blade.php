@extends('layouts.admin.app')
@section('title')
    <title>Cập nhật phòng</title>
@endsection
@section('content')




<div class="content-wrapper">
    <form method="post" class="container-fluid" enctype="multipart/form-data" action="/?url=ProductController/create">
        <div class="card card-primary mb-0">
            <div class="card-header">
                <h3 class="card-title">Cập nhật phòng</h3>
            </div>
            <div class="card-body row">
                <div class="right col-xl-7">
                    <div class="form-group">
                        <!-- <input type="hidden" name="product_id" id="" value=""> -->
                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên sản phẩm" value="">
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="price">Giá</label>
                            <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Nhập giá" value="">
                        </div>
                        <div class="form-group col-6">
                            <label for="">Loại phòng</label>
                            <select name="typeroom" class="form-control select2" style="width: 100%;">
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="">khách sạn</label>
                            <select name="hotel" class="form-control select2" style="width: 100%;">
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="status">Trạng thái</label>
                            <select name="status" class="form-control">
                                <option value="1">Hiện</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">mô tả</label>
                        <textarea id="summernote" name="description"></textarea>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="form-group">
                        <label for="exampleInputFile">Hình ảnh</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image[]" class="custom-file-input" id="exampleInputFile" accept="images/*" multiple onchange="updateFileName(this)">
                                <label class="custom-file-label" for="exampleInputFile">Chọn hình ảnh</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="upload" class="btn btn-primary">Tải lên</button>
            </div>
        </div>
    </form>

</div>
  @endsection
