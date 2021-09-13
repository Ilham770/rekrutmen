<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
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

			'fullname' => [
				'type' => 'VARCHAR',
				'constraint' => 250
			],

			'username' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],

			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],

			'gender' => [
				'type' => 'ENUM',
				'constraint' => ['Laki - Laki', 'Perempuan'],
			],

			'address' => [
				'type' => 'TEXT',
				'null' => 'true',
			],

			'date_of_birth' => [
				'type' => 'DATE',
				'null' => 'true',
			],

			'phone' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],

			'image' => [
				'type' => 'VARCHAR',
				'constraint' => 250,
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

		$this->forge->createTable('user', TRUE);
	}

	public function down()
	{
		$this->forge->dropDatabase('user');
	}
}
