<!DOCTYPE html>
<html>
<head>
	<?php echo view('hotelQuanax/vEnlacesHead'); ?>
	<title>Registros habitación</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/stylesHotel.css">
</head>
<body>
	<?php echo view('hotelQuanax/vNavBarH'); ?>
	<br>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-auto">
				<h1 class="alert alert-primary" role="alert">Registro encontrado</h1>
			</div>
		</div>
		<form method="POST" action="../Home/actualizarRegistroH">
			<input type="hidden" class="form-control" id="id_habitacion" name="id_habitacion" value="<?php echo $id_habitacion; ?>">
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Usuario</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuario; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">#-Piso</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="pisoH" name="pisoH" value="<?php echo $pisoH; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">#-Habitación</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="numH" name="numH" value="<?php echo $numH; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">#-Huéspedes</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="numHue" name="numHue" value="<?php echo $numHue; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Seleccione el tipo de habitación</label>
				<div class="form-check form-check-inline">
					<center><label for="text" class="col-sm-2 col-form-label">Individual<input type="radio" class="form-check-input" name="tipoH" value="Ind"></label></center>
					<center><label for="text" class="col-sm-2 col-form-label">Matrimonial<input type="radio" class="form-check-input" name="tipoH" value="Matr"></label></center>
					<center><label for="text" class="col-sm-2 col-form-label">Suite<input type="radio" class="form-check-input" name="tipoH" value="Suite"></label></center>
				</div>
			</div>
			<div class="mb-3 row">
			<button type="submit" class="btn btn-primary mb-3">Actualizar</button>
			<a type="button" class="btn btn-danger mb-3" href="<?php echo base_url();?>/index.php/Home/eliminarRegistroH/<?php echo $id_habitacion;?>">Eliminar</a>
			</div>
		</form>
	</div>
</body>
<?php echo view('hotelQuanax/vFooterH'); ?>
</html>