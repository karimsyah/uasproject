<?php
require_once('../../function/conn.php');
require_once('../../function/helper.php');

$idmember = $_POST['id_member'];
$namemember = $_POST['name_member'];
$alamatmember = $_POST['alamat_member'];
$kelamin = $_POST['jenis_kelamin'];
$tlpmember = $_POST['tlp_member'];


if(empty($idmember)||empty($namemember)||empty($alamatmember)||empty($kelamin)||empty($tlpmember)){
    echo "Isi semua data!";
}else{
    mysqli_query($conn, "INSERT into tb_member(id, name, alamat, jenis_kelamin, tlp) values 
('$idmember','$namemember','$alamatmember','$kelamin','$tlpmember')");
        header("location: ".BASE_URL.'kasir/member.php?status=success');

}



?>
