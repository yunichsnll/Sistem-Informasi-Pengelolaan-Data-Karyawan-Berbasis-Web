<?php 
include'koneksi.php';
$id_karyawan=$_POST['id_karyawan'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$nohp=$_POST['nohp'];
$email=$_POST['email'];
$jabatan=$_POST['jabatan'];

$simpan=mysqli_query($koneksi,"INSERT INTO tb_karyawan VALUES('$id_karyawan','$nama','$jenis_kelamin','$alamat','$nohp','$email','$jabatan')");

if ($simpan) {
	header('location:tampil.php');
}
?>