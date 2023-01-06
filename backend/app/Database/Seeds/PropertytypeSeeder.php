<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PropertytypeSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'type_name' => 'Appartment',
            ],
            [
                'type_name' => 'Villa',
            ],
            [
                'type_name' => 'Office',
            ],
            [
                'type_name' => 'Building',
            ],
            [
                'type_name' => 'Home',
            ],
            [
                'type_name' => 'Shop',
            ],
            [
                'type_name' => 'Townhouse',
            ],
            [
                'type_name' => 'Garage',
            ],

        ];

        foreach ($datas as $data)
            $this->db->table('propertytypes')->insert($data);
    }
}
