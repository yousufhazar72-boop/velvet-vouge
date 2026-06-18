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
<title>My Orders</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>My Orders</h2>
<p>Welcome, <?php echo $_SESSION['user_name']; ?></p>

<table border="1" cellpadding="10">
<tr>
<th>Order ID</th>
<th>Product</th>
<th>Price</th>
<th>Status</th>
</tr>

<tr>
<td>1</td>
<td>Women Summer Dress</td>
<td>Rs. 4,800</td>
<td>Shipped</td>
</tr>

<tr>
<td>2</td>
<td>Men Casual Shirt</td>
<td>Rs. 3,500</td>
<td>Processing</td>
</tr>

</table>

<br>
<a href="account.php">Back to Account</a>

</body>
</html>
