<!DOCTYPE html>
<html>
<head>
	<?php echo view('vEnlacesHead'); ?>
	<title>Registro clientes</title>
</head>
<body>
	<?php echo view('vNavBarH'); ?>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-auto">
				<h1 class="alert alert-primary" role="alert">Registro de Clientes</h1>
			</div>
		</div>
		<form method="POST" action="../Home/insertarFormC">
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Nombre</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre del cliente">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Apellidos</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos del cliente">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Foto</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="foto" name="foto" placeholder="(nombre de la foto).(png o jpg)">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
				<div class="col-sm-10">
					<input type="Fecha" class="form-control" id="fechan" name="fechan" placeholder="Ejemplo:2021-03-08">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Direccion</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Municipio, calle">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Correo electronico</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="correo" name="correo" placeholder="correo">
				</div>
			</div>
			<div class="mb-3 row">
				<label for="text" class="col-sm-2 col-form-label">Contraseña</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="password" name="password" placeholder="********">
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