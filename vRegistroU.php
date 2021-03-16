<!DOCTYPE html>
<html>
<head>
	<?php echo view('vEnlacesHead'); ?>
	<title>Registro</title>
	<link rel="stylesheet" href="css/tindex.css">
</head>
<body >

	<?php echo view('vNavBar'); ?>

<!-- Background image -->
<div class="justify-content-md-center" style="background-image: url('https://alcomobi.com/wp-content/uploads/mobiliario-contract-hoteles-habitaciones-alcomobi-33.jpg');
      height: 90vh" >

<!-- Background image -->

	<br>
	<br>
	<br>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-auto">
				<h1 class="alert alert-primary" role="alert">Registro de nuevo usuario</h1>
			</div>
		</div>
		<form method="POST" action="../Home/insertarForm">
			<div class="mb-3 row">
				<label  for="email" class="col-sm-2 col-form-label" > <strong>Email</strong></label>
				<div class="col-sm-8">
					<input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="password" class="col-sm-2 col-form-label"> <strong>Password</strong></label>
				<div class="col-sm-8">
					<input type="password" class="form-control" id="password" name="password">
					<br>
				</div>


			<div class="mb-3 row"> 


				<center>
			<button type="submit" class="btn btn-primary mb-3" >Registrar</button>
			</center>
			</div>
		</form>
	</div>
</div>
</body>
<br><br> <br><br><br>
<?php echo view('vFooter'); ?>
</html>
