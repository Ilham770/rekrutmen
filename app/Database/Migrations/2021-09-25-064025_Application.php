<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Application extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_application' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],

			'id_user' => [
				'type' => 'VARCHAR',
				'constraint' => 15,
			],

			'id_lowongan' => [
				'type' => 'VARCHAR',
				'constraint' => 15,
			],

			'status' => [
				'type' => 'ENUM',
				'constraint' => ['Lolos', 'Tidak'],
			],

			'created_at' => [
				'type' => 'DATETIME',
				'null' => true,
			],

			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true,
			]
		]);


		$this->forge->addKey('id_application', TRUE);
		$this->forge->createTable('application', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('application');
	}
}
