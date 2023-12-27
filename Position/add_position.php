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
			document.location.href='employee_position.php';
			</script>";
    } else {
        echo "<script>
			alert('Data gagal ditambahkan!');
			document.location.href='employee_position.php';
			</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add position</title>
</head>
<body>

<h2>Add New position</h2>

<form action="add_position.php" method="post">
<label for="id">id:</label>
    <input type="number" name="id" required>
    <label for="position_name">position_name:</label>
    <input type="text" name="position_name" required>
    <br>
    <input type="submit" name= "submit" >
</form>

<br>

<a href="position.php">Back to position List</a>
</body>
</html>