<?php
namespace App\Models;
use CodeIgniter\Model;

class mClientes extends Model{
	protected $table = 'clientes';
	protected $pimaryKey = 'id_cliente';

	protected $useAutoIncrement = true;

	protected $returnType = 'array';
	protected $useSoftDeletes = true;

	protected $allowedFields = ['nombre', 'apellidos', 'foto', 'fechan', 'direccion', 'correo', 'password'];

	 protected $useTimestamps = false;
	 protected $createdField = 'created_at';
	 protected $updatedField = 'updated_at';
	 protected $deletedField = 'deleted_at';

	 protected $validationRules = [];
	 protected $validationMessages = [];
	 protected $skipValidation = false;	 
}
