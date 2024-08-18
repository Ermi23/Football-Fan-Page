<?php 
    $db = mysqli_connect('localhost', 'root', '', 'user');
    if(isset($_POST['edit'])){
        $file = "images/".$_FILES['newitem']['name'];
        $id  = $_POST['itemid'];
        $name  = $_POST['name'];
        $price = $_POST['price'];
        $amount = $_POST['amount'];
        $status  = $_POST['status'];
        
        if($file == "images/"){
            $query = "UPDATE shop set `name`=\"$name\", `price`= $price,`amount`=$amount,`status`='$status' WHERE itemid ='$id' ";
            
        }else{
            $query = "UPDATE shop set `name`=\"$name\", `price`= $price,`amount`=$amount,`file`='$file',`status`='$status' WHERE itemid ='$id' ";
        }

        
        $rs = mysqli_query($db, $query);
        
        if($rs){
            header('Location: shopadmin.php');
        }
    }

    $id = $_GET['itemid'];//

    $query = "SELECT * FROM shop WHERE itemid ='$id' LIMIT 1";

    $result = mysqli_query($db, $query);

    $row = mysqli_fetch_array($result);

        $file = $row['file'];
        $id  = $row['itemid'];
        $name  = $row['name'];
        $price = $row['price'];
        $amount = $row['amount'];
        $status  = $row['status'];

?>
<html lang="en">
<head>
    <link rel = "STYLESHEET" href ="buyticket.css">    
    <title>EDIT ITEM</title>
</head>
<body>
    <form action="edititem.php" method="post" enctype="multipart/form-data">
    <table class="content-table">
    <thead><th>ITEM EDITING FORM</th></thead>
    <tbody>
        <tr>
            <td>Item ID:</td><td><input type="text" name="itemid" value="<?php echo($id)?>"></td>
        </tr>
        <tr>
            <td>Item Name: </td><td><input type="text" name="name" value="<?php echo($name)?>"><br></td>
        </tr>
        <tr>
            <td>Item price:</td><td><input type="text" name="price" value="<?php echo($price)?>"></td>
        </tr>
        <tr>
            <td>Item amount:</td><td><input type="text" name="amount" value="<?php echo($amount)?>"></td>
        </tr>
        <tr>
            <td>Item status:</td><td><input type="text" name="status" value="<?php echo($status)?>"></td>
        </tr>
        <tr>
            <td>Item File:</td><td><input type="file" name="newitem" value="<?php echo($file)?>"></td>
        </tr>
        <tr>
            <td><a href="shopadmin.php" class="btn">GO BACK HOME</a></td><td><input class="btn" type="submit" name="edit" value="EDIT ITEM"></td>
        </tr>
    </tbody>
    </table>
   
</form>
</body>
</html>
