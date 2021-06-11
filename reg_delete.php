<?php 
include 'dbcon.php';

$enr=$_GET['id'];

$delete="delete from reg where id=$enr";
$instructor=mysqli_query($con,$delete);

header('location:reg_display.php');


?>