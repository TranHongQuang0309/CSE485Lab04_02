@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Danh sách chi tiết đơn hàng</h1>
        <a href="{{ route('order_details.create') }}" class="btn btn-primary mb-3">Thêm chi tiết đơn hàng mới</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Đơn hàng</th>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orderDetails as $detail)
                <tr>
                    <td>{{ $detail->id }}</td>
                    <td>{{ $detail->order->id }}</td>
                    <td>{{ $detail->product->name }}</td>
                    <td>{{ $detail->quantity }}</td>
                    <td>
                        <a href="{{ route('order_details.edit', $detail->id) }}" class="btn btn-warning">Chỉnh sửa</a>
                        <form action="{{ route('order_details.destroy', $detail->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
