<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PropertySeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'property_name' => 'Suite Home For Sell',
                'property_price' => '2000000',
                'property_image' => "",
                'property_address' => "Kakrail, Dhaka",
                'property_size' => '1000',
                'property_type' => '1',
                'property_details' => "This is suite home for sell",
            ],
            [
                'property_name' => 'Suite Home For Sell',
                'property_price' => '2500000',
                'property_image' => "",
                'property_address' => "Kakrail, Dhaka",
                'property_size' => '1500',
                'property_type' => '2',
                'property_details' => "This is suite home for sell",
            ],
            [
                'property_name' => 'Suite Home For Sell',
                'property_price' => '3000000',
                'property_image' => "",
                'property_address' => "Kakrail, Dhaka",
                'property_size' => '2000',
                'property_type' => '3',
                'property_details' => "This is suite home for sell",
            ],
            [
                'property_name' => 'Suite Home For Sell',
                'property_price' => '20500000',
                'property_image' => "",
                'property_address' => "Kakrail, Dhaka",
                'property_size' => '5000',
                'property_type' => '4',
                'property_details' => "This is suite home for sell",
            ],
            [
                'property_name' => 'Suite Home For Sell',
                'property_price' => '2000000',
                'property_image' => "",
                'property_address' => "Kakrail, Dhaka",
                'property_size' => '2000',
                'property_type' => '5',
                'property_details' => "This is suite home for sell",
            ],
            [
                'property_name' => 'Suite Home For Sell',
                'property_price' => '2000000',
                'property_image' => "",
                'property_address' => "Kakrail, Dhaka",
                'property_size' => '1800',
                'property_type' => '6',
                'property_details' => "This is suite home for sell",
            ],
            [
                'property_name' => 'Suite Home For Sell',
                'property_price' => '3500000',
                'property_image' => "",
                'property_address' => "Kakrail, Dhaka",
                'property_size' => '3000',
                'property_type' => '7',
                'property_details' => "This is suite home for sell",
            ],
            [
                'property_name' => 'Suite Home For Sell',
                'property_price' => '2000000',
                'property_image' => "",
                'property_address' => "Kakrail, Dhaka",
                'property_size' => '1000',
                'property_type' => '8',
                'property_details' => "This is suite home for sell",
            ],
            [
                'property_name' => 'Suite Home For Sell',
                'property_price' => '2000000',
                'property_image' => "",
                'property_address' => "Kakrail, Dhaka",
                'property_size' => '1000',
                'property_type' => '1',
                'property_details' => "This is suite home for sell",
            ],
            [
                'property_name' => 'Suite Home For Sell',
                'property_price' => '2500000',
                'property_image' => "",
                'property_address' => "Kakrail, Dhaka",
                'property_size' => '1500',
                'property_type' => '2',
                'property_details' => "This is suite home for sell",
            ],
            [
                'property_name' => 'Suite Home For Sell',
                'property_price' => '3000000',
                'property_image' => "",
                'property_address' => "Kakrail, Dhaka",
                'property_size' => '2000',
                'property_type' => '3',
                'property_details' => "This is suite home for sell",
            ],

        ];

        foreach ($datas as $data)
            $this->db->table('properties')->insert($data);
    }
}
