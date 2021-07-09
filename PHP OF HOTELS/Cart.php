<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="CartCSS.css">
    <script defer src="Induvidual Hotel JS.js"></script>
    <link rel="icon" href="SwiggyLogo.png" sizes="16x16" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <?php
    // Start the session
    session_start();
    $hotelname=$_SESSION["HotelName"];
    
    ?>
    <!--
    <div class="CovidInfo tooltip">Swiggy Guaranteed Safety
        <span class="tooltiptext">All surfaces are sanitised thoroughly and staff undergo temperature checks at regular intervals</span>
    </div>
    -->


    
    <div class="topnav" id="myTopnav" onclick="clicked()">
        <a ><img src="SwiggyLogo.png" class="swiggylogoleft" style="height: 26px;width: auto;"></a>
        
        <a>Offers</a>
        
        <a>Cart</a>
    <!--  <a class="Username" id="pushright">Welcome:First</a>  -->
    <!--Toggle visibility of the top nav bar.Make sure it all works out properly in all device dimensions-->
    </div>
 <!-- CART STARTS HERE -->
        <div class="container">
          <div class="heading">
            <h1>
              <span class="shopper"></span> Shopping Cart
            </h1>
            
                
          </div>
          
          <div class="cart transition is-open">
            
            
            
            
            <div class="table">
              
              <div class="layout-inline row th">
                <div class="col col-pro">Product</div>
                <div class="col col-price align-center "> 
                  Price
                </div>
                <div class="col col-qty align-center">QTY</div>
                
                <div class="col">Total</div>
              </div>
              <!--PHP HAS TO START HERE -->
                    <?php
                              $servername = "localhost";
                              $username = "root";
                              $password = "";
                              $dbname = "swiggy";

                              // Create connection
                              $conn = mysqli_connect($servername, $username, $password, $dbname);
                              // Check connection
                              if (!$conn) {
                                  die("Connection failed: " . mysqli_connect_error());
                              }

                              
                              // $sql="SELECT cart.DISHNAME,". $hotelname.".PRICE"  . ", cart.QUANTITY FROM cart INNER JOIN" .$hotelname. " ON cart.DISHNAME=".$hotelname.".DISHNAME";
                              $sql="SELECT cart.DISHNAME, $hotelname.PRICE, cart.QUANTITY FROM cart INNER JOIN $hotelname ON cart.DISHNAME = $hotelname.DISHNAME";
                              // $sql="SELECT DISHNAME,QUANTITY FROM cart";
                              $result = mysqli_query($conn, $sql);
                              $Total=0;
                              
                              if($result){
                                      
                                      if(1<100){
                                      // output data of each row
                                              while($row = mysqli_fetch_assoc($result)) {
                                                  
                                                 
                                                 
                                                //   echo '<div class="layout-inline row">
                
                                                //   <div class="col col-pro layout-inline">
                                                    
                                                //     <p>'.cart.DISHNAME.'</p>
                                                //   </div>
                                                  
                                                //   <div class="col col-price col-numeric align-center ">
                                                //     <p>'.$hotelname.'.PRICE'.'</p>
                                                //   </div>
                                  
                                                //   <div class="col col-qty layout-inline">
                                                    
                                                //   <div class="col col-total col-numeric">               <p>'.cart.QUANTITY.'</p>
                                                    
                                                //   </div>
                                                  
                                                //   <div class="col col-vat col-numeric">
                                                //     <p>'.$hotelname.'.PRICE'.'</p>
                                                //   </div>
                                                //   <div class="col col-total col-numeric">               <p> TOTAL</p>
                                                //   </div>
                                                // </div>
                                                
                                                  
                                                // </div> ';
                                                echo '<div class="layout-inline row">
                
                                                  <div class="col col-pro layout-inline">
                                                    
                                                    <p>'.$row['DISHNAME'].'</p>
                                                  </div>
                                                  
                                                  <div class="col col-price col-numeric align-center ">
                                                    <p>'.$row['PRICE'].'</p>
                                                  </div>
                                  
                                                  <div class="col col-qty layout-inline">
                                                    
                                                  <div class="col col-total col-numeric"><p>'.$row['QUANTITY'].'</p>
                                                    
                                                  </div>
                                                  
                                                  
                                                  <div class="col col-total col-numeric"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['QUANTITY']*$row['PRICE'].'</p>
                                                  </div>
                                                </div>
                                                
                                                  
                                                </div> ';
                                                     
                                                $Total=$Total + ($row['QUANTITY']*$row['PRICE']);
                                                  
                                                  
                                                  

                                                    
                                                  

                                              }
                                            } 
                                      else {

                                          echo "0 results";
                                      }
                                  }
                              mysqli_close($conn);
                          ?>

              
              
          
              <div class="tf">
                
                
                  <div class="row layout-inline">
                  <div class="col">
                    <p>Total</p>
                    <?php
                  echo'<span class="col" style="color:white;size:20px;">'.$Total.'</span>';
                  ?>
                  </div>
                  
                </div>
              </div>         
          </div>
            
            <a href="#" class="btn btn-update">Pay Now</a>
          
        </div>
        </div>
    <footer>
        <div>
            <img src="swiggyFooterLogo.png" alt="Swiggy Logo with Name">
        </div>
        <div>
            <span>&copy; 2021 Aswin Ramanathan</span>
        </div>
        <div>
          <nav>
            
                <a href="https://www.instagram.com/swiggyindia/"><img src="whiteInstaLogo.png" alt="Swiggy Instagram Logo" style="height: 48px;width:48px;"></a>
               
                <a href="https://twitter.com/swiggy_in" alt="Swiggy Social Media Page"><img src="whiteTwitterLogo.png" alt="Swiggy Twitter Logo" style="height: 48px;width:48px;"></a>
                
                <a href="https://www.facebook.com/swiggy.in" alt="Swiggy Social Media Page"><img src="whiteFacebookLogo.png" alt="Swiggy Facebook Logo" style="height: 48px;width:48px;"></a>
                
          </nav>
        </div> 
    </footer>
    
</body>
</html>

