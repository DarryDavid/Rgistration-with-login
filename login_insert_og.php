<?php

session_start();

include 'dbcon.php';

$e =$_POST['email'];
$p=$_POST['password'];

//echo $e,$p;



$check="select * from reg where email='$e' && password='$p'";
$instructor=mysqli_query($con,$check);
//echo $instructor; // instructor is not array so ERROR will come

//print_r($instructor); //plz see value of  num row attribute ...



$total=mysqli_num_rows($instructor);//   Return the number of rows in a result set:          if that 1 then total return 1        if 2 then 2 but we know with given condition either num of rows can be 1 or 0
//echo $total;    //prints either 0 or 1





if($total==1){
	//$_SESSION['darry']='darry-->i am brilliant';
	$_SESSION['email']=$e;
	header('location:login_dashboard.php');
}
else{
	header('location:login_form.php');
}

?>