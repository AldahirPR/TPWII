<!DOCTYPE html>
<html>
<head>
	<?php echo view('vEnlacesHead'); ?>
	<title>Registros cliente</title>
</head>
<body>
	<?php echo view('vNavBarC'); ?>
	<br>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-auto">
				<h1 class="alert alert-primary" role="alert">Registro encontrado</h1>
			</div>
		</div>
		<form method="POST" action="../Home/actualizarRegistroC">
			<input type="hidden" class="form-control" id="id_cliente" name="id_cliente" value="<?php echo $id_cliente; ?>">
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Nombre</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Apellidos</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $apellidos; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Foto</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="foto" name="foto" value="<?php echo $foto; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
				<div class="col-sm-10">
					<input type="Fecha" class="form-control" id="fechan" name="fechan" value="<?php echo $fechan; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Direccion</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $direccion; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Correo electronico</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="correo" name="correo" value="<?php echo $correo; ?>">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Contraseña</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
				</div>
			</div>
			<div class="mb-3 row">
			<button type="submit" class="btn btn-primary mb-3">Actualizar</button>
			</div>
		</form>
	</div>
</body>
<?php echo view('vFooterH'); ?>
</html>