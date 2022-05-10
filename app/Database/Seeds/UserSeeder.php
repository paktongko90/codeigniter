<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class UserSeeder extends Seeder
{
    public function run()
    {
            for ($i=0; $i < 10; $i++) { 
                $this->db->table('users')->insert($this->generateUsers());
            }
    }

    private function generateUsers(): array{
        $faker = Factory::create();
        return [
            'name'  => $faker->name(),
            'email' => $faker->email
        ];
    }
}
