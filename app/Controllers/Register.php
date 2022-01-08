<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Register extends BaseController
{
	protected $dataUser;

	function __construct()
	{
		$this->dataUser = new UserModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Register Sistem E-Rekrutmen',
			'validation' => \Config\Services::validation()
		];
		return view('register', $data);
	}

	public function save()
	{
		//FORM VALIDATION
		if (!$this->validate([
			'fullname' => 'required',
			'username' => 'required|alpha_numeric',
			'password' => 'required|max_length[10]',
			'gender' => 'required',
			'date_of_birth' => 'required',
			'phone' => 'required|alpha_numeric|max_length[15]',
			'address' => 'required|max_length[200]',
			'gambar' => 'uploaded[gambar]','mime_in[gambar,image/jpg,image/jpeg,image/png]','max_size[gambar,1024]',
			

		])) {
			
			// $validation = \Config\Services::validation();
			return redirect()->to('/register')->withInput();
		}

		$fileGambar = $this->request->getFile('gambar');

		if($fileGambar){
			$fileGambar->move(ROOTPATH.'public/images/user');
		
			$this->dataUser->save([	
				'fullname' => $this->request->getVar('fullname'),
				'username' => $this->request->getVar('username'),
				'password' => $this->request->getvar('password'),
				'gender' => $this->request->getVar('gender'),
				'date_of_birth' => $this->request->getVar('date_of_birth'),
				'phone' => $this->request->getVar('phone'),
				'address' => $this->request->getVar('address'),
				'gambar' => $fileGambar->getName(),
				
			]);
	
			session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
			return redirect()->to('/register');
		}
	}
	//end
}
