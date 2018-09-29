<?php
// 1. lakukan koneksi
include('koneksi.php');

// 2. Menampung data dari form
$nokk =$_POST['no_kk'];
$nik =$_POST['nik'];
$nama =$_POST['nm_peserta'];
$ibu =$_POST['nm_ibu'];
$alamat=$_POST['alamat'];
$faskes=$_POST['faskes'];
$kelas=$_POST['kelas'];
$nohp=$_POST['no_hp'];

// 3. Menjalankan perintah Insert Data
$sql_insert="INSERT INTO peserta VALUES ('$nokk','$nik',
'$nama','$ibu','$alamat','$faskes','$kelas','$nohp')";

// 4. Menjalankan perintah
mysqli_query($koneksi,$sql_insert)or die(mysqli_error($koneksi));

echo '<script>
alert("Data Berhasil Disimpan");
location="home.php?file=tampil_peserta"
</script>';
?>