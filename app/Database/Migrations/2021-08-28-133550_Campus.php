<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Campus extends Migration
{
	public function up()
	{
		$this->forge->addField([

			'id_campus' => [
				'type' => 'INT',
				'contsraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],

			'campus_name' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],

			'id_major' => [
				'type' => 'varchar',
				'constraint' => 10,
			],

			'created_at' => [
				'type' => 'DATETIME',
				'null' => 'true',
			],

			'updated_at' => [
				'type' => 'DATETIME',
				'null' => 'true',
			],
		]);

		$this->forge->addKey('id_campus', TRUE);

		$this->forge->createTable('campus', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('campus');
	}
}
