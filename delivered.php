<?php

    $db = mysqli_connect('localhost', 'root', '', 'user');

    $id = $_GET['oid'];

    $query = "DELETE FROM `orders` WHERE oid ='$id'";

    $result = mysqli_query($db, $query);

    if($result){
        header("Location: orders.php");
    }
    else echo "<script>alert(Deletetion Failed)</script>";

?>