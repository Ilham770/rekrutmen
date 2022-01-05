<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LowonganModel;
use CodeIgniter\HTTP\Files\UploadedFile;

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
		$jobdesc = $this->dataLowongan->getLowongan();
		//FORM Create HANDLER
		$data = [
			'title' => 'Form Tambah Data Lowongan',
			'validation' => \Config\Services::validation(),
			'jobdesc' => $jobdesc
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
			// 'id_jobdesc' => 'required',
			'gambar' => 'uploaded[gambar]','mime_in[gambar,image/jpg,image/jpeg,image/png]','max_size[gambar,1024]',
		])) {
			// $validation = \Config\Services::validation();
			return redirect()->to('lowongan/create')->withInput();
		}
		
		$gambar = $this->request->getFile('gambar');
		if($gambar)
		{
			$gambar->move(ROOTPATH.'public/uploads');

			//FUNGSI SAVE DATA
			$this->dataLowongan->save([
			'judul' => $this->request->getVar('judul'),
			'deskripsi' => $this->request->getVar('deskripsi'),
			'id_jobdesc' => $this->request->getVar('jobdesc'),
			'gambar' => $gambar->getName()
			]);
		}
		
		
		
		
		session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
		return redirect()->to('/lowongan');
	}
	//end

}
