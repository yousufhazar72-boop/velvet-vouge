<!DOCTYPE html>
<html>
<head>
<title>Login | Velvet Vogue</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="auth-container">
<div class="auth-box">

<h2>Welcome Back</h2>
<p>Please login to your account</p>

<form action="login_process.php" method="POST">
<input type="email" name="email" placeholder="Email Address" required>
<input type="password" name="password" placeholder="Password" required>

<button type="submit">Login</button>
</form>

<p>Don’t have an account? <a href="register.php">Create Account</a></p>

</div>
</div>

</body>
</html>
