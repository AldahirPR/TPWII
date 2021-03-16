<!DOCTYPE html>
<html>
<head>
	<?php echo view('vEnlacesHead'); ?>
	<title>Succes</title>
</head>
<body>
	<?php echo view('vNavBarH'); ?>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-auto">
				<h1 class="alert alert-primary" role="alert">¡Felicidades!</h1>
				<p>El cliente se registro con éxito, su identificador es el: <?php echo $idRegistrado; ?></p>
			</div>
		</div>
	</div>
</body>
<?php echo view('vFooterH'); ?>
</html>