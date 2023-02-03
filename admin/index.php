<?php
include '../page/connect.php';
if (isset($_POST['login'])) {

    $username = $_POST['nama'];
    $password = $_POST['password'];

    $cek_user = mysqli_query($koneksi, "SELECT * FROM user WHERE nama = '$username'");

    $user_valid = mysqli_fetch_array($cek_user);

    // uji jika username terdaftar
    if ($user_valid) {
        if ($password == $user_valid['password'] && $username == $user_valid['nama']) {
            session_start();
            $_SESSION['id'] = $user_valid['id'];

            header('location: dashboard.php');
        } else {
            header("index.php");
        }
    } else {

        header("index.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        .main {
            height: 100vh;
            box-sizing: border-box;
        }

        .login-box {
            width: 500px;
            border: solid 1px;
            padding: 30px;
            border-radius: 20px;

        }

        form div {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="main d-flex justify-content-center align-items-center">
        <div class="login-box">
            <form action="" method="POST">
                <div>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="nama" class="form-control" id="username" required>
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control rounded-pill" name="login">Login</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>