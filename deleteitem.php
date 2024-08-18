<?php

    $db = mysqli_connect('localhost', 'root', '', 'user');

    $id = $_GET['itemid'];

    $query = "DELETE FROM `shop` WHERE itemid ='$id'";

    $result = mysqli_query($db, $query);

    if($result){
        header("Location: shopadmin.php");
    }
    else echo "<script>alert(Deletetion Failed)</script>";

?>