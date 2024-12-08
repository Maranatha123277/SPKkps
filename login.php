<?php
require 'proses-login.php';

?>

<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sistem Pendukung Keputusan SAW</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/my-login.css">
</head>


<nav class="navbar sticky-top navbar-light" style="background-color: #F3672B;">
<a href="index.php"><img  src="assets/img/loginregis.png" alt="" width="100px" height="100px"></a>    

</nav>

<body class="my-login-page" style="background-image: url(assets/img/loginregis.jpg); background-size: 100% 100%; background-attachment:fixed; overflow-y: hidden;">




<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper" style="margin-top: 100px;">
                <div class="card fat" style="width: 400px; height: 350px; background-color: rgba(128, 0, 0, 0.8); border: none;">
                    <div class="card-body">
                        <h1 class="card-title text-center text-white">Login Page</h1>
                        <form action="proses-login.php" method="POST">
                        <form method="POST" class="my-login-validation" novalidate="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                            <div class="form-group text-white">
                                <label for="username">Email</label>
                                <input id="username" style="background-color: rgba(128, 0, 0, 0.8); border-color: #F3672B;" type="email" class="form-control text-white" name="username" required>
                              
                            </div>
                            <div class="form-group text-white">
                                <label for="password">Password</label>
                                <input id="password" type="password" style="background-color: rgba(128, 0, 0, 0.8); border-color: #F3672B; color: white;" class="form-control" name="password" required data-eye>
                                
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                            <label class="form-check-label text-white" for="exampleCheck1">Belum Punya Akun? <a href="register.php" style="color:#F3672B;">Registrasi</a></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/my-login.js"></script>
</body>
</html>
