@extends('backend.layouts.master')
@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách sản phẩm</h1>
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
                    <th>Tên sản phẩm</th>
                    <th>Trạng thái</th>
                    <th>Thời gian cập nhật</th>
                    <th>Giá bán</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>
                            @if($product->status == 1)
                                Hoạt động
                            @else
                                Đã khóa
                            @endif
                        </td>
                        <td>{{ $product->updated_at }}</td>
                        <td>{{ $product->sale_price }}đ</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $products->links() !!}
        </div>
    </div>

@endsection
