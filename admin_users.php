<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Registered Users</title>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}
th, td {
    border: 1px solid black;
    padding: 8px;
}
th {
    background: black;
    color: white;
}
</style>
</head>
<body>

<h2>Registered Users</h2>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Password (Encrypted)</th>
</tr>

<?php
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['password']; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>
