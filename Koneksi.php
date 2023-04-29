<?php
    //cara menyertakan file
    include("Konfigurasi.php");
    
    $cnn = mysqli_connect(DBHOST, DBUSERNAME, DBPASS, DBNAME, DBPORT) or die ("Koneksi ke DBMS gagal");