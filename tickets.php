<?php include ('logout.php');?>
<?php include('head.php');?>
    <section id="tickets" >
        <div class="background">
            <div class="ticket-row">
                <div class="ticket-col">
                    <div class="date"><h1>Today 9:00 LT</h1><br><h3>Time Left: <span id="t1"></span> </h3> </div>

                    <div class="image"><img src="images/pngegg.png" alt="Man Unit."> VS <img src="images/logo2.png" alt=""></div>  
                    <div>
                        <h1>Man Unt. Vs Fasil K.</h1>
                         <p> &quot; Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti illo mollitia at. Est corporis sed saepe minus voluptate. Unde sed culpa fugit deleniti inventore repudiandae error voluptates nobis ipsum earum. &quot;</p>
                        
                        <form action="buyticket.php" method="POST">
                            <input type="hidden" name="disc" value="Man.Unid Vs Fasil-K.">
                            <input type="hidden" name="date" value="Today-9:00-LT"> 
                            <input type="hidden" name="type" value="ticket1">
                            <input type="submit" value="Buy Ticket" name="ticket" class="btn">
                        </form>
                    </div>
                </div>
                <div class="ticket-col">
                    <div class="date"><h1 >Next Sunday 9:00 LT</h1><br><h3>Time Left: 5 days <span id="t2"></span></h3> </div>
                    <div class="image"><img src="images/logo2.png" alt=""> VS <img src="images/st.george.png" alt="Man Unit."></div>  
                    <div>
                        <h1>Fasil K. Vs St. George</h1>
                         <p> &quot; Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti illo mollitia at. Est corporis sed saepe minus voluptate. Unde sed culpa fugit deleniti inventore repudiandae error voluptates nobis ipsum earum. &quot;</p>
                         <form action="buyticket.php" method="POST">
                            <input type="hidden" name="disc" value="Fasil-K. Vs St.George">
                            <input type="hidden" name="date" value="Next Sunday"> 
                            <input type="hidden" name="type" value="ticket2">
                            <input type="submit" value="Buy Ticket" name="ticket" class="btn">
                        </form>
                    </div>
                </div>
            </div>      
            <div class="ticket-row">
                <div class="ticket-col">
                    <div class="date"><h1>27-Sat-22 7:00 LT</h1><br><h3>Time Left: 16 days <span id="t3"></span></h3> </div>

                    <div class="image"><img src="images/arsenal.png" alt="Man Unit."> VS <img src="images/logo2.png" alt=""></div>  
                    <div>
                        <h1>Arsenal Vs Fasil K.</h1>
                         <p> &quot; Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti illo mollitia at. Est corporis sed saepe minus voluptate. Unde sed culpa fugit deleniti inventore repudiandae error voluptates nobis ipsum earum. &quot;</p>
                         <form action="buyticket.php" method="POST">
                            <input type="hidden" name="disc" value="Arsenal Vs Fasil-K.">
                            <input type="hidden" name="date" value="27-Sat-22"> 
                            <input type="hidden" name="type" value="ticket3">
                            <input type="submit" value="Buy Ticket" name="ticket" class="btn">
                        </form>
                    </div>
                </div>
                <div class="ticket-col">
                    <div class="date"><h1>27-Sat-22</h1> <br><h1>7:00 LT</h1> <br><h3>Time Left: 23 days <span id="t4"></span></h3> </div>

                    <div class="image"><img src="images/logo2.png" alt=""> VS <img src="images/liverpool.png" alt="LiverPool"></div>  
                    <div>
                        <h1 id="try">Fasil K. Vs LiverPool</h1>
                         <p> &quot; Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti illo mollitia at. Est corporis sed saepe minus voluptate. Unde sed culpa fugit deleniti inventore repudiandae error voluptates nobis ipsum earum. &quot;</p>
                         <form action="buyticket.php" method="POST">
                            <input type="hidden" name="disc" value="Fasil-K. Vs LiverPool">
                            <input type="hidden" name="date" value="27-Sat-22"> 
                            <input type="hidden" name="type" value="ticket4">
                            <input type="submit" value="Buy Ticket" name="ticket" class="btn">
                        </form>
                    </div>
                </div>
            </div>      
        </div>
  </section>
  <script>
    window.onload = function(){getNow();}
    var hNow;
    var mNow;
    var sNow;

    function getNow(){
    var now = new Date();
    hNow = now.getHours();
    mNow = now.getMinutes();
    sNow = now.getSeconds();
    }
    function today(){
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
    setTimeout(()=>{today()}, 1000); 
    }
    today();
  </script>
<?php include('foot.php');?>