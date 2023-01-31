<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'cate_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'id',
            'procode' => [
                'type'=>'VARCHAR',
                'constraint' => '50',
            ],
            'probarcode' => [
                'type'=>'VARCHAR',
                'constraint' => '50',
            ],
            'proname'=> [
                'type'=>'VARCHAR',
                'constraint' => '100',
            ],
'category_id'=> [
    'type'=>'VARCHAR',
    'constraint' => '50',
    'null' => true,
],
'isvariation'=> [
    'type'=>'VARCHAR',
    'constraint' => '50',
    'null' => true,
],
'brand_id'=> [
    'type'=>'VARCHAR',
    'constraint' => '50',
    'null' => true,
],
'marketprice'=> [
    'type'=>'FLOAT',
    'constraint' => '10,2',
    'null' => true,
],
'price'=> [
    'type'=>'FLOAT',
    'constraint' => '10,2',
    'null' => true,
],
'cur_stock'=> [
    'type'=>'VARCHAR',
    'constraint' => '50',
    'null' => true,
],
'low_stock'=> [
    'type'=>'VARCHAR',
    'constraint' => '50',
    'null' => true,
],
'pro_img'=> [
    'type'=>'VARCHAR',
    'constraint' => '100',
    'null' => true,
],
'des'=> [
    'type'=>'TEXT',
    'null' => true,
],

'add_date'=> [
    'type' => 'datetime'
],
'update_date'=> [
    'type' => 'datetime'
],
'user'=> [
    'type'=>'VARCHAR',
    'constraint' => '50',
    'null' => true,
],
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('product');
    }
    

    public function down()
    {
        $this->forge->dropTable('product');
    }
}
