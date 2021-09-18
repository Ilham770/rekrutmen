<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JobdescModel;

class Jobdesc extends BaseController
{
	protected $dataJobdesc;

	function  __construct()
	{
		$this->dataJobdesc = new JobdescModel();
	}

	public function index()
	{

		$jobdesc = $this->dataJobdesc->findAll();


		$data = [
			'title' => 'Data Pekerjaan',
			'jobdesc' =>  $jobdesc,
		];

		return view('administrator/data_jobdesc/viewJobdesc', $data);
	}

	public function create()
	{
		//FORM Create HANDLER
		$data = [
			'title' => 'Form Tambah Data Pekerjaan',
			'validation' => \Config\Services::validation()
		];
		return view('administrator/data_jobdesc/addJobdesc', $data);
		//end
	}

	public function save()
	{
		//FORM VALIDATION
		if (!$this->validate([
			'job_name' => 'required',
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('jobdesc/create')->withInput()->with('validation', $validation);
		}
		//end

		//FUNGSI SAVE DATA
		$this->dataJobdesc->save([
			'job_name' => $this->request->getVar('job_name'),

		]);

		session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

		return redirect()->to('/jobdesc');
	}
	//end

	//FUNGSI HAPUS
	public function delete($id)
	{
		$this->dataJobdesc->delete($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus.');

		return redirect()->to('/jobdesc');
	}
	//end

	//Form EDIT HANDLER
	public function edit($id)
	{
		$jobdesc = $this->dataJobdesc->find($id);
		$data = [
			'title' => 'Form Edit Data Pekerjaan',
			'validation' => \Config\Services::validation(),
			'jobdesc' => $jobdesc
		];
		return view('administrator/data_jobdesc/updateJobdesc', $data);
	}

	public function update($id)
	{
		//FORM VALIDATION
		if (!$this->validate([
			'job_name' => 'required',

		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('/jobdesc/edit')->withInput()->with('validation', $validation);
		}
		//end
		$this->dataJobdesc->save([
			'id_jobdesc' => $id,
			'job_name' => $this->request->getVar('job_name'),
		]);

		session()->setFlashdata('pesan', 'Data berhasil diubah.');

		return redirect()->to('/jobdesc');
	}
}
