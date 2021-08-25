<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterLowongan extends Migration
{
	public function up()
	{
		$this->forge->addColumn(
			'lowongan',
			[
				'id_jobdesc' => [
					'type' => 'VARCHAR',
					'constraint' => 15
				],
			]
		);
	}

	public function down()
	{
		$this->forge->dropTable('lowongan', 'id_jobdesc');
	}
}
