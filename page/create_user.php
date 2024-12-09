<link rel="stylesheet" href="../css/styleform.css">
<form style="position: fixed; margin-left: 70px;"  method="POST" action="../prosses/proses_add3.php">
<a id="close" href="../admin/user.php">X</a>

  <center>
  <input type="text" name="id_user" class="form-control" id="" placeholder="ID">
    <input type="text" name="name_user" class="form-control" id="exampleInputPassword1" placeholder="Nama">
    <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Username">
    <input type="text" name="password" class="form-check-input" id="exampleCheck1" placeholder="Password">
    <input class="text" type="number" name="id_outlet" placeholder="Id Outlet">
  </center>
  <div class="role">
        <label for="">Role</label>
        <select name="role" id="">
          <option value="admin">Admin</option>
          <option value="kasir">Kasir</option>
          <option value="owner">Owner</option>
        </select>
    </div>
    <center><button type="submit" class="btn btn-primary">Submit</button></center>
    
</form>
