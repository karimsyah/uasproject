<link rel="stylesheet" href="../css/styleform.css">
<form style="position: fixed;"  method="POST" action="../kasir/proses_kasir/create_member.php">
<a id="close" href="../kasir/member.php">X</a>

  <center>
        <input type="number" name="id_member" class="form-control" id="" placeholder="ID">
        <input type="text" name="name_member" class="form-control" id="exampleInputPassword1" placeholder="Nama">
      <input type="text" name="alamat_member" class="form-check-input" id="exampleCheck1" placeholder="Alamat"><br>
    </center>
    
    
        <label for="" style="margin-left: 90px;">Jenis Kelamin</label><br>
        <div class="kelamin">
            <input type="radio" name="jenis_kelamin" id="L" value="L">
            <label for="">Laki-Laki</label>
            
            <input type="radio" name="jenis_kelamin" id="P" value="P">
            <label for="">Perempuan</label>
        </div>
    
    <center>
        <input class="tlp" type="number" name="tlp_member" placeholder="Tlp">
        <button type="submit" class="btn btn-primary">Submit</button>
    </center>
    
</form>