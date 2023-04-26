<?php
    include("database/koneksi.php");

    function createuser($nama,$email,$user,$password){
        $stt = false;
        $iduser = md5($user);
        $sql = "INSERT INTO tbUSER(nama, email, username, passkey, iduser) 
        VALUES
        (
            '$nama',
            '$email',
            '$user',
            '$password',
            '$iduser'
        );";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Error");
        $stt = mysqli_query($cnn, $sql);
        return $stt;
    }


?>
