<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Contact extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 12,
                "auto_increment" => true
            ],
            "name" => [
                "type" => "VARCHAR",
                "constraint" => 50,
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 30,
                "unique" => true,
            ],
            "subject" => [
                "type" => "VARCHAR",
                "constraint" => 50,
            ],
            "message" => [
                "type" => "VARCHAR",
                "constraint" => 150,
            ],
            "creattime" => [
                "type" => "TIMESTAMP",
                "default" => new RawSql('CURRENT_TIMESTAMP'),
            ],

        ]);
        $this->forge->addKey("id", true);
        $this->forge->createTable('contacts');
    }

    public function down()
    {
        $this->forge->dropTable('contacts');
    }
}
