<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "spp";
$conn = mysqli_connect($host, $user, $password, $db);


function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);

    $datas = [];
    while ($data = mysqli_fetch_assoc($result)) {
        $datas[] = $data;
    }
    return $datas;
}

function tambahKelas($dataKelas)
{
    global $conn;

    $kelas = $dataKelas['kelas'];
    $nominal = $dataKelas['nominalspp'];

    $query = "INSERT INTO tb_kelas VALUES(
 '',
 '$kelas','',
  $nominal
 );";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// Tambah Spp
function tambahSpp($nis, $kelas)
{
    global $conn;

    $sppVII = query("SELECT nominalspp from tb_kelas WHERE kelas='VII'")[0]['nominalspp'];
    $sppVIII = query("SELECT nominalspp from tb_kelas WHERE kelas='VIII'")[0]['nominalspp'];
    $sppIX = query("SELECT nominalspp from tb_kelas WHERE kelas='IX'")[0]['nominalspp'];

    $tahunI = date("Y");
    $tahunII = date("Y", strtotime("+1 year"));
    $tahunIII = date("Y", strtotime("+2 years"));
    $tahunIII = date("Y", strtotime("+2 years"));
    $tahunIIII = date("Y", strtotime("+3 years"));

    $query = "INSERT INTO tb_spp VALUES
  ('',$nis,'$kelas','','Juni $tahunI','I',$sppVII,'',''),
  ('',$nis,'$kelas','','Juli $tahunI','I',$sppVII,'',''),
  ('',$nis,'$kelas','','Agustus $tahunI','I',$sppVII,'',''),
  ('',$nis,'$kelas','','September $tahunI','I',$sppVII,'',''),
  ('',$nis,'$kelas','','Oktober $tahunI','I',$sppVII,'',''),
  ('',$nis,'$kelas','','November $tahunI','I',$sppVII,'',''),
  ('',$nis,'$kelas','','Desember $tahunI','I',$sppVII,'',''),
  ('',$nis,'$kelas','','Januari $tahunII','I',$sppVII,'',''),
  ('',$nis,'$kelas','','Februari $tahunII','I',$sppVII,'',''),
  ('',$nis,'$kelas','','Maret $tahunII','I',$sppVII,'',''),
  ('',$nis,'$kelas','','April $tahunII','I',$sppVII,'',''),
  ('',$nis,'$kelas','','Mei $tahunII','I',$sppVII,'',''),
  ('',$nis,'$kelas','','Juni $tahunII','II',$sppVIII,'',''),
  ('',$nis,'$kelas','','Juli $tahunII','II',$sppVIII,'',''),
  ('',$nis,'$kelas','','Agustus $tahunII','II',$sppVIII,'',''),
  ('',$nis,'$kelas','','September $tahunII','II',$sppVIII,'',''),
  ('',$nis,'$kelas','','Oktober $tahunII','II',$sppVIII,'',''),
  ('',$nis,'$kelas','','November $tahunII','II',$sppVIII,'',''),
  ('',$nis,'$kelas','','Desember $tahunII','II',$sppVIII,'',''),
  ('',$nis,'$kelas','','Januari $tahunIII','II',$sppVIII,'',''),
  ('',$nis,'$kelas','','Februari $tahunIII','II',$sppVIII,'',''),
  ('',$nis,'$kelas','','Maret $tahunIII','II',$sppVIII,'',''),
  ('',$nis,'$kelas','','April $tahunIII','II',$sppVIII,'',''),
  ('',$nis,'$kelas','','Mei $tahunIII','II',$sppVIII,'',''),
  ('',$nis,'$kelas','','Juni $tahunIII','III',$sppIX,'',''),
  ('',$nis,'$kelas','','Juli $tahunIII','III',$sppIX,'',''),
  ('',$nis,'$kelas','','Agustus $tahunIII','III',$sppIX,'',''),
  ('',$nis,'$kelas','','September $tahunIII','III',$sppIX,'',''),
  ('',$nis,'$kelas','','Oktober $tahunIII','III',$sppIX,'',''),
  ('',$nis,'$kelas','','November $tahunIII','III',$sppIX,'',''),
  ('',$nis,'$kelas','','Desember $tahunIII','III',$sppIX,'',''),
  ('',$nis,'$kelas','','Januari $tahunIIII','III',$sppIX,'',''),
  ('',$nis,'$kelas','','Februari $tahunIIII','III',$sppIX,'',''),
  ('',$nis,'$kelas','','Maret $tahunIIII','III',$sppIX,'',''),
  ('',$nis,'$kelas','','April $tahunIIII','III',$sppIX,'',''),
  ('',$nis,'$kelas','','Mei $tahunIIII','III',$sppIX,'','')";


    mysqli_query($conn, $query);
}
// Function Petugas
function tambahPetugas($data)
{
    global $conn;

    $nip = $data['nip'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $telp = $data['telp'];
    $password = 'petugasbaranaya';

    $query = "INSERT INTO tb_petugas VALUES($nip,'$nama','$alamat','$telp','petugas','$password');";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function deletePetugas($nip)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM tb_petugas WHERE nip=$nip");
    return mysqli_affected_rows($conn);
}

function updatePetugas($data)
{
    global $conn;

    $nip = $data['nip'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $telp = $data['telp'];
    $password = 'petugasbaranaya';

    $query = ("UPDATE tb_petugas SET
  nip = $nip,
  nama = '$nama',
  alamat = '$alamat',
  notelp = '$telp'
  WHERE nip=$nip");

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
// Function Siswa
function tambahSiswa($dataSiswa)
{
    global $conn;

    $nis = $dataSiswa['nis'];
    $nama = $dataSiswa['nama'];
    $kelas = $dataSiswa['kelas'];
    $alamat = $dataSiswa['alamat'];
    $telp = $dataSiswa['telp'];
    $password = 'siswabaranaya';


    $query = "INSERT INTO tb_siswa VALUES(
    $nis,
    '$nama',
    '$kelas',
    '$alamat',
    '$telp',
    'siswa',
    '$password'
  );";

    mysqli_query($conn, $query);
    tambahSpp($nis, $kelas);
    return mysqli_affected_rows($conn);
}

function deleteSiswa($nis)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_siswa WHERE nis=$nis");

    return mysqli_affected_rows($conn);
}
function bayarLunas($id, $nis)
{
    global $conn;

    $kelas = query("SELECT kelas FROM tb_spp WHERE id=$id")[0];
    if ($kelas['kelas'] == "IX") {
        $spp = query("SELECT nominalspp from tb_kelas WHERE kelas='IX'")[0];
    }
    if ($kelas['kelas'] == "VIII") {
        $spp = query("SELECT nominalspp from tb_kelas WHERE kelas='VIII'")[0];
    }
    if ($kelas['kelas'] == "VII") {
        $spp = query("SELECT nominalspp from tb_kelas WHERE kelas='VII'")[0];
    }

    $spp = $spp['nominalspp'];
    $petugas = $_SESSION['namaPetugas'];

    $query = "UPDATE tb_spp SET totalbayar='$spp',totaltagihan='0',tglbayar=NOW(),petugas='$petugas' WHERE id=$id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function updateSiswa($data)
{
    global $conn;
    $nis = $data['nis'];
    $nama = $data['nama'];
    $kelas = $data['kelas'];
    $alamat = $data['alamat'];
    $telp = $data['telp'];
    $password = 'siswabaranaya';
    $query = "UPDATE tb_siswa SET nis =
'$nis', nama = '$nama', kelas = '$kelas','', alamat = '$alamat', notelp = '$telp', level = 'siswa', password = '$password' WHERE nis=$nis";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}