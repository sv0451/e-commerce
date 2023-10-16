// script.js
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("track-order-form");
    const orderDetails = document.getElementById("order-details");

    form.addEventListener("submit", function (e) {
        e.preventDefault();
        const orderId = document.getElementById("order-id").value;
        // Perform AJAX request to retrieve order details
        fetch("track_order.php?order_id=" + orderId)
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    orderDetails.innerHTML = "<p>" + data.error + "</p>";
                } else {
                    orderDetails.innerHTML = "<p>Order ID: " + data.order_id + "</p>";
                    orderDetails.innerHTML += "<p>Status: " + data.status + "</p>";
                    // Add more order details as needed
                }
            })
            .catch(error => {
                console.error("Error:", error);
            });
    });
});
