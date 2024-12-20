<?php
require 'prosesregistrasi.php';
require 'registrasiberhasil.php';

if (isset($_POST["registrasi"])) {
    if (registrasi($_POST) > 0) {
        msg();
    } else {
        echo mysqli_error($conn);
    }
}

$error_message = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SPK SAW</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/my-login.css">
    <script>
        function validateForm() {
            const email = document.forms["registrationForm"]["email"].value;
            const password = document.forms["registrationForm"]["password"].value;
            const telepon = document.forms["registrationForm"]["Telepon"].value;

            if (email === "") {
                alert("Email harus diisi");
                return false;
            }
            if (password === "") {
                alert("Password harus diisi");
                return false;
            }
            if (telepon === "") {
                alert("No Telepon harus diisi");
                return false;
            }
            return true; // All validations passed
        }
    </script>
</head>

<body class="my-login-page" style="background-image: url(assets/img/loginregis.jpg); background-size: 100% 100%; background-attachment:fixed; overflow-y: hidden;">
    <nav class="navbar sticky-top navbar-light" style="background-color: #F3672B;">
        <a href="index.php"><img src="assets/img/loginregis.png" alt="" width="120px" height="120px"></a>
    </nav>

    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper" style="margin-top: 30px;">
                    <div class="card fat" style="width: 800px; background-color:#80000000; border:none;">
                        <div class="card-body">
                            <h1 class="card-title text-center text-white">Registrasi</h1>
                            <?php if ($error_message): ?>
                                <div class="alert alert-danger text-center"><?php echo $error_message; ?></div>
                            <?php endif; ?>
                            <form name="registrationForm" method="POST" class="my-register-validation" novalidate="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="return validateForm();">
                                <div class="form-group text-white">
                                    <label for="name">Nama Depan</label>
                                    <input id="name" style="background-color:#80000000; border-color:#F3672B; color:white;" type="text" class="form-control" name="nama_depan" required autofocus>
                                    <div class="invalid-feedback">
                                        Siapa nama anda?
                                    </div>
                                </div>
                                <div class="form-group text-white">
                                    <label for="name">Nama Belakang</label>
                                    <input id="name" style="background-color:#80000000; border-color:#F3672B; color:white;" type="text" class="form-control" name="nama_belakang" required>
                                    <div class="invalid-feedback">
                                        Siapa nama anda?
                                    </div>
                                </div>
                                <div class="form-group text-white">
                                    <label for="email">Email</label>
                                    <input id="email" style="background-color:#80000000; border-color:#F3672B; color:white;" type="email" class="form-control" name="email" required>
                                    <div class="invalid-feedback">
                                        Email harus diisi
                                    </div>
                                </div>
                                <div class="form-group text-white">
                                    <label for="password">Password</label>
                                    <input id="password" style="background-color:#80000000; border-color:#F3672B; color:white;" type="password" class="form-control" name="password" required data-eye>
                                    <div class="invalid-feedback">
                                        Password harus diisi
                                    </div>
                                </div>
                                <div class="form-group text-white">
                                    <label for="Telepon">No Telepon</label>
                                    <input id="Telepon" style="background-color:#80000000; border-color:#F3672B; color:white;" type="text" pattern="[0-9]*" class="form-control" name="Telepon" required>
                                    <div class="invalid-feedback">
                                        No.Telepon harus diisi
                                    </div>
                                </div>
                                <div class="form-group text-white">
                                    <label for="level">Registrasi Sebagai?</label>
                                    <select class="form-control text-white" style="background-color:#80000000; border-color:#F3672B;" id="level" name="level">
                                        <option value="1" style="color: black;">User</option>
                                        <option value="2" style="color: black;">Admin</option>
                                    </select>
                                </div>
                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-outline-secondary btn-block text-white" name="registrasi">
                                        Registrasi
                                    </button>
                                </div>
                                <div class="mt-4 text-center text-white">
                                    Sudah Punya Akun? <a href="login.php" style="color:#F3672B;">Login</a>
                                </div>
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