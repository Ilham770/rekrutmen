<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Register extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Register Sistem E-Rekrutmen',
		];
		return view('register', $data);
	}

	public function save()
	{
	}
}
