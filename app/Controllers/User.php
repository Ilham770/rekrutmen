<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
	protected $dataUser;

	function __construct()
	{
		$this->dataUser = new UserModel();
	}
	public function index()
	{
		$user = $this->dataUser->findAll();

		$data = [
			'title' => 'Data User',
			'user' => $user,
		];

		return view('administrator/data_user/viewUser', $data);
	}

	//FUNGSI HAPUS
	public function delete($id)
	{
		$this->dataUser->delete($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus.');

		return redirect()->to('/user');
	}
	//end
}
