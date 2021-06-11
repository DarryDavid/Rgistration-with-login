<?php 
include 'dbcon.php';

$id=$_POST['id'];
//echo $id;

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


$update="update reg set name='$n',email='$e',password='$p',cnfpassword='$cp',dob='$dt',phone='$ph',college='$clg',gender='$g',qual='$imp' where id=$id";

$instructor=mysqli_query($con,$update);

header('location:reg_display.php');


?>