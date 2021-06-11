<?php 

include 'dbcon.php';

$id=$_GET['id'];
//echo $id;

$edit="select * from reg where id=$id";
$instructor=mysqli_query($con,$edit);

$query=mysqli_fetch_array($instructor);
// echo("<pre>");
// print_r($query);

$a=$query['qual'];

$exp=explode(',',$a);
// echo("<pre>");
// print_r($exp);
			

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!----for mobile responsive--->
</head>
<body>
<div class="container">
	<h1>Registration-Form</h1>
	<form method="post" action="reg_update.php">
		<input type="hidden" name="id" value="<?php echo $query['id'] ?>">

		<div class="form-group">
			<label>full name</label>
			<input type="text" name="name" class="form-control" value="<?php echo $query['name'] ?>">
		</div>
		<div class="form-group">
			<label>email</label>
			<input type="text" name="email" class="form-control" value="<?php echo $query['email'] ?>">
		</div>
		<div class="form-group">
			<label>password</label>
			<input type="text" name="password" class="form-control"value="<?php echo $query['password'] ?>">
		</div>
		<div class="form-group">
			<label>confirm password</label>
			<input type="text" name="cnfpassword" class="form-control" value="<?php echo $query['cnfpassword'] ?>">
		</div>
		<div class="form-group">
			<label>D.O.B</label>
			<input type="date" name="dob" class="form-control" value="<?php echo $query['dob'] ?>">
		</div>
		<div class="form-group">
			<label>phone Number</label>
			<input type="text" name="phone" class="form-control" value="<?php echo $query['phone'] ?>">
		</div>
		<div class="form-group">
			<label>college</label>
			<select class="form-control" name="college">
				<option>select</option>
				<option
				<?php 
				if($query['college']=="mits"){
					echo "selected";
				}
				?>
				>mits</option>
				<option
				<?php 
				if($query['college']=="ips"){
					echo "selected";
				}
				?>
				>ips</option>
				<option
				<?php 
				if($query['college']=="itm"){
					echo "selected";
				}
				?>
				>itm</option>
				<option
				<?php 
				if($query['college']=="rjit"){
					echo "selected";
				}
				?>
				>rjit</option>
				<option
				<?php 
				if($query['college']=="mpct"){
					echo "selected";
				}
				?>
				>mpct</option>
			</select>
		</div>
		<div class="form-group">
			<label>gender</label>
			<input type="radio" value="male" name="gender" 
			<?php 
				if($query['gender']=="male"){
					echo "checked";
				}
				?>
			> male
			<input type="radio" value="female" name="gender" 
			<?php 
				if($query['gender']=="female"){
					echo "selected";
				}
				?>
			> female
		</div>
		<div class="form-group">
			<label>qualification</label>
			<input type="checkbox" value="10th" name="qual[]" 
			<?php 
			if(in_array("10th",$exp)){
				echo "checked";
			}
			?>
			>10th 
			<input type="checkbox" value="12th" name="qual[]" 
			<?php 
			if(in_array("12th",$exp)){
				echo "checked";
			}
			?>
			>12th 
			<input type="checkbox" value="graduation" name="qual[]" 
			<?php 
			if(in_array("graduation",$exp)){
				echo "checked";
			}
			?>
			>graduation
			<input type="checkbox" value="post graduation" name="qual[]"
			<?php 
			if(in_array("post graduation",$exp)){
				echo "checked";
			}
			?>
			 >post graduation
		</div>
		<button type="submit" class="btn btn-success">update</button>
		

	</form>
</div>
</body>
</html>