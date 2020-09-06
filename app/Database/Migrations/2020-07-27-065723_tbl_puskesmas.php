<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblPuskesmas extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'int',
				'constraint' => 6, 
				'auto_increment' => true,
				'null' => false,
			],
			'nama_puskesmas' => [
				'type' => 'varchar',
				'constraint' => 50,
				'null' => false,
			],
			'email_puskesmas' => [
				'type' => 'varchar',
				'constraint' => 50,
				'null' => false,
			],
			'alamat_puskesmas' => [
				'type' => 'text',
				'null' => false,
			],
			'status' => [
				'type' => 'varchar',
				'null' => false,
				'constraint' => 11,
			],
			'token_aktifasi' => [
				'type' => 'varchar',
				'null' => false,
				'constraint' => 25,
			],
		]);

		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('admin_puskesmas', 'tbl_users', 'id');
		$this->forge->createTable('tbl_puskesmas');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('tbl_puskesmas');
	}
}
