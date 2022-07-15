<?php 
include'koneksi.php';
$id_karyawan=$_POST['id_karyawan'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$nohp=$_POST['nohp'];
$email=$_POST['email'];
$jabatan=$_POST['jabatan'];

$update=mysqli_query($koneksi,"UPDATE tb_karyawan SET id_karyawan='$id_karyawan',nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat',nohp='$nohp',email='$email',jabatan='$jabatan' WHERE id_karyawan='$id_karyawan'");

if ($update) {
	header('location:tampil.php');}
?>