<?php
include 'koneksi_produk.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi1,"DELETE FROM `tb_produk` WHERE `id_produk` = $id");

if($data == TRUE){
    header("location: tampil_produk.php");
}else{
    echo "gagal hapus";
}




?>