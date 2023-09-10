<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
                'name' => 'Irfan Fadillah',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'admin',
            ], [
                'name' => 'Kasur',
                'email' => 'echa@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'admin',
            ]
        ];

        foreach($admin as $a) {
            User::create($a);
        }
    }
}
