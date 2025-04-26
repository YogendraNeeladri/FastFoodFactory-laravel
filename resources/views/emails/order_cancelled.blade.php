<!DOCTYPE html>
<html>
<head>
    <title>Order Cancelled</title>
</head>
<body>
    <h2>Hello {{ $order->name }},</h2>
    <p>We regret to inform you that your order for <strong>{{ $order->title }}</strong> has been cancelled due to a discrepancy. We kindly ask that you place your order again.</p>
    <p>Quantity: {{ $order->quantity }}</p>
    <p>Total Price: ₹{{ $order->price }}</p>
    <p>We apologize for the inconvenience and thank you for ordering from FoodCourt!</p>
</body>
</html>
