<!DOCTYPE html>
<html>
<head>
    <title>Order Conformed</title>
</head>
<body>
    <h2>Hello {{ $order->name }},</h2>
    <p>Your order for <strong>{{ $order->title }}</strong> has Conformed</p>
    <p>Quantity: {{ $order->quantity }}</p>
    <p>Total Price: ₹{{ $order->price }}</p>

    <p>With in 15 Minuites your order will be at your door step</p>

    <p>Thanks for ordering from FoodCourt!</p>
</body>
</html>
