<?php
require_once('../function/conn.php');
require_once('../function/helper.php');



$id = $_GET['id'];

mysqli_query($conn, "DELETE from tb_paket where id = $id");

header("location: ".BASE_URL.'admin/produk.php?status=success');
?>