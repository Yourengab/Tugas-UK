<?php
include '../views/templates/header.php';
$nis = $_GET['nis'];

$dataKelas = query("SELECT * FROM tb_kelas");
$dataSiswa = query("SELECT * FROM tb_siswa WHERE nis=$nis")[0];

if(isset($_POST['updateSiswa'])) {
    if(updateSiswa($_POST) > 0 ) {
        echo "<script>
        alert('Berhasil mengedit data siswa');
        window.location.href = 'viewsiswa.php';
        </script>";
    } else {
        echo "<script>
        alert('Gagal mengedit data siswa');
        window.location.href = 'viewsiswa.php';
        </script>";
    }
}

?>

<body>
  <h1>Update Data Siswa</h1>
  <form method="post">
    <ul>
      <li>

        <input type="text" id="nis" name="nis" autocomplete="off" value="<?= $dataSiswa['nis'] ?>" />
      </li>
      <li>
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" autocomplete="off" value="<?= $dataSiswa['nama'] ?>"/>
      </li>
      <li>
        <label for="kelas">Kelas</label>
        <select id="kelas" name="kelas">
          <?php foreach($dataKelas as $kelas) : ?>
          <option>
            <?= $kelas['kelas'] ?>
          </option>
          <?php endforeach; ?>
        </select>
      </li>
      <li>
        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" autocomplete="off" value="<?= $dataSiswa['alamat'] ?>"/>
      </li>
      <li>
        <label for="telp">No Telp</label>
        <input type="text" maxlength="12" id="telp" name="telp" autocomplete="off" value="<?= $dataSiswa['notelp'] ?>"/>
      </li>
      <li>
        <button type="submit" name="updateSiswa">Simpan</button>
      </li>
    </ul>
  </form>
  <a href="viewsiswa.php">Kembali</a>
  <?php include '../views/templates/footer.php' ?>
</body>
