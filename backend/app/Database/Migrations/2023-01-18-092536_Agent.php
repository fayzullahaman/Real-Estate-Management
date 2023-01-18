<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Agent extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 12,
                "auto_increment" => true
            ],
            "agent_name" => [
                "type" => "VARCHAR",
                "constraint" => 50,
            ],
            "agent_email" => [
                "type" => "VARCHAR",
                "constraint" => 30,
                "unique" => true,
            ],
            "designation" => [
                "type" => "VARCHAR",
                "constraint" => 50,
            ],
            "password" => [
                "type" => "CHAR",
                "constraint" => 64,
            ],
            "creattime" => [
                "type" => "TIMESTAMP",
                "default" => new RawSql('CURRENT_TIMESTAMP'),
            ],

        ]);
        $this->forge->addKey("id", true);
        $this->forge->createTable('agents');
    }

    public function down()
    {
        $this->forge->dropTable('agents');
    }
}
