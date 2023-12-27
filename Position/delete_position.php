<?php

include 'config.php'; 

$id = $_GET["id"];

if (hapus_position ($id) > 0) {
    echo "
        <script>
        alert('Data berhasil dihapus!');
        document.location.href='employee_position.php';
        </script>
    ";
} else {
    echo "
        <script>
        alert('Gagal menghapus data!');
        document.location.href='employee_position.php';
        </script>
    ";
}

?>
