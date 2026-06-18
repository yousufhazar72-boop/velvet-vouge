<?php
include "db.php";

$sql = "SELECT * FROM contact_messages";
$result = $conn->query($sql);

echo "<pre>";
print_r($result->fetch_assoc());
?>
