<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="fa/css/all.min.css">
    <link rel="stylesheet" href="boot/css/bootstrap.min.css">
</head>

<body>
    <style>
    body {
        background-color: #f5f5f5;
    }

    .login {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 10px;
        border-radius: 20px;
        background-color: #fff;
        width: 18rem;

    }
    </style>

    <div class="login shadow shadow-lg p-4">
        <h2 class="text-center">Login</h2>
        <?php
if (isset($_GET['ket']) && $_GET['ket'] == 'gagal') {
    echo '<div class="alert alert-danger alert_dismissible fade show">
    gagal
</div>';
}
        ?>

        <form action="proses_login.php" method="post">
            <div class="form-group mt-2">
                <label for="">User Name</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group mt-2">
                <label for="password">Password</label>
                <input type="text" class="form-control" name="password">
            </div>

            <a href="lupa_password.php">Lupa Password?</a>
            <div class="row p-3">
                <input type="submit" class="btn btn-primary">
            </div>

        </form>
    </div>
    <script src="fa/js/all.min.js"></script>
    <script src="boost/js/bootstrap.min.js"></script>
    <script src="jquery.js"></script>
</body>

</html>