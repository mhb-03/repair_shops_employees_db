<?php
include 'config.php';
// ambil data di url
$id = $_GET["id"];
// query data customer 
$uc = query("SELECT * FROM city WHERE id = $id")[0];

// cek apakah tombol submit 
if (isset($_POST["submit"])) {

    if (update_city($_POST) > 0) {
        echo "
			<script>
			alert('Data berhasil diubah!');
			document.location.href='city.php';
			</script>

	    ";
    } else {
        echo "
            <script>
            alert('Data gagal diubah!');
            document.location.href='city.php';
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
        <input type="hidden" name="id" value="<?= $uc["id"]; ?>">
        <input type="text" name="postal_code" value="<?= $uc["postal_code"]; ?>">
        <input type="text" name="city_name" value="<?= $uc["city_name"]; ?>">
        <div class="form-group center">
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
</body>


</html>