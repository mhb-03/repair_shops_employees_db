<?php

include 'config.php'; 

$id = $_GET["id"];

if (hapus_city ($id) > 0) {
    echo "
        <script>
        alert('Data berhasil dihapus!');
        document.location.href='city.php';
        </script>
    ";
} else {
    echo "
        <script>
        alert('Gagal menghapus data!');
        document.location.href='city.php';
        </script>
    ";
}

?>
