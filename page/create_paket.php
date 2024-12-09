<link rel="stylesheet" href="../css/styleform.css">
<form style="position: fixed; margin-left: 70px;" method="POST" action="../prosses/proses_add2.php">
<a id="close" href="../admin/produk.php">X</a>
<center>
  <input type="number" name="id_produk" class="form-control" id="" placeholder="ID">
    <input type="number" name="id_outlet" class="form-control" id="exampleInputPassword1" placeholder="Id Outlet"><br>
    </center>
    <div class="select">
        <label for="">Jenis Paket</label>
        <select name="jenis_paket" id="">
            <option value="kiloan">Kiloan</option>
            <option value="selimut">Selimut</option>
            <option value="bed_cover">Bed Cover</option>
            <option value="lainnya">lainnya</option>
        </select> 
    </div>
    <center>
    <input type="text" name="nama_paket" class="form-check-input" id="exampleCheck1" placeholder="Nama Paket">
    <input class="harga" type="number" name="harga" placeholder="Harga Product">
  
    <button type="submit" class="btn btn-primary">Submit</button>
  </center>
    
</form>