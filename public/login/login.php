<?php
session_start();
include '../functions.php'; 

if(isset($_SESSION['login'])) {
    header('Location: ../siswa/viewsiswa.php');
}

if( isset($_POST['login'])) {

$nip = $_POST['nip'];
$password = $_POST['password'];

$result = mysqli_query($conn,"SELECT * FROM tb_petugas WHERE nip=$nip");

if (mysqli_num_rows($result) === 1 ) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['login'] = true;
    $_SESSION['level'] = $row['level'];
    $_SESSION['namaPetugas'] = $row['nama'];
    if ($password == $row['password']) {
        echo " <script>
        alert('Berhasil Login');
        document.location.href = 'register.php';
        window.location.href = '../siswa/viewsiswa.php'
        </script>";
        exit;
    } 
    $error = true;
  }
}
?>
<body>
<form action="" method="post">
    <ul>
        <?php if(isset($error)) : ?>
        <p style="color: red;">Username/Password Salah</p>
        <?php endif; ?>
        <li>
            <label for='nip'>Nip</label>
            <input type='text' id='nip' name='nip'>
        </li>
        <li>
            <label for='password'>Password</label>
            <input type='password' id='password' name='password'>
        </li>
       <button type="submit" name="login">Login</button>
    </ul>
</form>
<?php include '../views/templates/footer.php' ?>