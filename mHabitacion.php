<?php
namespace App\Models;
use CodeIgniter\Model;
class mHabitacion extends Model{
	protected $table = 'habitacion';
	protected $primarykey = 'id_habitacion';

	protected $useAutoIncrement = true;

	protected $returnType = 'array';
	protected $useSoftDeletes = true;

	protected $allowedFields = ['usuario','pisoH','numH','numHue','tipoH'];

	protected $useTimestamps = false;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $validationRules = []; 
	protected $validationMessages = [];
	protected $skipValidation = false;
	}
?>