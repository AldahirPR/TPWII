<?php

namespace App\Controllers;
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
	public function registro_cliente()
	{
		return view('Registrar_Clientes');
	}
	public function registro_habitacion()
	{
		return view('vRegistroH');
	}
	public function insertarFormC()
	{
		$mClientes = new mClientes();
		$clienteNuevo =[
			"nombre" => $_POST['nombre'],
			"apellidos" => $_POST['apellidos'],
			"foto" => $_POST['foto'],
			"fechan" => $_POST['fechan'],
			"direccion" => $_POST['direccion'],
			"correo" => $_POST['correo'],
			"password" => $_POST['password']
		];
		$mClientes->insert($clienteNuevo);
		$datoID['idRegistrado'] = $mClientes->db->insertID();

		return view("vSucces", $datoID);
		//print_r($_POST);
	}

}
