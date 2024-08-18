<?php

    $db = mysqli_connect('localhost', 'root', '', 'user');

    $id = $_GET['ttype'];

    $query = "DELETE FROM `tickets` WHERE ttype ='$id'";

    $result = mysqli_query($db, $query);

    if($result){
        header("Location: ticketview.php");
    }
    else echo "<script>alert(Deletetion Failed)</script>";

?>