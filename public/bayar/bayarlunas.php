<?php 
include '../views/templates/header.php';

$idSpp = $_GET['idSpp'];
$nis = $_GET['nis'];
if(bayarLunas($idSpp,$nis) > 0 ) {
    echo "<script>
    alert('Berhasil membayar spp!');
    window.location.href = 'http://localhost/projectspp/public/bayar/pembayaran.php?nis=$nis&cariSiswa=';
    </script>";
} else {
    echo "<script>
    alert('Gagal membayar spp!');
    window.location.href = 'http://localhost/projectspp/public/bayar/pembayaran.php?nis=$nis&cariSiswa=';
    </script>";
}
?>