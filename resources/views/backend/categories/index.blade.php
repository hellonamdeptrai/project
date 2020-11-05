@extends('backend.layouts.master')
@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Quản lý danh mục</h1>
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
    <div class="x_panel">
        <div class="x_title">
            <h2>Danh mục</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Tên danh mục</th>
                    <th>Độ sâu</th>
                    <th>Thời gian cập nhật</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->depth }}</td>
                    <td>{{ $category->updated_at }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    {!! $categories->links() !!}
@endsection
