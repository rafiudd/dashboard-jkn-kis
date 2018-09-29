<?php
session_start();
session_destroy(); // berfungsi untuk menutup semua session
 
echo '<script language="javascript">alert("Anda berhasil Logout!"); document.location="index.php";</script>'; // memunculkan peringatan kemudian me-redirect ke halaman depan
?>