<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'name' => 'Fayzullah Aman',
                'email' => 'aman@gmail.com',
                'password' => password_hash('1234', PASSWORD_DEFAULT),
            ],
            [
                'name' => 'Anamul Islam',
                'email' => 'anam@gmail.com',
                'password' => password_hash('1234', PASSWORD_DEFAULT),
            ],
            [
                'name' => 'Alauddin Alo',
                'email' => 'alo@gmail.com',
                'password' => password_hash('1234', PASSWORD_DEFAULT),
            ],
        ];

        foreach ($datas as $data)
            $this->db->table('users')->insert($data);
    }
}
