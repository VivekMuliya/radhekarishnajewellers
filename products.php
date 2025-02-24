<?php
include 'includes/header.php';
include 'includes/db.php';

$type = $_GET['type'];
$result = $conn->query("SELECT * FROM products WHERE name LIKE '%$type%'");

echo "<h2>" . ucfirst($type) . " Products</h2>";
echo "<div class='products'>";
while ($product = $result->fetch_assoc()) {
    echo "<div class='product'>";
    echo "<img src='images/" . $product['image'] . "' alt='" . $product['name'] . "'>";
    echo "<h3>" . $product['name'] . "</h3>";
    echo "<p>" . $product['description'] . "</p>";
    echo "<p>Price: $" . $product['price'] . "</p>";
    echo "<a href='cart.php?add=" . $product['id'] . "'>Add to Cart</a>";
    echo "</div>";
}
echo "</div>";
include 'includes/footer.php';
?>
