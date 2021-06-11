<?php  
include 'dbcon.php';

$n=$_POST['name'];
$e = $_POST['email'];
$p =$_POST['password'];
$cp = $_POST['cnfpassword'];
$dt =$_POST['dob'];
$ph = $_POST['phone'];
$clg = $_POST['college'];
$g = $_POST['gender'];
$q = $_POST['qual'];

$imp=implode(',', $q);

// echo $n,$e,$p,$cp,$dt,$ph,$clg,$g,$q;



$insert= "insert into reg(name,email,password,cnfpassword,dob,phone,college,gender,qual)values('$n','$e','$p','$cp','$dt','$ph','$clg','$g','$imp')";
$instructor=mysqli_query($con,$insert);


if($instructor){
	echo"data inserted";
	header('location:registration.php');
}
else{
	echo "data not inserted";
}








?>