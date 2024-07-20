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
    <title>Gallery</title>
 
   <link rel="stylesheet" href="psj0.1.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
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
        <li><a href="#"> Gallery</a></li>
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
        <!-- -------------------------------------------- -->
        <div class="galleryimg">
          <div class="head2">
          <h1 class="header" style="margin: 20px 20px ;"> OUR BIRTHDAY & WEDDING WORKS </h1><br><br>
          </div>
          <div class="gallery">
            <img src="https://i.imgur.com/He4LVIm.jpeg" alt="Image 1" >
            <img src="https://i.imgur.com/dzaONdX.jpg" alt="Image 2" >
            <img src="https://i.imgur.com/zuzixgg.jpg" alt="Image 3" >
            <img src="https://i.imgur.com/3kZcm5P.jpg" alt="Image 4" >
            <img src="https://i.imgur.com/BdPytW8.jpeg" alt="Image 5" >
            <img src="https://i.imgur.com/dwxbl8h.jpeg" alt="Image 6" >
            <img src="https://i.imgur.com/ladK7dS.jpeg" alt="Image 6" >
            <img src="https://i.imgur.com/ehgbGdS.jpeg" alt="Image 6" >
            <img src="https://i.imgur.com/YBIHysD.jpeg" alt="Image 6" >
            <img src="https://i.imgur.com/ZfqLTMC.jpeg" alt="Image 6" >
            <img src="https://i.imgur.com/Mp4t6ML.jpeg" alt="Image 6" >
            <img src="https://i.imgur.com/ItXiOGY.jpeg" alt="Image 6" >
            <img src="https://i.imgur.com/S8kwAfC.jpeg" alt="Image 6" >
          
        </div>
        </div>
        
     <div class="fttr">
  <footer>
    <div class="top_header">
      <section>
        <span><i class="fa fa-map-marker"></i></span>
        <span>Street, full address, state/province, country, pincode</span>
      </section>
      <section>
        <span><i class="fa fa-phone"></i></span>
        <span>(+91) 75300 29458</span>
      </section>
      <section>
        <span><i class="fa fa-envelope"></i></span>
        <span>sanjay14360@gmail.com</span>
      </section>
    </div>
    <span class="border-shape"></span>
    <div class="bottom_content">
      <div>
      <section class="icon"> 
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-telegram"></i></a>
      </section>
    </div>
    <div class="copyright">
      Copyright © 2024 SK Events & Entertainment - All rights reserved
    </div>
  </footer>
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


     // signin and sign out
     function showSignUp() {
   document.getElementById('signInContainer').style.display = 'none';
   document.getElementById('signUpContainer').style.display = 'block';
 }
 
 function showSignIn() {
   document.getElementById('signUpContainer').style.display = 'none';
   document.getElementById('signInContainer').style.display = 'block';
 }
// /--==----------------sing page/  
window.onbeforeunload = function () {
   window.scrollTo(0, 0);};
  //  ---------------------------------
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