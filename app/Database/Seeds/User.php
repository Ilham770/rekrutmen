<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class User extends Seeder
{
	public function run()
	{
		$data = [
			[
				'fullname' =>  'Herry Suartawan',
				'username' => 'hello',
				'password' => 'meong',
				'address' => 'Jl. Teratai, No. 2 Dukuh Tabanan',
				'phone' => '087849140771',
				'gender' => 'Laki - Laki',
				'created_at' => Time::now(),
			],

			[
				'fullname' =>  'Ilham',
				'username' => 'hello',
				'password' => 'meong',
				'address' => 'Jimbaran Bali',
				'phone' => '087849140771',
				'gender' => 'Laki - Laki',
				'created_at' => Time::now(),
			],
		];

		$this->db->table('user')->insertBatch($data);
	}
}
