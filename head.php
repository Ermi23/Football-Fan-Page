<html lang="en">
<head>
    <link rel="stylesheet" href="ticket.css">
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="foot.css">
    <link rel="stylesheet" href="head.css">
    <!-- <link rel="stylesheet" href="contact.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Fasil Shop</title>
</head>
<body>
    <section class="header">
        <nav>
		<a href="index.php"><img class="img1" src="images/logo2.png" alt=""></a>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="ticketdemo.php">Tickets</a></li>
            <li><a href="shopTrial.php">Market</a></li>
            <li><a href="blog.php">BLog</a></li>
            <li><a href="donation.php">Donate</a></li>
            <li> <a href="logout.php?logout">Log Out (<?php echo $_SESSION['username'];?>)</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
        </nav>
    </section>
