<?php
session_start(); // Start the session
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get email and password from form
    $email = $_POST['username'];
    $password = $_POST['password'];

    $dbcon = mysqli_connect("localhost", "root", "", "sawmobil");
    if ($dbcon === null) {
        die("Database connection failed.");
    }

    $stmt = $dbcon->prepare("SELECT password, user_level FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password, $user_level);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            $msg = "Login Berhasil, Selamat Datang " . $row["nama_depan"];
            echo "<script type='text/javascript'>alert('$msg');</script>";
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['email'] = $email;
            $_SESSION['user_level'] = $user_level;

            // Check user level and redirect accordingly
            if ($user_level == 1) {
                header("Refresh: 0; URL = index_pengguna.php");
                exit();
            } elseif ($password === "Admin") { 
                header("Refresh: 0; URL = normalisasi.php");
                exit();
            }
        } else {
            $msg = "Username/Password Salah";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
    }
    $stmt->close();
    $dbcon->close();
}
?>
