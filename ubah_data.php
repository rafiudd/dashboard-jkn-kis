
<!DOCTYPE html>
<html>
<head>
<title>Data Peserta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
	<h2><center>DATA PESERTA</center></h2>
	<table class=" table table-bordered table-hovered" align="center">

    <form method="post">
    	<div class="form-group">
        <div class="cari-masukan">
          <div class="col-sm-10">
      				<input type="text" name="nik"  class="form-control" placeholder="Masukan NIK" required>
      		</div>
        </div>

    	<button type="submit" name="cari2" class="btn btn-primary" >
    			<span class="glyphicon glyphicon-search">
    			</span>Cari
      </button>
      </div>
    </form>

<div class="tambah">
  <p><a href="home.php?file=Input_peserta" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah </p></a>
</div>

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
  	<th>Aksi </th>
  </tr>
</div>

<?php
include('koneksi.php');
if(isset($_POST['cari2'])){
	$no = null; //buat urutan nomer
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
	<th><?php echo $data['faskes'];?></th>
	<th><?php echo $data['kelas'];?></th>
	<th><?php echo $data['no_hp'];?></th>
  <th>

        <a href="hapus_peserta.php?nik='.$baris_data['nik'].'"<span class="glyphicon glyphicon-trash"></span>  ::  </a>
    		<a href="home.php?file=edit_peserta&nik='.$baris_data['nik'].'"<span class="glyphicon glyphicon-pencil"></span></a>
      </th>
</tr>

<?php
}}
$sql_tampil ="SELECT * FROM peserta";
$peserta=mysqli_query($koneksi,$sql_tampil);
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
    <td>
    <a href="hapus_peserta.php?nik='.$baris_data['nik'].'"<span class="glyphicon glyphicon-trash"></span>  ::  </a>
		<a href="home.php?file=edit_peserta&nik='.$baris_data['nik'].'"<span class="glyphicon glyphicon-pencil"></span></a> </td>
	</tr>';
}


?>

<script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</table>
</body>
</html>
