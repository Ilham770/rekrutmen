<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TitleModel;

class Title extends BaseController
{
	protected $dataStudi;

	function __construct()
	{
		$this->dataStudi = new TitleModel();
	}

	public function index()
	{
		$studi = $this->dataStudi->findAll();


		$data = [
			'title' => 'Data Lulusan Terakhir',
			'studi' =>  $studi,
		];

		return view('administrator/data_title/viewTitle', $data);
	}

	public function create()
	{
		//FORM Create HANDLER
		$data = [
			'title' => 'Form Tambah Data Lulusan',
			'validation' => \Config\Services::validation()
		];
		return view('administrator/data_title/addTitle', $data);
		//end
	}

	public function save()
	{
		//FORM VALIDATION
		if (!$this->validate([
			'title_name' => 'required',
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('title/create')->withInput()->with('validation', $validation);
		}
		//end

		//FUNGSI SAVE DATA
		$this->dataStudi->save([
			'title_name' => $this->request->getVar('title_name'),
		]);

		session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

		return redirect()->to('/title');
	}

	//FUNGSI HAPUS
	public function delete($id)
	{
		$this->dataStudi->delete($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus.');

		return redirect()->to('/title');
	}
	//end

	//Form EDIT HANDLER
	public function edit($id)
	{
		$studi = $this->dataStudi->find($id);
		$data = [
			'title' => 'Form Edit Data Lulusan',
			'validation' => \Config\Services::validation(),
			'studi' => $studi
		];
		return view('administrator/data_title/updateTitle', $data);
	}

	public function update($id)
	{
		//FORM VALIDATION
		if (!$this->validate([
			'title_name' => 'required',

		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('/title/edit')->withInput()->with('validation', $validation);
		}
		//end
		$this->dataStudi->save([
			'id' => $id,
			'title_name' => $this->request->getVar('title_name'),
		]);

		session()->setFlashdata('pesan', 'Data berhasil diubah.');

		return redirect()->to('/title');
	}
}
