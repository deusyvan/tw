<?php 
session_start();
require 'twconfig.php';
require 'twitteroauth/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

if(isset($_SESSION['tw_access_token']) && !empty($_SESSION['tw_access_token'])){
    echo "tálogado";
} else {
    echo '<a href="login.php"> Login com Twitter</a>';
}
?>