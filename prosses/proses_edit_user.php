<?php
    require_once("../function/conn.php");
    require_once("../function/helper.php");

    $iduser = $_POST['id_user'];
    $name = $_POST['name_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $idout = $_POST['id_outlet'];
    $role = $_POST['role'];
    
    
    
    if(empty($iduser) || empty($idout) || empty($name) || empty($username) || empty($password) || empty($role)){
        echo "Isi semua data!!";
    }else{
        mysqli_query($conn, "UPDATE tb_users set name='$name', username='$username', password='$password', outlet='$idout', role='$role' 
        where id='$iduser'");    
        header("location: ".BASE_URL.'admin/user.php?status=success');
    }


?>