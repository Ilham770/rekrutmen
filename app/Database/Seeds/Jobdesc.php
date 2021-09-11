<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Jobdesc extends Seeder
{
	public function run()
	{
		$data = [
			[
				'job_name' => 'Graphic Designer',
				'updated_at' => Time::now(),
				'created_at' => Time::now(),
			],

			[
				'job_name' => 'Web Programming',
				'updated_at' => Time::now(),
				'created_at' => Time::now(),
			]
		];

		$this->db->table('jobdesc')->insertBatch($data);
	}
}
