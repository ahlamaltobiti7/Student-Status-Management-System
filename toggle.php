<?php
include 'db.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "UPDATE students SET status = IF(status=0, 1, 0) WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>