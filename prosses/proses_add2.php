<?php
require_once('../function/conn.php');
require_once('../function/helper.php');

$idpaket = $_POST['id_produk'];
$idout = $_POST['id_outlet'];
$jenis = $_POST['jenis_paket'];
$namapaket = $_POST['nama_paket'];
$harga = $_POST['harga'];


if(empty($idpaket)||empty($idout)||empty($jenis)||empty($namapaket)||empty($harga)){
    echo "Isi semua data!";
}else{
    mysqli_query($conn, "INSERT into tb_paket(id, id_outlet, jenis, nama_paket, harga) values 
    ('$idpaket','$idout','$jenis','$namapaket','$harga')");
        header("location: ".BASE_URL.'admin/produk.php?status=success');
   
}
?>
<center><a href="../admin/produk.php"><h1>kembali</h1></a></center>