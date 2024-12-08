<?php

                    // Check If form submitted, insert form data into users table.
                   
                        $idm = $_GET['Id_mobil'];
                        

                        // include database connection file
                        include("koneksi.php");

                        // Insert user data into table
                        $result = mysqli_query($connect, "DELETE from alternatifhp  WHERE Id_mobil=$idm");

                        // Show message when user added
                       header("location:penjual_alternatif.php");
                       echo "<script type=text/javascript>
                       window.location.href='http://localhost/php-spk_saw_pemilihan_mobil/penjual_alternatif.php';
                       </script>";
                     ?>