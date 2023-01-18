<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AgentSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'agent_name' => 'Linda Marlin',
                'agent_email' => 'linda@gmail.com',
                'designation' => 'Designer',
                'password' => password_hash('1234', PASSWORD_DEFAULT),
            ],
            [
                'agent_name' => 'Daniel Martin',
                'agent_email' => 'daniel@gmail.com',
                'designation' => 'Programmer',
                'password' => password_hash('1234', PASSWORD_DEFAULT),
            ],
            [
                'agent_name' => 'Steven Batpar',
                'agent_email' => 'steven@gmail.com',
                'designation' => 'Developer',
                'password' => password_hash('1234', PASSWORD_DEFAULT),
            ],
            [
                'agent_name' => 'Joseph Fin',
                'agent_email' => 'joseph@gmail.com',
                'designation' => 'IT Officer',
                'password' => password_hash('1234', PASSWORD_DEFAULT),
            ],
        ];

        foreach ($datas as $data)
            $this->db->table('agents')->insert($data);
    }
}
