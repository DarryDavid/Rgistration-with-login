<?php  

session_start();

if(empty($_SESSION['email'])){
	header('location:login_form.php'); //only seeing ki session ke andaer data aa raha hai yaa fir nahi,,,,,agar nahi aa raha hoga to login ke page pe pahucha dega

}





?>