<?php
    require_once('../function/conn.php');
    require_once('../function/helper.php');

    $username = $_POST['username'];
    $password = $_POST['password']; 
    
    $query = mysqli_query($conn, "SELECT * FROM tb_users WHERE username = '$username' and password = '$password'");

   if(mysqli_num_rows($query) != 0){
    $row = mysqli_fetch_assoc($query);
    // $role = mysqli_query($conn, "SELECT * from tb_users where role =?"); 
    session_start();
    $_SESSION['id'] = $row['id'];

    $role = $row['role'];

    if($role == "admin"){
    header("location:" . BASE_URL . 'admin/dashboard.php');
    }else if($role == "kasir"){
    header("location:" . BASE_URL . 'kasir/kasir_dashboard.php');
    }else if($role == "owner"){
    header("location:" . BASE_URL . 'owner/owner_dashboard.php');
    }else{
    header("location:" . BASE_URL );

    }
    

   }else{
    header("location:" . BASE_URL );
   } 

?>