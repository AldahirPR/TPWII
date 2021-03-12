<!DOCTYPE html>
<html>
<head>
	<?php echo view('vEnlacesHead'); ?>
	<title>Registro habitación</title>
</head>
<body>
	<?php echo view('vNavBarH'); ?>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-auto">
				<h1 class="alert alert-primary" role="alert">Registro de habitación</h1>
			</div>
		</div>
		<form method="POST" action="../Home/insertarFormH">
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Usuario</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario-de-registro">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Piso de la habitación</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="pisoH" name="pisoH" placeholder="#-Piso">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Número de la habitación</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="numH" name="numH" placeholder="#-Habitación">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Número de huéspedes</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="numHue" name="numHue" placeholder="#-Huéspedes">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Seleccione el tipo de habitación</label>
				<div class="col-sm-10">
					<label for="text" class="col-sm-2 col-form-label"><br>Individual<input type="radio" class="form-control" name="tipoH" value="Ind"></label>
					<label for="text" class="col-sm-2 col-form-label">Matrimonial<input type="radio" class="form-control" name="tipoH" value="Matr"></label>
					<label for="text" class="col-sm-2 col-form-label">Suite<input type="radio" class="form-control" name="tipoH" value="Suite"></label>
				</div>
			</div>
			<div class="mb-3 row">
			<button type="submit" class="btn btn-primary mb-3">Registrar</button>
			</div>
		</form>
	</div>
</body>
<?php echo view('vFooterH'); ?>
</html>