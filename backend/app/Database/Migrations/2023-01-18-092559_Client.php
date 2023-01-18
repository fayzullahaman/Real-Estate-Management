<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Client extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 12,
                "auto_increment" => true
            ],
            "client_name" => [
                "type" => "VARCHAR",
                "constraint" => 50,
            ],
            "client_email" => [
                "type" => "VARCHAR",
                "constraint" => 30,
                "unique" => true,
            ],
            "profession" => [
                "type" => "VARCHAR",
                "constraint" => 50,
            ],
            "comment" => [
                "type" => "VARCHAR",
                "constraint" => 250,
            ],
            "creattime" => [
                "type" => "TIMESTAMP",
                "default" => new RawSql('CURRENT_TIMESTAMP'),
            ],

        ]);
        $this->forge->addKey("id", true);
        $this->forge->createTable('clients');
    }

    public function down()
    {
        $this->forge->dropTable('clients');
    }
}
