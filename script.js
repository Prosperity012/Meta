//User SignIn and SignUp
const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('Signin');
const signUpForm=document.getElementById('Signup');
//Admin SignIn and SignUp
const AdminSignUpButton=document.getElementById('AdminSignUpButton');
const AdminSignInButton=document.getElementById('AdminSignInButton');
const AdminSignInForm=document.getElementById('AdminSignIn');
const AdminSignUpForm=document.getElementById('AdminSignUp');

//User buttons
signUpButton.addEventListener('click', function(){
   signInForm.style.display="none";
   AdminSignInForm.style.display="none";
   AdminSignUpForm.style.display="none";
   signUpForm.style.display="block";

})

signInButton.addEventListener('click',function(){
   signInForm.style.display="block";
   AdminSignInForm.style.display="none";
   AdminSignUpForm.style.display="none";
   signUpForm.style.display="none";
})
//Admin buttons
AdminSignUpButton.addEventListener('click', function(){
   AdminSignInForm.style.display="none";
   signInForm.style.display="none";
   signUpForm.style.display="none";
   AdminSignUpForm.style.display="block";

})

AdminSignInButton.addEventListener('click',function(){
   AdminSignInForm.style.display="block";
   signInForm.style.display="none";
   signUpForm.style.display="none";
   AdminSignUpForm.style.display="none";

})