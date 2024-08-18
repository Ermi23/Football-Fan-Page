<?php
session_start();

$username = $_SESSION['username'];

$db = mysqli_connect('localhost', 'root', '', 'user');

    if(isset($_POST['ticket'])){
        $disc = $_POST['disc']; 
        $date = $_POST['date']; 
        $type = mysqli_real_escape_string($db, $_POST['type']); 

        $ticket_check = "SELECT * FROM ticket WHERE ttype = '$type' AND tstatus = 'available' LIMIT 1";
        $result = mysqli_query($db, $ticket_check);
        $ticketresult = mysqli_fetch_assoc($result);

        if($ticketresult ){
        $ticketcode = $ticketresult['tcode'];
        $ticketid = $ticketresult['tid'];

        $ticket_update = "UPDATE ticket SET tstatus = 'sold', tsoldto = '$username' WHERE tid = '$ticketid' ";
        $result = mysqli_query($db, $ticket_update);
        }
    }
?>

<head>
    <title>Buy Tickets</title>
    <link rel="stylesheet" href="buyticket.css">
</head>
<body>
<?php 
        if($ticketresult){
            echo '<div class="content">
                    <img src="images/ticket2.png" alt="Ticket Image">
                    <h1>TICKET SUCCESSFULLY BOUGHT!</h1>
                    <h2>Match:  '.$disc.'</h2>
                    <h2>Date:  '.$date.'</h2>
                    <h2>Ticket-Code:  '.$ticketcode.'</h2>
                    <h3>Don\'t loose or give this ticket code to anyone. This ticket code is required at the match gate!</h3>
                    <h1>$12 is deducted from you credit card account</h1>                 
                    <a class = "btn" href="index.php">Go Back Home</a>
                </div>';
        }else {
            echo '<div class="content">
                    <img src="images/soldout.png" alt="Ticket Image">
                    <h1 style = "color: red;">SORRY TICKETS ARE SOLD OUT!</h1>
                    <h3>We are sorry to inform you that we have no more tickets for the Match: '.$disc.'</h3>
                    <br>
                    <h3>Please, Buy Other Match Tickets Before its SOLD OUT</h3>
                    <a class = "btn" href="index.php">Go Back Home</a>
                </div>';
        }

?>        
</body>
</html>