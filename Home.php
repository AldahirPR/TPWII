<?php

namespace App\Controllers;
use App\Models\mHabitacion;
use App\Models\mClientes;
use App\Models\mUsuarios;
class Home extends BaseController{
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
	public function insertarForm(){
		
		$mUsuarios=new mUsuarios();
		$usuarioNuevo=[
			"usuario"=> $_POST['email'],
			"password"=> $_POST['password']
		];
		$mUsuarios-> insert($usuarioNuevo);
		$datoId['idRegistrado'] = $mUsuarios->db->insertID();

		return view("hotelQuanax/vSuccess", $datoId);
	}
	public function sesion(){
		return view('hotelQuanax/vRegistroU');
	}
	/*Clientes*/
		public function mostrarRegistrosC()
	{
		$mClientes = new mClientes();
		$todos=$mClientes->findAll();
		$usuarios = array('usuarios'=>$todos);

		return view("hotelQuanax/vRegistrosC", $usuarios);
	}

	public function buscarRegistroC()
	{
		$mClientes = new mClientes();
		$id_cliente = $_POST['id_cliente'];
		$usuario = $mClientes->find($id_cliente);
		return view ("hotelQuanax/vRegistroEncontradoC", $usuario);
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
	public function eliminarRegistroC($id){
		$mClientes = new mClientes();
		$id_cliente = $id;
		$mClientes->delete($id_cliente);

		return $this->mostrarRegistrosC();
	}
	/*Usuarios*/
	public function mostrarRegistrosU(){
		$mUsuarios = new mUsuarios();
		$todos=$mUsuarios->findAll();
		$usuarios=array('usuarios'=>$todos);

		return view("hotelQuanax/vRegistrosU",$usuarios);
	}
	public function buscarRegistroU(){
		$mUsuarios = new mUsuarios();
		$id_usuario = $_POST['id_usuario'];
		$usuario=$mUsuarios->find($id_usuario);
		return view("hotelQuanax/vRegistroEncontradoU",$usuario);
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
		return $this->mostrarRegistrosU();
	}
	public function eliminarRegistroU($id){
		$mUsuarios = new mUsuarios();
		$id_usuario = $id;
		$mUsuarios->delete($id_usuario);

		return $this->mostrarRegistrosU();
	}
	/*Habitación*/
	public function mostrarRegistrosH(){
		$mHabitacion = new mHabitacion();
		$todos=$mHabitacion->findAll();
		$usuarios=array('usuarios'=>$todos);

		return view("hotelQuanax/vRegistrosH",$usuarios);
	}
	public function buscarRegistroH(){
		$mHabitacion = new mHabitacion();
		$id_habitacion = $_POST['id_habitacion'];
		$usuario=$mHabitacion->find($id_habitacion);
		return view("hotelQuanax/vRegistroEncontradoH",$usuario);
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
	public function eliminarRegistroH($id){
		$mHabitacion = new mHabitacion();
		$id_habitacion = $id;
		$mHabitacion->delete($id_habitacion);

		return $this->mostrarRegistrosH();
	}
}
