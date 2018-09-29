<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/custom.css">

</head>
<body style="background-color:  #b3ffff;">

<div class="container" align="center"></br></br>
  <img class="img-responsive" src="bpjs.jfif" alt="Chania" width="200" height="150">
</div>

<div class="row konten">
  <h2 align="center">Login User</h2>
  <div class="col-md-4"></div>
	<div class="col-md-4">
	   <form method="POST" action="cek.php" class="form-vertical">
		     <div class="form-group">
		         <label>Username</label>
          </div>

		     <div class="input-group">
		       <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i></span>
		       <input type="text" name="username" class="form-control" placeholder="Masukan Username">
		      </div>

		    <div class="form-group">
		        <label>Password</label>
		        <div class="input-group">
		        <span class="input-group-addon "> <i class="glyphicon glyphicon-lock"></i></span>
		        <input type="password" name="password" class="form-control" placeholder="Masukan Password">
		    </div>
		<br/>

		<div class="form-group">
		    <button type="submit"class="form-control btn btn-primary">Login</button>
    </div>

	</form>
</div>
</div><!--akhir row-->
</div><!--akhir containeer-->


<script src="bootstrap/js/jquery.min.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
