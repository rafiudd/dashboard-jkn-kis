
<!DOCTYPE html>
<html>
<head>
<title>Data Peserta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  	<h2><center>DATA PESERTA</center></h2>
  	<table class=" table table-bordered table-hovered" align="center">
  	<p><a href="home.php?file=Input_peserta" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah </p></a>

  <tr>
  	<th>No.</th>
  	<th>No. KK</th>
  	<th>NIK</th>
  	<th>Nama Peserta</th>
  	<th>Nama Ibu</th>
  	<th>Alamat</th>
  	<th>Faskes</th>
  	<th>Kelas Perawatan</th>
  	<th>No. HP</th>
  </tr>
</div>

<?php
//  1. Lakukan include koneksi.php untuk membuat koneksi
include('koneksi.php');

// 2. Buat perintah SQL untuk menampilkan data
$sql_tampil ="SELECT * FROM peserta";

// 3. Jalankan perintah diatas dengan fungsi mysqli_query
$peserta=mysqli_query($koneksi,$sql_tampil);

// 4. Lakukan fetch dengan result type MYSQL_ASSOC
$no_urut=null;
while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
	$no_urut++;
	echo'
	</tr>
		<td>'.$no_urut.'</td>
		<td>'.$baris_data['no_kk'].'</td>
		<td>'.$baris_data['nik'].'</td>
		<td>'.$baris_data['nm_peserta'].'</td>
		<td>'.$baris_data['nm_ibu'].'</td>
		<td>'.$baris_data['alamat'].'</td>
		<td>'.$baris_data['faskes'].'</td>
		<td>'.$baris_data['kelas'].'</td>
		<td>'.$baris_data['no_hp'].'</td>
	</tr>';
}
?>

<script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</table>
</body>
</html>
