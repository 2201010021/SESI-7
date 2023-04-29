<?php
    session_start();
    if(!isset($_SESSION["Login"])){
        header("location: Login.php");
    }
    if($_SESSION["Login"] == ""){
        header("location: Login.php");
    }
    $konten = "<h3>Selamat Datang".$_SESSION["nama"]."</h3>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <ul>
        <li> <a href ="?aksi=dtmhs">Data Mahasiswa </a> </li>
        <li> <a href ="?aksi=dtdsn">Data Dosen </a> </li>
        <li> <a href ="?aksi=dtmk">Data Mata Kuliah </a> </li>
        <li> <a href ="?aksi=logout"><?=$_SESSION["user"]?> -logout </a> </li>
    </ul>

    <div>
        <?php
            echo $konten;
        ?>
    </div>
         
    
</body>
</html>