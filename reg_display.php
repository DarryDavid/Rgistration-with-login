<!DOCTYPE html>
<html>
<head>
	<title>display</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<h1 style="text-align: center">Data display</h1>
<table class="table table-striped table-bordered">
	<tr>
		<th>id</th>
		<th>Name</th>
		<th>Email id</th>
		<th>phone</th>
		<th>action</th>
	</tr>

<?php
include 'dbcon.php';


$select="select * from reg order by id desc";
$performer=mysqli_query($con,$select);
// echo "<pre>";
// print_r($performer);

//$query=mysqli_fetch_array($performer);
// echo "<pre>";
// print_r($query);
while($query=mysqli_fetch_array($performer)){



?>

<tr>
	<td><?php echo $query['id']  ?></td>
	<td><?php echo $query['name']  ?></td>
	<td><?php echo $query['email']  ?></td>
	<td><?php echo $query['phone']  ?></td>
	<td>
		<a href="reg_view.php?id=<?php echo $query['id']  ?>">view</a>
		<a href="reg_edit.php?id=<?php echo $query['id'] ?>">edit</a>
		<a href="reg_delete.php?id=<?php echo $query['id'] ?>">delete</a>
	</td>
</tr>

<?php
}

?>
</table>
</body>
</html>