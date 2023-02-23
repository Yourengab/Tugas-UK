<?php
include '../views/templates/header.php';

if (isset($_POST['tambahKelas'])) {
    if (tambahKelas($_POST) > 0) {
        echo "<script>
        alert('Berhasil Menambah Kelas');
        window.location.href = 'viewkelas.php';
        </script>";
    }
}
?>
<body>
    <h1>Tambah Kelas</h1>
    <form method="post">
        <ul>
            <li>
                <label for='kelas'>Kelas</label>
                <input type='text' id='kelas' name='kelas'>
            </li>
            <li>
                <label for='nominalspp'>Nominal spp</label>
                <input type='text' id='nominalspp' name='nominalspp'>
            </li>
            <li>
                <button type="submit" name="tambahKelas">Tambah Kelas</button>
            </li>
        </ul>
    </form>
    <a href="viewkelas.php">Kembali</a>
<?php include '../views/templates/footer.php' ?>
