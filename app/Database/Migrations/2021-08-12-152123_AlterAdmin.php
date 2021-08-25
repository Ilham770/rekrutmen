<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterAdmin extends Migration
{
	public function up()
	{
		$this->forge->addColumn(
			'admin',
			[
				'username' => [
					'type' => 'VARCHAR',
					'constraint' => 100
				],

				'Password' => [
					'type' => 'VARCHAR',
					'constraint' => 50
				]
			]
		);
	}

	public function down()
	{
		$this->forge->dropTable('admin', 'username', 'Password');
	}
}
