<?php



include 'conif.php';

session_start();

$name_err = $password_err = "";

if(isset($_POST['username']) && isset($_POST['password'])){
    $name = ($_POST['username']);
    $password = ($_POST['password']);
    if(empty($name)){
        $name_err = "Please enter a name.";
    }
    else if(empty($password)){
        $password_err = "Please enter a password.";
    }
    else{
        $name_lower = strtolower($name); // Convert the input username to lowercase
        $prj= "SELECT * FROM users WHERE  LOWER(username)=LOWER('$name_lower') AND password='$password'";
        $result=mysqli_query($san,$prj);

        if ($result === false) {
            die('Error: ' . mysqli_error($san));
        }

        if (mysqli_num_rows($result)){
            $row=mysqli_fetch_assoc($result);
            if($row['username']===$name && $row['password']===$password ){
                if($name === 'admin' && $password === 'admin0'){
                    header("location:admin.php");
                    exit();
                }
                $_SESSION['loggedin'] = true; //Sets the loggedin session variable to true, indicating that the user is logged in.//
                $_SESSION['username']= $row['username'];
                $_SESSION['mail']= $row['mail'];
                $_SESSION['mobilenumber']= $row['mobilenumber'];
                $_SESSION['id']= $row['id'];
                header("location:home.php");
                exit();
            }
        }
        else {
            $_SESSION['error'] = "Username or password is incorrect";
            echo "<script>alert('Username or password is incorrect');</script>";

        }
    }

    if(!empty($name_err) || !empty($password_err)) {
        echo "<script>alert('Validation errors:\\n" . $name_err . "\\n" . $password_err . "');</script>";
    }
}


?>
