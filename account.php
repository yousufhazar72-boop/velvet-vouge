<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>My Account</title>
<link rel="stylesheet" href="account.css">
</head>

<body>

<?php if(isset($_SESSION['user_name'])) { ?>


<div class="account-header">
    <img src="images/user.png" class="profile-pic">
    <div>
        <h2>Welcome, <?php echo $_SESSION['user_name']; ?></h2>
        <p><?php echo $_SESSION['user_email']; ?></p>
    </div>
</div>

<div class="account-box">
    <a href="orders.php">My Orders</a>
    <a href="wishlist.php">Wishlist</a>
    <a href="logout.php" class="logout">Logout</a>
</div>

<?php } else { ?>


<div class="no-account">
    <h2>You are not logged in</h2>
    <a href="login.html" class="btn">Login</a>
    <a href="register.html" class="btn">Create Account</a>
</div>

<?php } ?>

</body>
</html>
