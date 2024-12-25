@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Chỉnh sửa đơn hàng</h1>
        <form action="{{ route('orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="customer_id">Khách hàng</label>
                <select class="form-control" id="customer_id" name="customer_id" required>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}" {{ $order->customer_id == $customer->id ? 'selected' : '' }}>{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="order_date">Ngày đặt hàng</label>
                <input type="date" class="form-control" id="order_date" name="order_date" value="{{ $order->order_date }}" required>
            </div>
            <div class="form-group">
                <label for="status">Trạng thái</label>
                <input type="text" class="form-control" id="status" name="status" value="{{ $order->status }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
@endsection
