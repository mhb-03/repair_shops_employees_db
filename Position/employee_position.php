<?php
require 'config.php';
$offers = query('SELECT * from employee_position'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Employee Position</title>
</head>
<body>

<h2>Position List</h2>

<table border="1">
 	<tr>
 		<th>id</th>
 		<th>position_name</th>
		<th>options</th>
 	</tr>
 <tbody>
	<?php foreach ($offers as $row) : ?>
	   <tr>
		  <td><?=$row['id']; ?></td>
		  <td><?=$row['position_name']; ?></td>
		  <td> 
				<a href="update_position.php?id=<?= $row["id"]; ?>" class="btn btn-primary">UPDATE</a>
				<a href="delete_position.php?id=<?= $row["id"]; ?>" class="btn btn-danger" role="button" aria-pressed="true" onclick="return confirm('Are you sure?')">DELETE</a>
 		  
          	</td>
	</tr>
	  <?php endforeach; ?>
</table>

<br>

<a href="add_position.php">Add New Position</a>


</body>
</html>
