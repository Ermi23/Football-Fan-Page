<?php include('headadmin.php');?>
<?php
// session_start();

$con = mysqli_connect('localhost', 'root', '', 'user');

?>
<html lang="en">

<head>
    <link rel="stylesheet" href="buyticket.css">
    <title>Messages</title>
</head>

<body>
    <?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "DELETE FROM message WHERE mid = $id";
        $result = mysqli_query($con, $query);
    
    }

    $query = "SELECT * FROM message ";

    $result = mysqli_query($con, $query);

    ?>
    <?php if ($result) : ?>


        <div class="content">
            <img src="images/message.png" alt="Donation Image">
            <h2 align="center">ALL THE MESSAGE LIST</h2>
            <table class="content-table" align="center">
                <thead>
                    <tr>
                        <th>SENDER </th>
                        <th>SUBJECT</th>
                        <th>MESSAGE</th>
                        <th>DATE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <?php
                            echo "<td>" . $row['sender'] . "</td>";
                            echo "<td>" . $row['subject'] . "</td>";
                            echo "<td>" . $row['message'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
                            ?>
                            <td><a href="messageadmin.php?id=<?php echo($row['mid'])?>" class="btn">RESPOND</a></td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
</body>

</html>
<?php endif ?>