<?php
$koneksi = mysqli_connect("localhost", "root", "", "user");
if (isset($_POST['submit'])) {
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];

    if (!empty(trim($email)) && !empty(trim($pass))) {
        // Select data based on username from the database
        $query = "SELECT * FROM user_detail WHERE user_email = '$email'";
        $result = mysqli_query($koneksi, $query);
        $num = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)) {
            $userVal = $row['user_email'];
            $passVal = $row['user_password'];
            $userName = $row['user_fullname'];
        }

        if ($num != 0) {
            if ($userVal == $email && $passVal == $pass) {
                header('Location: home.php?user_fullname=' . urlencode($userName));
            } else {
                $error  ='User atau password salah!!';
                header('Location: login.php');
            }
        } else {
            $error = 'User tidak ditemukan!';
            header('Location: login.php');
        }
    } else {
        $error = 'Data tidak boleh kosong!!';
        echo $error;
    }
}
?>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <from action="login.php" method="POST">
            <p>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email"></p>
            <p>password : <input type="password" name="txt_pass"></p>
            <button type="submit" name="submit">Sign In</button>
        </from>
        <p><a href="register.php">Daftar</p>
    </body>
</html>