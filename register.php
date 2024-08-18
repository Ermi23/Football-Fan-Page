<?php 

session_start();

$username = "";
$email    = "";
$errmsg = "";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'user');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $credit = mysqli_real_escape_string($db, $_POST['credit']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);


  // first check the database to make sure 
  // // a user does not already exist with the same username 
  $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      $errmsg = 'User Name Already Taken';   
    }
  }

  // // Finally, register user if there are no errors in the form
  if ($errmsg === '') {
    
    $query = "INSERT INTO users (username, password, fullname, gender, phone, email, credit) 
    VALUES ('$username','$password','$fullname','$gender','$phone','$email','$credit')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    header('location: index.php');
  }
}

?>

<html lang="en">
<head>
    <link rel="stylesheet" href="register.css">
    <title>Fasil Kenam | Registration</title>
</head>
<body>
    <section class="register">
        <div class="content">
            <div class="title">Registration</div>
            
            <?php if($errmsg !== ""){
                echo "
                <h2 style = 'color: red;'>User Name Already Taken</h2>
                ";
            }?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"  id="form" onsubmit="return checkInputs()" >
            <div class="user-details">
                <div class="input-box">
                <span class="details" id="Name" >Full Name</span>
                <input type="text" placeholder="Enter your name" name="fullname"  id="fullname" onkeypress="setSuccess(this)">
                <small>Error message</small>
                </div>
                <div class="input-box">
                <span class="details">Username</span>
                <input type="text" placeholder="Enter your username" name="username" id="username" onkeypress="setSuccess(this)" >
                <small>Error message</small>
                </div>
                <div class="input-box">
                <span class="details">Email</span>
                <input type="text" placeholder="Enter your email" name="email" id="email" onkeydown="setSuccess(this)">
                <small>Error message</small>
                </div>
                <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="text" placeholder="Enter your number" name="phone" id="phone" onkeypress="setSuccess(this)">
                <small>Error message</small>
                </div>
                <div class="input-box">
                <span class="details">Password</span>
                <input type="password" placeholder="Enter your password" name="password" id="password1" onkeypress="strengthCheck(this)">
                <small>Error message</small>
                <br> <span class="strength" id="strength"></span>
                </div>
                <div class="input-box">
                <span class="details">Confirm Password</span>
                <input type="password" placeholder="Confirm your password" id="password2" onkeypress="setSuccess(this)">
                <small>Error message</small>
                </div>
                <div class="title">Bank Information</div>
                <div class="input-box">
                    <span class="details">Credit Card Number</span>
                    <input type="text" placeholder="Enter Credit Number" name="credit" id="credit">
                    <small>Error message</small>
                    </div>
            </div>
            <div class="gender-details">
                <input type="radio" name="gender" id="dot-1" value="M">
                <input type="radio" name="gender" id="dot-2" value="F">
                <span class="gender-title">Gender</span><br>
                <small>Error message</small>
                <div class="category">
                <label for="dot-1" >
                <span class="dot one"></span>
                <span class="gender">Male</span>
                </label>
                <label for="dot-2" >
                <span class="dot two"></span>
                <span class="gender">Female</span>
                </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="submit" value="Register">
            </div>
            <div class="login-question">
                <h4>Already Have an Account? Log In Now</h4>    
                <a href="account.php" class="login-btn">Log In</a>
            </div>
            </form>
        </div>
    </section>
    <script src="register.js">
    </script>
</body>
</html>