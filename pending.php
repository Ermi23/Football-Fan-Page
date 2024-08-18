<?php 
// session_start();

$con = mysqli_connect('localhost', 'root', '', 'user');

if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="buyticket.css">
    <title>Shopping</title>
</head>
<body>
<?php 
session_start();

$user = $_SESSION['username'];

if (isset($_GET['id'])) {
    $query = "DELETE FROM orders WHERE orderedby = '$user'";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo '<div class="content">
            <img src="images/shoping.png" alt="Ticket Image">
            <h1 style="color: #fe0303">ORDER SUCCESSFULLY CANCELED!</h1>
            <h2 align="center">THANK YOU FOR YOUR SUPPORT</h2>                
            <a class="btn" href="index.php">Go Back Home</a>
        </div>';
        die();
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

$query = "SELECT * FROM orders WHERE orderedby = '$user'";
$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0):
    $row = mysqli_fetch_array($result);
    $itemid = explode(" ", $row['itemid']);
?>
    <div class="content">
        <img src="images/shoping.png" alt="Ticket Image">
        <h2 align="center">These Are Your Orders</h2>
        <table class="content-table" align="center">
            <thead>
                <tr>
                    <th>Item Selected</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($itemid as $id): ?> 
                    <?php if ($id != ''): ?>
                        <tr>
                            <?php 
                            $query = "SELECT * FROM shop WHERE itemid = '$id'";
                            $result = mysqli_query($con, $query);

                            if ($result && mysqli_num_rows($result) > 0) {
                                $fetched = mysqli_fetch_array($result); 
                                echo "<td>".$fetched['name']."</td>";
                                echo "<td>".$fetched['price']."</td>";
                            } else {
                                echo "<td colspan='2'>Item not found</td>";
                            }
                            ?>
                        </tr>
                    <?php endif ?>
                <?php endforeach ?>
            </tbody>
        </table>
        <a align="center" class="btn" href="pending.php?id=<?php echo $user ?>" onclick="return confirm('Are you sure you want to cancel your orders?')">Cancel Order</a>
        <a align="center" class="btn" href="index.php">Go Back Home</a>
    </div>
<?php 
else:
    echo '<div class="content">
        <img src="images/shoping.png" alt="Ticket Image">
        <h2 align="center">No Orders Found</h2>
        <a align="center" class="btn" href="index.php">Go Back Home</a>
    </div>';
endif;

mysqli_close($con);
?>
</body>
</html>
