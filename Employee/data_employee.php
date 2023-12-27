<?php
require 'config.php';
$offers = query('SELECT * from employee'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Employee</title>
</head>
<body>

<h2>Employee List</h2>

<table border="1">
 	<tr>
 		<th>id</th>
 		<th>first_name</th>
		<th>last_name</th>
		<th>employment_start_date</th>
		<th>employment_end_date</th>
		<th>position_id</th>
		<th>city_id</th>
		<th>is_active</th>

 	</tr>
 	<tbody>
	<?php foreach ($offers as $row) : ?>
	   <tr>
			<td><?=$row['id']; ?></td>
		  	<td><?=$row['first_name']; ?></td>
		  	<td><?=$row['last_name']; ?></td>
		  	<td><?=$row['employment_start_date']; ?></td>
		  	<td><?=$row['employment_end_date']; ?></td>
		  	<td><?=$row['position_id']; ?></td>
		  	<td><?=$row['city_id']; ?></td>
		  	<td><?=$row['is_active']; ?></td>
			<td> 
				<a href="update_employee.php?id=<?= $row["id"]; ?>" class="btn btn-primary">UPDATE</a>
				<a href="delete_employee.php?id=<?= $row["id"]; ?>" class="btn btn-danger" role="button" aria-pressed="true" onclick="return confirm('Are you sure?')">DELETE</a>
 		  	
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>

<br>

<a href="add_employee.php">Add New Employee</a>


</body>
</html>
