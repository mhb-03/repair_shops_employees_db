<?php
include 'config.php';
// ambil data di url
$id = $_GET["id"];
// query data customer 
$ops = query("SELECT * FROM employee_position WHERE id = $id")[0];

// cek apakah tombol submit 
if (isset($_POST["submit"])) {

    if (update_cust($_POST) > 0) {
        echo "
			<script>
			alert('Data berhasil diubah!');
			document.location.href='employee_position.php';
			</script>

	";
    } else {
        echo "
            <script>
            alert('Data gagal diubah!');
            document.location.href='employee_position.php';
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
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $ops["id"]; ?>">
        <input type="text" name="position_name" value="<?= $ops["position_name"]; ?>">
        <div class="form-group  center">
            <button type="submit" name="submit">Submit</button>
        </div>

</head>

<body>

</body>

</html>