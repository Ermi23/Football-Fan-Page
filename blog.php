<?php 
 session_start();
 $name = '';
 if(isset($_SESSION['username'])){
	$name = $_SESSION['username'];
 }
 	
 ?>
<html lang="en">
<head>
	
	<link rel="stylesheet" href="foot.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="blog.css">
    <title>Blog</title>
</head>
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
    <section class="head">
        <div class="text">
            <div class="text-box">
            <h1>FASIL BLOGS</h1><br>
            <br><h4>Supported by Fasil Kenema &copy;</h4><br>
            <p>THIS IS AN ONLINE NEWS AGENCY AND BLOGING PAGE THAT SERVES A PURPOSE OF GIVING FASIL'S FAN TIMLY AND TRUSTWORTHY INFORMAITON</p>
        </div>
        </div>
        <div class="bottom">
            <h1 align='center'>HOT NEWS</h1>
        </div>
    </section>
  <section id="blog">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <h2>ONE STEP FROM THE CUP</h2>
            <div class="blog-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <div class="blog-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
        <div class="col-md-6">
            <video src="video/Highlights.mp4" controls autoplay width="100%" height="100%"></video>
        </div>
        </div>
    </div>
    </section>

    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/celebration.jpg" width="100%" height="100%">
                </div>
            <div class="col-md-6">
                <h2>TEAM CELEBRATOIN</h2>
                <div class="blog-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="blog-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
            </div>
        </div>
        </section>
		<?php include('foot.php');?>
</body>
</html>