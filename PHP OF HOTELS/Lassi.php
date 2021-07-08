<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="SwiggyLogo.png" sizes="16x16" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Lassi Shop</title>
    <link rel="stylesheet" href="Induvidual Hotel Page.css">
    <meta name="description" content="Swiggy Clone">
    <meta name="keywords" content="Swiggy,Swiggy Booking,Online Food Ordering">
    <meta name="author" content="Aswin Ramanathan V">
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
    $_SESSION["HotelName"] = "lassishop";
    ?>
    


    
    <div class="topnav" id="myTopnav" onclick="clicked()">
        <a ><img src="SwiggyLogo.png" class="swiggylogoleft"></a>
        
        <a>Offers</a>
        
        <a>Cart</a>
    
    </div>
    <div id="header">
        
        <div><img src="lassi.jpg" alt="Starbucks" id="headerImage"></div>
        <div class="hotelOverview">
            <h2>The Lassi Shop</h2>
            <span>Lassis,Shakes,Juices,Snacks</span>
            <br>
            <span class="cost">&#8377;450</span>
            <br>
            <span>Cost For Two</span>
            <br>
        </div>
        
        
        <div class="safetyIcons">
            <img src="creditCard.png" alt="Excellent Hygiene">
            <img src="excellentHygiene.png" alt="Accepts Credit Card">
            <img src="thumbsUp.svg" alt="Thumbs Up from Swiggy">
        </div>
        
        
        
    </div>
    <div class="column-layout">
        
        <!-- EMBEDDING A MAP -->
        
        
        <div class="row">
            <div class="column middle">
              <h2>Menu</h2>
              <div class="menu">
                <!-- Adding PHP to retrieve MySQL -->
                <form method="POST">
                <nav class="hotel-list">
                

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

                        $sql = "SELECT DESCR, DISHNAME, PRICE, VEG, PIC, REMARKS FROM lassishop";
                        $result = mysqli_query($conn, $sql);
                        $sqlb="DELETE FROM cart WHERE PRICE>=0";
                        $bresult=$conn->query($sqlb);
                        if($result){
                                
                                if(1<100){
                                // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                            
                                            // echo '<div>
                                            //     <span class="DishName">'.$row["DISHNAME"].'</span>
                                            //     <span class="DishPrice">'.$row["PRICE"].'</span>
                                            // <div>';
                                            $imageofdish=$row["PIC"].".jpg";
                                            
                                            // echo `<img src="{$imageofdish}">`;
                                            // echo '<img src=" '. $imageofdish .' ">';
                                            
                                            // NEW LAYOUT EDITING BEGINS HERE
                                            // removed backtick and {} braces in front of imageofdish
                                            $adishqty="qty".$row["DISHNAME"];
                                            echo '
                                                <div class="hotels">
                                                    <img class="hotel-image" src=" ' .$imageofdish .' "><br>
                                                    <a class="hotels-name"> ' .$row["DISHNAME"]. ' </a><br>
                                                    <a class="hotels-details "> ' .$row["PRICE"] .'</a><br>
                                                    <a class="hotels-details" style="color:brown;font-size: 14px;">' .$row["DESCR"].'</a><br>
                                                    
                                                            
                                                            
                                                            <a class="hotels-details" style="color:brown;font-size: 14px;"><input type="checkbox"  name="cart[]" value="'.$row["DISHNAME"].'">ADD</a><br>
                                                            <a class="hotels-details" style="color:brown;font-size: 14px;"><input type="number" min="1" max="100" name="qty['.$row["DISHNAME"].']" value="'.$row["DISHNAME"].'"></a><br>
                                                    
                                                </div>
                                                ';
                                            }
                                            echo '<input type="submit" value="Add To Cart" name="Add" style="position:absolute;top:58vh;"><br>';
                                            echo'</form>';
                                            
                                            
                                            if(isset($_POST["cart"])){
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "swiggy";
                        
                                                // Create connection
                                                $aconn = mysqli_connect($servername, $username, $password, $dbname);
                                                    $i=0;
                                                    
                                                
                                                    foreach($_POST["cart"] as $item){
                                                        $q=$_POST["qty"];
                                                        $asql="INSERT INTO cart(DISHNAME,QUANTITY) VALUES ('".$item."','".$q[$item]."')";
                                                        $aresult=$aconn->query($asql);
                                                        $i+=1;
                                                        
                                                    }
                                                    
                                                    echo '<script>window.open("Cart.php","_blank")</script>';
                                            }

                                               
                                            

                                        } 
                                else {

                                    echo "0 results";
                                }
                            }
                        mysqli_close($conn);
                    ?>
                    </nav>
                    </form>

              </div>
            </div>
          </div>
        </div>
    </div>
    <footer>
        <div>
            <img src="swiggyFooterLogo.png" alt="Swiggy Logo with Name" style="height: 48px;width:162px;">
        </div>
        <div>
            <span>&copy; 2021 Aswin Ramanathan</span>
        </div>
        <div>
            <nav>
                <a href="https://www.instagram.com/swiggyindia/"><img src="whiteInstaLogo.png" alt="Swiggy Instagram Logo"></a>
                &#8287;
                &#8287;
                <a href="https://twitter.com/swiggy_in" alt="Swiggy Social Media Page"><img src="whiteTwitterLogo.png" alt="Swiggy Twitter Logo"></a>
                &#8287;
                &#8287;
                <a href="https://www.facebook.com/swiggy.in" alt="Swiggy Social Media Page"><img src="whiteFacebookLogo.png" alt="Swiggy Facebook Logo"></a>
                
            </nav>
        </div>
    </footer>
    
</body>
</html>

