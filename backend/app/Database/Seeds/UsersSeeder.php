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
                'password' => '1234',
            ],
            [
                'name' => 'Anamul Islam',
                'email' => 'anam@gmail.com',
                'password' => '1234',
            ],
            [
                'name' => 'Alauddin Alo',
                'email' => 'alo@gmail.com',
                'password' => '1234',
            ],
        ];

        foreach ($datas as $data)
            $this->db->table('users')->insert($data);
    }
}
