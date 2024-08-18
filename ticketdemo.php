<?php include('logout.php'); ?>
<?php include('head.php'); ?>

<?php
$db = mysqli_connect('localhost', 'root', '', 'user');
$query = "SELECT * FROM tickets";
$result = mysqli_query($db, $query);
?>
<section id="tickets">
    <div class="background">

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
                            <input type="submit" value="Buy Ticket" name="ticket" class="btn">
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
                                <input type="submit" value="Buy Ticket" name="ticket" class="btn">
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