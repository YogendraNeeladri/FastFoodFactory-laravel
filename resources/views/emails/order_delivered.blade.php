<!DOCTYPE html>
<html>
<head>
    <title>Order Delivered</title>
</head>
<body>
    <h2>Hello {{ $order->name }},</h2>
    <p>Your order for <strong>{{ $order->title }}</strong> has been successfully delivered!</p>
    <p>Quantity: {{ $order->quantity }}</p>
    <p>Total Price: ₹{{ $order->price }}</p>

    <p>Thanks for ordering from FoodCourt!</p>
</body>
</html>
