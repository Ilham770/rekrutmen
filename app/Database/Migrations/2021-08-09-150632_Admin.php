<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],

			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],

			'jabatan' => [
				'type' => 'ENUM',
				'constraint' => ['HRD', 'Staff', 'Manager', 'Owner'],
				'default' => 'Staff',
			],

			'kelamin' => [
				'type' => 'ENUM',
				'constraint' => ['Laki - Laki', 'Perempuan'],
			],

			'alamat' => [
				'type' => 'TEXT',
				'null' => true,
			],

			'telepon' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],

			'created_at' => [
				'type' => 'DATETIME',
				'null' => 'true',
			],

			'update_at' => [
				'type' => 'DATETIME',
				'null' => 'true',
			],


		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('admin', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('admin');
	}
}
