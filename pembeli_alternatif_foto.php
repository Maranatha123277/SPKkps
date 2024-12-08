<?php
include 'session.php';
$result = mysqli_query($connect, "SELECT * FROM uplad WHERE Id_mobil='$_GET[Id_mobil]' ORDER BY id_file DESC LIMIT 1") or die(mysqli_error($connect));
$data = mysqli_fetch_array($result);
$file = $data['nama_file'];
if (isset($file) and !is_null($file)) {
    echo "<script type=text/javascript>
window.location.href='http://localhost/php-spk_saw_pemilihan_mobil/file/$file';
</script>";
} else {
    echo "<script type=text/javascript>
    alert('Foto Tidak ada!');
    window.history.go(-1);
</script>";
}

