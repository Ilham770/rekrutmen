<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Admin extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama' =>  'Herry Suartawan',
				'jabatan' => 'Owner',
				'kelamin' => 'Laki - Laki',
				'alamat' => 'Jl. Teratai, No. 2 Dukuh Tabanan',
				'telepon' => '087849140771',
				'created_at' => Time::now(),
				'username' => 'herry',
				'password' => 'herry'
			],

			[
				'nama' => 'Ilham Kurniawan',
				'jabatan' => 'HRD',
				'kelamin' => 'Laki - Laki',
				'alamat' => 'Jimbaran, Kuta Selatan',
				'telepon' => '087000000',
				'created_at' => Time::now(),
				'username' => 'ilham',
				'password' => 'ilham'
			],
		];

		$this->db->table('admin')->insertBatch($data);
	}
}
