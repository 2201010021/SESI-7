<?php
    session_start();

    if(isset($_POST["txUSER"])){
        $user = $_POST["txUSER"];
        $pwd = $_POST["txPASS"];
        $sql = "SELECT tu.nama, tu.email, tu.username, tu.passkey, tu.iduser FROM tbuser tu WHERE tu.username='".$user."';";
        include_once("Koneksi.php");
        $hsl = mysqli_query($cnn, $sql);
        $jdata = mysqli_num_rows($hsl);
        if($jdata > 0){
            $h = mysqli_fetch_assoc($hsl);
            $nama = $h["nama"];
            $ema = $h["email"];
            $uname = $h["username"];
            $pass = $h["passkey"];
            $idusr = $h["iduser"];
            if($pass == $pwd){
                $SESSION["Login"] = $iduser;
                $SESSION["user"] = $uname;
                $SESSION["nama"] = $nama;
                $SESSION["ema"] = $ema;
                header("location: dashboard.php");
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>

        <form method="POST" action="Login.php">

        <h3>Login</h3>

        <div>
            User name
            <input type="text" name="txUSER"> 
        </div>
        <div>
            Pasword
            <input type="pasword" name="txPASS"> 
        </div>
        <div> 
            <button type="submit"> Login </button>
            <a href="Registrasi.php">Registrasi User</a>
        </div>
        </form>
    
</body>
</html>