<?php include ('logout.php');?>
<?php include('head.php');?>  
<?php 
      if(isset($_GET['buy'])){
        $_SESSION['items'] = $_SESSION['items'] + 1;
        $_SESSION['total'] = $_SESSION['total'] + $_GET['price'];
        array_push($_SESSION['itemid'], $_GET['id']);
      }
        $db = mysqli_connect('localhost', 'root', '', 'user');

        $query = "SELECT * FROM shop";
        $result = mysqli_query($db, $query);
?>
<section class="market">
        <div class="content">
            <div class="row">
                <div class="col-md-6">
                   <h1 align='center' >Market</h1> <br>
                   <img src="images/headshirts.png">
                </div>
            <div class="col-md-6">
                <h2>FAMILY DISCOUNT 12%</h2>
                <div class="market-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <br><br><br>
                    <a href="pending.php" class="buy-btn">Pending Orders</a>
                </div>
            </div>
            </div>
        </div>
        <div class="order-box" id="order">
        <h6 id="items">Item Selected: <?php echo $_SESSION["items"];?></h6>
        <h6 id="price">Total Price: <?php echo $_SESSION["total"];?></h6>
        <form action="shoping.php" method="POST"  onsubmit="return order()"><input type="submit" name="order" value="Order Now" ></form>
      </div>
    </section>

    <!-- ----Sports Wear----- -->

  <section id="cloth">
    <div class="container">
      <h2>Sport Wear</h2>
      
      <div class="row">
      <?php while($row = mysqli_fetch_array($result)):?>
        <div class="col">
          <div class="single-price">
            <div class="price-head">
              <h3><?php echo($row['name'])?></h3>
              <p>$<?php echo($row['price'])?></p>
            </div>
            <div class="price-content">
              <div class="image">
                <img src="<?php echo($row['file'])?>" alt="">
              </div>
              <div class="disc">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In cum amet nostrum iure.</p>
              </div>
            </div>
            <div class="price-button">
                <form action="shop.php" method="GET" name="">
                    <input type="hidden" name="id" value="<?php echo($row['itemid'])?>">
                    <input type="hidden" name="price" value="<?php echo($row['price'])?>">
                    <input type="submit" name="buy" value="Buy Now" class="buy-btn">
                </form>
            </div>
          </div>
        </div>
        <?php endwhile?>
        </div>
      </div>
    </div>
    <hr>
    
 
  </section>

  <script>


    const itemhead = document.getElementById('items');
    const pricehead = document.getElementById('price');

    // function add(price){
    //     totalprice += price;
    //     item += 1;

    //     itemhead.innerHTML = "Item Selected: " + item;
    //     pricehead.innerHTML = "Total Price: " + totalprice;

    //     return false;
    // }

    function order(){
        if(<?php echo $_SESSION["items"];?> > 0){
            return true;
        }else{
          alert("You Haven't Choosen Any Item Yet");
        return false;
        }
    }

  </script>
<?php include('foot.php'); ?>