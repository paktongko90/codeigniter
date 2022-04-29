<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel Model{
	protected $table = 'users';
	protected $allowedFields = ['user_name','user_emai','user_password','user_created_at'];
}

 ?>