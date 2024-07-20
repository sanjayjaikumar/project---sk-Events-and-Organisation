

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
    <title>birthday</title>
    <link rel="stylesheet" href="psj0.1.css">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
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
                <li><a href="#">Birthday</a></li>
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
            <li><a href="#">Birthday</a></li>
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
    </div>
   <br> <div>
      <div class="bdaycontant">

        <img src="https://i.imgur.com/75Fllx1.png" style="height:500px ; width: 100%;" alt="" />
        <p class="title">Team Birthday planners</p>
        <div class="overlay"></div>
        <div class="button"><a href="#plan1"> EXPLORE  </a></div>
      </div>
    </div>
    <div class="head1">
     <h2 class="header">Birthday party Organisers in vellore -sk Events & <br>Entertainments</h2>
         <h3 class="head">"Your Dream birthday plan, We Execute"</h3>
      <p class="par">
       Plan a birthday party with JD Events & Entertainments. Be it any happy occasion we can make it more special <br> and memorable. We are the <b> #1 best creative birthday planners in Chennai for Kids and Adults.</b><br> JD Events will execute your kids dream birthday. 
       </p>
    </div>
    <div class="head2">
     <h2 class="header">Kids Birthday Party Planners in vellore | Home Birthday Party Planner</h2>
     <p class="par">JD Events & Entertainments - <b>The leading kids birthday party organisers in vellore </b> one of the best<br> Birthday party organisers at home with Birthday Party Packages, <br>Birthday Decorations, Birthday Planners, Party Organisers in all over vellore.
 
     </p>
    </div>
     <div class="head2">
       <h2 class="header">1st Birthday Party Organisers in vellore | Balloon Decorators in Chennai</h2>
       <p class="par">
 
         First birthday celebration is no less than a milestone in the life of moms and dads as well as the child both.<br> After all the struggles, survival as well as growth they attain this with each other.<br>
         
         So it becomes a special day to celebrate. Its the day when similar to the birth of <br>an infant, the experience of being new moms and dads came all over with in mind.</p>
   
       <p class="par"> We are vellor's fastest growing <b>party organisers & 100% trusted birthday planners in vellore<br> with</b> affordable birthday planning cost in vellore location. We assured that you get a great birthday party<br> to take pleasure in saving your time, effort and cash.</p>  
       </div>
       <div class="head2">
         <h2 class="header"> Team Birthday Party Planners vellore | Birthday Event Planners Near Me in<br> vellore</h2>
         <p class="par"> we specialize in Theme <b>Birthday Decoration in vellore </b>with great Entertainment options. And we are one of <br> the best kids birthday planners near me in vellore and <b>top birthday party planners in vellore.</b></p>
         <p class="par">We are expertise in birthday themes for girls, birthday themes for boys, birthday themes for kids, unicorn<br> birthday theme, baby boy birthday themes, baby girl birthday themes, jungle theme birthday decoration,<br> mickey mouse birthday theme, frozen theme birthday decoration, boss baby birthday theme, rainbow birthday <br>theme, minions birthday theme, peppa pig birthday theme, animal theme birthday cake, baby shark birthday <br>theme, butterfly theme birthday, jungle themed birthday party, rainbow theme birthday decoration, rose gold <br>birthday party theme, mermaid birthday theme, minnie mouse birthday theme, princess theme birthday<br> decoration, avengers birthday theme, jungle theme birthday decoration at home, krishna theme birthday cake,<br> masha and the bear birthday theme, space theme birthday decoration, spiderman birthday theme. </p>    
       </div>
       <div class="head2">
         <h1 class="header">Birthday Categories</h1>
       </div>
   <!-- ---------------------- -->
   <div class="cd">
    <div class="card2-grid">
      <div class="card2">
        <img src="https://i.imgur.com/G9QCP2x.jpeg" alt="Image">
        <div class="card2-overlay">
          <h3 class="overlay-heading"><i>Game stalls<hr></i></h3>
          <ul class="overlay-list">
            <li>Ballone shotting</li>
            <li>Mini Golf</li>
            <li>Bouncing Castle</li>
          </ul>
        </div>
      </div>
      <div class="card2">
        <img src="https://i.imgur.com/r4nZ65u.jpeg" alt="Image">
        <div class="card2-overlay">
          <h3 class="overlay-heading"><i>Magician</i><hr></h3>
          <ul class="overlay-list">
            <li> Magic (supernatural)  </li>
            <li> Magic (illusion)  </li>
            <li> Magic (fantasy)  </li>
          </ul>
        </div>
      </div>
      <div class="card2">
        <img src="https://i.imgur.com/dJOTQQi.jpeg" alt="Image">
        <div class="card2-overlay">
          <h3 class="overlay-heading"><i>Birthday Party<br> Theme</i><hr></h3>
          <ul class="overlay-list">
            <li>Ben 10</li>
            <li>Mottu Patlu</li>
            <li>Panda Theme</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="card2-grid">
      <div class="card2">
        <img src="https://i.imgur.com/qFjlJDu.jpeg" alt="Image">
        <div class="card2-overlay">
          <h3 class="overlay-heading"><i>Photo Booth</i><hr></h3>
          <ul class="overlay-list">
            <li>Selfie Photo Booth</li>
            <li>Magic Mirror Photo Booth</li>
            <li>virtual Photo Booth</li>
          </ul>
        </div>
      </div>
      <div class="card2">
        <img src="https://i.imgur.com/UjbuNJ7.jpeg" alt="Image">
        <div class="card2-overlay">
          <h3 class="overlay-heading"><i>Mascots</i><hr></h3>
          <ul class="overlay-list">
            <li>Mottu Patlu</li>
            <li>Choota Bheem</li>
            <li>Mickey Mouse</li>
          </ul>
        </div>
      </div>
      <div class="card2">
        <img src="https://i.imgur.com/xKf2Eq9.jpeg" alt="Image">
        <div class="card2-overlay">
          <h3 class="overlay-heading"><i>Chocolate,s</i><hr></h3>
          <ul class="overlay-list">
            <li>pure dairy</li>
            <li>candy milk</li>
            <li>loly rost</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- -------------- -->
  <div class="head2">
         <h1 class="header" id="plan1">Birthday Plan Details</h1>
  </div><br><br>
 <div class="accordion">
  <div class="card">
    <div class="card-header" id="silver" onclick="toggleAccordion('silver')">
      <h2>Classic</h2>
    </div>
    <div class="card-content" id="silver-content">
    <ul class="plan1">
            <li>Decoration only</li>
          
            <li><b> classic Price:- 15,000</b><hr></li>
          </ul>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="gold" onclick="toggleAccordion('gold')">
      <h2>premium</h2>
    </div>
    <div class="card-content" id="gold-content">
    <ul class="plan1">
      <li>Decoration +</li>
            <li>Game Stalls</li>
            <li>Magician</li>
            <li>Mascots</li>
            <li>Photo Booth</li>
            <li>Chocolate,s</li>
            <li>Birthday Party Theme</li><br>
            <li><b> Premium Price:- 30,000</b><hr></li>
          </ul>
    </div>
  </div>
  </div>
  <center >
    <a href="booking.php"><button id="btn11" >BOOK NOW</button></a>
  </center>
       
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

  function toggleAccordion(cardType) {
    var cardContent = document.getElementById(cardType + '-content');
    if (cardContent.style.display === 'none') {
      cardContent.style.display = 'block';
    } else {
      cardContent.style.display = 'none';
    }
  }
 
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