<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LowonganModel;

class Lowongan extends BaseController
{
	protected $dataLowongan;

	public function __construct()
	{
		$this->dataLowongan = new LowonganModel();
	}
	public function index()
	{
		//
	}

	public function view()
	{
		$lowongan = $this->dataLowongan->findAll();

		$data = [
			'title' => 'Data Lowongan',
			'lowongan' => $lowongan
		];

		return view('administrator/data_lowongan/viewLowongan', $data);
	}
}
