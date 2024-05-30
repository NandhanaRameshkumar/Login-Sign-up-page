<?php
  include("approach.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form | Dan Aleko</title>
  <link rel="stylesheet" href="Final.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper" id="signup" style="display:none;">
    <form action="insertt.php" onsubmit="return isvalid()" method="POST">
      <h1>SignUp</h1>
      <div class="input-box">
        <input type="text" name="fName" placeholder="Firstname" required>
        <i class='bx bx-user'></i>
      </div>
      <div class="input-box">
        <input type="text" name="lName" placeholder="Lastname" required>
        <i class='bx bx-user'></i>
      </div>
      <div class="input-box">
        <input type="text"  name="email" placeholder="email" required>
        <i class='bx bxs-envelope' ></i>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#"></a>
      </div>
      <button id="signInButton" type="submit" class="btn">Register</button>
      <div class="register-link">
        <p>Already have an account? <a href="#">SignIn</a></p>
      </div>
    </form>
  </div>

  <div class="wrapper" id="signIn">
    <h1>Login</h1>
    <form action="insertt.php" onsubmit="return isvalid()" method="POST">
      <div class="input-box">
        <input type="text"  name="email" placeholder="Username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button id="signUpButton" type="submit" class="btn">Login</button>
      <div class="register-link">
        <p>Don't have an account? <a id="registerLink">Register</a></p>
    </div>
  </form>  
  </div>
  <script>
    // Get references to the sign-up and sign-in divs
const signUpDiv = document.getElementById("signup");
const signInDiv = document.getElementById("signIn");

// Get references to the register and sign in links
const registerLink = document.getElementById("registerLink");
const signInLink = document.querySelector(".register-link a:first-child"); // Selects the first anchor tag within the register-link div

// Function to show the sign-up form and hide sign-in form
function showSignUp() {
  signUpDiv.style.display = "block";
  signInDiv.style.display = "none";
}

// Function to show the sign-in form and hide sign-up form
function showSignIn() {
  signUpDiv.style.display = "none";
  signInDiv.style.display = "block";
}

// Add click event listeners to the links
registerLink.addEventListener("click", showSignUp);
signInLink.addEventListener("click", showSignIn);

  </script>
</body>
</html>

