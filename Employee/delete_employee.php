<?php

include 'config.php'; 

$id = $_GET["id"];

if (delete_employee ($id) > 0) {
    echo "
        <script>
        alert('Data berhasil dihapus!');
        document.location.href='data_employee.php';
        </script>
    ";
} else {
    echo "
        <script>
        alert('Gagal menghapus data!');
        document.location.href='data_employee.php';
        </script>
    ";
}

?>
