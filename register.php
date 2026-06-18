<!DOCTYPE html>
<html>
<head>
<title>Register | Velvet Vogue</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="auth-container">
<div class="auth-box">

<h2>Create Account</h2>
<p>Join Velvet Vogue today</p>

<form action="register_process.php" method="POST">
<input type="text" name="name" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email Address" required>
<input type="password" name="password" placeholder="Password" required>

<button type="submit">Register</button>
</form>

<p>Already have an account? <a href="login.php">Login</a></p>

</div>
</div>

</body>
</html>
