<!DOCTYPE html>
<html>
<head>
	<?php echo view('vEnlacesHead'); ?>
	<title>Éxito</title>
</head>
<body>
	<?php echo view('vNavBarH'); ?>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="alert alert-success" role="alert">
				<p>Habitación registrada con éxito, su identificador es el: <?php echo $idRegistrado; ?></p>
			</div>
		</div>
</body>
	<?php echo view('vFooterH'); ?>
</html>