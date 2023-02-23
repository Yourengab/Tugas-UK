<?php 
    include '../views/templates/header.php';
    $dataSiswa = query("SELECT * FROM tb_siswa"); 

    if(isset($_POST['cariSiswa'])) {
        $keyword =  $_POST['keyword'];
        
        $dataSiswa = query("SELECT * FROM tb_siswa WHERE
        nama LIKE '%$keyword%' OR
        nis = '$keyword'
        ");
    }
?>

<head>
    <style>
        .edit,
        .delete {
            color: #888;
            text-decoration: none;
        }

        .delete {
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for='keyword'>Cari Siswa</label>
        <input type='text' id='keyword' name='keyword'>
        <button type="submit" name="cariSiswa">Cari Siswa</button>
    </form>
    <table border="1" cellpadding="5">
        <tr>
            <th>Nis</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Aksi</th>
        </tr>
        <?php foreach(  $dataSiswa as $siswa ) : ?>
        <tr>
            <td><?= $siswa['nis'] ?></td>
            <td><?= $siswa['nama'] ?></td>
            <td><?= $siswa['kelas'] ?></td>
            <td><?= $siswa['alamat'] ?></td>
            <td><?= $siswa['notelp'] ?></td>
            <td>
                <a href="updatesiswa.php?nis=<?= $siswa['nis']; ?>" class="edit">EDIT</a> ||
                <a href="deletesiswa.php?nis=<?= $siswa['nis']; ?>" class="delete" onclick="return confirm('Ingin Menghapus Data Siswa Ini?')">DELETE</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="tambahsiswa.php">Tambah Siswa</a>
    <?php include '../views/templates/footer.php'; ?>

