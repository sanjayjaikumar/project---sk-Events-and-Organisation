<?php 
session_start();
if(isset($_SESSION['username'])) {
  $name = $_SESSION['username'];
} else {
  $name = "";
}
if(isset($_SESSION['mail'])){
    $mail = $_SESSION['mail'];
}
else {
    $mail = "";
}

if(isset($_SESSION['mobilenumber'])){
    $mobilenumber = $_SESSION['mobilenumber'];
}
else {
    $mobilenumber = "";
}

$isLoggedIn = isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=session_start();, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="psj0.1.css">
 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
     .booking1 {
        margin-top: 100px;
        margin-bottom: 100px;
        height: 300px;
        width: 100%;
        padding: 20px;
        background-color: #1CB5E0;
        border: 2px solid black;
    }

    .user-info {
      
    background-color: white;
    padding: 10px;
    border-radius: 20px;
    margin-top: 20px;
    justify-content: center;
}

.user-info input[type="text"],
.user-info input[type="email"],
.user-info input[type="number"],
.user-info input[type="date"] {
    width: 50%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; /* Ensures padding and border are included in the element's total width and height */
}

.user-info textarea {
    width: 80%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; /* Ensures padding and border are included in the element's total width and height */
}

.user-info b {
    color: #1CB5E0;
}
    .btn11{
    border-top-right-radius: 20px;
    border-bottom-left-radius: 20px;
    font-size: large;
    font-weight: bold;
    background-color: #ccc;
   }
   .btn11:hover{
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
        <?php if($isLoggedIn): ?> 
        <li class="dropdown">
            <a href="#">USER INFO:-<?php echo $name; ?></a>
            <ul>
                <li>Email: <?php echo $mail; ?></li>
                <a href="logout.php"><li>LOGOUT NOW: </li></a>
            </ul>
            <?php endif; ?>
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
 
   <br> <form action="booking1.php" method="post">
      <div class="bdaycontant">

        <img src="https://i.imgur.com/SF6X0MU.png" style="height:500px ; width: 100%;" alt="" />
        <!-- <p class="title">Team Birthday planners</p> -->
        <div class="overlay"></div>
        <div class="button" ><a href="#booking1"> Book Now </a></div>
      </div>
    </div>
    
    <div id="booking1">
    <div>
        <div class="container text-center" >
            <div class="row justify-content-center">
            <h1>Select Events</h1><br>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="events">Select Events</label><br>
                    <select id="events" name="events" required >
                        <option value="none" >None  </option>
                        <option value="wedding">Wedding</option>
                        <option value="birthday">Birthday</option>
                    </select><br><br>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="planes">Select Planes</label><br>
                    <select id="planes" name="planes" required>
                        <option value="none">None</option>
                    </select><br><br>
                 </div>
                 <div class="user-info">
                    <b>NAME:</b>
                   <input type="text" name="username" placeholder=" You must for login" value="<?php echo $name; ?>"  readonly><br>
                   <b>EMAIL:</b>
                   <input type="email" name="mail" placeholder=" You must for login" value="<?php echo $mail; ?>"    readonly><br>
                   <b>MOBILE NO:</b>
                   <input type="number" name="number" placeholder=" You must for login" value="<?php echo $mobilenumber; ?>" readonly><br>
                   <b>Event Date:</b>
                   <input type="date"  name="date"  required><br>
                   <b>Address:</b>
                  <textarea name="address" rows="4" required></textarea><br>
                  <b>Total Amount: Rs </b><input type="number" id="totalAmount" name="amount" style="font-weight: bold;" readonly><br>
                </div>
            <center >
    <a href="#"><button class="btn11" id="bookNowButton" >BOOK NOW</button></a>
  </center>
        </div>
    
    </div>

  </form>
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
/----------------------/
document.addEventListener("DOMContentLoaded", function () {
    var eventsDropdown = document.getElementById("events");
    var planesDropdown = document.getElementById("planes");
    var totalAmountDisplay = document.getElementById("totalAmount");
    var bookNowButton = document.getElementById("bookNowButton"); // assuming the id of the button is "bookNowButton"
    var weddingOptions = {
        "none": ["None", 0],
        "silver": ["Silver", 25000],
        "gold": ["Gold", 35000],
        "platinum": ["platinum", 50000]
    };
    var birthdayOptions = {
        "none": ["None", 0],
        "classic": ["classic", 15000],
        "premium": ["premium", 30000]
    };

    eventsDropdown.addEventListener("change", function () {
        var selectedEvent = eventsDropdown.value;
        planesDropdown.innerHTML = ""; // Clear existing options

        if (selectedEvent === "wedding" || selectedEvent === "birthday") {
            var options = selectedEvent === "wedding" ? weddingOptions : birthdayOptions;
            for (var key in options) {
                if (options.hasOwnProperty(key)) {
                    var option = document.createElement("option");
                    option.value = key;
                    option.text = options[key][0];
                    planesDropdown.appendChild(option);
                }
            }
            // Enable the planes dropdown
            planesDropdown.removeAttribute("disabled");
        } else {
            // If neither "wedding" nor "birthday" is selected, only show "None" option
            var noneOption = document.createElement("option");
            noneOption.value = "none";
            noneOption.text = "None";
            planesDropdown.appendChild(noneOption);
            // Disable the planes dropdown
            planesDropdown.setAttribute("disabled", "disabled");
        }
        updateTotalAmount();
    });

    planesDropdown.addEventListener("change", function() {
        // If "none" is selected, make the planes dropdown invalid
        if (planesDropdown.value === "none") {
            planesDropdown.setCustomValidity("Please select a plane.");
        } else {
            planesDropdown.setCustomValidity("");
        }
        updateTotalAmount();
    });

    function updateTotalAmount() {
        var selectedPlane = planesDropdown.value;
        var selectedEvent = eventsDropdown.value;
        var options = selectedEvent === "wedding" ? weddingOptions : birthdayOptions;
        var totalAmount = options[selectedPlane][1];
        totalAmountDisplay.value = totalAmount;
    }

    // Initialize total amount display
    updateTotalAmount();

    // Form submission event
    bookNowButton.addEventListener("click", function(event) {
        // Check if either event or plane is set to "none"
        if (eventsDropdown.value === "none" || planesDropdown.value === "none") {
            // Prevent form submission
            event.preventDefault();
            alert("Please select an event and plane before booking.");
        }
    });
});



 
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
