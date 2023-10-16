<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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
        <h1>Edit Product</h1>
        <form action="edit_product.php" method="POST">
            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" value="<?php echo $product_name; ?>" required>
            <label for="product_price">Price:</label>
            <input type="text" id="product_price" name="product_price" value="<?php echo $product_price; ?>" required>
            <label for="product_description">Description:</label>
            <textarea id="product_description" name="product_description"><?php echo $product_description; ?></textarea>
            <button type="submit">Save Changes</button>
        </form>
    </div>
</body>
</html>

<?php


// Include database connection code
include_once "../shared/connection.php";

// Check if the user is logged in (you should implement proper authentication)
include "../shared/vendor-authguard.php";

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $product_id = $_POST["pid"];
    $product_name = $_POST["name"];
    $product_price = $_POST["price"];
    $detail = $_POST["detail"];

    // Perform the database update (replace with your actual update query)
    $sql = "UPDATE product SET name = '$name', price = '$price', detail = '$detail' WHERE id = $pid";
    if (mysqli_query($conn, $sql)) {
        echo "Product updated successfully.";
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
}
?>


