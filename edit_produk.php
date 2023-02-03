<?php
include 'koneksi_produk.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi1,"SELECT * FROM `tb_produk` WHERE `id_produk` = $id");

$tampil = mysqli_fetch_array($data);

?>

<form action="update_produk.php" method="POST">
    <input type="text" name="id_produk" value="<?php echo $id; ?>" hidden=""><br>
    <input type="text" name="nama_produk" value="<?php echo $tampil['nama_produk']?>"><br>
    <input type="number" name="jumlah_produk" value="<?php echo $tampil['jumlah_produk']?>"><br>
    <input type="number" name="stock_produk" value="<?php echo $tampil['stok_produk']?>"><br>
    <input type="submit" value="kirim">
</form>