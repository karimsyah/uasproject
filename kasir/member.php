<?php
    require_once("../function/helper.php");
    require_once("../function/conn.php");
    
   $page = isset($_GET['page']) ? ($_GET['page']) : false;
   $outlet = mysqli_query($conn, "SELECT * from tb_member");
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="../css/styleshome.css">
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Sans Laundry</h1>
        </div>
        <ul>
            <a href="dashboard.html"><li ><img src="../images/house-chimney.png" alt="">&nbsp; Dashboard</li></a>
            <a href="laporan.html"><li><img src="../images/newspaper.png" alt="">&nbsp; Laporan</li></a>
            <a href="member.html"><li class="selected"><img src="../images/user.png" alt="">&nbsp; Member</li></a>
            <a href="../index.php"><li class="Logout"><img src="../images/sign-out-alt.png" alt="">&nbsp; Logout</li></a>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
            <h2>Kasir Member</h2>
                <div class="cud">
                    <div class="user">
                        <a href="member.php?page=member" class="btn"><img src="../images/multiple.png   " alt="">Add Data</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="content mt-5">
                    <?php
                    $filename = "../kasirpage/$page.php";

                    if(file_exists($filename)){
                        include_once($filename);
                    }
                    ?>
        </div>
        </div>
    </div>
</body>
</html>