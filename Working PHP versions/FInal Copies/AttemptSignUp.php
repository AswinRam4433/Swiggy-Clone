<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page
    </title>
    <link rel="stylesheet" href="LoginPageCSS.css">
    <link rel="icon" href="SwiggyLogo.png" sizes="16x16" type="image/png">
    <!-- <script defer src="LoginPageJS.js"></script> -->
</head>
    
<body>
    
<!-- Wrapper Area -->
<div class="wrapper__area" id="wrapper_Area">
    <!-- Forms Area -->
    <div class="forms__area">
      <!-- Login Form -->
      <form class="login__form" id="loginForm" method="post">
        <!-- Form Title -->
        <h1 class="form__title">Sign Up Now!</h1>
        <!-- inputs Groups -->
        
           <!--Aswin Ramanathan Adding New Fields Here-->
          <div class="input__group">
            <label class="field">
              <input type="text" name="username" placeholder="Enter Username" id="signUpUsername">
            </label>
            <span class="input__icon"><i class="bx bx-user"></i></span>
            <small class="input__error_message"></small>
          </div>
          <div class="input__group">
            <label class="field">
              <input type="text" name="email" placeholder="Enter Mail ID" id="signUpEmail">
            </label>
            <span class="input__icon"><i class="bx bx-at"></i></span>
            <small class="input__error_message"></small>
          </div>
          <div class="input__group">
            <label class="field">
              <input type="password" name="password" placeholder="Enter Password" id="signUpPassword">
            </label>
            <span class="input__icon"><i class="bx bx-lock"></i></span>
            <span class="showHide__Icon"><i class="bx bx-hide"></i></span>
            <small class="input__error_message"></small>
          </div>
          <div class="input__group confirm__group">
            <label class="field">
              <input type="password" name="confirm_password" placeholder="Confirm Password" id="signUpConfirmPassword">
            </label>
            <span class="input__icon"><i class="bx bx-lock"></i></span>
            <span class="showHide__Icon"><i class="bx bx-hide"></i></span>
            <small class="input__error_message"></small>
          </div>

        
        <!-- Login Button -->
        <button type="submit" class="submit-button" id="loginSubmitBtn" name="SignUp">Sign Up</button>
            <!-- <?php   
                    $servername = "localhost";
                    $usernamedb = "root";
                    $passworddb = "";
                    $dbname = "swiggy";  
                    $conn = mysqli_connect($servername, $usernamedb, $passworddb, $dbname);


                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }


                    $username = $_POST['username'];  
                    $mail= $_POST['email'];
                    $password = $_POST['password'];
                    $confirm= $_POST['confirm_password'];  
                    
                    //to prevent from mysqli injection  
                    $username = stripcslashes($username);  
                    $mail=stripcslashes($mail);
                    $password = stripcslashes($password);  
                    $confirm=stripcslashes($confirm);


                    $sql = "SELECT *FROM users WHERE UNAME = '{$username}' OR MAIL='{$mail}'"; 
                    $result = mysqli_query($conn, $sql);  
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                    $count = mysqli_num_rows($result);
                    
                    // $username = mysqli_real_escape_string($conn, $username);  

                    if(isset($_POST['SignIn'])){
                    
                
                             
                            // $sqlb="INSERT INTO users (UNAME,MAIL,PASSW) VALUES ('TESTUSER', 'TESTMAIL@GMAIL.COM','APPLE')";
                            // query($sqlb);
                            if($password == $confirm){
                            
                                    if($count == 0){  
                                        $sqla = "INSERT INTO users (UNAME,MAIL,PASSW) VALUES ('{$username}', '{$mail}', '{$password}')";
                                        if(mysqli_query($sqla)){
                                        echo "<h1> Profile Creation Successful</h1>"; 
                                        echo '<script>alert("Account Created")</script>'; 
                                        }
                                    }  
                                    else{  
                                        echo "<h1> Account With Same Username/Email Already Exists</h1>";  
                                        echo '<script>console.log("Account With Same Username/Email Already Exists")</script>';
                                    }  
                            }
                            else{
                                echo '<script>alert("Passwords Dont Match")</script>';
                            }
                    }   // } brace for checking if both passwords are same
                    
                mysqli_close($conn);   
            ?>  -->
                <?php
                        
                    $showAlert = false; 
                    $showError = false; 
                    $exists=false;
                        
                    if($_SERVER["REQUEST_METHOD"] == "POST") {
                        
                        // Include file which makes the
                        // Database Connection.
                        
   
                    $servername = "localhost"; 
                    $dbusername = "root"; 
                    $dbpassword = "";
                
                    $database = "swiggy";
                
                    // Create a connection 
                    $conn = mysqli_connect($servername, 
                        $dbusername, $dbpassword, $database);
                
                    
                
                    if($conn) {
                        echo "success"; 
                    } 
                    else {
                        die("Error". mysqli_connect_error()); 
                    } 
                        
                        $username = $_POST["username"]; 
                        $password = $_POST["password"]; 
                        $cpassword = $_POST["confirm_password"];
                                
                        
                        $sql = "Select * from users where uname='$username'";
                        
                        $result = mysqli_query($conn, $sql);
                        
                        $num = mysqli_num_rows($result); 
                        
                        // This sql query is use to check if
                        // the username is already present 
                        // or not in our Database
                        if($num == 0) {
                            if(($password == $cpassword) && $exists==false) {
                        
                                $hash = $password;
                                                   
                                    
                                // Password Hashing is used here. 
                                $sql = "INSERT INTO `users` ( `username`, 
                                    `password`, `date`) VALUES ('$username', 
                                    '$hash', current_timestamp())";
                        
                                $result = mysqli_query($conn, $sql);
                        
                                if ($result) {
                                    $showAlert = true; 
                                }
                            } 
                            else { 
                                $showError = "Passwords do not match"; 
                            }      
                        }// end if 
                        
                    if($num>0) 
                    {
                        $exists="Username not available"; 
                    } 
                        
                    }//end if   
                        
                
    
                    if($showAlert) {
                    
                        echo ' <div class="alert alert-success 
                            alert-dismissible fade show" role="alert">
                    
                            <strong>Success!</strong> Your account is 
                            now created and you can login. 
                            <button type="button" class="close"
                                data-dismiss="alert" aria-label="Close"> 
                                <span aria-hidden="true">×</span> 
                            </button> 
                        </div> '; 
                    }
                    
                    if($showError) {
                    
                        echo ' <div class="alert alert-danger 
                            alert-dismissible fade show" role="alert"> 
                        <strong>Error!</strong> '. $showError.'
                    
                    <button type="button" class="close" 
                            data-dismiss="alert aria-label="Close">
                            <span aria-hidden="true">×</span> 
                    </button> 
                    </div> '; 
                }
                        
                    if($exists) {
                        echo ' <div class="alert alert-danger 
                            alert-dismissible fade show" role="alert">
                    
                        <strong>Error!</strong> '. $exists.'
                        <button type="button" class="close" 
                            data-dismiss="alert" aria-label="Close"> 
                            <span aria-hidden="true">×</span> 
                        </button>
                    </div> '; 
                    }
   
                ?>
        <!-- Alternate Login 
        <div class="alternate-login">
          <div class="link">
            <i class='bx bxl-google'></i>
            <span>Google</span>
          </div>
          <div class="link">
            <i class='bx bxl-facebook-circle'></i>
            <span>Facebook</span>
          </div>
        </div>
        -->
      </form> <!-- End Login Form -->
      
  
      <!-- Sign Up Form -->
      
    </div><!-- End Forms Area -->
      
  
      
  
            <!-- Aside Area -->
            
        <div class="aside__area" id="aside_Area">
            <div class="login__aside-info">
                <h4>Welcome</h4>
                <br>
                <br>
                <br>
                <!-- Image SVG has been downloaded too for safety-->
                
                <img src="https://images.vexels.com/media/users/3/145821/isolated/preview/44247e29bf035ece825b8b2bf8af88c2-rocket-illustration-rocket-illustration-by-vexels.png" alt="Image">
                <p>
                    Sign Up Now!
                    <br>
                    Join the Swiggy-verse now
                    
                </p>
                <button id="aside_signUp_Btn">Sign In</button>
           </div>
        </div>
        
   </div>
  <!-- End Wrapper Area -->
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