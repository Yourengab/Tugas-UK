<?php
include '../views/templates/header.php';

if (isset($_POST['tambahSiswa'])) {
    if (tambahSiswa($_POST) > 0) {
        echo "<script>
        alert('Berhasil Menambah Siswa');
        window.location.href = 'viewsiswa.php';
        </script>";
    } else {
        echo "<script>
        alert('Gagal Menambah Siswa');
        window.location.href = 'viewsiswa.php';
        </script>";
    }
}

$dataKelas = query("SELECT * FROM tb_kelas");

?>
<body>
    <h1>Tambah Siswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for='nis'>Nis</label>
                <input type='text' id='nis' name='nis' autocomplete="off" maxlength="4">
            </li>
            <li>
                <label for='nama'>Nama</label>
                <input type='text' id='nama' name='nama' autocomplete="off">
            </li>
            <li>
                <label for='kelas'>Kelas</label>
                <select id="kelas" name="kelas">
                    <?php foreach( $dataKelas as $kelas ) : ?>
                        <option><?= $kelas['kelas'] ?></option>
                    <?php endforeach; ?>
                </select>
            </li>
            <li>
                <label for='alamat'>Alamat</label>
                <input type='text' id='alamat' name='alamat' autocomplete="off">
            </li>
            <li>
                <label for='telp'>No Telp</label>
                <input type='text' maxlength="12" id='telp' name='telp' autocomplete="off">
            </li>
            <li>
                <button type="submit" name="tambahSiswa">Tambah Siswa</button>
            </li>
        </ul>
    </form>
    <a href="viewsiswa.php">Kembali</a>
<?php include '../views/templates/footer.php' ?>