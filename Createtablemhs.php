<?php
    include("Konfigurasi.php");
    
    $cnn = mysqli_connect(DBHOST, DBUSERNAME, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $mhs = "tbMHS";
        $sql = "CREATE TABLE $mhs(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(35),
            nim VARCHAR(10),
            alamat VARCHAR(255),
            telp VARCHAR(15), 
            prodi VARCHAR(35),
            jeniskelamin VARCHAR(1),
            tgllahir DATE
        )"; 
        $hasil  = mysqli_query($cnn, $sql);
        if ($hasil){
            echo "Pembuatan table "  . $mhs . "Sukses";
        }
        }else{
            echo "Pembuatan table "  . $mhs . "Gagal";
    }