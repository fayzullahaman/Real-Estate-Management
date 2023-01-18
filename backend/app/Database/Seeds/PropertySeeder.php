<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PropertySeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'property_name' => 'Suite Appartment For Sell',
                'property_price' => '2000000',
                'property_image' => "",
                'property_address' => "Kakrail, Dhaka",
                'property_size' => '1000',
                'property_type' => '1',
                'property_details' => "This is suite appartment for sell",
            ],
            [
                'property_name' => 'Suite Villa For Sell',
                'property_price' => '2500000',
                'property_image' => "",
                'property_address' => "Mirpur, Dhaka",
                'property_size' => '1500',
                'property_type' => '2',
                'property_details' => "This is suite villa for sell",
            ],
            [
                'property_name' => 'Suite Office For Sell',
                'property_price' => '3000000',
                'property_image' => "",
                'property_address' => "Badda, Dhaka",
                'property_size' => '2000',
                'property_type' => '3',
                'property_details' => "This is suite office for sell",
            ],
            [
                'property_name' => 'Suite Building For Sell',
                'property_price' => '20500000',
                'property_image' => "",
                'property_address' => "Dhanmondi, Dhaka",
                'property_size' => '5000',
                'property_type' => '4',
                'property_details' => "This is suite building for sell",
            ],
            [
                'property_name' => 'Suite Home For Sell',
                'property_price' => '2000000',
                'property_image' => "",
                'property_address' => "Gulshan, Dhaka",
                'property_size' => '2000',
                'property_type' => '5',
                'property_details' => "This is suite home for sell",
            ],
            [
                'property_name' => 'Suite Shop For Sell',
                'property_price' => '2000000',
                'property_image' => "",
                'property_address' => "Banani, Dhaka",
                'property_size' => '1800',
                'property_type' => '6',
                'property_details' => "This is suite shop for sell",
            ],
            [
                'property_name' => 'Suite Townhouse For Sell',
                'property_price' => '3500000',
                'property_image' => "",
                'property_address' => "Banasree, Dhaka",
                'property_size' => '3000',
                'property_type' => '7',
                'property_details' => "This is suite townhouse for sell",
            ],
            [
                'property_name' => 'Suite Garage For Sell',
                'property_price' => '2000000',
                'property_image' => "",
                'property_address' => "Uttara, Dhaka",
                'property_size' => '1000',
                'property_type' => '8',
                'property_details' => "This is suite garage for sell",
            ],
            [
                'property_name' => 'Suite Appartment For Sell',
                'property_price' => '2000000',
                'property_image' => "",
                'property_address' => "Khilkhet, Dhaka",
                'property_size' => '1000',
                'property_type' => '1',
                'property_details' => "This is suite appartment for sell",
            ],
            [
                'property_name' => 'Suite Villa For Sell',
                'property_price' => '2500000',
                'property_image' => "",
                'property_address' => "Mohammodpur, Dhaka",
                'property_size' => '1500',
                'property_type' => '2',
                'property_details' => "This is suite villa for sell",
            ],
            [
                'property_name' => 'Suite Office For Sell',
                'property_price' => '3000000',
                'property_image' => "",
                'property_address' => "Agargaon, Dhaka",
                'property_size' => '2000',
                'property_type' => '3',
                'property_details' => "This is suite office for sell",
            ],

        ];

        foreach ($datas as $data)
            $this->db->table('properties')->insert($data);
    }
}
