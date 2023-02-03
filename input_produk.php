<?php
include 'koneksi_produk.php';
echo $nama_produk = $_POST['nama_produk'];
echo $jumlah_produk = $_POST['jumlah_produk'];

$data = mysqli_query($koneksi1,"INSERT INTO `tb_produk`( `nama_produk`, `jumlah_produk`, `stok_produk`) VALUES ('$nama_produk','$jumlah_produk','$jumlah_produk')");

header("location: tampil_produk.php");



?>