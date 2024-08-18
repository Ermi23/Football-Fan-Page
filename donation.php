<html lang="en">
<head>
    <title>Donation</title>
    <link rel="stylesheet" href="buyticket.css">
</head>
<body>
<?php 
session_start();

$uname = $_SESSION['username'];

$con = mysqli_connect('localhost', 'root', '', 'user');
    if(isset($_POST['donate'])){

        $amount = mysqli_real_escape_string($con, $_POST['amount']);
        $msg = mysqli_real_escape_string($con, $_POST['message']);
        $query = "INSERT INTO donation (damount, duser, dmessage) 
        VALUES ($amount,'$uname','$msg')";


        $res = mysqli_query($con, $query);
        if($res){
            echo ' <div class="content">
            <img src="images/donate.png" alt="Ticket Image">
            <h1>DONATED SUCESSFULL!</h1>
            <h2>YOU SHOULD BE PROUD FOR YOUR CONTRIBUTION TO YOUR FAMILY</h2>
        
            <h1>'. $amount .' has been deducted from you credit card account</h1>                 
            <a class="btn" href="index.php">Go Back Home</a>
        </div>';

        die();

        }else{
            echo "Something wrong with the connection to db".mysqli_error($con);
            die();
        }
    }
?>


    <div class="content">
        <img src="images/donate.png" alt="Ticket Image">
        <h1>THANKYOU FOR CONSIDERING DONATION!</h1>
        <h2>Fill out the following form: </h2>
        <form action="donation.php" method="POST" name="form" onsubmit="return validate()">
            <table>
                <tr>
                    <div class="input-box"><td> <label for="amount">AMOUNT:</label></td>
                    <td><input type="text" name="amount" placeholder="Amount" id="amount"  onkeyup="change()">
                <br><small>You have to specify the amount</small></td></div>
                </tr>
                <tr>
                    <div class="input-box"><td><label for="message">MESSAGE:</label></td>
                    <td><textarea name="message" id="message" cols="30" rows="10" placeholder="Message:"></textarea></td></div>
                </tr>
                </table>
                <div><input class="btn" type="submit" name="donate" value="DONATE"></div>
        </form>

        <h1 id="money">$0 will be deducted from you credit card account</h1>                 
        <a class="btn" href="index.php">Go Back Home</a>
    </div>
    <script>
    const amount = document.getElementById('amount');
    const error = document.querySelector('small');
    
    function validate(){
        if(amount.value === ''){
            amount.setAttribute('style', 'border: 1px solid red;');
            error.setAttribute('style', 'visibility: visible');
            return false;
        }else if(isNaN(amount.value)){
        
            amount.setAttribute('style', 'border: 1px solid red;');
            error.innerHTML = 'Please, enter valid numbers';
            error.setAttribute('style', 'visibility: visible');
            return false;
        }
        return true;
    }
    
    function change(){
        amount.setAttribute('style', 'border: 1px solid #1add23;');
        error.setAttribute('style', 'visibility: hidden');
        const lbl = document.getElementById('money');        
        lbl.innerHTML = "$" + amount.value + " is deducted from you credit card account";
    }
    </script>
</body>
</html>