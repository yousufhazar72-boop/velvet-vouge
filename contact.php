<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "velvet_vogue_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_messages (name, email, subject, message)
            VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully!');</script>";
        echo "<script>window.location='contact.php';</script>";
    } 
    else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<title>Velvet Vogue | Contact Us</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <h1 class="logo">Velvet Vogue</h1>
    <nav class="nav">
        <a href="index.php">Home</a>
        <a href="products.html">Products</a>
        <a href="cart.html">Cart</a>
        <a href="login.php">Login</a>
        <a href="contact.php" class="active">Contact</a>
    </nav>
</header>

<section class="page-title">
    <h2>Contact Us</h2>
    <p>We’d love to hear from you</p>
</section>

<section class="contact-container">

<div class="contact-info">
    <h3>Get in Touch</h3>
    <p>Email: support@velvetvogue.lk</p>
    <p>Phone: +94 77 123 4567</p>
    <p>Address: Colombo, Sri Lanka</p>
</div>

<div class="contact-form">
    <h3>Send a Message</h3>

    
    <form action="contact.php" method="POST">

        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" placeholder="Your Message" required></textarea>

        <button type="submit">Send Message</button>

    </form>
</div>

</section>

<footer class="footer">
<p>© 2026 Velvet Vogue. All rights reserved.</p>
</footer>

</body>
</html>
