<?php
include '../views/templates/header.php';

$nip = $_GET["nip"];
$dataPetugas = query("SELECT * FROM tb_petugas WHERE nip=$nip")[0];

if (isset($_POST['updatePetugas'])) {
    if (updatePetugas($_POST) > 0) {
        echo "<script>
        alert('Berhasil Mengedit data Petugas!');
        window.location.href = 'viewpetugas.php';
        </script>";
    } else {
        echo "<script>
        alert('Gagal Mengedit data Petugas!');
        window.location.href = 'viewpetugas.php';
        </script>";
    }
}

?>
<body>
    <h1>Update Petugas</h1>
    <form action="" method="post">
        <ul>
                <input type='text' id='nip' name='nip' autocomplete="off" maxlength="4" value="<?= $dataPetugas['nip'] ?>" hidden>
            <li>
                <label for='nama'>Nama</label>
                <input type='text' id='nama' name='nama' autocomplete="off" value="<?= $dataPetugas['nama'] ?>">
            </li>
            <li>
              <label for='alamat'>Alamat</label>
              <input type='text' id='alamat' name='alamat' value="<?= $dataPetugas['alamat'] ?>">
            </li>
            <li>
                <label for='telp'>No Telp</label>
                <input type='text' maxlength="12" id='telp' name='telp' autocomplete="off" value="<?= $dataPetugas['notelp'] ?>">
            </li>
            <li>
                <button type="submit" name="updatePetugas">Simpan</button>
            </li>
        </ul>
    </form>
    <a href="viewpetugas.php">Kembali</a>
<?php include '../views/templates/footer.php' ?>