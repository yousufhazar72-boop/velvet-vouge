<?php
session_start();
if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>My Wishlist</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>My Wishlist</h2>
<p>Hello, <?php echo $_SESSION['user_name']; ?></p>

<ul>
<li>Floral Maxi Dress - Rs. 12,000</li>
<li>Gucci Wallet - Rs. 15,000</li>
<li>Carbon Fiber Phone Case - Rs. 12,000</li>
</ul>

<br>
<a href="account.php">Back to Account</a>

</body>
</html>
