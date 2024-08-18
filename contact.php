
<html lang="en">
<head>
    <link rel="stylesheet" href="foot.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="buyticket.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Fasil Kenema | Contact</title>
</head>

<?php
session_start();

    $error = "";
    $name = "";
    $con = mysqli_connect('localhost', 'root', '', 'user');
    if(isset($_POST['send'])){

        $username = $_SESSION['username'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $date = date("y-m-d");

        $query = "INSERT INTO message (sender, subject, message, date) 
        VALUES ('$username','$subject','$message','$date')";

        $res = mysqli_query($con, $query);
        
        if($res){
            echo '<div class="content">
            <img src="images/message.png" alt="Ticket Image">
            <h1>MESSAGE DELIVERED SUCCESSFULLY </h1>
            <h2 align = "center" >YOU WILL RECIEVE A REPLAY AS SOON AS POSSIBLE TO YOUR EMAIL!</h2>
            <h2>THANKYOU FOR YOUR SUPPORT</h2>
            <a class="btn" href="index.php">Go Back Home</a>
            </div>';
            die();
        }else{
            $error = 'MESSAGE DELIVERY ERROR! PLEASE TRY AGAIN!';
        }
    }
?>


<body>
    <section class="header">
        <nav>
		<a href="index.php"><img class="img1" src="images/logo2.png" alt=""></a>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="tickets.php">Tickets</a></li>
            <li><a href="shop.php">Market</a></li>
			<li><a href="blog.php">BLog</a></li>
            <li><a href="donation.php">Donate</a></li>
			<li><a href="logout.php?logout">Log Out (<?php echo "$name";?>)</a></li> 
			<li><a href="contact.php">Contact</a></li>
		</ul>
        </nav>
    </section>
    <h1><?php echo $error; ?></h1>
    <section id="contact">
            <h2>CONTACT</h2>
            <div class="row">
            <div class="col-md-6 contact-info">
                    <div class="follow">
                        <b>Address:</b> <i class="fa fa-map-marker"></i> Amahara, Gondar, UOG
                    </div>
                    <div class="follow">
                        <b>Phone:</b> <i class="fa fa-phone"></i> +251*******
                    </div>
                    <div class="follow">
                        <b>Email:</b><i class="fa fa-envelope-o"></i> fasilkenema@website.com
                    </div>
                    <div class="follow"><label>
                            <b>Social Media:</b></label>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-youtube-play"></a>
                        <a href="#" class="fa fa-twitter"></a>
                    </div>
                </div>

                <div class="col-md-6">
                    <form action="contact.php" method="POST" name="msg" class="contact-form" onsubmit="return validate()">
                        <h3>Do you have a message?</h3>
                        <div class="contact-group">
                            <label for="">Subject:</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject" onkeypress="change()">
                            <small>Subject field should not be empty</small>
                        </div>
                        <div class="contact-group">
                            <label for="">Message:</label>
                            <textarea class="form-control" rows="4" name="message" id="message" placeholder="Your Message"></textarea>
                            <small>Errror</small>
                        </div>
                        <div class="contact-group">
                            <button type="submit" name="send" class="send-btn">Send Message</button>
                        </div>
                        </form>
                </div>

            </div>
    </section>

    <script> 
    const subject = document.getElementById('subject');
    const error = document.querySelector('small');
    
    function validate(){
        if(subject.value === ''){
            subject.setAttribute('style', 'border: 1px solid red;');
            error.setAttribute('style', 'visibility: visible');
            return false;
        }
        return true;
    }
    
    function change(){
        subject.setAttribute('style', 'border: 1px solid #1add23;');
        error.setAttribute('style', 'visibility: hidden');
        const lbl = document.getElementById('money');        
        lbl.innerHTML = "$" + amount.value + " is deducted from you credit card account";
    }
    </script>
<?php include('foot.php'); ?>