<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="text-center display-4 text-info">View Display</h1>
	<br>
	

	<table class="table table-bordered table-hover">
		<thead class="thead-dark">
			<tr>
				<th>id</th>
				<th>name</th>
				<th>email</th>
				<th>password</th>
				<th>dob</th>
				<th>phone</th>
				<th>college</th>
				<th>gender</th>
				<th>education</th>
			</tr>
		</thead>

<?php 

include 'dbcon.php';

$id=$_GET['id'];
//echo $id;


$view="select * from reg where id=$id";
$instructor=mysqli_query($con,$view);

$query=mysqli_fetch_array($instructor);
// echo "<pre>";
// print_r($query);

?>
<tbody >
	<td><?php  echo $query['id']; ?></td>
	<td><?php  echo $query['name']; ?></td>
	<td><?php  echo $query['email']; ?></td>
	<td><?php  echo $query['password']; ?></td>
	<td><?php  echo $query['dob']; ?></td>
	<td><?php echo $query['phone'] ?></td>
	<td><?php  echo $query['college']; ?></td>
	<td><?php  echo $query['gender']; ?></td>
	<td><?php  echo $query['qual']; ?></td>
	
	

</tbody>
  





</table>
</div>
</body>
</html>
