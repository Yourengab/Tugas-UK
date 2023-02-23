<?php 
session_start();
include '../functions.php'; 

if(!isset($_SESSION['login'])) {
  echo "<script>
  alert('Mohon login terlebih dahulu!');
  window.location.href = 'http://localhost/projectspp/public/login/login.php';
  </script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School Payment</title>
    <style>
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        nav {
            width: 100%;
            height: 60px;
            background-color: royalblue;
            margin-bottom: 50px;
            display: flex;
            align-items: center;
        }
        table {
          margin: 0 50px;
        }
        
        nav a {
            color: white;
            margin-left: 50px;
            margin-top: 0;
        }
    </style>
  </head>

  <nav>
    <a href="http://localhost/projectspp/public/siswa/viewsiswa.php">Daftar Siswa</a>
    <a href="http://localhost/projectspp/public/petugas/viewpetugas.php">Daftar Petugas</a>
    <a href="http://localhost/projectspp/public/kelas/viewkelas.php">Daftar Kelas</a>
    <a href="http://localhost/projectspp/public/bayar/pembayaran.php">Pembayaran</a>
    <a href="http://localhost/projectspp/public/histori/histori.php?keyword=">Riwayat</a>
    <a href="http://localhost/projectspp/public/login/logout.php">Logout</a>
  </nav>
</html>
