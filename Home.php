<?php
namespace App\Controllers;
use App\Models\mClientes;
use  App\Models\mHabitacion;
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
	public function registro_cliente()
	{
		return view('Registrar_Clientes');
	}
	public function registro_habitacion()
	{
		return view('vRegistroH');
	}
	public function registro_usuario() {
		 return view ( 'vRegistroU' );
	}
	/*Cliente*/
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
	public function mostrarRegistrosC()
	{
		$mClientes = new mClientes();
		$todos=$mClientes->findAll();
		$usuarios = array('usuarios'=>$todos);

		return view("vRegistrosC", $usuarios);
	}

	public function buscarRegistroC()
	{
		$mClientes = new mClientes();
		$id_cliente = $_POST['id_cliente'];
		$usuario = $mClientes->find($id_cliente);
		return view ("vRegistroEncontradoC", $usuario);

		//$todos=$mClientes->where('nombre', 'Salvador')->findAll();
		//$usuarios=array('usuarios'=>$todos);
		//return view("vRegistrosC", $usuarios);
	}
	public function actualizarRegistroC()
	{
		$mClientes = new mClientes();
		$id_cliente = $_POST['id_cliente'];
		$clienteActualizado =[
			"nombre" => $_POST['nombre'],
			"apellidos" => $_POST['apellidos'],
			"foto" => $_POST['foto'],
			"fechan" => $_POST['fechan'],
			"direccion" => $_POST['direccion'],
			"correo" => $_POST['correo'],
			"password" => $_POST['password']
		];
		$mClientes->update($id_cliente, $clienteActualizado);
		//$usuario=$mClientes->find($id_cliente);
		return $this->mostrarRegistrosC();
	}
	/*Habitación*/
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
		return view ("vSuccessH",$datoId);
	}
	public function mostrarRegistrosH(){
		$mHabitacion = new mHabitacion();
		$todos=$mHabitacion->findAll();
		$usuarios=array('usuarios'=>$todos);

		return view("vRegistrosH",$usuarios);
	}
	public function buscarRegistroH(){
		$mHabitacion = new mHabitacion();
		$id_habitacion = $_POST['id_habitacion'];
		$usuario=$mHabitacion->find($id_habitacion);
		return view("vRegistroEncontradoH",$usuario);
	}
	public function actualizarRegistroH(){
		$mHabitacion = new mHabitacion();
		$id_habitacion = $_POST['id_habitacion'];
		$habitacionActualizada =[
			"usuario" => $_POST['usuario'],
			"pisoH" => $_POST['pisoH'],
			"numH" => $_POST['numH'],
			"numHue" => $_POST['numHue'],
			"tipoH" => $_POST['tipoH']
		];
		$mHabitacion->update($id_habitacion, $habitacionActualizada);
		$usuario=$mHabitacion->find($id_habitacion);
		return $this->mostrarRegistrosH();
	}

	public function insertarFormU(){
		
		$mUsuarios=new mUsuarios();
		$usuarioNuevo=[
			"usuario"=> $_POST['email'],
			"password"=> $_POST['password']
		];
		$mUsuarios-> insert($usuarioNuevo);
		$datoId['idRegistrado'] = $mUsuarios->db->insertID();

		return view("vSuccessU", $datoId);
	}
	public function mostrarRegistroU(){
		$mUsuarios= new mUsuarios();
		$todos=$mUsuarios->findAll();
		$usuarios= array('usuarios'=>$todos);

		return view("vRegistrosU",$usuarios);
	}
	public function buscarRegistroU(){
    $mUsuarios = new mUsuarios();
    $id_usuario = $_POST['id_usuario'];
    $usuario=$mUsuarios->find($id_usuario);
    return view("vRegistroEnconU",$usuario);
  	}

 	public function actualizarRegistroU(){
    $mUsuarios = new mUsuarios();
    $id_usuario = $_POST['id_usuario'];
    $usuarioActualizado =[
      "usuario" => $_POST['email'],
      "password" => $_POST['password']
    ];
    $mUsuarios->update($id_usuario, $usuarioActualizado);
    $usuario=$mUsuarios->find($id_usuario);
    return $this->mostrarRegistroU();
    }

}
