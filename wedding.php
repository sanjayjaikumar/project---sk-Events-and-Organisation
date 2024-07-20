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
    <title>Wedding</title>
    <link rel="stylesheet" href="psj0.1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>
        .accordion {
      width: 100%;
      max-width: 400px;
      margin: 0 auto;
    }

    .card {
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .card-header {
      padding: 10px;
      background-color: #f0f0f0;
      cursor: pointer;
    }

    .card-content {
      padding: 10px;
      display: none;
    }
    #silver{
        background-image: url(https://i.imgur.com/73arrvJ.jpeg);
        background-size: cover;
    }
    #gold{
        background-image: url(https://i.imgur.com/9YaaxlA.jpeg);
        background-size: cover;
    }
   .plan1{
    font-weight: bolder;
    text-align: center;
    list-style: none;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
   }
   #btn11{
    border-top-right-radius: 20px;
    border-bottom-left-radius: 20px;
    font-size: large;
    font-weight: bold;
    background-color: #ccc;
   }
   #btn11:hover{
    border-top-right-radius: 20px;
    border-bottom-left-radius: 20px;
    font-size: large;
    font-weight: bold;
    color: #000;
    background-color:lightslategray;
   
   }
</style>
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
   <br> <div>
      <div class="bdaycontant">

        <img src="https://i.imgur.com/xYXPgZe.jpeg" style="height:500px ; width: 100%;" alt="" />
        <p class="title">Team Wedding planners</p>
        <div class="overlay"></div>
        <div class="button"><a href="#silver1"> EXPLORE </a></div>
      </div>
    </div>
    <div class="head1">
        <h1 class="header">Marriage Event Management  | Wedding Stage <br> Decorators In Vellore</h1>
            <h3 class="head">"Your Dream Wedding plan, We Execute"</h3>
         <p class="par">Have you decided on your wedding Stage decoration with flowers yet? We are the most creative and rich looking <br>flower for <b> Marriage Decoration in Vellore.</b> You can contact us for any services you need relating to wedding<br> decoration.
         </p>
         <p class="par">We, the best <b> Wedding Event Management Companies in Vellore</b> who are expertise in Brahmin Weddings, Church<br>Weddings, Hindu Weddings, Destination Weddings with Engagement Stage Decoration and one the top <b>Wedding Decorators in <br>vellore.</b></p>
         Being a Wedding Event Management company, vellore for more than 12 yrs of experience in wedding planning all<br>around Vellore, Tamil Nadu.
        <p class="par">SK Events & Entertainments is<b>the best Wedding Planners in Vellore</b>, offers complete wedding planning services<br> with assistance from wedding budgets, venue decoration, wedding Photo and videography, wedding catering S<br>ervices, wedding Mehndi, wedding bridal makeup, Wedding return gifts and Entertainments</p>
        <p class="par">SK Events is one of the prominent and<b> top Marriage Event Management in Vellore</b> and<b> Wedding Stage <br>Decorators in Vellore,</b> Tamil Nadu.     ​</p>
        <p class="par">​

            We promise that your wedding day will be the most exciting and unforgettable day of your life because of our<br> exceptional planning staff. The only measurement we care about is your smile so we go out of our way to ensure<br> the event is as celebratory as it is momentous.</p>
          <div class="head2" id="card1">
            <h1 class="header">Weddings Categories</h1>
          </div>
          <div class="cd">
            <div class="card2-grid">
              <div class="card2">
                <img src="https://i.imgur.com/8dFryrh.jpegv" alt="Image">
                <div class="card2-overlay">
                  <h3 class="overlay-heading"><i>
                    Venues of decoration<hr></i></h3>
                  <ul class="overlay-list">
                    <li>Lawn/ Farm House <br>Resorts</li>
                    <li>Kalyana Mandapam<br>Small Function Halls</li>
                  
                  </ul>
                </div>
              </div>
              <div class="card2">
                <img src="https://i.imgur.com/NiAJkbM.jpeg" alt="Image">
                <div class="card2-overlay">
                  <h3 class="overlay-heading"><i>Photographers</i><hr></h3>
                  <ul class="overlay-list">
                    <li> Photographers  </li>
                    <li> Videographers</li>
                    <li> Pre wedding Shoot  </li>
                  </ul>
                </div>
              </div>
              <div class="card2">
                <img src="https://i.imgur.com/thPZt6r.jpeg" alt="Image">
                <div class="card2-overlay">
                  <h3 class="overlay-heading"><i>DJ<br> Theme</i><hr></h3>
                  <ul class="overlay-list">
                    <li>Bollywood</li>
                    <li>Commercial</li>
                    <li>Hip hop</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card2-grid">
              <div class="card2">
                <img src="https://i.imgur.com/4NC7AGy.jpeg" alt="Image">
                <div class="card2-overlay">
                  <h3 class="overlay-heading"><i>Dance <br>Choreographers</i><hr></h3>
                  <ul class="overlay-list">
                    <li>Classical</li>
                    <li>Bride & Groom's Entry</li>
                    <li>Family Dance</li>
                  </ul>
                </div>
              </div>
              <div class="card2">
                <img src="https://i.imgur.com/93r4eIU.jpeg" alt="Image">
                <div class="card2-overlay">
                  <h3 class="overlay-heading"><i>Catering Services</i><hr></h3>
                  <ul class="overlay-list">
                    <li>South Indian</li>
                    <li>North Indian</li>
                    <li>Desserts</li>
                  </ul>
                </div>
              </div>
              <div class="card2">
                <img src="https://i.imgur.com/ZzHYKVM.jpeg" alt="Image">
                <div class="card2-overlay">
                  <h3 class="overlay-heading"><i>Wedding Cars</i><hr></h3>
                  <ul class="overlay-list">
                    <li>Luxury Cars</li>
                    <li>Semi Luxury Cars</li>
                    <li>Vintage Cars</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- ======== -->
          <div class="head2">
         <h1 class="header" id="silver1">Wedding Plan Details</h1>
  </div><br><br>
  <div class="accordion">
  <div class="card">
    <div class="card-header" id="silver" onclick="toggleAccordion('silver')">
      <h2>Silver</h2>
    </div>
    <div class="card-content" id="silver-content">
    <ul class="plan1">
        
            <li> decoration Only</li><br>
            <li><b> Silver Price:- 25,000</b><hr></li>
          </ul>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="gold" onclick="toggleAccordion('gold')">
      <h2>Gold</h2>
    </div>
    <div class="card-content" id="gold-content">
    <ul class="plan1">
      <li> decoration</li>
            <li>Photogaphers</li>
            <li>DJ</li>
            <li>Catering Services</li><br>
            <li><b> Gold Price:- 35,000</b><hr></li>
          </ul>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="platinum" onclick="toggleAccordion('platinum')">
      <h2>Platinum</h2>
    </div>
    <div class="card-content" id="platinum-content">
    <ul class="plan1">
            <li> decoration</li>
            <li>Photographers</li>
            <li>DJ</li>
            <li>Dance</li>
            <li>Catering Services</li>
            <liv>Wedding Cars</liv><br>
            <li><b> platinum Price:- 50,000</b><hr></li>
          </ul>
    </div>
  </div>
</div>

  <center >
    <a href="booking.php"><button id="btn11" >BOOK NOW</button></a>
  </center>
  </div>
          <!-- -------------------------- -->
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
  // *---------------------//
   function toggleAccordion(cardType) {
    var cardContent = document.getElementById(cardType + '-content');
    if (cardContent.style.display === 'none') {
      cardContent.style.display = 'block';
    } else {
      cardContent.style.display = 'none';
    }
  }

  // sign in to page/
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