

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
	<form method="post" action="reg_insert.php">
		<div class="form-group">
			<label>full name</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label>email</label>
			<input type="text" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>password</label>
			<input type="text" name="password" class="form-control">
		</div>
		<div class="form-group">
			<label>confirm password</label>
			<input type="text" name="cnfpassword" class="form-control">
		</div>
		<div class="form-group">
			<label>D.O.B</label>
			<input type="date" name="dob" class="form-control">
		</div>
		<div class="form-group">
			<label>phone Number</label>
			<input type="text" name="phone" class="form-control">
		</div>
		<div class="form-group">
			<label>college</label>
			<select class="form-control" name="college">
				<option>select</option>
				<option>mits</option>
				<option>ips</option>
				<option>itm</option>
				<option>rjit</option>
				<option>mpct</option>
			</select>
		</div>
		<div class="form-group">
			<label>gender</label>
			<input type="radio" value="male" name="gender" > male
			<input type="radio" value="female" name="gender" > female
		</div>
		<div class="form-group">
			<label>qualification</label>
			<input type="checkbox" value="10th" name="qual[]" >10th 
			<input type="checkbox" value="12th" name="qual[]" >12th 
			<input type="checkbox" value="graduation" name="qual[]" >graduation
			<input type="checkbox" value="post graduation" name="qual[]" >post graduation
		</div>
		<button type="submit" class="btn btn-info">submit</button>
		

	</form>
</div>
</body>
</html>