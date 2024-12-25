@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Chỉnh sửa sản phẩm</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Giá</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
            </div>
            <div class="form-group">
                <label for="quantity">Số lượng</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
@endsection
