<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'name' => 'Mark Jakarburg',
                'email' => 'mark@gmail.com',
                'subject' => 'I need a suite home',
                'message' => 'Tempor stet labore dolor clita stet diam amet ipsum dolor
                duo ipsum rebum stet dolor amet diam stet. Est stet ea
                lorem amet est kasd kasd erat eos',
            ],
        ];
        foreach ($datas as $data)
            $this->db->table('contacts')->insert($data);
    }
}
