<?php

include 'config.php'; 

$id = $_GET["id"];

if (hapus_repair ($id) > 0) {
    echo "
        <script>
        alert('Data berhasil dihapus!');
        document.location.href='repair_shop.php';
        </script>
    ";
} else {
    echo "
        <script>
        alert('Gagal menghapus data!');
        document.location.href='repair_shop.php';
        </script>
    ";
}

?>
