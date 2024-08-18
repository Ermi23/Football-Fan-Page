<?php include('headadmin.php'); ?>

<?php
$db = mysqli_connect('localhost', 'root', '', 'user');
$query = "SELECT * FROM tickets";
$result = mysqli_query($db, $query);

$counter = 0;
?>
<section id="tickets">
    <div class="background">
        <div align="center" style="margin: 20px;">
            <a style="margin: 20px;" href="ticketadmin.php" class="buy-btn">ADD TICKETS</a>
            <a style="margin: 20px;" href="addticket.php" class="buy-btn">ADD NEW MATCH</a>
        </div>

        <?php while ($row = mysqli_fetch_array($result)) : ?>
            <div class="ticket-row">
                <div class="ticket-col">
                    <div class="date">
                        <h1><?php echo ($row['tdate']) ?></h1><br>
                        <h3>Time Left: <span id="t1"></span> </h3>
                    </div>
                    <div class="image"><img src="<?php echo ($row['home']) ?>" alt="Man Unit."> VS <img src="<?php echo ($row['away']) ?>" alt=""></div>
                    <div>
                        <h1><?php echo ($row['tmatch']) ?>.</h1>
                        <p> &quot; Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti illo mollitia at. Est corporis sed saepe minus voluptate. Unde sed culpa fugit deleniti inventore repudiandae error voluptates nobis ipsum earum. &quot;</p>
                        <form action="buyticket.php" method="POST">
                            <input type="hidden" name="disc" value="<?php echo ($row['tmatch']) ?>">
                            <input type="hidden" name="date" value="<?php echo ($row['tdate']) ?>">
                            <input type="hidden" name="type" value="<?php echo ($row['ttype']) ?>">
                            <a href="editticket.php?ttype=<?php echo ($row['ttype']) ?>" class="btn">EDIT</a>
                            <a href="deleteticket.php?ttype=<?php echo ($row['ttype']) ?>" class="btn" onclick="return confirm('Are you sure you want to delete the Item?')">DELETE</a>
                        </form>
                    </div>
                </div>

                <?php $row = mysqli_fetch_array($result) ?>
                <?php if ($row) : ?>
                    <div class="ticket-col">
                        <div class="date">
                            <h1><?php echo ($row['tdate']) ?></h1><br>
                            <h3>Time Left: <span id="t1"></span> </h3>
                        </div>
                        <div class="image"><img src="<?php echo ($row['home']) ?>" alt="Man Unit."> VS <img src="<?php echo ($row['away']) ?>" alt=""></div>
                        <div>
                            <h1><?php echo ($row['tmatch']) ?>.</h1>
                            <p> &quot; Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti illo mollitia at. Est corporis sed saepe minus voluptate. Unde sed culpa fugit deleniti inventore repudiandae error voluptates nobis ipsum earum. &quot;</p>
                            <form action="buyticket.php" method="POST">
                                <input type="hidden" name="disc" value="<?php echo ($row['tmatch']) ?>">
                                <input type="hidden" name="date" value="<?php echo ($row['tdate']) ?>">
                                <input type="hidden" name="type" value="<?php echo ($row['ttype']) ?>">
                                <a href="editticket.php?ttype=<?php echo ($row['ttype']) ?>" class="btn">EDIT</a>
                                <a href="deleteticket.php?ttype=<?php echo ($row['ttype']) ?>" class="btn" onclick="return confirm('Are you sure you want to delete the Item?')">DELETE</a>
                            </form>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        <?php endwhile ?>

</section>
<script>
    window.onload = function() {
        getNow();
    }
    var hNow;
    var mNow;
    var sNow;

    function getNow() {
        var now = new Date();
        hNow = now.getHours();
        mNow = now.getMinutes();
        sNow = now.getSeconds();
    }

    function today() {
        getNow();
        var sMatch = 59 - Number(sNow);
        var mMatch = 59 - Number(mNow);
        var hMatch = 23 - Number(hNow);
        document.getElementById("t1").innerHTML = hMatch + ":" + mMatch + ":" + sMatch;

        var sMatch = 53 - Number(sNow);
        var mMatch = 32 - Number(mNow);
        var hMatch = 22 - Number(hNow);

        document.getElementById("t2").innerHTML = hMatch + ":" + mMatch + ":" + sMatch;
        document.getElementById("t3").innerHTML = hMatch + ":" + mMatch + ":" + sMatch;

        var sMatch = 55 - Number(sNow);
        var mMatch = 36 - Number(mNow);
        var hMatch = 24 - Number(hNow);

        document.getElementById("t4").innerHTML = hMatch + ":" + mMatch + ":" + sMatch;
        setTimeout(() => {
            today()
        }, 1000);
    }
    today();
</script>
<?php include('foot.php'); ?>