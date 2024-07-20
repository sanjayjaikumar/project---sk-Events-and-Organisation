<?php
include 'conif.php';
 $nam=$_POST['Username'];
$pwd=$_POST['Password'];
$mail=$_POST['Email'];
$no=$_POST['Mobile'];
$container="insert into users values ('"."','" . $nam . "','" . $pwd . "','" . $mail . "','" . $no . "')";
$san-> query($container);
$san-> close();
header("Location: home.php?showSignIn=true");
exit();

echo "not register";
?>

