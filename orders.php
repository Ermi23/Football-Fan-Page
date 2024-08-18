<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', 'user');

$query = "SELECT * FROM orders ";

$result = mysqli_query($con, $query);

?>

<?php include('headadmin.php'); ?>


<html lang="en">

<head>
    <link rel="stylesheet" href="buyticket.css">
    <title>Orders</title>
</head>

<body>

    <div class="content">
        <img src="images/shoping.png" alt="Ticket Image">
        <h2 align="center">UNDELIVERED ORDER'S</h2>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Order Id.</th>
                    <th>Items</th>
                    <th>Delivery Region</th>
                    <th>Delivery City</th>
                    <th>Delivery Street</th>
                    <th>Receiver's Phone</th>
                    <th>Ordered By</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($result)) : ?>
                    <tr>
                        <td><?php echo($row['oid'])?></td>
                        <td><?php echo($row['itemid'])?></td>
                        <td><?php echo($row['region'])?></td>
                        <td><?php echo($row['city'])?></td>
                        <td><?php echo($row['street'])?></td>
                        <td><?php echo($row['phone'])?></td>
                        <td><?php echo($row['orderedby'])?></td>
                        <td><a href="delivered.php?oid=<?php echo($row['oid'])?>" class="btn">Delivered</a></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
        <a href="shopadmin.php" class="btn">GO BACK TO SHOP</a>
</body>

</html>