<?php
require_once('../function/conn.php');
require_once('../function/helper.php');

$iduser = $_POST['id_user'];
$nameuser = $_POST['name_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$idout = $_POST['id_outlet'];
$role = $_POST['role'];

if(empty($iduser)||empty($nameuser)||empty($username)||empty($password)||empty($idout)||empty($role)){
    echo "Isi semua data!";
}else{
    mysqli_query($conn, "INSERT into tb_users(id, name, username, password, outlet, role) values 
('$iduser','$nameuser','$username','$password','$idout','$role')");
        header("location: ".BASE_URL.'admin/user.php?status=success');

}



?>

<center><a href="../admin/user.php"><h1>kembali</h1></a></center>