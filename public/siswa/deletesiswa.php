<?php 
include '../functions.php';

if(deleteSiswa($_GET['nis']) > 0) {
    echo "<script>
    alert('Berhasil Menghapus Siswa!');
    window.location.href = 'viewsiswa.php';
    </script>";
} else {
    echo "<script>
    alert('Gagal Menghapus Siswa!');
    window.location.href = 'viewsiswa.php';
    </script>";
}
?>