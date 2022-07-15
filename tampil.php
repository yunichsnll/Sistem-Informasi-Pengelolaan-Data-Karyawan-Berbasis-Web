<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tampilan Data Karyawan</title>
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
	body{
		background-color: #20B2AA;
		justify-content: center;
    align-items: center;
    font-family: 'Poppins', sans-serif;
	}
	a {
	color: inherit;
	text-decoration: none;
}

.container {
	width:90%;
	margin:0 auto;
}
.container:after {
	content:'';
	display: block;
	clear: both;
}
header h1 {
	float: left;
	padding:15px 0;
	color: #000000;
}
header ul {
	float: right;
}
header ul li {
	display: inline-block;
}
header ul li a {
	padding:25px 20px;
	display: inline-block;
}
header ul li a:hover {
	background-color: #000000;
	color: #fff;
}
.active {
	background-color: #696969;
	color: #fff;
}
	th{
		background-color: #2ACF69;
	}
	td, tr, th{
		border: 1px solid #CCCCCC;
		padding: 5px 15px;
		height: 35px;
	}
	</style>
</head>
<body>
	<header>
		<div class="container">
			<h1><a href="index.html">KARYAWAN</a></h1>
			<ul>
				<li><a href="index.html">HALAMAN UTAMA</a></li>
				<li class="active"><a href="tampil.php">DATA KARYAWAN</a></li>
				<li><a href="form_input.php">INPUT DATA KARYAWAN</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
	</header>
<center><h1>REPORT DATA KARYAWAN</h1></center>
<table style="margin-left: auto;margin-right: auto;" border="1">
	<tr>
		<th>Id Karyawan</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>No. Telp</th>
		<th>Email</th>
		<th>Jabatan</th>
		<th>Aksi</th>
		
	</tr>
	<?php
	include "koneksi.php";
	$tampil=mysqli_query($koneksi,"SELECT * FROM tb_karyawan");
	while ($data=mysqli_fetch_array($tampil)) {
	?>
	<tr>
		<td><?php echo $data['id_karyawan'] ?></td>
		<td><?php echo $data['nama'] ?></td>
		<td><?php echo $data['jenis_kelamin'] ?></td>
		<td><?php echo $data['alamat'] ?></td>
		<td><?php echo $data['nohp'] ?></td>
		<td><?php echo $data['email'] ?></td>
		<td><?php echo $data['jabatan'] ?></td>
		
		<td><a href="form_update.php?id_karyawan='<?php echo $data['id_karyawan']?>'">Edit</a> | <a href="hapus.php?id_karyawan='<?php echo $data['id_karyawan']?>'">Hapus</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>
<br>
</body>
</html>