<?php

include('koneksi.php');
?>
<?php
$nik= $_POST['cari_peserta.php'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hasil Pencarian</title>
</head>
<body>

<div class="container">
  <div class="content">
    <h1>Hasil Pencarian</h1>
    <p>Hasil Dari : <strong><?php echo $nik ?></strong></p>

    <table border="1">
    <tr>
       <th style="width: 150px;">NIK</th>
       <th style="width: 175px;">Nama</th>
       <th style="width: 50px;">Aksi</th>
    </tr>

    <?php
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
    </table>
  </div>
</div>
</body>
</html>
