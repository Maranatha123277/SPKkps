<?php
include "koneksi.php";
$idm = $_GET["Id_mobil"];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SPK Pembelian Mobil Bekas</title>
    <link rel="icon" type="image/x-icon" href="assets/img/PANCAR MOBILfix.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>

    <div class="container-fluid" style="background-color:  #F3672B;">
        <div class="navbar-header" style="background-color:  #F3672B;">
            <a href="#"><img src="assets/img/loginregis.png" alt="" width="120px" height="120px"></a>

        </div>
        <ul class="nav navbar-nav">
            <br>
            <li><a href="alternatif.php" style="color: white;"> <b>Alternatif</b></a></li>
            <li><a href="kriteria.php" style="color: white;"> <b>Kriteria</b></a></li>
            <li><a href="subkriteria.php" style="color: white;"> <b>Sub Kriteria</b></a></li>
            <li><a href="normalisasi.php" style="color: white;"> <b>Pembobotan</b></a></li>
            <li><a href="logout.php" style="color: white;"> <b>Logout</b></a></li>
        </ul>
    </div>



    <div id="page-inner" style="padding: 100px; ">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Uplad Foto Mobil</h1>
            </div>

            <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Form Tambah Alternatif
                        </div>
                        <div class="panel-body">
                       <form action="alternatif_tambah.php" method="post" name="form1">
                        <fieldset>
                        <div class="form-group">
                        <label for="">Id</label>
                        <input type="text" class="form-control" name="id_hp" placeholder="Id" />
                      </div>
                      <div class="form-group">
                        <label for="">Merek Smartphone</label>
                        <input type="text" class="form-control" name="merk_hp" placeholder="Merek Smartphone" />
                      </div>
                      <div class="form-group">
                        <label for="">Tahun Keluaran</label>
                        <input type="text" class="form-control" name="thn_hp" placeholder="Tahun Keluaran" />
                      </div>
            </fieldset>
                      <input type="submit" name="input" value="Submit" class="btn btn-primary btn-sm">
                      
                               
                           </form>
                            </div>
                            </div>
                            
                    </div> -->
            <?php
            if (isset($_POST['upload'])) {
                $idm1 = $_GET["Id_mobil"];
                $ekstensi_diperbolehkan    = array('png', 'jpg');
                $nama = $_FILES['file']['name'];
                $x = explode('.', $nama);
                $ekstensi = strtolower(end($x));
                $ukuran    = $_FILES['file']['size'];
                $file_tmp = $_FILES['file']['tmp_name'];
                if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                    if ($ukuran < 1044070000000000000) {
                        
                        $result = mysqli_query($connect, "INSERT INTO uplad(id_file, Id_mobil, nama_file) VALUES('', '$_GET[Id_mobil]', '$nama')");
                        if ($result) {
                            move_uploaded_file($file_tmp, 'file/' . $nama);
                            echo 'FILE BERHASIL DI UPLOAD';
                            echo "<script type=text/javascript>
                                alert('FILE BERHASIL DI UPLOAD');
                                window.location.href='http://localhost/php-spk_saw_pemilihan_mobil/alternatif.php';
                                </script>";
                        } else {
                            echo 'GAGAL MENGUPLOAD GAMBAR '.$_GET['Id_mobil'];
                        }
                    } else {
                        echo 'UKURAN FILE TERLALU BESAR';
                    }
                } else {
                    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                }
            }
            ?>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Uplad Foto Mobil
                    </div>
                    <div class="panel-body">
                        <?php
                        $result = mysqli_query($connect, "SELECT * FROM alternatifhp WHERE Id_mobil='$_GET[Id_mobil]'") or die(mysqli_error($connect));
                        $data = mysqli_fetch_array($result);
                        ?>
                        <form action="alternatif_uplad_foto.php?Id_mobil=<?php echo $idm; ?>" method="post" name="form1" enctype="multipart/form-data">
                            <table width="25%" border="0">
                                <input type="file" name="file">
                                <input type="submit" name="upload" value="Upload">
                            </table>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>




    <footer>
        &copy; 2024 PANCAR | By : <a href="#" target="_blank">PANCAR MOBIL</a>
    </footer>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>