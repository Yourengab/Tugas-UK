<?php 
include '../views/templates/header.php';

$dataPetugas = query("SELECT * FROM tb_petugas");

if(isset($_POST['cariSiswa'])) {
    $keyword =  $_POST['keyword'];
    
    $dataPetugas = query("SELECT * FROM tb_petugas WHERE
    nama LIKE '%$keyword%' OR
    nip = '$keyword'
    ");
}
?>
<body>
<form action="" method="post">
        <label for='keyword'>Cari Siswa</label>
        <input type='text' id='keyword' name='keyword'>
        <button type="submit" name="cariSiswa">Cari Siswa</button>
    </form>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Nip</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <?php foreach(  $dataPetugas as $petugas ) : ?>
                <td><?= $petugas['nip']; ?></td>
                <td><?= $petugas['nama']; ?></td>
                <td><?= $petugas['alamat']; ?></td>
                <td><?= $petugas['notelp']; ?></td>
                <td>
                    <a href="updatepetugas.php?nip=<?= $petugas['nip']; ?>">Edit</a> ||
                    <a href="deletepetugas.php?nip=<?= $petugas['nip']; ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </table>
    <a href="tambahpetugas.php">Tambah Petugas</a>
<?php 
include '../views/templates/footer.php'
?>