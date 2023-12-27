<?php
require 'config.php';
$offers = query('SELECT * from repair_shop'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>repair_shop</title>
</head>
<body>

<h2>Repair Shop List</h2>

<table border="1">
 	<tr>
 		<th>id</th>
 		<th>shop_name</th>
		<th>address</th>
		<th>details</th>
		<th>city_id</th>
 	</tr>
 <tbody>
	<?php foreach ($offers as $row) : ?>
	   <tr>
		  <td><?=$row['id']; ?></td>
		  <td><?=$row['shop_name']; ?></td>
		  <td><?=$row['address']; ?></td>
		  <td><?=$row['details']; ?></td>
		  <td><?=$row['city_id']; ?></td>
		  <td> 
				<a href="update_repair.php?id=<?= $row["id"]; ?>" class="btn btn-primary">UPDATE</a>
				<a href="delete_repair.php?id=<?= $row["id"]; ?>" class="btn btn-danger" role="button" aria-pressed="true" onclick="return confirm('Are you sure?')">Delete</a>
 		  
          	</td>
	</tr>
	  <?php endforeach; ?>
</table>

<br>

<a href="add_repair.php">Add New Repair Shop</a>


</body>
</html>
