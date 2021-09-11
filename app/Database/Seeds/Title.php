<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Title extends Seeder
{
	public function run()
	{
		$data = [
			[
				'title_name' => 'SMK/SMA',
				'updated_at' => Time::now(),
				'created_at' => Time::now(),
			],

			[
				'title_name' => 'Diploma 1',
				'updated_at' => Time::now(),
				'created_at' => Time::now(),
			],

			[
				'title_name' => 'Diploma 2',
				'updated_at' => Time::now(),
				'created_at' => Time::now(),
			],

			[
				'title_name' => 'Diploma 3',
				'updated_at' => Time::now(),
				'created_at' => Time::now(),
			],

			[
				'title_name' => 'Strata 1',
				'updated_at' => Time::now(),
				'created_at' => Time::now(),
			],

		];

		$this->db->table('title')->insertBatch($data);
	}
}
