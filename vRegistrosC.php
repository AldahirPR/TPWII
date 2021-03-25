<!DOCTYPE html>
<html>
<head>
	<?php echo view('vEnlacesHead'); ?>
	<title>Registros Clientes</title>
</head>
<body>
	<?php echo view('vNavBarC'); ?>
	<br>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-auto">
				<h1 class="alert alert-primary" role="alert">Registros actuales</h1>
			</div>
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Nombre</th>
						<th scope="col">Apellidos</th>
						<th scope="col">Foto</th>
						<th scope="col">Fecha nacimiento</th>
						<th scope="col">Direccion</th>
						<th scope="col">Correo</th>
						<th scope="col">Contraseña</th>
					</tr>
				</thead>
				<tbody>
					
					<?php foreach ($usuarios as $usuario) { ?>
					<tr>
						<td><?php echo $usuario['id_cliente']; ?></td>
						<td><?php echo $usuario['nombre']; ?></td>
						<td><?php echo $usuario['apellidos']; ?></td>
						<td><?php echo $usuario['foto']; ?></td>
						<td><?php echo $usuario['fechan']; ?></td>
						<td><?php echo $usuario['direccion']; ?></td>
						<td><?php echo $usuario['correo']; ?></td>
						<td><?php echo $usuario['password']; ?></td>
					</tr>
					<?php } ?>
				</tbody>	
			</table>
			
		</div>
		
	</div>
</body>
	<?php echo view('vFooterH'); ?>
</html>