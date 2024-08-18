<?php include('headadmin.php');?>
<?php
// session_start();

$con = mysqli_connect('localhost', 'root', '', 'user');

?>
<html lang="en">

<head>
    <link rel="stylesheet" href="buyticket.css">
    <title>Donation</title>
</head>

<body>
    <?php

    $query = "SELECT * FROM donation ";

    $result = mysqli_query($con, $query);

    ?>
    <?php if ($result) : ?>


        <div class="content">
            <img src="images/donate.png" alt="Donation Image">
            <h2 align="center">ALL THE DONATION LIST</h2>
            <table class="content-table" align="center">
                <thead>
                    <tr>
                        <th>DONATED BY</th>
                        <th>AMOUNT</th>
                        <th>MESSAGE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <?php
                            echo "<td>" . $row['duser'] . "</td>";
                            echo "<td>" . $row['damount'] . "</td>";
                            echo "<td>" . $row['dmessage'] . "</td>";
                            ?>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
</body>

</html>
<?php endif ?>