<?php
$full_version = "full";
if(isset($_COOKIE['MobCookie'])){
	setcookie("MobCookie", $full_version, time()-1800);  
} else {
	//setcookie("TestCookie", $value);
	setcookie("MobCookie", $full_version, time()+1800); /* expire in 1/2 hour */ 
}; 
$link = $_GET['r_link'];
header('Location:'. $link . '');
exit;