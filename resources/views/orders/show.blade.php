<!-- resources/views/orders/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Order</title>
    <!-- Thêm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Order Details</h1>

    <!-- Thông tin đơn hàng -->
    <div class="mb-3">
        <p><strong>Customer:</strong> {{ $order->customer->name }}</p>
        <p><strong>Product:</strong> {{ $order->product->name }}</p>
        <p><strong>Total:</strong> {{ $order->total }}</p>
    </div>

    <!-- Nút quay lại -->
    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to Order List</a>
</div>

<!-- Thêm Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
