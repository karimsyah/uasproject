<?php
    require_once("../function/conn.php");
    require_once("../function/helper.php");

    $idout = $_POST['id_outlet'];
    $nameout = $_POST['name_outlet'];
    $alamatout = $_POST['alamat_outlet'];
    $tlpout = $_POST['tlp_outlet'];
    
    
    if(empty($nameout) || empty($alamatout) || empty($tlpout)){
        echo "Isi semua data!!";
    }else{
        mysqli_query($conn, "UPDATE tb_outlet set name='$nameout', alamat='$alamatout', tlp='$tlpout' 
        where id='$idout'");
        header("location: ".BASE_URL.'admin/outlet.php?status=success');
    }


?>