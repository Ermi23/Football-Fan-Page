
<?php 
    $db = mysqli_connect('localhost', 'root', '', 'user');
    if(isset($_POST['edit'])){
        
        $ttype = $_POST['ttyoe'];
        $tmatch  = $_POST['tmatch'];
        $tdate = $_POST['tdate'];
        $home = "images/".$_FILES['home']['name'];
        $away = "images/".$_FILES['away']['name'];
        $price  = $_POST['price'];

        $query = "UPDATE `tickets` SET , `tmatch`='$tmatch', `tdate`='$tdate', `home`='$home', `away`='$away', `price`= $price
         WHERE  `ttype`= '$ttype' ";

        $rs = mysqli_query($db, $query);
        
        if($rs){
            header('Location: ticketview.php');
        }
    }

    $id = $_GET['ttype'];//

    $query = "SELECT * FROM tickets WHERE ttype ='$id' LIMIT 1";

    $result = mysqli_query($db, $query);

    $row = mysqli_fetch_array($result);

        
        $ttype  = $row['ttype'];
        $tmatch  = $row['tmatch'];
        $tdate = $row['tdate'];
        $price = $row['price'];
        $home = $row['home'];
        $away = $row['away'];

?>
<html lang="en">
<head>
    <link rel = "STYLESHEET" href ="buyticket.css">    
    <title>EDIT TICKETS</title>
</head>
<body>
    <form action="editticket.php" method="post" enctype="multipart/form-data">
    <table class="content-table">
    <thead><th>TICKET EDITING FORM</th></thead>
    <tbody>
        <!-- <tr>
            <td>Ticket Type:</td><td><input type="text" name="ttype" value="<?php echo($ttype)?>"></td>
        </tr> -->
        <tr>
            <td>Match With: </td><td><input type="text" name="tmatch" value="<?php echo($tmatch)?>"><br></td>
        </tr>
        <tr>
            <td>Match Date:</td><td><input type="text" name="tdate" value="<?php echo($tdate)?>"></td>
        </tr>
        <tr>
            <td>Home Image:</td><td><input type="file" name="home" value="<?php echo($home)?>"></td>
        </tr>
        <tr>
            <td>Away Image:</td><td><input type="file" name="away" value="<?php echo($away)?>"></td>
        </tr>
        <tr>
            <td>Price:</td><td><input type="text" name="price" value="<?php echo($price)?>"></td>
        </tr>
        <tr>
            <td><a href="ticketview.php" class="btn">GO BACK HOME</a></td><td><input class="btn" type="submit" name="edit" value="EDIT TICKET"></td>
        </tr>
    </tbody>
    </table>
   
</form>
</body>
</html>
