<?php
require ('koneksi.php');
require ('query.php');

$obj = new crud;

if ($_SERVER['REQUEST_METHOD'] == 'POST'):
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];
    $name = $_POST['txt_name'];

    if ($obj->insertData($email, $pass, $name)):
        echo '<div class="alert alert-succes">Data berhasil disimpan</div>';
    else:
        echo '<div class="alert alert-danger">Data gagal disimpan</div>';
    endif;
endif;
?>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <p>email <input type="text" name="txt_email" required></p>
        <p>password : <input type="password" name="txt_pass" required></p>
        <p>nama <input type="text" name="txt_name" required></p>
        <button type="submit" name="register">Register</button>
    </form>
    <!--<p><a href="login.php">Login</a></p>-->
</body>
</html>