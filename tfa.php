<?php
session_start();

    // Include config file
require_once("vendor/autoload.php");
use PragmaRX\Google2FA\Google2FA;
include 'connect.php'; //connect to db

$google2fa = new Google2FA();

//login session start
$user = $_SESSION["user"];
$dbtoken = $_SESSION["dbtoken"];
//login session end

/* $username = "user1";
$sql1 = "SELECT token FROM users WHERE username = '$username'";
$sql2 = "SELECT id FROM users WHERE username = '$username'";

$uid = mysqli_fetch_array(mysqli_query($link, $sql2)); 
$dbtoken = mysqli_fetch_array(mysqli_query($link, $sql1));

//$qrcode = $google2fa->getQRCodeUrl($uid['id'], $username, $dbtoken['token']); */

//$image_url = 'https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl='.$qrcode;


if(!is_null($dbtoken)){
    echo '<h2>Enter Token: </h2><br>';
    if(!is_null($_POST['verify'])){
        if($google2fa->verifyKey($dbtoken, $_POST['verify'])){
            
            session_destroy();
            session_start();
            // Store data in session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $user; 
            
            // Redirect user to welcome page
            header("location: welcome.php");
        }
        else{
            echo "<br>incorrect token, try again<br>";
        }
    }
}

?>
<form action="tfa.php" method="post">
        <input type="text" name="verify">
        <input type="submit">
</form>