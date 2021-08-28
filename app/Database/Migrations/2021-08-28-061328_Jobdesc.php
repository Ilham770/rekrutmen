<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jobdesc extends Migration
{
	public function up()
	{
		$this->forge->addField([

			'id_jobdesc' => [
				'type' => 'INT',
				'contsraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],

			'job_name' => [
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

		$this->forge->addKey('id_jobdesc', TRUE);

		$this->forge->createTable('jobdesc', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('jobdesc');
	}
}
