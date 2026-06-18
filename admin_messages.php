<?php
include "db.php";

include "db.php";

$sql = "SELECT * FROM contact_messages";
$result = mysqli_query($conn, $sql);

if(!$result){
    die("Query Failed: " . mysqli_error($conn));
}

?>

<html>
<head>
<title>Admin Messages</title>
</head>
<body>

<h2>Contact Messages</h2>

<table border="1" width="100%">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
</tr>

<?php
$sql = "SELECT id, name, email, subject, message FROM contact_messages";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['subject']; ?></td>
<td><?php echo $row['message']; ?></td>
</tr>
<?php } ?>

</table>



</body>
</html>
