<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lowongan extends Migration
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

			'judul' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],

			'jobdesk' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],

			'tanggal_upload' => [
				'type' => 'DATE',
			],

			'deskripsi' => [
				'type' => 'TEXT',
			],

			'created_at' => [
				'type' => 'DATETIME',
				'null' => 'true',
			],

			'updated_at' => [
				'type' => 'DATETIME',
				'null' => 'true',
			],

			'gambar' => [
				'type' => 'VARCHAR',
				'constraint' => 225
			],

		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('lowongan', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('lowongan');
	}
}
