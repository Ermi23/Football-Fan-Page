<?php 
    $db = mysqli_connect('localhost', 'root', '', 'user');
    if(isset($_POST['add'])){
        
        $ttype = $_POST['ttype'];
        $tmatch  = $_POST['tmatch'];
        $tdate = $_POST['tdate'];
        $home = "images/".$_FILES['home']['name'];
        $away = "images/".$_FILES['away']['name'];
        $price  = $_POST['price'];

        $query = "INSERT INTO `tickets`(`ttype`, `tmatch`, `tdate`, `home`, `away`, `price`) 
        VALUES ('$ttype','$tmatch','$tdate','$home','$away',$price)";

        $rs = mysqli_query($db, $query);
        
        if($rs){
            header('Location: ticketview.php');
        }
    }

?>
<html lang="en">
<head>
    <link rel = "STYLESHEET" href ="buyticket.css">    
    <title>ADD TICKETS</title>
</head>
<body>
    <form action="addticket.php" method="post" enctype="multipart/form-data">
    <table class="content-table">
    <thead><th>NEW MACTCH TICKET ADDING FORM</th></thead>
    <tbody>
        <tr>
            <td>Ticket Type:</td><td><input type="text" name="ttype"></td>
        </tr>
        <tr>
            <td>Match With: </td><td><input type="text" name="tmatch"><br></td>
        </tr>
        <tr>
            <td>Match Date:</td><td><input type="text" name="tdate"></td>
        </tr>
        <tr>
            <td>Home Image:</td><td><input type="file" name="home"></td>
        </tr>
        <tr>
            <td>Away Image:</td><td><input type="file" name="away"></td>
        </tr>
        <tr>
            <td>Price:</td><td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td><a href="ticketview.php" class="btn">GO BACK HOME</a></td><td><input class="btn" type="submit" name="add" value="ADD TICKET"></td>
        </tr>
    </tbody>
    </table>
   
</form>
</body>
</html>
