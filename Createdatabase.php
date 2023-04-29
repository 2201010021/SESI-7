<?php
    //cara menyertakan file
    include("Konfigurasi.php");
    
    $cnn = mysqli_connect(DBHOST, DBUSERNAME, DBPASS);

    if($cnn){

        $sql = "CREATE DATABASE " . DBNAME; 
        echo $sql;
        $hasil = mysqli_query($cnn, $sql);
        if ($hasil){
            echo "Pembuatan database "  . DBNAME . "Sukses";
        }
        }else{
            echo "Pembuatan database "  . DBNAME . "Gagal";
    }
   