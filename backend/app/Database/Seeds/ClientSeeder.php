<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'client_name' => 'Naymur Rahman',
                'client_email' => 'naymur@gmail.com',
                'profession' => 'IT Officer',
                'comment' => 'Tempor stet labore dolor clita stet diam amet ipsum dolor
                duo ipsum rebum stet dolor amet diam stet. Est stet ea
                lorem amet est kasd kasd erat eos',
            ],
            [
                'client_name' => 'Abu Naser Dipu',
                'client_email' => 'dipu@gmail.com',
                'profession' => 'Programmer',
                'comment' => 'Tempor stet labore dolor clita stet diam amet ipsum dolor
                duo ipsum rebum stet dolor amet diam stet. Est stet ea
                lorem amet est kasd kasd erat eos',
            ],
            [
                'client_name' => 'Aklima Akter',
                'client_email' => 'aklima@gmail.com',
                'profession' => 'Developer',
                'comment' => 'Tempor stet labore dolor clita stet diam amet ipsum dolor
                duo ipsum rebum stet dolor amet diam stet. Est stet ea
                lorem amet est kasd kasd erat eos',
            ],
            [
                'client_name' => 'Jannatul Ferdous',
                'client_email' => 'jannat@gmail.com',
                'profession' => 'Designer',
                'comment' => 'Tempor stet labore dolor clita stet diam amet ipsum dolor
                duo ipsum rebum stet dolor amet diam stet. Est stet ea
                lorem amet est kasd kasd erat eos',
            ],

        ];

        foreach ($datas as $data)
            $this->db->table('clients')->insert($data);
    }
}
