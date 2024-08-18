<?php include ('logout.php');?>
<?php include('head.php');?>  
<?php 
      if(isset($_GET['buy'])){
        $_SESSION['items'] = $_SESSION['items'] + 1;
        $_SESSION['total'] = $_SESSION['total'] + $_GET['price'];
        array_push($_SESSION['itemid'], $_GET['id']);
      }
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
      <h2>Adults Wear</h2>
      <div class="row">
        <div class="col">
          <div class="single-price">
            <div class="price-head">
              <h3>Home T-shirt</h3>
              <p>$25</p>
            </div>
            <div class="price-content">
              <div class="image">
                <img src="images/tshirt.png" alt="">
              </div>
              <div class="disc">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In cum amet nostrum iure.</p>
              </div>
            </div>
            <div class="price-button">
                <form action="shop.php" method="GET" name="">
                    <input type="hidden" name="id" value="item1">
                    <input type="hidden" name="price" value="25">
                    <input type="submit" name="buy" value="Buy Now" class="buy-btn">
                </form>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="single-price">
            <div class="price-head">
              <h3>Classic Shoes</h3>
              <p>$10</p>
            </div>
            <div class="price-content">
                <div class="image">
                    <img src="images/shoe.png" alt="">
                  </div>
                  <div class="disc">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In cum amet nostrum iure.</p>
                  </div>
            </div>
            <div class="price-button">
                <form action="shop.php" method="" name="">
                    <input type="hidden" name="id" value="item2">
                    <input type="hidden" name="price" value="10">
                    <input type="submit" name="buy" value="Buy Now" class="buy-btn">
                </form>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="single-price">
            <div class="price-head">
              <h3>Shorts</h3>
              <p>$20</p>
            </div>
            <div class="price-content">
                <div class="image">
                    <img src="images/short.png" alt="">
                  </div>
                  <div class="disc">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In cum amet nostrum iure.</p>
                  </div>
            </div>
            <div class="price-button">
                <form action="shop.php" method="" name="" >
                    <input type="hidden" name="id" value="item3">
                    <input type="hidden" name="price" value="20">
                    <input type="submit" name="buy" value="Buy Now" class="buy-btn">
                </form>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="container">
        <h2>Women's Wear</h2>
        <div class="row">
          <div class="col">
            <div class="single-price">
              <div class="price-head-women">
                <h3>Tight T-shirt</h3>
                <p>$25</p>
              </div>
              <div class="price-content">
                <div class="image">
                  <img src="images/womentshirt.png" alt="">
                </div>
                <div class="disc">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In cum amet nostrum iure.</p>
                </div>
              </div>
              <div class="price-button">
                <form action="shop.php" method="" name="" >
                    <input type="hidden" name="id" value="item4">
                    <input type="hidden" name="price" value="25">
                    <input type="submit" name="buy" value="Buy Now" class="buy-btn">
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="single-price">
              <div class="price-head-women">
                <h3>Running Shoes</h3>
                <p>$10</p>
              </div>
              <div class="price-content">
                  <div class="image">
                      <img src="images/womenshoe.png" alt="">
                    </div>
                    <div class="disc">
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In cum amet nostrum iure.</p>
                    </div>
              </div>
              <div class="price-button">
                <form action="shop.php" method="" name="" >
                    <input type="hidden" name="id" value="item5">
                    <input type="hidden" name="price" value="10">
                    <input type="submit" name="buy" value="Buy Now" class="buy-btn">
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="single-price">
              <div class="price-head-women">
                <h3>Black Shorts</h3>
                <p>$15</p>
              </div>
              <div class="price-content">
                  <div class="image">
                      <img src="images/womenshort.png" alt="">
                    </div>
                    <div class="disc">
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In cum amet nostrum iure.</p>
                    </div>
              </div>
              <div class="price-button">
                <form action="shop.php" method="" name="" onsubmit="return add(15)">
                    <input type="hidden" name="id" value="item6">
                    <input type="hidden" name="price" value="15">
                    <input type="submit" name="buy" value="Buy Now" class="buy-btn">
                </form>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>

      <hr>

      <div class="container">
        <h2>Kids Wear</h2>
        <div class="row">
          <div class="col">
            <div class="single-price">
              <div class="price-head-kids">
                <h3>Small T-shirt</h3>
                <p>$15</p>
              </div>
              <div class="price-content">
                <div class="image">
                  <img src="images/kidshirt.png" alt="">
                </div>
                <div class="disc">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In cum amet nostrum iure.</p>
                </div>
              </div>
              <div class="price-button">
                <form action="shop.php" method="" name="" onsubmit="return add(15)">
                    <input type="hidden" name="type" value="Kids Small T-shirt">
                    <input type="hidden" name="price" value="15">
                    <input type="submit" name="buy" value="Buy Now" class="buy-btn">
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="single-price">
              <div class="price-head-kids">
                <h3>Tiny Shoes</h3>
                <p>$8</p>
              </div>
              <div class="price-content">
                  <div class="image">
                      <img src="images/kidshoe.png" alt="">
                    </div>
                    <div class="disc">
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In cum amet nostrum iure.</p>
                    </div>
              </div>
              <div class="price-button">
                <form action="shop.php" method="" name="" onsubmit="return add(8)">
                    <input type="hidden" name="type" value="Kids Tiny Shoe">
                    <input type="hidden" name="price" value="8">
                    <input type="submit" name="buy" value="Buy Now" class="buy-btn">
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="single-price">
              <div class="price-head-kids">
                <h3>Shorts</h3>
                <p>$5</p>
              </div>
              <div class="price-content">
                  <div class="image">
                      <img src="images/kidshort.png" alt="">
                    </div>
                    <div class="disc">
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In cum amet nostrum iure.</p>
                    </div>
              </div>
              <div class="price-button">
                <form action="shop.php" method="" name="" onsubmit="return add(5)">
                    <input type="hidden" name="type" value="Kids Short">
                    <input type="hidden" name="price" value="5">
                    <input type="submit" name="buy" value="Buy Now" class="buy-btn">
                </form>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
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