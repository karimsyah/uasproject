<?php
    require_once("../function/conn.php");
    require_once("../function/helper.php");

    $id = isset($_GET['id'])? ($_GET['id']) : false;
    $paket = mysqli_fetch_array(mysqli_query($conn,"SELECT * from tb_paket where id = $id"));



?>


<link rel="stylesheet" href="../css/styleform.css">
<form style="position: fixed; margin-left: 70px;" method="POST" action="../prosses/proses_edit_paket.php">
<a id="close" href="../admin/produk.php">X</a>
<center>
  <input type="hidden" name="id_produk" class="form-control" id="" placeholder="ID" value="<?= $paket['id']?>">
    <input type="number" name="id_outlet" class="form-control" id="exampleInputPassword1" placeholder="Id Outlet" value="<?= $paket['id_outlet']?>"><br>
    </center>
    <div class="select">
        <label for="" >Jenis Paket</label>
        
        <select name="jenis_paket" id="" value="<?= $paket['jenis']?>">
            <option value="kiloan">Kiloan</option>
            <option value="selimut">Selimut</option>
            <option value="bed_cover">Bed Cover</option>
            <option value="lain">lainnya</option>
        </select> 
    </div>
    <center>
    <input type="text" name="nama_paket" class="form-check-input" id="exampleCheck1" placeholder="Nama Paket" value="<?= $paket['nama_paket']?>">
    <input class="harga" type="number" name="harga" placeholder="Harga Product" value="<?= $paket['harga']?>">
  
    <button type="submit" class="btn btn-primary">Submit</button>
  </center>
    
</form>