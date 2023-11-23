<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CountriesSeeder extends Seeder
{
    public function run()
    {
        
        $data = [
            'name' => 'shyam',
            'age'    => 15,
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('students')->insert($data);
    }
}
