<?php
session_start();

$email = $_SESSION['username'];
require('./koneksi.php');

function query($query)
{
    global $dbcon;
    $result = mysqli_query($dbcon, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
$cust = query("SELECT * FROM users WHERE userid= '$email'")[0];
// echo $cust["first_name"];
$id = $cust["userid"];
?>