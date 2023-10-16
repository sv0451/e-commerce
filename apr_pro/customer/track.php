<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Your Order</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Track Your Order</h1>
        <form id="track-order-form">
            <label for="order-id">Enter Order ID or Tracking Number:</label>
            <input type="text" id="order-id" name="order-id" required>
            <button type="submit">Track</button>
        </form>
        <div id="order-details">
            <!-- Display order details here -->
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>



<?php
// Database configuration and connection code (similar to previous examples)

if (isset($_GET["order_id"])) {
    $orderId = $_GET["order_id"];
    // Perform a database query to retrieve order details based on $orderId
    // Replace this with your actual database query
    $orderData = [
        "order_id" => $orderId,
        "status" => "Shipped", // Replace with actual status
        // Add more order details as needed
    ];

    if ($orderData) {
        echo json_encode($orderData);
    } else {
        echo json_encode(["error" => "Order not found"]);
    }
} else {
    echo json_encode(["error" => "Invalid input"]);
}
