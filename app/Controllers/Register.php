<?php 
namespace App\Controller;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller{

	public function index(){
		//include helper form
		helper(['form']);
		$data = [];
		return view('register',$data);
	}

	public function save(){
		//include helper form
		helper(['form']);
		//set rule validation form
		$rules = [
			'name'			=> 'required|min_length[3]||max_length[30]',
			'email'			=> 'required|min_length[6]|valid_email|is_unique[users.user_email]',
			'password'		=> 'required|min_length[6]|max_length[200]',
			'confpassword'	=> 'matches[password]'
		];

		if ($this->validate($rules)) {
			$model = new UserModel();
			$data = [
				'user_name'		=> $this->request->getVar('name');
				'user_email'	=> $this->request->getVar('email');
				'user_password'	=> password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
			];
			$model->save($data);
			return redirect()->to('/login');
		} else {
			$data['validation'] = $this->validator;
			return view('register',$data);
		}
	}
}

 ?>