<?php 
    
    session_start();

    $db = mysqli_connect('localhost', 'root', '', 'user');

    $error = 0;

if(isset($_POST['submit'])){

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    
    if ($username == "admin" && $password == 54321) {
      header('location: shopadmin.php');
    }else if(isset($username)){
       $error = 1;
    }

}
 ?>

<html lang="en">
<head>
    <link rel="stylesheet" href="account.css">
    <title>Fasil Kenema | Admin Account</title>
    <style>
        body{
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(images/stadium.jpg);
        }
    </style>

</head>
<body>
    <section class="login">
        <div class="content">
          <header> <img src="images/logo2.png" alt="">  <br>
             Admin Login</header>

             <?php if($error > 0) {
                echo "<div>
                <h1 style = 'color: red;'>Incorrect Credential, OR <br> You are not ADMIN</h1>
                </div>";
             }?>

          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="form" onsubmit="return checkInputs()">

            <div class="input-box ">
                <span class="details" id="Name" >User Name</span>
                <input type="text" placeholder="Enter User Name" id="username" name ="username" onkeypress="setSuccess(this)">
                <small>Error message</small>
            </div>
            <div class="input-box ">
                <span class="details">Password</span>
                <input type="password" placeholder="Enter Password" id="password1" name ="password" onkeypress="setSuccess(this)" >
                <small>Error message</small>
            </div>
          
            <br>
          
            <div class="field">
                <input type="submit" name="submit" value="LOGIN" />
                <br>
            </div>
        
            <div class="register-question">
                <h4>OR, </h4>    
                <a href="indexlogin.php" class="register-btn">Go Back Home</a>
            </div>
          </form>
        </div>
    </section>

    <script src="account.js"></script>
</body>
</html>