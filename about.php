<?php 
session_start();
if(isset($_SESSION['username'])) {
  $name = $_SESSION['username'];
} else {
  $name = "error";
}if(isset($_SESSION['mail'])){
  $mail = $_SESSION['mail'];
}
else {
  $mail = "";
}

$isLoggedIn = isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
</head>
<link rel="stylesheet" href="psj0.1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    
</style>
<body style="    background-color: #f2f2f2;">
<div class="navbar">
    <div class="nav-logo">
      <a href="#"><img src="https://i.imgur.com/VahuXKc.png" alt="Logo"  width="300px" height="50px" class="d-inline-block align-text-top"> 
      </a>
    </div>
    <div class="nav-items">
    <ul>
        <li><a href="home.php"> Home </a></li>
        <li class="dropdown">
            <a href="#"> Services </a>
            <ul>
                <li><a href="Wedding.php">Wedding</a></li>
                <li><a href="birthday.php">Birthday</a></li>
            </ul>
        </li>
        <li><a href="Galllery.php"> Gallery </a></li>
        <li><a href="about.php"> About </a></li>
        <li><a href="contact.php"> Contact </a></li>
        <?php if($isLoggedIn): ?> 
        <li class="dropdown">
            <a href="#">USER INFO:-<?php echo $name; ?></a>
            <ul>
                <li>Email: <?php echo $mail; ?></li>
                <a href="logout.php"><li>LOGOUT NOW: </li></a>
            </ul>
            <?php endif; ?>
        </li>
    </ul>
</div>
    <div class="nav-button">
    <div class="anim-layer"></div>
      <?php if(!$isLoggedIn): ?> <!-- Show sign-up link only if the user is not logged in -->
      <a href="#" onclick="showSignUp()">Sign Up</a>
      <?php endif; ?>
    </div>
    <div id="hamburger-menu">&#9776;</div>
  </div>
  

  <div id="mobile-menu">
    <div class="mobile-nav-items">
      <ul>
        <li><a href="home.php"> Home </a></li>
        <li><a href="#"> Services </a>
          <ul>
            <li><a href="wedding.php">Wedding</a></li>
            <li><a href="birthday.php">Birthday</a></li>
          </ul>
        </li>
        </li>
        <li><a href="Galllery.php"> Gallery</a></li>
        <li><a href="abot.php"> About </a></li>
        <li><a href="contact.php"> Contact </a></li>
        <li class="dropdown">
            <a href="#"><?php echo $name; ?></a>
            <ul>
                <li><span>Email: <?php echo $mail; ?></span></li>
            </ul>
        </li>
      </ul>
    </div>
    <div class="mobile-nav-button">
    <div class="anim-layer"></div>
      <?php if(!$isLoggedIn): ?> <!-- Show sign-up link only if the user is not logged in -->
      <a href="#"  onclick="showSignUp()">Sign Up</a>
      <?php endif; ?>
    </div>
    <div id="hamburger-cross">&#10006;</div>
  </div>
 
     
  <center>

<form  class="sigin" id="signup1" action="./register.php" method="POST">
  <div class="container" id="signUpContainer" style="display: none;">
    <h1>Sign Up</h1>
    <div>
      <input type="text" name="Username" placeholder="Username" required>
    </div>
    <div>
      <input type="password" name="Password" placeholder="Password" required>
    </div>
    <div>
      <input type="email"  name="Email" placeholder="Email" required>
    </div>
    <div>
      <input type="number" name="Mobile" placeholder="Mobile No" required>
    </div>
    <div class="login">
     <input type="submit" value="Register">
    </div>
    <div>
      <p>Already have an account? <a href="#" onclick="showSignIn()">Sign in</a></p>
    </div>
  </div>
</form>
<form class="sigin"  id="sigin1" action="login.php" method="POST">
  <div class="container" id="signInContainer" style="display: none;">
    <h1>Login</h1>
    <div>
      <input type="text" name="username" placeholder="Username" required>
    </div>
    <div>
      <input type="password" name="password" placeholder="Password" required>
    </div>
    <div class="login">
    <input type="submit" value="login">
    </div>
    <div>
      <p>Don't have an account? <a href="#" onclick="showSignUp()" >Sign up</a></p>
    </div>
  </div>
  
</form>
</center>
        <!-- ----------------- -->
        <div class="about">
            <div class="head2">
              <h1 class="header">About us.</h1>
              <h2 class="header"> "Making Dreams Come True"</h2>
              <p class="par">sk Events & Entertainments is an End to End Events based Entertainment company that has in-house event production, sound and lights and creative teams to handle any requirement end to end.</p>
              <p class="par">We specialize in Wedding events / Birthday party / Annual get togethers/ Shows/ Product launches / Team outings / Family day bashes / theme parties etc ... with <b class="bcolor">13 years of experience in the industry,</b> our production magnificence and extraordinary customer service have helped us build our brand at every stage." </p>        
              <p class="par">Our concepts & designs are welcomed & appreciated by our clients. Our utmost satisfaction relies on Clients appreciation and Leading event management company, Chennai with a wealth of experience. </p>       
            </div>
            <div class="head2">
              <h3 class="header">"Turning a Vision into Reality"</h3>
              <p class="par"><b>"You keep dreaming big never put the limit on your dreams"</b></p>
              <p class="par">We <b class="bcolor">SK Events & Entertainments</b> deliver brilliant ideas, intelligent concepts and designs. There is no greater time than now to begin to live your dreams.</p>
               <p class="par">The impact and influence of the proper decoration cannot be underestimated and they play a very important role in enhancing the mood and set a perfect ambience for any type of event, We intended to increase the beauty of the person/place/room equally rich and complex with reasonable price, extremely colorful and innovations</p>
            </div>
</body>
</html>
<script>
    var getHubergerIcon = document.getElementById("hamburger-menu");
    var getHubergerCrossIcon = document.getElementById("hamburger-cross");
    var getMobileMenu = document.getElementById("mobile-menu");

    getHubergerIcon.addEventListener("click", function () {
        console.log("hello");
        getMobileMenu.style.display = "flex";
        setTimeout(function () {
            getMobileMenu.style.transform = "translateX(0%)"; 
        }, 50); 
    });

    getHubergerCrossIcon.addEventListener("click", function () {
        console.log("hello");
        getMobileMenu.style.transform = "translateX(-100%)"; 
        setTimeout(function () {
            getMobileMenu.style.display = "none";
        }, 300); 
    });

    window.addEventListener("resize", function () {
        if (window.innerWidth > 770) {
            getMobileMenu.style.display = "none";
        }
    });
     // signin and sign out
     function showSignUp() {
   document.getElementById('signInContainer').style.display = 'none';
   document.getElementById('signUpContainer').style.display = 'block';
 }
 
 function showSignIn() {
   document.getElementById('signUpContainer').style.display = 'none';
   document.getElementById('signInContainer').style.display = 'block';
 }
 window.onbeforeunload = function () {
   window.scrollTo(0, 0);}

   document.addEventListener("DOMContentLoaded", function() {
  const urlParams = new URLSearchParams(window.location.search);
  const showSignIn = urlParams.get('showSignIn');
  const showSignup = urlParams.get('showSignup');
  if (showSignIn === 'true') {
    document.getElementById('signInContainer').style.display = 'block';
    document.getElementById('signUpContainer').style.display = 'none';
  
  }
  
});


  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>