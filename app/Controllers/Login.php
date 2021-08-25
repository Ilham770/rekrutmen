<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Login Sistem E-Rekrutmen',
		];
		return view('login', $data);
	}
}
