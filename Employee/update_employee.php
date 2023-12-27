<?php
include 'config.php';

// ambil data di URL
$id = $_GET["id"];

// query data employee
$ops = query("SELECT * FROM employee WHERE id = $id")[0];

// cek apakah tombol submit 
if (isset($_POST["submit"])) {
    // Anda perlu memastikan bahwa fungsi update_employee() didefinisikan dan melakukan operasi pembaruan
    if (update_employee($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href='data_employee.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href='data_employee.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengubah Data</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $ops["id"]; ?>">
        <input type="text" name="first_name" value="<?= $ops["first_name"]; ?>">
        <input type="text" name="last_name" value="<?= $ops["last_name"]; ?>">
        <input type="date" name="employment_start_date" value="<?= $ops["employment_start_date"]; ?>">
        <input type="date" name="employment_end_date" value="<?= $ops["employment_end_date"]; ?>">
        <input type="text" name="position_id" value="<?= $ops["position_id"]; ?>">
        <input type="text" name="city_id" value="<?= $ops["city_id"]; ?>">
        <select name="is_active" required>
            <option value="1" <?php echo ($ops["is_active"] == "yes") ? "selected" : ""; ?>>Yes</option>
            <option value="0" <?php echo ($ops["is_active"] == "no") ? "selected" : ""; ?>>No</option>
        </select>
        <div class="form-group center">
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
</body>

</html>