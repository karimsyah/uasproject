<?php
    require_once("function/conn.php");
    require_once("function/helper.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJDS</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'css/stylelogin.css'?>">
</head>
<body>
    
        <div class="container">
            <center><h1>Sans Laundry</h1></center>
            
            <form method="POST" action="<?=BASE_URL . 'prosses/proses_login.php'?>">
            
                <div class="username">
                    <p>Username</p>
                    <input type="text" id="username" name="username" placeholder="Masukan Username">
                </div>
                <div class="password">
                    <p>Password</p>
                    <input type="password" id="password" name="password" placeholder="Masukan Password">
                </div>
                <center>
                    <input type="submit" name="login" value="Masuk">

                    
                        <!-- <button name="login">Login</button> -->
                    

                </center>
                </form>
        </div>
     
</body>
</html>

