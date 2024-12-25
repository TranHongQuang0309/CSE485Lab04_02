<!-- resources/views/customers/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Customer</title>
</head>
<body>
<h1>Customer Details</h1>
<p><strong>Name:</strong> {{ $customer->name }}</p>
<p><strong>Email:</strong> {{ $customer->email }}</p>
<p><strong>Phone:</strong> {{ $customer->phone }}</p>
<a href="{{ route('customers.index') }}">Back to Customer List</a>
</body>
</html>
