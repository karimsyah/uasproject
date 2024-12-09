<?php
require_once("../function/conn.php");
require_once("../function/helper.php");

$id = isset($_GET['id'])? ($_GET['id']) : false;
$user = mysqli_fetch_array(mysqli_query($conn,"SELECT * from tb_users where id = $id"));

?>


<link rel="stylesheet" href="../css/styleform.css">
<form style="position: fixed; margin-left: 70px;"  method="POST" action="../prosses/proses_edit_user.php">
<a id="close" href="../admin/user.php">X</a>

  
  <input type="hidden" name="id_user" class="form-control" id="" placeholder="ID" value="<?= $user['id']?>">
    <input type="text" name="name_user" class="form-control" id="exampleInputPassword1" placeholder="Nama" value="<?= $user['name']?>">
    <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Username" value="<?= $user['username']?>">
    <input type="text" name="password" class="form-check-input" id="exampleCheck1" placeholder="Password" value="<?= $user['password']?>">
    <input class="text" type="number" name="id_outlet" placeholder="Id Outlet" value="<?= $user['outlet']?>">
  </center>
  <div class="role">
        <label for="">Role</label>
        <select name="role" id="" value="<?= $user['role']?>">
          <option value="admin">Admin</option>
          <option value="kasir">Kasir</option>
          <option value="owner">Owner</option>
        </select>
    </div>
    <center><button type="submit" class="btn btn-primary">Submit</button></center>
    
</form>
