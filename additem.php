<?php 
    $db = mysqli_connect('localhost', 'root', '', 'user');
    if(isset($_POST['add'])){
        $file = "images/".$_FILES['newitem']['name'];
        $id  = $_POST['itemid'];
        $name  = $_POST['name'];
        $price = $_POST['price'];
        $amount = $_POST['amount'];
        $status  = $_POST['status'];

        $query = "INSERT INTO shop(itemid, name, price, amount, file, status) VALUES ('$id', \"$name\", $price, $amount, '$file', '$status' )";
        $rs = mysqli_query($db, $query);

        if($rs){
            header('Location: shopadmin.php');
        }
    }

?>
<html lang="en">
<head>
    <link rel = "STYLESHEET" href ="buyticket.css">    
    <title>ADD ITEM</title>
</head>
<body>
    <form action="additem.php" method="post" enctype="multipart/form-data">
    <table class="content-table">
    <thead><th>NEW ITEM ADDING FORM</th></thead>
    <tbody>
        <tr>
            <td>Item ID:</td><td><input type="text" name="itemid"></td>
        </tr>
        <tr>
            <td>Item Name: </td><td><input type="text" name="name"><br></td>
        </tr>
        <tr>
            <td>Item price:</td><td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td>Item amount:</td><td><input type="text" name="amount"></td>
        </tr>
        <tr>
            <td>Item status:</td><td><input type="text" name="status"></td>
        </tr>
        <tr>
            <td>Item File:</td><td><input type="file" name="newitem"></td>
        </tr>
        <tr>
            <td><a href="shopadmin.php" class="btn">GO BACK HOME</a></td><td><input class="btn" type="submit" name="add" value="ADD ITEM"></td>
        </tr>
    </tbody>
    </table>
   
</form>
</body>
</html>
