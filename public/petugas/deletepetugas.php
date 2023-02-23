<?php
include '../views/templates/header.php';

if(deletePetugas($_GET['nip']) > 0 ) {
    echo "<script>
    alert('Berhasil Menghapus Petugas!');
    window.location.href = 'viewpetugas.php';
    </script>";
} else {
    echo "<script>
    alert('Gagal Menghapus Petugas!');
    window.location.href = 'viewpetugas.php';
    </script>";
}
?>