<?php
// Include file koneksi dan fungsi query
include 'config.php';
$conn = mysqli_connect('localhost', 'root', '', 'repair_shops_employees');
// Cek apakah form telah di-submit
if (isset($_POST['submit'])) {
    // Panggil fungsi tambah
    if (add_city($_POST) > 0) {
        echo "<script>
			alert('Data berhasil ditambahkan!');
			document.location.href='city.php';
			</script>";
    } else {
        echo "<script>
			alert('Data gagal ditambahkan!');
			document.location.href='city.php';
			</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add city</title>
</head>
<body>

<h2>Add New city</h2>

<form action="add_city.php" method="post">
<label for="id">id:</label>
    <input type="number" name="id" required>
    <label for="postal_code">postal_code:</label>
    <input type="text" name="postal_code" required>
    <label for="city_name">city_name:</label>
    <input type="text" name="city_name" required>
    <br>
    <input type="submit" name= "submit" >
</form>

<br>

<a href="city.php">Back to city List</a>
</body>
</html>