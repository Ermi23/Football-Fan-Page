<?php 
session_start();

    $con = mysqli_connect('localhost', 'root', '', 'user');

    

    if(isset($_GET['id'])){
        
        foreach($_SESSION['revisedid'] as $id ){
            $id = trim($id);
            $dec = "UPDATE shop SET amount = amount + 1 WHERE  itemid = '$id' ";
            $rs = mysqli_query($con, $dec);
        }

        $_SESSION['items'] = 0;
        $_SESSION['total'] = 0;
        $_SESSION['itemid'] = array();

        if($_GET['id'] == 'gohome'){ 
        header('Location: index.php');
        }else if($_GET['id'] == 'goshop'){
        header('Location: shop.php');}
    }


    $totalprice = 0;
    $_SESSION['revisedid'] = array();
?>



<html lang="en">
<head>
    <link rel="stylesheet" href="buyticket.css">
    <title>Shoping</title>
</head>
<body>

    <div class="content">
        <img src="images/shoping.png" alt="Ticket Image">
        <h2>Please Check Your Order and Fill Out The Address Form:</h2>
            <table class="content-table">
                <thead>
                <tr>
                    <th>Item Selected</th> <th>Price</th> <th>Status</th>
                </tr>
                </thead>
                <tbody>
                    <?php  foreach($_SESSION['itemid'] as $id): ?> 
                    <tr>
                        <?php 
                            $query = "SELECT * FROM shop WHERE itemid = '$id' AND amount > 0";
                            $result = mysqli_query($con, $query);
                            $num_row = mysqli_num_rows($result);
                        if($num_row > 0){
                            
                            $dec = "UPDATE shop SET amount = amount - 1 WHERE  itemid = '$id' ";
                            $rs = mysqli_query($con, $dec);

                            $fetched = mysqli_fetch_array($result); 
                            
                            $totalprice += $fetched['price'];
                            echo "<td>".$fetched['name']."</td>";
                            echo "<td>".$fetched['price']."</td>";
                            echo "<td>Available</td>";
                            array_push($_SESSION['revisedid'], " ".$id);
                        
                        }else{
                            $query = "SELECT * FROM shop WHERE itemid = '$id' ";
                            $result = mysqli_query($con, $query);
                            $fetched = mysqli_fetch_array($result); 

                            echo "<td>".$fetched['name']."</td>";
                            echo "<td>".$fetched['price']."</td>";
                            echo "<td>Sorry UnAvailable</td>";
                            
                        }
                        ?>
                    </tr>
                   <?php endforeach ?>
                   <tr>
                    <td>Total Price of Available Items</td> <td><?php echo $totalprice ?></td>
                   </tr>
                </tbody>
                </table>
        <?php if($totalprice > 0) {?>
        <form action="bought.php" method="POST" name="form" onsubmit="return validate()">
        <h2>Fill Out Address Form: </h2>
       
            <table class="content-table" >
                <tr>
                    <td>Region</td>
                    <td><div class="input-box"><input type="text" placeholder="Enter Destination Region" name="region"  id="region" onkeypress="setSuccess(this)">
                    <small></small></div></td>
                </tr>
                <tr><div class="input-box">
                    <td>City</td>
                    <td><input type="text" placeholder="Enter Destination City" name="city" id="city" onkeypress="setSuccess(this)" >
                <small></small></td>
                </div></tr>
                <tr>
                    <td>Street</td>
                    <td><div class="input-box"><input type="text" placeholder="Enter Destination Street" name="street" id="street" onkeydown="setSuccess(this)">
                <small></div></small></td>
                </tr>
                <tr>
                    <td>Phone No</td>
                    <td><div class="input-box"><input type="text" placeholder="Enter Phone No." name="phone" id="phone" onkeydown="setSuccess(this)">
                <small></small></div></td>
                </tr>
            </table>        
                <div><input class="btn" type="submit" name="submit" value="ORDER NOW"></div>
        </form>
        
        <h1 id="money">$ <?php echo $totalprice ?> will be deducted from you credit card account</h1>                 
        <a class="btn" href="shoping.php?id=gohome">Go Back Home</a>
    </div>
    <?php }else{?>
        <h2 style="color: #ff0403" align="center">Sorry We Have No Items You Want: </h2>
        <h2 style="color: #ff0403" align="center">Choose other items or Get Back Another Time </h2>
        <a class="btn" href="shoping.php?id=gohome">Go Back Home</a>
        <a class="btn" href="shoping.php?id=goshop">Go Shoping</a>
    <?php }?>
    <script>
        const region = document.getElementById('region');
        const city = document.getElementById('city');
        const street = document.getElementById('street');
        const phone = document.getElementById('phone');
        function validate(){
            if(region.value.trim() === ''){ 
                setError(region, "Region Field is Empty");
                return false;
            }else{
                setSuccess(region);
            }

            if(city.value.trim() === ''){ 
                setError(city, "City Field is Empty");
                return false;
            }else{
                setSuccess(city);
            }

            if(street.value.trim() === ''){ 
                setError(street, "Street Field is Empty");
                return false;
            }else{
                setSuccess(street);
            }

            if(phone.value.trim() === ''){ 
                setError(phone, "Phone Field is Empty");
                return false;
            }else if(!isPhone(phone)){
                setError(phone, "Invalid Phone Format");
                return false;
            }else
            {
                setSuccess(phone);
            }
        }

                
        function setError(type, message){
            type.setAttribute('style', 'border: 2px solid #ee2c2c');
            const parent = type.parentElement;
            const error = parent.querySelector('small');
            error.innerText = message;
        }

        function setSuccess(type){
            type.setAttribute('style', 'border: 2px solid #1add23');
            const parent = type.parentElement;
            const error = parent.querySelector('small');
            error.innerText = '';
        }

        function isPhone(phone){    
        const re = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/g;
        let res = phone.value.match(re);
        if(res){
            return true;
        }
        return false;
}

    </script>
</body>
</html>
