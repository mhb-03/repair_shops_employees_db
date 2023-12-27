<?php
// Include file koneksi dan fungsi query
include 'config.php';
$conn = mysqli_connect("localhost", "root", "", "repair_shops_employees");
// Cek apakah form telah di-submit
if (isset($_POST['submit'])) {
    // Panggil fungsi tambah
    if (tambah($_POST) > 0) {
        echo "<script>
			alert('Data berhasil ditambahkan!');
			document.location.href='data_employee.php';
			</script>";
    } else {
        echo "<script>
			alert('Data gagal ditambahkan!');
			document.location.href='data_employee.php';
			</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>

<h2>Add New Employee</h2>

<form action="add_employee.php" method="post">
<label for="id">id:</label>
    <input type="number" name="id" required>
    <label for="first_name">first_name:</label>
    <input type="text" name="first_name" required>
    <label for="last_name">last_name:</label>
    <input type="text" name="last_name" required>
    <label for="employment_start_date">employment_start_date:</label>
    <input type="date" name="employment_start_date" required>
    <label for="employment_end_date">employment_end_date:</label>
    <input type="date" name="employment_end_date" required>
    <label for="position_id">position_id:</label>
    <input type="number" name="position_id" required>
    <label for="city_id">city_id:</label>
    <input type="number" name="city_id" required>
    <label for="is_active">Is Active:</label>
    <select name="is_active" required>
        <option value="1">Yes</option> 
        <option value="0">No</option>
    </select>
    <br>
    <input type="submit" name= "submit" >
</form>

<br>

<a href="data_employee.php">Back to Employee List</a>
</body>
</html>