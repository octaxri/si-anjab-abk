<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@anjab.abk',
                'password' => bcrypt('admin'),
                'role_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'User',
                'email' => 'user@anjab.abk',
                'password' => bcrypt('user'),
                'role_id' => 2,
            ],
        ];

        foreach ($data as $key => $value) {
            \App\Models\User::create($value);
        }
    }
}
