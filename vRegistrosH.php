<!DOCTYPE html>
<html>
<head>
	<?php echo view('hotelQuanax/vEnlacesHead'); ?>
	<title>Registros Habitación</title>
</head>
<body>
	<?php echo view('hotelQuanax/vNavBarH'); ?>
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
						<th scope="col">Usuario</th>
						<th scope="col">Piso de la habitación</th>
						<th scope="col">Número de la habitación</th>
						<th scope="col">Número de huéspedes</th>
						<th scope="col">Tipo de habitación</th>
					</tr>
				</thead>
				<tbody>
					
					<?php foreach ($usuarios as $usuario) { ?>
					<tr>
						<td><?php echo $usuario['id_habitacion']; ?></td>
						<td><?php echo $usuario['usuario']; ?></td>
						<td><?php echo $usuario['pisoH']; ?></td>
						<td><?php echo $usuario['numH']; ?></td>
						<td><?php echo $usuario['numHue']; ?></td>
						<td><?php echo $usuario['tipoH']; ?></td>
					</tr>
					<?php } ?>
				</tbody>	
			</table>
			
		</div>
		
	</div>
</body>
	<?php echo view('hotelQuanax/vFooterH'); ?>
</html>