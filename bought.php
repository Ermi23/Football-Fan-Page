<?php 
session_start();

    $con = mysqli_connect('localhost', 'root', '', 'user');

?>


<html lang="en">
<head>
    <link rel="stylesheet" href="buyticket.css">
    <title>Shoping Affirm</title>
</head>
<body>

    <?php 
    
    $itemid = '';
    $total = $_SESSION['total'];
    foreach( $_SESSION['revisedid'] as $id){
        $itemid = $itemid . " ".$id;
    }

    
    
    if(isset($_POST['submit'])){

        $region = mysqli_real_escape_string($con, $_POST['region']) ;
        $city = mysqli_real_escape_string($con,  $_POST['city']);
        $street = mysqli_real_escape_string($con,  $_POST['street']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']) ;
        $user = mysqli_real_escape_string($con, $_SESSION['username']);

        $query = "INSERT INTO orders (itemid, region, city, street, phone, orderedby) 
        VALUES ('$itemid','$region','$city','$street','$phone','$user')";

        $q = "SELECT * FROM orders";

        $result = mysqli_query($con, $query);
        
        if($result)
        {
        echo '<div class="content">
            <img src="images/shoping.png" alt="Ticket Image">
            <h1>ITEMS SUCCESSFULLY BOUGHT!</h1>
            <h2 align = "center" >YOU WILL RECIEVE YOUR ORDERS AS SOON AS POSSIBLE TO THE ADDRESS YOU JUST FILLED IN !</h2>
            <h2>THANKYOU FOR YOUR SUPPORT</h2>
            <h1>$ ' .$total. ' has been deducted from you credit card account</h1>                 
            <a class = "btn" href="index.php">Go Back Home</a>
            </div>';

            $_SESSION['items'] = 0;
            $_SESSION['total'] = 0;
            $_SESSION['itemid'] = array(); 
        }
        
    }
    ?>
   
</body>
</html>