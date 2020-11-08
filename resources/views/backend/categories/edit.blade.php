@extends('backend.layouts.master')
@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tạo danh mục</h1>
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
                    <h2>Thêm danh mục</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content col-md-10 center-margin">
                    <br />
                    <form id="demo-form2" method="post" action="{{ route('backend.categories.update', $category->id) }}" data-parsley-validate class="form-horizontal form-label-left">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group row col-md-12">
                            <label>Tên danh mục</label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục" value="{{ $category->name }}">
                            @error('name')
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
