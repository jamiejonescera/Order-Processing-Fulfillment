<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Tracking</title>
</head>
<body>
    <h1>Order Tracking</h1>

    <ul>
        @foreach ($orderStatus as $status)
            <li>{{ $status }}</li>
        @endforeach
    </ul>

    <a href="{{ route('order.update', 'order_placed') }}">Update Order Placed</a>
    <a href="{{ route('order.update', 'payment_confirmed') }}">Update Payment Confirmed</a>
    <a href="{{ route('order.update', 'shipped_out') }}">Update Shipped Out</a>
    <a href="{{ route('order.update', 'order_received') }}">Update Order Received</a>
    <a href="{{ route('order.update', 'order_completed') }}">Update Order Completed</a>
</body>
</html>
