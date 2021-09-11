<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use DateTime;

class Lowongan extends Seeder
{
	public function run()
	{
		$data = [
			[
				'job_name' => 'Graphic',
				'jobdesk' => 'Junior Design Grafis',
				'deskripsi' => 'Menguasai CorelDraw, Photoshop atau Illustrator, mengerjakan semua konten design harian',
				'tanggal_upload' => Time::now(),
				'created_at' => Time::now(),
			],

			[
				'judul' => 'FULL TIME MAGANG',
				'jobdesk' => 'Senior Programmer',
				'deskripsi' => 'Menguasai PHP, HTML, JAVASCRIPT, mau belajar dan bisa bekerja secara individu ataupun team',
				'tanggal_upload' => Time::now(),
				'created_at' => Time::now(),
			]
		];

		$this->db->table('lowongan')->insertBatch($data);
	}
}
