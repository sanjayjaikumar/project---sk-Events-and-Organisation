<?php
include 'conif.php'; 
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true ) { 
    $event=$_POST['events']; 
    $plan=$_POST['planes']; 
    $name=$_POST['username']; 
    $mail=$_POST['mail']; 
    $number=$_POST['number']; 
    $date=$_POST['date']; 
    $addres=$_POST['address']; 
    $amount=$_POST['amount']; 
    
    $con="INSERT INTO booking (id, date_added, event, planes, name, mail, number, event_date, address, amount)
    VALUES(NULL, CURDATE(), '$event', '$plan', '$name', '$mail', '$number', '$date', '$addres', '$amount')"; 

    if ($san->query($con) === TRUE) { 
        header("location: end.php");
        exit(); // Added exit() after header redirect to stop further execution
    } else {
        echo "Error: " . $con . "<br>" . $san->error;
    }

    $san->close(); 
} else {
    // User is not logged in, redirect to the login page
    echo "<script>alert('You must be logged in to continue');</script>";
    echo "<script>window.location.replace('booking.php?showSignIn=true');</script>";
    exit();
}
?>
