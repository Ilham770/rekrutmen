<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class CvSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'id_user' => '1',
				'id_campus' => '1',
				'id_title' => '1',
				'id_major' => '1',
				'created_at' => Time::now(),
				'updated_at' => Time::now(),

			]
		];
		$this->db->table('cv')->insertBatch($data);
	}
}
