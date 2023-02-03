<?php
include 'koneksi_produk.php';
$data = mysqli_query($koneksi1,"SELECT * FROM `tb_produk`");
?>

<a href="tambah_data_produk.php">tambah data</a>
<br>
<?php
 foreach($data as $data){
    echo $data['nama_produk'];
    echo $data['jumlah_produk'];
    echo $data['stok_produk'];
?>

<a href="delete_produk.php?id=<?php echo $data['id_produk']?>">hapus</a>&nbsp
<a href="edit_produk.php?id=<?php echo $data['id_produk']?>">edit</a>
<br>

<?php
 }
