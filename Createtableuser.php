<?php
    include("Konfigurasi.php");
    
    $cnn = mysqli_connect(DBHOST, DBUSERNAME, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $tbel = "tbUSER";
        $sql = "CREATE TABLE $tbel(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            nama VARCHAR(30) NOT NULL,
            email VARCHAR(255) NOT NULL,
            username VARCHAR(20),
            passkey VARCHAR(255), 
            iduser VARCHAR(255)      
        )"; 
        $hasil = mysqli_query($cnn, $sql);
        if ($hasil){
            echo "Pembuatan table "  . $tbel . "Sukses";
        }
        }else{
            echo "Pembuatan table "  . $tbel . "Gagal";
    }