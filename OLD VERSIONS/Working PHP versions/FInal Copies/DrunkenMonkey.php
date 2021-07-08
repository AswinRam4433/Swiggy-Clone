<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drunken Monkey</title>
    <link rel="stylesheet" href="Induvidual Hotel Page.css">
    <script defer src="Induvidual Hotel JS.js"></script>
    <link rel="icon" href="SwiggyLogo.png" sizes="16x16" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <!--
    <div class="CovidInfo tooltip">Swiggy Guaranteed Safety
        <span class="tooltiptext">All surfaces are sanitised thoroughly and staff undergo temperature checks at regular intervals</span>
    </div>
    -->


    
    <div class="topnav" id="myTopnav" onclick="clicked()">
        <a ><img src="SwiggyLogo.png" class="swiggylogoleft"></a>
        <a>Search</a>
        <a>Offers</a>
        <a>Help</a>
        <a>Cart</a>
    <!--  <a class="Username" id="pushright">Welcome:First</a>  -->
    <!--Toggle visibility of the top nav bar.Make sure it all works out properly in all device dimensions-->
    </div>
    <div id="header">
        
        <div><img src="drunken.jpg" alt="Drunken Monkey Logo" id="headerImage"></div>
        <div class="hotelOverview">
            <h2>Drunken Monkey</h2>
            <span>Juices,Shakes,Snacks</span>
            <br>
            <span class="cost">&#8377;500</span>
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
        <p><b>Add description here</b></p>
        <!-- EMBEDDING A MAP -->
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.fsdfasdf</p>
        <div class="row">
            <div class="column middle">
              <h2>Actual Menu</h2>
              <div class="menu">
                <!-- Adding PHP to retrieve MySQL -->
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

                        $sql = "SELECT DESCR, DISHNAME, PRICE, VEG, PIC, REMARKS FROM drunken";
                        $result = mysqli_query($conn, $sql);
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
                                            echo '
                                                <div class="hotels">
                                                    <img class="hotel-image" src=" ' .$imageofdish .' "><br>
                                                    <a class="hotels-name"> ' .$row["DISHNAME"]. ' </a><br>
                                                    <a class="hotels-details "> ' .$row["PRICE"] .'</a><br>
                                                    <a class="hotels-details" style="color:brown;font-size: 14px;">' .$row["DESCR"].'</a><br>
                                                </div>
                                                ';
                                               
                                            }

                                        } 
                                else {

                                    echo "0 results";
                                }
                            }
                        mysqli_close($conn);
                    ?>
                    </nav>

              </div>
            </div>
          </div>
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

