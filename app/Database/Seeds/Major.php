<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Major extends Seeder
{
	public function run()
	{
		$data = [
			[
				'major_title' => 'Sistem Informasi',
				'updated_at' => Time::now(),
				'created_at' => Time::now(),
			],

			[
				'major_title' => 'Sistem Komputer',
				'updated_at' => Time::now(),
				'created_at' => Time::now(),
			],

			[
				'major_title' => 'Akuntansi',
				'updated_at' => Time::now(),
				'created_at' => Time::now(),
			],

			[
				'major_title' => 'Keperawatan',
				'updated_at' => Time::now(),
				'created_at' => Time::now(),
			],

			[
				'major_title' => 'Manajemen (Keuangan)',
				'updated_at' => Time::now(),
				'created_at' => Time::now(),
			],
		];

		$this->db->table('major')->insertBatch($data);
	}
}
