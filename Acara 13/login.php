<?php
require('koneksi.php');
session_start(); 

if (isset($_POST['submit'])) {
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];
    /*
    $emailCheck = mysqli_real_escape_string($koneksii, $email);
    $passCheck = mysqli_real_escape_string($koneksii, $pass);
    */
    if (!empty(trim($email)) && !empty(trim($pass))) {
        // Select data based on email from the database
        $query = "SELECT * FROM user_detail WHERE email = '$email'";
        $result = mysqli_query($koneksi, $query);
        $num = mysqli_num_rows($result);
        
            $row = mysqli_fetch_array($result);
            $id = $row['id'];
            $userVal = $row['user_email'];
            $passVal = $row['user_password'];
            $userName = $row['user_fullname'];
            $level = $row['level'];

        if ($num != 0) {
            if ($userVal == $email && $passVal == md5($pass)) {
                header('location: home.php'); 
            } else {
                $error = 'User atau password salah!';
                header('location: login.php');
            }
        } else {
            $error = 'User not found!';
            header('location: login.php'); 
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
    <form action="login.php" method="POST">
        <p>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email"></p>
        <p>password: <input type="password" name="txt_pass"></p>
        <button type="submit" name="submit">Sign In</button>
    </form>
</body>
</html>