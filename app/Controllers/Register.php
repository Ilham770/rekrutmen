<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Register extends BaseController
{
	protected $dataRegister;

	function __construct()
	{
		$this->dataRegister = new UserModel();
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
			'password' => 'required|alpha_numeric|max_length[10]',
			'gender' => 'required',
			'date_of_birth' => 'required',
			'phone' => 'required|alpha_numeric|max_length[15]',
			'address' => 'required',

		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('admin/create')->withInput()->with('validation', $validation);
		}
		//end

		//FUNGSI SAVE DATA
		$this->dataAdmin->save([
			'nama' => $this->request->getVar('nama'),
			'username' => $this->request->getVar('username'),
			'Password' => $this->request->getVar('password'),
			'jabatan' => $this->request->getVar('jabatan'),
			'kelamin' => $this->request->getVar('kelamin'),
			'alamat' => $this->request->getVar('alamat'),
			'telepon' => $this->request->getVar('telepon'),
		]);

		session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

		return redirect()->to('/admin/view');
	}
	//end
}
