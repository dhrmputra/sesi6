
<?php
    include("cmd/user.php");
    $psn = "";
    if(isset($_POST["txPASS1"])){
        if($_POST["txPASS1"] == $_POST["txPASS2"]){
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $user = $_POST["txUSER"];
            $pass = $_POST["txPASS1"];

            if(createuser($nama,$email,$user,$pass)){
                $psn = "Create Data Berhasil";
            }else{
                $psn = "Create Data Gagal"; 
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
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    </head>
    <body>
        <form action="register.php" method="POST" class="m-auto border p-4 mt-4 w-50">
            <?php
                echo "<div>$psn</div>";
            ?>
                <div class="mb-2">
                <label class="mb-2">Nama Lengkap</label>
                <input type="text" name="txNAMA" placeholder="Nama Lengkap" class="form-control">
            </div>
            <div class="mb-2">
        <label class="mb-2">Email</label>
            <input type="email" name="txEMAIL" placeholder="Email" class="form-control">
        </div>
        <div class="mb-2">
        <label class="mb-2">Username</label>
        <input type="text" name="txUSER" placeholder="Username" class="form-control">
    </div>
    <div class="mb-2">
        <label class="mb-2">Password</label>
        <input type="password" name="txPASS1" placeholder="Password" class="form-control">
    </div>
    <div class="mb-2">
        <label class="mb-2"     >Verifikasi Password</label>
        <input type="password" name="txPASS2" placeholder="Verifikasi" class="form-control ">
    </div>
        <div>
            <button type="submit" class="btn btn-primary mt-2"> Register </button>
        </div>
    </form>
</body>
</html>