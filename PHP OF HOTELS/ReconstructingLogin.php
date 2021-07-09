<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page
    </title>
    <link rel="stylesheet" href="LoginPageCSS.css">
    <link rel="icon" href="SwiggyLogo.png" sizes="16x16" type="image/png">
    <!-- <script defer src="LoginPageJS.js"></script> -->
</head>
    <script>
        function SignUpCLick(){
            window.open("http://localhost/aswinPrograms/Swiggy/AttemptSignUp.php","_self");
        }
    </script>
<body>
    
<!-- Wrapper Area -->
<div class="wrapper__area" id="wrapper_Area">
    <!-- Forms Area -->
    <div class="forms__area">
      <!-- Login Form -->
      <form class="login__form" id="loginForm" method="post">
        <!-- Form Title -->
        <h1 class="form__title">Sign In!</h1>
        <!-- inputs Groups -->
        <div class="input__group">
          <label class="field">
            <input type="text" name="username" placeholder="Username" id="loginUsername">
          </label>
          <span class="input__icon"><i class="bx bx-user"></i></span>
          <small class="input__error_message"></small>
        </div>
        <div class="input__group">
          <label class="field">
            <input type="password" name="password" placeholder="Password" id="loginPassword">
          </label>
          <span class="input__icon"><i class="bx bx-lock"></i></span>
          <span class="showHide__Icon"><i class="bx bx-hide"></i></span>
          <small class="input__error_message"></small>
        </div>
        <button type="submit" class="submit-button" id="loginSubmitBtn" name="SignIn">Sign in</button>

        <!--Adding PHP-->
        <?php   
        $servername = "localhost";
        $usernamedb = "root";
        $passworddb = "";
        $dbname = "swiggy";  
        $conn = mysqli_connect($servername, $usernamedb, $passworddb, $dbname);

        $username = $_POST['username'];  
        $password = $_POST['password'];  
        
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        
      
        $sql = "SELECT *FROM users where UNAME = '{$username}' AND PASSW = '{$password}'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if(isset($_POST['SignIn'])){
          
                if($count == 1){  
                    echo "<h1> Login successful</h1>";  
                    sleep(1);
                    echo'<script>window.open("Working Page.html","_self");</script>';
                }  
                else{  
                    echo "<h1> Login failed. Invalid username or password.</h1>";  
                    echo '<script>alert("Check Your Username & Password Combination")</script>';
                }  
        }
        mysqli_close($conn);   
?> 


      </form>
    </div>
    <div class="aside__area" id="aside_Area">
        <div class="login__aside-info">
            <h4>Hello</h4>
            <br>
            <br>
            <br>
            <!-- Image SVG has been downloaded too for safety-->
            
            <img src="https://freesvg.org/img/meltypizza.png" alt="Image">
            <p>
                Welcome Back!!
                <br>
                Sign-In now to access all the Swiggy goodness
            </p>
            <button id="aside_signUp_Btn" onclick="SignUpClick()">Sign Up</button>
        </div>
        <div class="sign-up__aside-info">
            <h4>Welcome</h4>
            <br>
            <br>
    
            <!-- Image SVG has been downloaded too for safety-->
            
            <img src="https://images.vexels.com/media/users/3/145821/isolated/preview/44247e29bf035ece825b8b2bf8af88c2-rocket-illustration-rocket-illustration-by-vexels.png" alt="Image">
            <p>
                Sign Up Now!
                <br>
                Join the Swiggy-verse now
                
            </p>
            <button id="aside_signIn_Btn">Sign In</button>
        </div>
    </div>
</div>

<br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
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
                    &#8287;
                    &#8287;
                </nav>
            </div>
        </footer>
</body>
</html>