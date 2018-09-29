<?php
include 'koneksi.php'; //memanggil koneksi PHP
?>
<html>
<head>
<title> Pencarian </title>
</head>
<body>
<form method="post">
	
<div class="form-group">
	<div class="col-sm-3">
			<input type="text" name="nik"  class="form-control" placeholder="Masukan NIK" required>
	</div>
 </div>

<button type="submit" name="cari2" class="btn btn-primary" >
		<span class="glyphicon glyphicon-search">
		</span>Cari
</button>

</form>
<div class="container">
	<h2><center>Hasil Pencarian</center></h2></br>
	<div class="table-responsive">
  <table class="table">

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

<?php if(isset($_POST['cari2'])){
	$no = 1; //buat urutan nomer
	$cari = $_POST['nik'];
	$sql = "select * from peserta where nik like '%$cari%'  ";
	$query = mysqli_query($koneksi,$sql);
	while ($data = mysqli_fetch_array($query)){
	?>
<tr>
<!-- panggil hasil pencarian -->
	<th><?php echo $no;?></th>
	<th><?php echo $data['no_kk'];?></th>
	<th><?php echo $data['nik'];?></th>
	<th><?php echo $data['nm_peserta'];?></th>
	<th><?php echo $data['nm_ibu'];?></th>
	<th><?php echo $data['alamat'];?></th>
	<th><?php echo $data['kelas'];?></th>
	<th><?php echo $data['faskes'];?></th>
	<th><?php echo $data['no_hp'];?></th>
	<?php
	$no++; // pengulangan nomer saat di tampilin
}}
?>
</tr>
</table>
</body>
</html>
