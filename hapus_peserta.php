<?php
// 1. Lakukan include koneksi
include ('koneksi.php');

// 2. Tampung variabel GET ke variabel Local
$nik=$_GET['nik'];

// 3. Buat perintah query hapus
$sql_delete="DELETE FROM peserta WHERE nik='$nik'";

// 4. Jalankan perintah query delete
mysqli_query($koneksi,$sql_delete)or die(mysqli_error($koneksi));

// 5. Arahkan Kehalaman depan
echo '<script>
alert("Data Berhasil dihapus");
location="home.php?file=ubah_data"
</script>';
?>
