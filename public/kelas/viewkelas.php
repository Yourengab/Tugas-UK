<?php 
include '../views/templates/header.php';
$dataKelas = query("SELECT * FROM tb_kelas")
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas</title>
</head>
<body>
    <table border="1" cellpadding="5">
        <tr>
            <th>Id Kelas</th>
            <th>Kelas</th>
            <th>Nominal Spp</th>
        </tr>
        <?php foreach(  $dataKelas as $kelas ) : ?>
        <tr>
            <td><?= $kelas['idkelas']; ?></td>
            <td><?= $kelas['kelas']; ?></td>
            <td><?= $kelas['nominalspp']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="naikelas.php">Naik Kelas</a>
    <a href="tambahkelas.php">Tambah Kelas</a>
<?php include '../views/templates/footer.php' ?>
