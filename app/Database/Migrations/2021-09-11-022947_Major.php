<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Major extends Migration
{
	public function up()
	{
		$this->forge->addField([

			'id' => [
				'type' => 'INT',
				'contsraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],

			'major_title' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
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

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('major', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('major');
	}
}
