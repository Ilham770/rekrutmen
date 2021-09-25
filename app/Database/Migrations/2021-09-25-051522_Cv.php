<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cv extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_cv' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],

			'id_user' => [
				'type' => 'VARCHAR',
				'constraint' => 15,
			],

			'id_campus' => [
				'type' => 'VARCHAR',
				'constraint' => 15,
			],

			'id_title' => [
				'type' => 'VARCHAR',
				'constraint' => 15,
			],

			'id_major' => [
				'type' => 'VARCHAR',
				'constraint' => 15,
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

		$this->forge->addKey('id_cv', TRUE);
		$this->forge->createTable('cv', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('cv');
	}
}
