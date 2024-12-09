<?php
    require_once("../function/helper.php");
    require_once("../function/conn.php");
    
   $page = isset($_GET['page']) ? ($_GET['page']) : false;
   $outlet = mysqli_query($conn, "SELECT * from tb_outlet");
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="../css/styleshome.css">
   <style>
    th{
        text-align: left;
    }
   </style>
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Sans Laundry</h1>
        </div>
        <ul>
            <a href="dashboard.php"><li><img src="../images/house-chimney.png" alt="">&nbsp; Dashboard</li></a>
            <a href="outlet.php"><li class="selected"><img src="../images/shop.png" alt="" height="30px" width="30px">&nbsp; Outlet</li></a>
            <a href="produk.php"><li><img src="../images/boxes.png" alt="">&nbsp; Produk</li></a>
            <a href="user.php"><li><img src="../images/user.png" alt="">&nbsp; Pengguna</li></a>
            <a href="laporan.php"><li><img src="../images/newspaper.png" alt="">&nbsp; Laporan</li></a>
            <a href="member.php"><li><img src="../images/user.png" alt="">&nbsp; Member</li></a>
            <a href="transaksi.php"><li><img src="../images/user.png" alt="">&nbsp; Transaksi</li></a>
            <a href="../index.php"><li class="Logout"><img src="../images/sign-out-alt.png" alt="">&nbsp; Logout</li></a>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
            <h2>Admin Outlet</h2>
                <div class="cud">
                    <div class="user">
                        <a href="outlet.php?page=create_outlet" class="btn"><img src="../images/multiple.png   " alt="">Add Data</a>
                    </div>
                </div>
            </div>
        </div>
        <div style="position: absolute;">
        <?php
            $filename = "../page/$page.php";

            if(file_exists($filename)){
                include_once($filename);
            }
        ?>
        </div>

        <div >
            <table class="list">
                
                    <tr height: 30px;>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Action</th>
                    </tr>
                
                
                <?php foreach($outlet as $p):?>
                <tr>
                    <td><?= $p['id']?></td>
                    <td><?= $p['name']?></td>
                    <td><?= $p['alamat']?></td>
                    <td><?= $p['tlp']?></td>
                    <td>
                        <button class="edit"><a  href="<?= BASE_URL . 'admin/outlet.php?page=edit_outlet&id=' . $p ['id']?>">Edit</a></button>
                    </td>
                </tr>
                <?php endforeach; ?> 
            </table>
        </div>
        
    </div>
</body>
</html>