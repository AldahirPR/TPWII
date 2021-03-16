<?php

namespace App\Controllers;
use App\Models\mHabitacion;
use App\Models\mClientes;
class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function bienvenida()
	{
		return view('vBienvenida');
	}
	public function formulario()
	{
		return view('vForm');
	}
	public function registroUsuarios(){
		return view('vRegistroU');
	}
	public function registroHabitacion(){
		return view('hotelQuanax/vRegistroH');
	}
	public function insertarFormH(){
		$mHabitacion = new mHabitacion();
		$habitacionN =[
			"usuario" => $_POST['usuario'],
			"pisoH" => $_POST['pisoH'],
			"numH" => $_POST['numH'],
			"numHue" => $_POST['numHue'],
			"tipoH" => $_POST['tipoH']
		];
		$mHabitacion->insert($habitacionN);
		$datoId['idRegistrado'] = $mHabitacion->db->insertID();
		return view ("hotelQuanax/vSuccessH",$datoId);
	}
	public function registroClientes(){
		return view('hotelQuanax/vRegistrar_Clientes');
	}
	public function insertarFormC(){
		$mClientes = new mClientes();
		$clienteN =[
			"nombre" => $_POST['nombre'],
			"apellidos" => $_POST['apellidos'],
			"foto" => $_POST['foto'],
			"fechan" => $_POST['fechan'],
			"direccion" => $_POST['direccion'],
			"correo" => $_POST['correo'],
			"password" => $_POST['password']
		];
		$mClientes->insert($clienteN);
		$datoId['idRegistrado'] = $mClientes->db->insertID();
		return view ("hotelQuanax/vSuccessC",$datoId);
	}
	public function indexH(){
		return view('hotelQuanax/vIndex');
	}
}
