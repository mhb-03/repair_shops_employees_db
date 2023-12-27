<?php
require 'config.php';
$offers = query('SELECT * from city'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>city</title>
</head>
<body>

<h2>city List</h2>

<table border="1">
 	<tr>
 		<th>id</th>
 		<th>postal_code</th>
		<th>city_name</th>
		<th>options</th>
 	</tr>
 <tbody>
	<?php foreach ($offers as $row) : ?>
	   <tr>
		  <td><?=$row['id']; ?></td>
		  <td><?=$row['postal_code']; ?></td>
		  <td><?=$row['city_name']; ?></td>
		  <td> 
				<a href="update_city.php?id=<?= $row["id"]; ?>" class="btn btn-primary">UPDATE</a>
				<a href="delete_city.php?id=<?= $row["id"]; ?>" class="btn btn-danger" role="button" aria-pressed="true" onclick="return confirm('Are you sure?')">Delete</a>
 		  
          	</td>
	</tr>
	  <?php endforeach; ?>
</table>

<br>

<a href="add_city.php">Add New city</a>


</body>
</html>
