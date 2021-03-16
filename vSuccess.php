<!DOCTYPE html>
<html>
<head>
	<?php echo view('vEnlacesHead'); ?>
	<title>Éxito</title>
</head>
<body>
	<?php echo view('vNavBar'); ?>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="alert alert-success" role="alert">
				<p>El usuario se registro con éxito, su identificador es el: <?php echo $idRegistrado; ?></p>
			</div>
		</div>
</body>
	<?php echo view('vFooter'); ?>
</html>