<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LowonganModel;
use CodeIgniter\HTTP\Request;

class Lowongan extends BaseController
{
	protected $dataLowongan;

	public function __construct()
	{
		$this->dataLowongan = new LowonganModel();
	}

	public function index()
	{
		$lowongan = $this->dataLowongan->getLowongan();

		$data = [
			'title' => 'Data Lowongan',
			'lowongan' => $lowongan
		];

		return view('administrator/data_lowongan/viewLowongan', $data);
	}


	public function create()
	{
		$addLowongan = $this->dataLowongan->getLowongan();
		//FORM Create HANDLER
		$data = [
			'title' => 'Form Tambah Data Lowongan',
			'validation' => \Config\Services::validation(),
			'addLowongan' => $addLowongan
		];
		return view('administrator/data_lowongan/addLowongan', $data);
		//end
	}

	public function save()
	{
		//FORM VALIDATION
		if (!$this->validate([
			'judul' => 'required',
			'deskripsi' => 'required',
			'id_jobdesc' => 'required',
			'gambar' => 'required',
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('lowongan/create')->withInput()->with('validation', $validation);
		}
		//end

		//FUNGSI SAVE DATA
		$this->dataLowongan->save([
			'judul' => $this->request->getVar('judul'),
			'deskripsi' => $this->request->getVar('deskripsi'),
			'id_jobdesc' => $this->request->getVar('jobdesc'),

		]);

		session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

		return redirect()->to('/lowongan/view');
	}
	//end

}
