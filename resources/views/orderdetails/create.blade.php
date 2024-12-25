@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Thêm chi tiết đơn hàng mới</h1>
        <form action="{{ route('order_details.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="order_id">Đơn hàng</label>
                <select class="form-control" id="order_id" name="order_id" required>
                    @foreach($orders as $order)
                        <option value="{{ $order->id }}">{{ $order->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="product_id">Sản phẩm</label>
                <select class="form-control" id="product_id" name="product_id" required>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Số lượng</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
@endsection
