<!DOCTYPE html>
<html>
<head>
	<?php echo view('hotelQuanax/vEnlacesHead'); ?>
	<title>Registros cliente</title>
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
		<form method="POST" action="../Home/actualizarRegistroU">
			<input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario; ?>">
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" name="email" value="<?php echo $usuario; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="password" class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
				</div>
			</div>
			<div class="mb-3 row">
			<button type="submit" class="btn btn-primary mb-3">Actualizar</button>
			<a type="button" class="btn btn-danger mb-3" href="<?php echo base_url();?>/Home/eliminarRegistroU/<?php echo $id_usuario;?>">Eliminar</a>
			</div>
		</form>
	</div>
</body>
<?php echo view('hotelQuanax/vFooterH'); ?>
</html>