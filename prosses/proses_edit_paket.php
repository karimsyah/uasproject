<?php
    require_once("../function/conn.php");
    require_once("../function/helper.php");

    $idpaket = $_POST['id_produk'];
    $idout = $_POST['id_outlet'];
    $jenis = $_POST['jenis_paket'];
    $name = $_POST['nama_paket'];
    
    
    
    if(empty($idpaket) || empty($idout) || empty($jenis) || empty($name)){
        echo "Isi semua data!!";
    }else{
        mysqli_query($conn, "UPDATE tb_paket set id_outlet='$idout', jenis='$jenis', name='$name' 
        where id='$idpaket'");
        header("location: ".BASE_URL.'admin/produk.php?status=success');
    }


?>