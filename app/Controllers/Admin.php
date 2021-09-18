<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Admin extends BaseController
{

	protected $dataAdmin;

	function  __construct()
	{
		$this->dataAdmin = new AdminModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Dashboard Administrator'
		];

		return view('administrator/admin', $data);
	}


	public function view()
	{
		//TAMPIL SEMUA DATA 
		$admin = $this->dataAdmin->findAll();

		$data = [
			'title' => 'Data User Admin',
			'admin' => $admin
		];

		return view('administrator/data_admin/adminTampil', $data);
	}

	public function create()
	{
		//FORM CREATE HANDLER
		$data = [
			'title' => 'Form Tambah Data Admin',
			'validation' => \Config\Services::validation()
		];
		return view('administrator/data_admin/formAdmin', $data);
		//end
	}

	public function save()
	{
		//FORM VALIDATION
		if (!$this->validate([
			'nama' => 'required',
			'username' => 'required|alpha_numeric',
			'password' => 'required|alpha_numeric|max_length[10]',
			'jabatan' => 'required',
			'kelamin' => 'required',
			'alamat' => 'required',
			'telepon' => 'required|numeric|max_length[15]',

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

	//FUNGSI HAPUS
	public function delete($id)
	{
		$this->dataAdmin->delete($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus.');

		return redirect()->to('/admin/view');
	}
	//end

	//FORM EDIT HANDLER
	public function edit($id)
	{
		$admin = $this->dataAdmin->find($id);
		$data = [
			'title' => 'Form Edit Data Admin',
			'validation' => \Config\Services::validation(),
			'admin' => $admin
		];
		return view('administrator/data_admin/formEdit', $data);
	}

	public function update($id)
	{
		//FORM VALIDATION
		if (!$this->validate([
			'nama' => 'required',
			'username' => 'required|alpha_numeric',
			'password' => 'required|alpha_numeric|max_length[10]',
			'jabatan' => 'required',
			'kelamin' => 'required',
			'alamat' => 'required',
			'telepon' => 'required|numeric|max_length[15]',

		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('/admin/edit')->withInput()->with('validation', $validation);
		}
		//end


		$this->dataAdmin->save([
			'id' => $id,
			'nama' => $this->request->getVar('nama'),
			'username' => $this->request->getVar('username'),
			'Password' => $this->request->getVar('password'),
			'jabatan' => $this->request->getVar('jabatan'),
			'kelamin' => $this->request->getVar('kelamin'),
			'alamat' => $this->request->getVar('alamat'),
			'telepon' => $this->request->getVar('telepon'),
		]);

		session()->setFlashdata('pesan', 'Data berhasil diubah.');

		return redirect()->to('/admin/view');
	}
}
