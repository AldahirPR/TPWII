<?php

namespace App\Controllers;
use App\Models\mUsuarios;

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
		public function bienvenida2()
	{
		return view('vRegistroU');
	}

	public function insertarForm(){
		
		$mUsuarios=new mUsuarios();
		$usuarioNuevo=[
			"usuario"=> $_POST['email'],
			"password"=> $_POST['password']
		];
		$mUsuarios-> insert($usuarioNuevo);
		$datoId['idRegistrado'] = $mUsuarios->db->insertID();

		return view("vSuccess", $datoId);
	}
}
