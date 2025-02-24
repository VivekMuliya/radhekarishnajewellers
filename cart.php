<?php
include 'includes/header.php';

if (!isset($_SESSION['user_id'])) {
    echo "<p>Please <a href='login.php'>login</a> to view your cart.</p>";
    include 'includes/footer.php';
    exit;
}

// Simulate cart logic (to be implemented with a database or session storage)
echo "<p>Cart functionality is under development.</p>";

include 'includes/footer.php';
?>
