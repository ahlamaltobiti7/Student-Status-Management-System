<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Student Status Management System</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div id="stars"></div>

<div class="container">

<h1>Student Status Management System</h1>

<form action="insert.php" method="POST" id="studentForm">

<input
type="text"
name="name"
id="name"
placeholder="Enter Student Name"
required>

<input
type="number"
name="age"
id="age"
placeholder="Enter Age"
required>

<button type="submit">
Submit
</button>

</form>

<table>

<thead>

<tr>

<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Status</th>
<th>Action</th>

</tr>

</thead>

<tbody>

<?php

$sql = "SELECT * FROM students ORDER BY id DESC";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{

?>

<tr id="row<?php echo $row['id']; ?>">

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['age']; ?></td>

<td id="status<?php echo $row['id']; ?>">
<?php echo $row['status']; ?>
</td>

<td>

<button
type="button"
class="toggleBtn"
data-id="<?php echo $row['id']; ?>">
Toggle
</button>

</td>

</tr>

<?php

}

?>

</tbody>

</table>

</div>

<script src="script.js"></script>

</body>

</html>