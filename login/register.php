<?php
require 'koneksi.php';
// if(isset($_POST["register"])){
//     if( registrasi($_POST) > 0){
//         echo "<script>
//                 alert('user berhasil ditambahkan!');
//               </script>";
//     }else{
//         echo mysqli_error($koneksi);
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="username">
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password">
            </div>
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password2">
            </div>

            <input type="submit" class="btn" value="Sign in" name="register">
        </div>
    </form>
</body>
</html>