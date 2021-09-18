<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MajorModel;

class Major extends BaseController
{
	protected $dataMajor;

	function __construct()
	{
		$this->dataMajor = new MajorModel();
	}

	public function index()
	{
		$major = $this->dataMajor->findAll();


		$data = [
			'title' => 'Data Major',
			'major' =>  $major,
		];

		return view('administrator/data_major/viewMajor', $data);
	}

	public function create()
	{
		//FORM Create HANDLER
		$data = [
			'title' => 'Form Tambah Data Program Studi',
			'validation' => \Config\Services::validation()
		];
		return view('administrator/data_major/addMajor', $data);
		//end
	}

	public function save()
	{
		//FORM VALIDATION
		if (!$this->validate([
			'major_title' => 'required',
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('major/create')->withInput()->with('validation', $validation);
		}
		//end

		//FUNGSI SAVE DATA
		$this->dataMajor->save([
			'major_title' => $this->request->getVar('major_title'),
		]);

		session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

		return redirect()->to('/major');
	}

	//FUNGSI HAPUS
	public function delete($id)
	{
		$this->dataMajor->delete($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus.');

		return redirect()->to('/major');
	}
	//end

	//Form EDIT HANDLER
	public function edit($id)
	{
		$major = $this->dataMajor->find($id);
		$data = [
			'title' => 'Form Edit Data Program Studi',
			'validation' => \Config\Services::validation(),
			'major' => $major
		];
		return view('administrator/data_major/updateMajor', $data);
	}

	public function update($id)
	{
		//FORM VALIDATION
		if (!$this->validate([
			'major_title' => 'required',

		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('/major/edit')->withInput()->with('validation', $validation);
		}
		//end
		$this->dataMajor->save([
			'id' => $id,
			'major_title' => $this->request->getVar('major_title'),
		]);

		session()->setFlashdata('pesan', 'Data berhasil diubah.');

		return redirect()->to('/major');
	}
}
