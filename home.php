<?php 
session_start();
if(isset($_SESSION['username'])) {
  $name = $_SESSION['username'];
} else {
  $name = "";
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
  <title>Home</title>
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
        <li><a href=""> Home </a></li>
        <li class="dropdown">
            <a href="#"> Services </a>
            <ul>
                <li><a href="Wedding.php">Wedding</a></li>
                <li><a href="birthday.php">Birthday</a></li>
            </ul>
        </li>
        <li><a href="Gallery.php"> Galllery </a></li>
        <li><a href="about.php"> About </a></li>
        <li><a href="contact.php"> Contact </a></li>
        <!-- Add the user's information here -->
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
      <?php if(!$isLoggedIn): ?> 
      <a href="#" onclick="showSignUp()">Sign Up</a>
      <?php endif; ?>
    </div>
    <div id="hamburger-menu">&#9776;</div>
  </div>
  

  <div id="mobile-menu">
    <div class="mobile-nav-items">
      <ul>
        <li><a href=""> Home </a></li>
        <li><a href="#"> Services </a>
          <ul>
            <li><a href="wedding.php">Wedding</a></li>
            <li><a href="birthday.php">Birthday</a></li>
          </ul>
        </li>
        </li>
        <li><a href="Gallery.php"> Gallery</a></li>
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
     <!-- ------ welocme----------------- -->
    <div id="con" style="background-image: url(https://i.imgur.com/2NTaKv7.jpeg); ">
      <div class="left">
      <img src="https://i.imgur.com/7vY0JDC.png" alt="error"  width="86%" height="350">
  </div>
  <div class="right">
  <img src="https://i.imgur.com/kr1P2v1.gif" alt="error"  width="60%" height="350" >
</div>
    </div><br><br>
    
  <div class="head2">
    <h1 class="header"><B>OUR SERVICES</B></h1>
  </div>

    <div class="wdcarousel">
      <div id="text" class="head2">
        <h2 class="header">Wedding Planners &<br> Decorators</h2>
        <p class="par">SK Events & Entertainments - A Leading<b> Wedding Planners <br>in vellore</b> & <span class="bcolor"> Top Wedding Decorators vellore providing </span><br> the best and fresh ideas, innovative styling and creative<br> inputs to pull your dream events together!
        </p>  
        <p class="par">From the pre-wedding ceremonies to the post-wedding<br> parties, we manage it all for you. Based out of vellore, we<br> have organized many theme weddings in vellore <br>and destination weddings in Chennai
        </p>
        <a href="wedding.php"><button class="btn1"><b>Read More...</b></button></a>
      </div>
      <div class="carousel-container" id="content">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://i.imgur.com/J6WfkQA.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://i.imgur.com/J6WfkQA.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://i.imgur.com/WMqPA3J.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://i.imgur.com/dzaONdX.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <div><hr></div>

<!-- ------------------------------------------------------- -->

<div class="wdcarousel">
  <div class="grd">
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://i.imgur.com/GpemQpn.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://i.imgur.com/x9ksBbr.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://i.imgur.com/ZBdDGO7.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://i.imgur.com/ohzGWzQ.jpeg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>
 <div id="text" class="head2">
   <h2 class="header">Birthday Planners &<br> Decorators</h2>
   <p class="par">SK Events & Entertainments is one of <span class="bcolor"> the Best Birthday<br> Planners in vellore  & Top Birthday Party Decorators<br></span> vellore providing the best and fresh ideas, innovative<br> styling and creative inputs to pull your dream events<br> together!
   </p>  
   <p class="par">From the 1st birthday ceremonies to the  parties,<br> we manage it all for you. Based out <br>of vellore, we have organized many theme birthday<br> in vellore and destination b_day in vellore
 
   </p>
     <a href="birthday.php" ><button class="btn1"><b>Read More...</b></button></a>

  </div>
</div>
<div class="head2">
  <h1 class="header"><B>WEDDING CATEGORIES</B></h1>
</div>
<div class="card1">
  
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <img src="https://i.imgur.com/pVVDG53.jpeg" alt="Placeholder Image">
          <div class="text">
          <a href="wedding.php#card1" style="text-decoration: none; color: white;">  <h3>Photographers</h3>
            <p>Make a Sweet Memories</p></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="card">
          <img src="https://i.imgur.com/6DepU9b.jpeg" alt="Placeholder Image">
          <div class="text">
          <a href="wedding.php#card1" style="text-decoration: none; color: white;"> <h3>DJ</h3>
            <p>Make your Wedding Joy n' Fun</p></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="card">
          <img src="https://i.imgur.com/VF9dwF6.jpeg" alt="Placeholder Image">
          <div class="text">
            <a href="wedding.php#card1" style="text-decoration: none; color: white;">   <h3>Catering Services</h3>
            <p>Feel a Good Taste!</p></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="card">
          <img src="https://i.imgur.com/8rWs02X.jpeg" alt="Placeholder Image">
          <div class="text">
            <a href="wedding.php#card1" style="text-decoration: none; color: white;"> <h3>Bridal Makeup</h3>
            <p>Change Your Look</p></a>
          </div>
        </div>
      </div>
    </div>
  </div>
>
    <!-- FOOTER -->
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
</body>
</html>
