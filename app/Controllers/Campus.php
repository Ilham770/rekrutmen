<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CampusModel;

class Campus extends BaseController
{

	protected $dataCampus;

	function __construct()
	{
		$this->dataCampus = new CampusModel();
	}

	public function index()
	{
		$campus = $this->dataCampus->findAll();


		$data = [
			'title' => 'Data Campus',
			'campus' =>  $campus,
		];

		return view('administrator/data_campus/viewCampus', $data);
	}

	public function create()
	{
		//FORM Create HANDLER
		$data = [
			'title' => 'Form Tambah Data Campus',
			'validation' => \Config\Services::validation()
		];
		return view('administrator/data_campus/addCampus', $data);
		//end
	}

	public function save()
	{
		//FORM VALIDATION
		if (!$this->validate([
			'campus_name' => 'required',
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('campus/create')->withInput()->with('validation', $validation);
		}
		//end

		//FUNGSI SAVE DATA
		$this->dataCampus->save([
			'campus_name' => $this->request->getVar('campus_name'),
		]);

		session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

		return redirect()->to('/campus');
	}

	//FUNGSI HAPUS
	public function delete($id)
	{
		$this->dataCampus->delete($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus.');

		return redirect()->to('/campus');
	}
	//end
	//Form EDIT HANDLER
	public function edit($id)
	{
		$campus = $this->dataCampus->find($id);
		$data = [
			'title' => 'Form Edit Data Jobdesc',
			'validation' => \Config\Services::validation(),
			'campus' => $campus
		];
		return view('administrator/data_campus/updateCampus', $data);
	}

	public function update($id)
	{
		//FORM VALIDATION
		if (!$this->validate([
			'campus_name' => 'required',

		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('/campus/edit')->withInput()->with('validation', $validation);
		}
		//end
		$this->dataCampus->save([
			'id_campus' => $id,
			'campus_name' => $this->request->getVar('campus_name'),
		]);

		session()->setFlashdata('pesan', 'Data berhasil diubah.');

		return redirect()->to('/campus');
	}
}
