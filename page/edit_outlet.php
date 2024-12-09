<?php
    require_once("../function/conn.php");
    require_once("../function/helper.php");

    $id = isset($_GET['id'])? ($_GET['id']) : false;
    $outlet = mysqli_fetch_array(mysqli_query($conn,"SELECT * from tb_outlet where id = $id"));



?>



<link rel="stylesheet" href="../css/styleform.css">

<form  method="POST" action="../prosses/proses_edit_outlet.php">
<a id="close" href="../admin/outlet.php">X</a>
  <center>
  <input type="hidden" name="id_outlet" class="form-control" id="" placeholder="ID">
<label  class="id">ID Outlet = <?= $outlet['id']?></label><br>
   <label for="">name</label><input type="text" name="name_outlet" class="form-control" id="exampleInputPassword1" placeholder="Nama" value="<?= $outlet['name']?>"><br>
    <label for="">alamat</label><input type="text" name="alamat_outlet" class="form-check-input" id="exampleCheck1" placeholder="Alamat" value="<?= $outlet['alamat']?>"><br>
    <label for="">No.Telepon</label><input class="tlp" type="number" name="tlp_outlet" placeholder="Tlp" value="<?= $outlet['tlp']?>">
  
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </center>
    
</form>