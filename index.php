<?php
session_start();
?>


<li>
<?php
if(isset($_SESSION['user_name'])){
    echo "Hello, ".$_SESSION['user_name'];
} else {
    echo "<a href='login.php'>Login</a>";
}
?>
</li>
