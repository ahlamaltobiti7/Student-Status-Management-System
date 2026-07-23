<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Status</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<h2>Student Status System</h2>

<form name="studentForm" action="insert.php" method="POST" onsubmit="return validateForm()">
    <label>Name:</label>
    <input type="text" name="name" id="name">

    <label>Age:</label>
    <input type="number" name="age" id="age">

    <button type="submit">Submit</button>
</form>

<br>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    <?php
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td>
                    <form action="toggle.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit">Toggle</button>
                    </form>
                </td>
            </tr>
            <?php
        }
    }
    ?>
</table>

</body>
</html>