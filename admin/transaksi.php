<?php
    require_once("../function/conn.php");
    require_once("../function/helper.php");
    
   $transaksi = mysqli_query($conn, "SELECT * from tb_transaksi");
   $page = isset($_GET['page']) ? ($_GET['page']) : false;
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="../css/transaksi.css">
   
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Sans Laundry</h1>
        </div>
        <ul>
            <a href="dashboard.php"><li ><img src="../images/house-chimney.png" alt="">&nbsp; Dashboard</li></a>
            <a href="outlet.php"><li><img src="../images/shop.png" alt="" height="30px" width="30px">&nbsp; Outlet</li></a>
            <a href="produk.php"><li><img src="../images/boxes.png" alt="">&nbsp; Produk</li></a>
            <a href="user.php"><li ><img src="../images/user.png" alt="">&nbsp; Pengguna</li></a>
            <a href="laporan.php"><li><img src="../images/newspaper.png" alt="">&nbsp; Laporan</li></a>
            <a href="member.php"><li><img src="../images/user.png" alt="">&nbsp; Member</li></a>
            <a href="transaksi.php"><li class="selected"><img src="../images/user.png" alt="">&nbsp; Transaksi</li></a>
            <a href="../index.php"><li class="Logout"><img src="../images/sign-out-alt.png" alt="">&nbsp; Logout</li></a>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            
        </div>
        
    <form style=" margin-left: 70px;"  method="POST" action="../prosses/proses_transaksi.php">   

  <center>
    <h2 style="color: black;">Form Transaksi</h2>
  <input type="text" name="id_outlet" class="form-control" id="" placeholder="Id Outlet">
    <input type="text" name="kode_invoice" class="form-control" id="exampleInputPassword1" placeholder="Kode Invoice">
    <input type="text" name="id_member" class="form-control" id="exampleInputPassword1" placeholder="Id_member"><br>
    <label for="">Tanggal</label><br><input class="datetime" type="datetime-local" name="password" class="form-check-input" id="exampleCheck1"><br>
    <label for="">Batas Waktu</label><br><input class="datetime" type="datetime-local" name="password" class="form-check-input" id="exampleCheck1"><br>
    <label for="">Tanggal Bayar</label><br><input class="datetime" type="datetime-local" name="password" class="form-check-input" id="exampleCheck1"><br>
    <input class="text" type="number" name="biaya_tambahan" placeholder="Biaya Tambahan">
    <input class="text" type="number" name="diskon" placeholder="Diskon">
    <input class="text" type="number" name="pajak" placeholder="Pajak">
  </center>
  <div class="role">
        <label for="">Status</label>
        <select name="status" id="">
            <option value="baru">Baru</option>
            <option value="proses">Proses</option>
            <option value="selesai">Selesai</option>
            <option value="diambil">Diambil</option>
        </select> 
    </div>
    <div class="role">
        <select name="dibayar" id="">
            <option value="dibayar">Dibayar</option>
            <option value="belum_dibayar">Belum Dibayar</option>
        </select> 
    </div>
    <center><input class="text" type="number" name="id_user" placeholder="Id User"></center>
    <center><button type="submit">Submit</button></center>
    
</form>
        




        
        
    </div>
</body>
</html>