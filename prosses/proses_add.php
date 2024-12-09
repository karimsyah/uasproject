<?php
require_once('../function/conn.php');
require_once('../function/helper.php');

$idout = $_POST['id_outlet'];
$nameout = $_POST['name_outlet'];
$alamatout = $_POST['alamat_outlet'];
$tlpout = $_POST['tlp_outlet'];

if(empty($idout) || empty($nameout) || empty($alamatout) || empty($tlpout)){
    echo "Isi semua data!!";
}else{
    mysqli_query($conn, "INSERT into tb_outlet(id, name, alamat, tlp) values 
('$idout','$nameout','$alamatout','$tlpout')");
        header("location: ".BASE_URL.'admin/outlet.php?status=success');

}



?>
<center><a href="../admin/outlet.php"><h1>kembali</h1></a></center>