<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Vendas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Cliente'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'valor_venda' => [
                'type' => 'DOUBLE',
                'null' => true,
            ],
            'quantidade_estoque' => [
                'type' => 'DOUBLE',
                'null' => true,
            ],
            'quantidade' => [
                'type' => 'DOUBLE',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'produto_id' => [ 
                'type' => 'INT',
                'constraint'     => 11,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('vendas');
        $this->forge->addField('CONSTRAINT FOREIGN KEY (produto_id) REFERENCES produtos (id)');
    }


    public function down()
    {
        $this->forge->dropTable('vendas');
    }
}
