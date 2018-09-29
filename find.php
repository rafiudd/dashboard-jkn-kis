<?php
include('koneksi.php')
$nik= $_POST['cari_peserta.php'];
   $query = "SELECT * from peserta where nik like '%$nik%' ";
   $result = mysqli_query($koneksi, $query);
   if (mysqli_num_rows($result) > 0) {
   while($row=mysqli_fetch_assoc($result)){
  ?>
 <tr>
   <td><?php echo $row['nik'] ?></td>
   <td><?php echo $row['nm_peserta'] ?></td>
   <td><a href='edit_peserta.php?nik=<?php echo $row['nik']; ?>'>Edit</a> <a href='hapus_peserta.php?nik=<?php echo $row['nik']; ?>'>Hapus</a></td>
 </tr>

  <?php
    }} else {
  ?>
 <tr>
   <td colspan="4"><?php echo 'Data is empty.' ?><td>
 </tr>

  <?php
  }
  ?>
