<?php

include "db.php";

if(isset($_POST['id'])){

    $id = intval($_POST['id']);

    $get = mysqli_query($conn,"SELECT status FROM students WHERE id=$id");

    $row = mysqli_fetch_assoc($get);

    if($row['status']==0){
        $newStatus=1;
    }else{
        $newStatus=0;
    }

    mysqli_query($conn,"UPDATE students SET status=$newStatus WHERE id=$id");

    echo $newStatus;

}

mysqli_close($conn);

?>