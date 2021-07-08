// - - - - -  Variables - - - - - //

const wrapper__Area = document.querySelector('#wrapper_Area');

const loginForm = document.querySelector('#loginForm');
const signUpForm = document.querySelector('#signUpForm');

// All Login And Sing-Up Forms Inputs 
const allLoginFormFields = Array.from(document.querySelectorAll('#loginForm .input__group .field input'));
const allSignUpFormFields = Array.from(document.querySelectorAll('#signUpForm .input__group:not(.confirm__group) .field input'));

const passwordField = document.querySelector('#signUpPassword');
const confirmPassword = document.querySelector('#signUpConfirmPassword');

const loginFormSubmitBtn = document.querySelector('#loginSubmitBtn');
const signUpFormSubmitBtn = document.querySelector('#signUpSubmitBtn');

// Show Hide Password Element
const showHidePassDom = Array.from(document.querySelectorAll('.showHide__Icon i'));

// Pattrens Regex
const patterns = { // All This Regex Code Is For Demo You Can Add Your Own Regex Code :)
  username: /^[a-z]+\d?/,
  email: /^[^\W\d\.-_]+\w\d?@[a-z0-9]+\.([a-z0-9]{2,6})(\.[a-z0-9]{2,6})?$/,
  password: /^[^\d\W]\w+\d?\W?\w?/i,
};

// Aside Area
const aside__Area = document.querySelector('#aside_Area');

// Aside Sing-Up & Sign In Buttons
const aside__SignUp_Button = document.querySelector('#aside_signUp_Btn');
const aside__SignIn_Button = document.querySelector('#aside_signIn_Btn');

// - - - - -  Events - - - - - //

// When Submitting On Login & Sign-Up Forms

// Stop Form Submission
// Call Sign-Up  nd Sign-In Form Validation Function
loginForm.addEventListener('submit', (e) => {
  e.preventDefault();
  loginFormValidation();
});
signUpForm.addEventListener('submit', (e) => {
  e.preventDefault();
  signUpFormValidation();
});

// Every Time Click On Aside Sign-Up & Sing-In Buttons. Call Function Chnage Form Mode
aside__Area.addEventListener('click', chnageFormMode);
aside__Area.addEventListener('click', chnageFormMode);

// - - - - -  Functions - - - - - //

// Change Form Mode Function
//This function checks if we have clicked either of the buttons on the aside area and takes appropriate action by using the event listener and functiion
function chnageFormMode(e) {
  if(e.target === aside__SignUp_Button){
    wrapper__Area.classList.add('sign-up__Mode-active');
  };
  if(e.target === aside__SignIn_Button){
    wrapper__Area.classList.remove('sign-up__Mode-active');
  };
};

// Function Show Hide Password
/*
(function showHidePass() {
  // Loop On All The Show Hide Password Icon
  showHidePassDom.forEach(icon =>{
    // When Click On Any Show Hide Icon...
    icon.addEventListener('click', () => {
      // Select The Target Password Input
      const targetAreaInput = icon.parentElement.parentElement.querySelector('.field input');
      // If The Target Icon Has Hide-icon
      if(icon.className === 'bx bx-hide'){
        // Change The Target Icon Class
        icon.className = 'bx bx-show';
        // Change The Target Input Area Type
        targetAreaInput.setAttribute('type', 'text');
      }else{ // else
        // Change The Target Icon Class
        icon.className = 'bx bx-hide';
        // Change The Target Input Area Type
        targetAreaInput.setAttribute('type', 'password');
      };
    });
  });
})();
*/

// Login Form Validation Function
function loginFormValidation() {
  // Loop On All The Inputs
  allLoginFormFields.forEach(input => {
    const inputAttribueValueName = input.attributes.name.value;
    // Input Value Without Spaces and use Regex
    const inputValue = input.value.trim();
    const inputRegex = patterns[inputAttribueValueName].test(inputValue);

    if(inputValue === ''){
      // If its empty
      setErrorFor(input, `${inputAttribueValueName} is required. Please enter your response.`);
    }else if(inputRegex === false){ 
        // If The InputRegext Response Is False
      setErrorFor(input, `${inputAttribueValueName} Is Invalid .`);
    }else{ // Else its successful
      setSuccessFor(input);
    };
  });
};

// Sign-Up Form Validation Function
function signUpFormValidation() {
  // Loop On All The Inputs
  allSignUpFormFields.forEach(input => {
    // Password And Confirm Password Fileds Values Without Spaces
    const passwordFieldValue = passwordField.value.trim();
    const conifrmPassValue = confirmPassword.value.trim();
    // Input Targte Field Name Value
    const inputAttribueValueName = input.attributes.name.value;
    // Input Value Without Spaces
    const inputValue = input.value.trim();
    // Input Regex Validation Response [ True || False ] :)
    const inputRegex = patterns[inputAttribueValueName].test(inputValue);

    // Check If The Input Value Is Empty
    if(inputValue === ''){
      // Call Function Set Error For
      setErrorFor(input, `${inputAttribueValueName} is required. Please enter your response.`);
    }else if(inputRegex === false){ // Else If: If The InputRegext Response Is False
      // Call Function Set Error For
      setErrorFor(input, `${inputAttribueValueName} Is Invalid .`);
    }else{ // Else
      // Call Function Set Success For
      setSuccessFor(input);
    };

    // Validation The Confirm Password
    if(conifrmPassValue === ''){ // Check If The Confirm Password Value Is Empty
      // Call Function Set Error For
      setErrorFor(confirmPassword, `Confirm password is required. Please enter your response.`);
    }else if(conifrmPassValue !== passwordFieldValue){ // Check If The Confirm Password Value Is Dose Not Match The Password Filed
      // Call Function Set Error For
      setErrorFor(confirmPassword, `Confirm password does not match`);
    }else{ // Eles
      // Call Function Set Success For
      setSuccessFor(confirmPassword);
    };

  });
};

// Set Error For Function
function setErrorFor(input, message){
  // Select The Target Parent Target Input Group
  const targetParentInput = input.parentElement.parentElement;
  // Select The Target Input Error Message
  const targetErrorMessage = targetParentInput.querySelector('.input__error_message');

  // Remove Class FormSucess From The Parent Target
  targetParentInput.classList.remove('formSuccess');
  // Add Class Success On Target ParentElement
  targetParentInput.classList.add('formError');
  // Set The Message Inside The Target Error Message
  targetErrorMessage.innerHTML = message;
};

// Set Success For Function
function setSuccessFor(input){
  // Select The Target Parent Target Input Group
  const targetParentInput = input.parentElement.parentElement;
  // Select The Target Input Error Message
  const targetErrorMessage = targetParentInput.querySelector('.input__error_message');

  // Remove Class FormError From The Parent Target
  targetParentInput.classList.remove('formError');
  // Add Class Success On Target ParentElement
  targetParentInput.classList.add('formSuccess');
  // Empty The Error Message
  targetErrorMessage.innerHTML = '';
};