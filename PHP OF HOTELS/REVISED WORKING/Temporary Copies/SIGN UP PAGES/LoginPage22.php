<!DOCTYPE html>
<!--SANDBOX FOR SIGNUP PAGE-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page
    </title>
    <link rel="stylesheet" href="LoginPageCSS.css">
    <link rel="icon" href="SwiggyLogo.png" sizes="16x16" type="image/png">
    <script defer src="LoginPageJS.js"></script>
</head>
    
<body>
    
<!-- Wrapper Area -->
<div class="wrapper__area" id="wrapper_Area">
    <!-- Forms Area -->
    <div class="forms__area">
      <!-- Login Form -->
      <form class="login__form" id="loginForm">
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
        <!--
        <div class="form__actions">
            
          <label for="checkboxInput" class="remeber_me">
            <input type="checkbox" id="checkboxInput">
            <span class="checkmark"></span>
            <span>Remeber Me</span>
          </label>
            
          <div class="forgot_password">Forgot Password?</div>
        </div>
        -->
        <!-- Login Button -->
        <button type="submit" class="submit-button" id="loginSubmitBtn">Sign in</button>
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
      <form class="sign-up__form" id="signUpForm">
        <!-- Form Title -->
        <h1 class="form__title">Sign Up!</h1>
        <!-- inputs Groups -->
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
        <!-- Sign Up Button -->
        <button type="submit" class="submit-button" id="signUpSubmitBtn">Sign Up</button>
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
      </form> <!-- End Sign Up Form -->
    </div><!-- End Forms Area -->
  
            <!-- Aside Area -->
            
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
                <button id="aside_signUp_Btn">Sign Up</button>
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