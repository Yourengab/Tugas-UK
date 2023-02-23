<?php
include '../views/templates/header.php';

if (isset($_GET['cariSiswa'])) {
    $nis = $_GET['nis'];
    $dataSiswa = query("SELECT * FROM tb_siswa WHERE nis=$nis")[0];
    $dataSpp = query("SELECT * FROM tb_spp WHERE nis=$nis AND angkatan='I'");
    if (isset($_POST['angkatanSiswaI'])) {
        $dataSpp = query("SELECT * FROM tb_spp WHERE nis=$nis AND angkatan='I'");
    } else if (isset($_POST['angkatanSiswaII'])) {
        $dataSpp = query("SELECT * FROM tb_spp WHERE nis=$nis AND angkatan='II'");
    } else {
        $dataSpp = query("SELECT * FROM tb_spp WHERE nis=$nis AND angkatan='III'");
    }
}

?>

<body>
    <form action="" method="get">
        <ul>
            <li>
                <label for='nis'>Cari nis siswa</label>
                <input type='text' id='nis' name='nis' required>
                <label for='angkatanSiswa'></label>
            </li>
            <button type="submit" name="cariSiswa">Cari NIS</button>
        </ul>
    </form>
    <?php if (isset($_GET['cariSiswa'])) : ?>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
            </tr>
            <tr>
                <td><?= $dataSiswa['nis']; ?></td>
                <td><?= $dataSiswa['nama']; ?></td>
                <td><?= $dataSiswa['kelas']; ?></td>
            </tr>
        </table>
    <?php endif; ?>
    <form action="" method="post">
        <?php if (isset($_GET['cariSiswa'])) : ?>
            <p>Pilih Angkatan :</p>
            <button name="angkatanSiswaI">Angkatan 1</button>
            <button name="angkatanSiswaII">Angkatan 2</button>
            <button name="angkatanSiswaIII">Angkatan 3</button>
            <!-- <h2>Data SPP Angkatan <?= $dataSpp['angkatan']; ?></h2> -->
            <table border="1" cellpadding="10" cellspacing="0" w>
                <tr>
                    <th>ID</th>
                    <th>Bulan</th>
                    <th>Terbayar</th>
                    <th>Tanggal Bayar</th>
                    <th>Petugas</th>
                    <th>Keterengan</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($dataSpp as $spp) : ?>
                    <tr>
                        <td><?= $spp['id']; ?></td>
                        <td><?= $spp['bulan']; ?></td>
                        <td>Rp<?= $spp['totalbayar']; ?></td>
                        <td><?= $spp['tglbayar']; ?></td>
                        <?php
                        if ($spp['totaltagihan'] == 0) { ?>
                            <td><?= $spp['petugas'] ?></td>
                        <?php } else { ?>
                            <td>Belum dibayar</td>
                        <?php } ?>
                        
                        <?php
                        if ($spp['totaltagihan'] == 0) { ?>
                            <td>Lunas</td>
                        <?php } else { ?>
                            <td>Belum Lunas</td>
                        <?php } ?>
                        
                        <?php
                        if ($spp['totaltagihan'] == 0) { ?>
                            <td>Terbayar</td>
                        <?php } else { ?>
                            <td><a href="bayarlunas.php?idSpp=<?= $spp['id']; ?>&nis=<?= $nis; ?>">Bayar</a></td>
                        <?php } ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </form>
</body>
<?php include '../views/templates/footer.php'; ?>