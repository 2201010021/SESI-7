<?php
    include("Konfigurasi.php");
    
    $cnn = mysqli_connect(DBHOST, DBUSERNAME, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $matkul = "tbMATKUL";
        $sql = "CREATE TABLE $matkul(
            kodematkul VARCHAR(8) PRIMARY KEY,
            matakuliah VARCHAR(10),
            sks INT 
        )"; 
        $hasil  = mysqli_query($cnn, $sql);
        if ($hasil){
            echo "Pembuatan table "  . $matkul . "Sukses";
        }
        }else{
            echo "Pembuatan table "  . $matkul . "Gagal";
    }