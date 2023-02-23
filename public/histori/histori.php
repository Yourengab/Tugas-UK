<?php
include '../views/templates/header.php';

$dataRiwayat = query("SELECT * FROM tb_spp INNER JOIN tb_siswa using(nis) WHERE totalbayar > 0 ORDER BY tglbayar DESC");


if (isset($_GET['keyword'])) {
    if ($_GET['keyword'] == "") {
        $dataRiwayat = query("SELECT * FROM tb_spp INNER JOIN tb_siswa using(nis) WHERE totalbayar > 0 ORDER BY tglbayar DESC");
    } else {
        $keyword = $_GET['keyword'];
        $dataRiwayat = query("SELECT * FROM tb_spp INNER JOIN tb_siswa using(nis) WHERE totalbayar > 0 AND nis=$keyword ORDER BY tglbayar DESC");
    }
}


?>

<body>
    <h2>Riwayat Pembayaran</h2>
    <?php if ($_GET['keyword'] == "") { ?>
        <a href="laporan.php">Cetak</a>
    <?php } else { ?>
        <a href="laporan.php?keyword=<?= $keyword ?>">Cetak</a>
    <?php } ?>
    <br>
    <form action="histori.php" method="get">
        <label for='cariRiwayat'>Cari Riwayat Pembayaran :</label>
        <input type='text' id='cariRiwayat' name='keyword'>
        <button type="submit">Cari</button>
    </form>
    <form action="laporankelas.php" method="post">
        <hr>
        <div class="cetakKelas">
            <h3>Cetak sesuai kelas</h3>
            <select name="kelas" required>
                <option value="VII">VII</option>
                <option value="VIII">VIII</option>
                <option value="IX">IX</option>
            </select>
            <select name="angkatan" required>
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
            </select>
            <button type="submit" name="cariKelas">Cetak</button>
        </div>
    </form>
    <br>
    <table border="1" cellpadding="5">
        <tr>
            <th>Petugas</th>
            <th>NIS Siswa</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Bulan</th>
            <th>Tanggal Bayar</th>
            <th>Total Bayar</th>
        </tr>
        <?php foreach ($dataRiwayat as $riwayat) : ?>
            <tr>
                <td><?= $riwayat['petugas']; ?></td>
                <td><?= $riwayat['nis']; ?></td>
                <td><?= $riwayat['nama']; ?></td>
                <td><?= $riwayat['id_kelas']; ?></td>
                <td><?= $riwayat['bulan']; ?></td>
                <td><?= $riwayat['tglbayar']; ?></td>
                <td><?= $riwayat['totalbayar']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="../siswa/viewsiswa.php">Kembali</a>
    <?php include '../views/templates/footer.php'; ?>