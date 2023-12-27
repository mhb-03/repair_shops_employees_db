<?php
include 'config.php';
// ambil data di url
$id = $_GET["id"];
// query data customer 
$ops = query("SELECT * FROM repair_shop WHERE id = $id")[0];

// cek apakah tombol submit 
if (isset($_POST["submit"])) {

    if (update_repair($_POST) > 0) {
        echo "
			<script>
			alert('Data berhasil diubah!');
			document.location.href='repair_shop.php';
			</script>

	";
    } else {
        echo "
            <script>
            alert('Data gagal diubah!');
            document.location.href='repair_shop.php';
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
        <input type="text" name="shop_name" value="<?= $ops["shop_name"]; ?>">
        <input type="text" name="address" value="<?= $ops["address_name"]; ?>">
        <input type="text" name="details" value="<?= $ops["details_name"]; ?>">
        <input type="text" name="city_id" value="<?= $ops["city_id"]; ?>">
        <div class="form-group center">
            <button type="submit" name="submit">Submit</button>
        </div>

</head>

<body>

</body>

</html>