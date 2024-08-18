<?php 
    $db = mysqli_connect('localhost', 'root', '', 'user');
    if(isset($_POST['add'])){
        $ttype  = $_POST['ttype'];
        $tcode  = $_POST['tcode'];
        $tstatus = $_POST['tstatus'];

        $query = "INSERT INTO `ticket`( `ttype`, `tcode`, `tstatus`) 
        VALUES ('$ttype','$tcode','$tstatus')";
        $rs = mysqli_query($db, $query);

        if($rs){
            header('Location: ticketview.php');
        }
    }
?>
<html lang="en">
<head>
    <link rel = "STYLESHEET" href ="buyticket.css">    
    <title>TICKET</title>
</head>
<body>
    <form action="ticketadmin.php" method="post" enctype="multipart/form-data">
    <table class="content-table">
    <thead><th>NEW TICKET ADDING FORM</th></thead>
    <tbody>
        <tr>
            <td>Ticket Type:</td><td><input type="text" name="ttype"></td>
        </tr>
        <tr>
            <td>Ticket Code: </td><td><input type="text" name="tcode"><br></td>
        </tr>
        <tr>
            <td>Ticket Status:</td><td><input type="text" name="tstatus"></td>
        </tr>
        
        <tr>
            <td><a href="ticketview.php" class="btn">GO BACK HOME</a></td><td><input class="btn" type="submit" name="add" value="ADD TICKET"></td>
        </tr>
    </tbody>
    </table>
   
</form>
</body>
</html>
