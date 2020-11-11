@extends('backend.layouts.master')
@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Cập nhật sản phẩm</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Cập nhật điện thoại</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content col-md-10 center-margin">
                    <br />
                    <form id="demo-form2" method="POST" action="{{ route('backend.product.update', $product->id) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group row col-md-12">
                            <label>Tên điện thoại</label>
                            <input type="text" name="name" class="form-control" placeholder="Nhập tên điện thoại" value="{{ $product->name }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group row col-md-4">
                            <label>Danh mục điện thoại</label>
                            <select class="form-control select2" name="category_id">
                                <option>--Chọn danh mục---</option>
                            @foreach($categories as $category)
                                <option {{ $category->id == $product->category_id ? 'selected':'' }} value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                            </select>
                            @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group row col-md-8">
                            <label>Thương hiệu điện thoại</label>
                            <input type="text" name="brand" class="form-control" placeholder="Nhập thương hiệu điện thoại" value="{{ $product->brand }}">
                            @error('brand')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group row col-md-12">
                            <label>Hình ảnh điện thoại</label>
                            <div class="col-md-12">
                                <input type="file" name="images[]" class="custom-file-input" id="exampleInputFile" multiple>
                                <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                            </div>
                            @error('images')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group row col-md-6">
                            <label>Giá gốc</label>
                            <input type="number" name="origin_price" class="form-control" placeholder="Nhập giá gốc" value="{{ $product->origin_price }}">
                            @error('origin_price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group row col-md-6">
                            <label>Giá bán</label>
                            <input type="number" name="sale_price" class="form-control" placeholder="Nhập giá bán" value="{{ $product->sale_price }}">
                            @error('sale_price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group row col-md-12">
                            <label class="row col-md-12">Mô tả điện thoại</label>
                            <textarea id="summernote" name="content">{{ $product->content }}</textarea>
                            @error('content')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group row col-md-12">
                            <label>Trạng thái</label>
                            <select class="form-control select2" name="status">
                                <option>--Chọn trạng thái---</option>

                                <option {{ $product->status == 0  ? 'selected':'' }} value="0">Đang nhập</option>
                                <option {{ $product->status == 1  ? 'selected':'' }} value="1">Mở bán</option>
                                <option {{ $product->status == -1  ? 'selected':'' }} value="-1">Hết hàng</option>
                            </select>
                            @error('status')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="ln_solid col-md-12"></div>
                        <div class="item form-group col-md-12">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-primary" type="button">Thoát</button>
                                <button class="btn btn-primary" type="reset">Xoá</button>
                                <button type="submit" class="btn btn-success">Cập nhật</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
