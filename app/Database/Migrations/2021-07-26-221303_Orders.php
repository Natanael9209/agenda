<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();//deshabilitar la revision de llaves foráneas
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'client_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
		],
			'code'       => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'amount' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'unit_price' => [
				'type' => 'TEXT',
				'null' => true,
			],
			'total' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
			],
			'status' => [
				'type' => 'TEXT',
				'null' => true,
			],
	]);
	$this->forge->addKey('id', true);
	$this->forge->addForeignKey('client_id','clients','id','CASCADE','CASCADE');//agregar llave foranea
	//sintaxis: $this->forge->addForeignKey('campo de la tabla','tabla referenciada','llave principal de tabla referenceada','restriccion actualizar','restriccion eliminar')
	$this->forge->createTable('orders');
	$this->db->enableForeignKeyChecks();//habilitar la revision de llaves foráneas
	}

	public function down()
	{
		$this->forge->dropTable('orders');
	}
}
