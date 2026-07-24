<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);

    $sql = "INSERT INTO students(name, age, status)
            VALUES('$name','$age',0)";

    if(mysqli_query($conn,$sql)){
        header("Location: index.php");
        exit();
    }else{
        echo "Error: " . mysqli_error($conn);
    }

}

mysqli_close($conn);

?>