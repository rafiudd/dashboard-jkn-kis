<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<title>Menu Utama Aplikasi JKN/KIS</title>
</head>
<body style="background-color:  #b3ffff;">
<nav class="navbar navbar-light" style="background-color: #000000;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php"><i class="glyphicon glyphicon-home"></i></a>
    </div>

    <ul class="nav navbar-nav">
      <li><a href="home.php?file=Input_peserta"><span class="glyphicon glyphicon-user " ></span> &nbsp; Pendaftaran Peserta Baru</a></li>
      <li><a href="home.php?file=tampil_peserta"><span class="glyphicon glyphicon-book"></span>&nbsp; Data Peserta</a></li>
      <li><a href="home.php?file=ubah_data"><span class="glyphicon glyphicon-edit"></span>&nbsp; Update Data Peserta</a></li>
      <li><a href="home.php?file=cari_peserta"><span class="glyphicon glyphicon-search"></span>&nbsp; Cari Data Peserta</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="home.php?file=tentang"><span class="glyphicon glyphicon-tags"></span> &nbsp; Tentang</a></li>
      <li><a href="home.php?file=logout"><span class="glyphicon glyphicon-log-out"></span> &nbsp; Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="row">
    <?php
    if(isset($_GET['file'])){
    include($_GET['file'].'.php');
    }else{
    echo '</br></br></br></br></br></br></br></br></br></br></br><h1 align="center">Selamat Datang Di Aplikasi JKN/KIS</h1>';
    }
    ?>
</div>
</body>
<script rel="stylesheet" src="bootstrap/js/bootstrap.min.js"></script>
<script rel="stylesheet" src="bootstrap/js/jquery.min.js"></script>
</html>
