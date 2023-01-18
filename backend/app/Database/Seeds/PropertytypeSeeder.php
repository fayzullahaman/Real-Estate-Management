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
                'type_icon' => 'assets/img/icon-apartment.png',
            ],
            [
                'type_name' => 'Villa',
                'type_icon' => 'assets/img/icon-villa.png',
            ],
            [
                'type_name' => 'Office',
                'type_icon' => 'assets/img/icon-luxury.png',
            ],
            [
                'type_name' => 'Building',
                'type_icon' => 'assets/img/icon-building.png',
            ],
            [
                'type_name' => 'Home',
                'type_icon' => 'assets/img/icon-house.png',
            ],
            [
                'type_name' => 'Shop',
                'type_icon' => 'assets/img/icon-neighborhood.png',
            ],
            [
                'type_name' => 'Townhouse',
                'type_icon' => 'assets/img/icon-housing.png.png',
            ],
            [
                'type_name' => 'Garage',
                'type_icon' => 'assets/img/icon-condominium.png',
            ],

        ];

        foreach ($datas as $data)
            $this->db->table('propertytypes')->insert($data);
    }
}
