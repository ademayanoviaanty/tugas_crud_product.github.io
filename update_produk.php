<?php

include 'koneksi_produk.php';
echo$id = $_POST['id_produk'];
echo$nama_produk = $_POST['nama_produk'];
echo$jumlah_produk = $_POST['jumlah_produk'];
echo$stock_produk = $_POST['stock_produk'];

$data = mysqli_query($koneksi1,"UPDATE `tb_produk` SET 
`nama_produk`='$nama_produk',
`jumlah_produk`='$jumlah_produk',
`stok_produk`='$stok_produk' WHERE `id_produk`=$id"); 
header("location: tampil_produk.php");
