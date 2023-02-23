<?php
include '../views/templates/header.php';

if (isset($_POST['tambahPetugas'])) {
    if (tambahPetugas($_POST) > 0) {
        echo "<script>
        alert('Berhasil Menambah Petugas!');
        window.location.href = 'viewpetugas.php';
        </script>";
    } else {
        echo "<script>
        alert('Gagal Menambah Petugas!');
        window.location.href = 'viewpetugas.php';
        </script>";
    }
}

?>
<body>
    <h1>Tambah Petugas</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for='nip'>Nip</label>
                <input type='text' id='nip' name='nip' autocomplete="off" maxlength="4">
            </li>
            <li>
                <label for='nama'>Nama</label>
                <input type='text' id='nama' name='nama' autocomplete="off">
            </li>
            <li>
              <label for='alamat'>Alamat</label>
              <input type='text' id='alamat' name='alamat'>
            </li>
            <li>
                <label for='telp'>No Telp</label>
                <input type='text' maxlength="12" id='telp' name='telp' autocomplete="off">
            </li>
            <li>
                <button type="submit" name="tambahPetugas">Tambah Petugas</button>
            </li>
        </ul>
    </form>
    <a href="viewsiswa.php">Kembali</a>
<?php include '../views/templates/footer.php' ?>