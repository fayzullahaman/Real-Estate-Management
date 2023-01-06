<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Property extends Migration
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
            "property_name" => [
                "type" => "VARCHAR",
                "constraint" => 100,
                "null" => false,
            ],
            "property_type" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => false,
            ],
            "property_price" => [
                "type" => "DECIMAL",
                "constraint" => "10, 2",
            ],
            "property_image" => [
                "type" => "VARCHAR",
                "constraint" => 200,
                "null" => true
            ],
            "property_address" => [
                "type" => "VARCHAR",
                "constraint" => 100,
                "null" => true
            ],
            "property_size" => [
                "type" => "DECIMAL",
                "constraint" => "10, 2",
                "null" => true
            ],
            "property_details" => [
                "type" => "VARCHAR",
                "constraint" => 200,
                "null" => true
            ],

        ]);
        $this->forge->addKey("id", true);
        $this->forge->createTable('properties');
    }
    public function down()
    {
        $this->forge->dropTable('properties');
    }
}
