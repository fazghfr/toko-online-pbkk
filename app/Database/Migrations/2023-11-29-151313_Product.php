<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'product_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'product_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'product_price' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'product_description' => [
                'type' => 'TEXT',
            ],
            'product_image' => [
                'type' => 'VARCHAR',
                'constraint' => 1024,
            ]
        ]);
        $this->forge->addKey('product_id', true);
        $this->forge->createTable('product');
    }

    public function down()
    {
        $this->forge->dropTable('product');
    }
}
