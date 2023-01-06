<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Propertytype extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 5,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "type_name" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => false,
            ],
            "creattime" => [
                "type" => "TIMESTAMP",
                "default" => new RawSql('CURRENT_TIMESTAMP'),
            ],

        ]);
        $this->forge->addKey("id", true);
        $this->forge->createTable('propertytypes');
    }
    public function down()
    {
        $this->forge->dropTable('propertytypes');
    }
}
