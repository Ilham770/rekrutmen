<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Application extends Seeder
{
	public function run()
	{
		$data = [
			[
				'id_user' => '1',
				'id_lowongan' => '1',
				'status' => 'Lolos',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			]
		];

		$this->db->table('application')->insertBatch($data);
	}
}
