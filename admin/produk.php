<?php
    require_once("../function/helper.php");
    require_once("../function/conn.php");
    
   $page = isset($_GET['page']) ? ($_GET['page']) : false;
   $outlet = mysqli_query($conn, "SELECT * from tb_paket");
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="../css/styleshome.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Sans Laundry</h1>
        </div>
        <ul>
            <a href="dashboard.php"><li ><img src="../images/house-chimney.png" alt="">&nbsp; Dashboard</li></a>
            <a href="outlet.php"><li><img src="../images/shop.png" alt="" height="30px" width="30px">&nbsp; Outlet</li></a>
            <a href="produk.php"><li class="selected"><img src="../images/boxes.png" alt="">&nbsp; Produk</li></a>
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
                <div class="cud">
                    <div class="user">
                        <a href="produk.php?page=create_paket" class="btn"><img src="../images/multiple.png   " alt="">Add Data</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="content mt-5">
                    <?php
                    $filename = "../page/$page.php";

                    if(file_exists($filename)){
                        include_once($filename);
                    }
                    ?>
        </div>
        <table class="list">
                
                    <tr height: 30px;>
                        <th>Id</th>
                        <th>Id outlet</th>
                        <th>jenis</th>
                        <th>nama paket</th>
                        <th>harga</th>
                        <th>Action</th>
                    </tr>
                
                
                <?php foreach($outlet as $p):?>
                <tr>
                    <td><?= $p['id']?></td>
                    <td><?= $p['id_outlet']?></td>
                    <td><?= $p['jenis']?></td>
                    <td><?= $p['nama_paket']?></td>
                    <td><?= $p['harga']?></td>
                    <td>
                        <button class="edit"><a  href="<?= BASE_URL . 'admin/produk.php?page=edit_paket&id=' . $p ['id']?>">Edit</a></button>
                        <button class="delete"><a href="<?= BASE_URL . 'prosses/proses_delete_paket.php?id=' . $p ['id']?>">Delete</a></button>
                    </td>
                </tr>
                <?php endforeach; ?> 
            </table>
        </div>

    </div>
</body>
</html>