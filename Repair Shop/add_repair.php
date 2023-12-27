<?php
// Include file koneksi dan fungsi query
include 'config.php';
$conn = mysqli_connect('localhost', 'root', '', 'repair_shops_employees');
// Cek apakah form telah di-submit
if (isset($_POST['submit'])) {
    // Panggil fungsi tambah
    if (tambah($_POST) > 0) {
        echo "<script>
			alert('Data berhasil ditambahkan!');
			document.location.href='repair_shop.php';
			</script>";
    } else {
        echo "<script>
			alert('Data gagal ditambahkan!');
			document.location.href='repair_shop.php';
			</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Repair Shop</title>
</head>
<body>

<h2>Add New Repair Shop</h2>

<form action="add_repair.php" method="post">
<label for="id">id:</label>
    <input type="number" name="id" required>
    <label for="shop_name">shop_name:</label>
    <input type="text" name="shop_name" required>
    <label for="address">address:</label>
    <input type="text" name="address" required>
    <label for="details">details:</label>
    <input type="text" name="details" required>
    <label for="city_id">city_id:</label>
    <input type="text" name="city_id" required>
    <br>
    <input type="submit" name= "submit" >
</form>

<br>

<a href="repair_shop.php">Back to repair_shop List</a>
</body>
</html>