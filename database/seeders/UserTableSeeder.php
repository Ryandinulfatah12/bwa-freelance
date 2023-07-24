<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=> 'Ryan Dinul Fatah',
                'email'=> 'ryan@example.com',
                'password'=> Hash::make('123456'),
                'remember_token'=> NULL,
                'created_at'=> date('Y-m-d h:i:s'),
                'updated_at'=> date('Y-m-d h:i:s'),
            ],
            [
                'name'=> 'Dwi Pebriani',
                'email'=> 'dwi@example.com',
                'password'=> Hash::make('123456'),
                'remember_token'=> NULL,
                'created_at'=> date('Y-m-d h:i:s'),
                'updated_at'=> date('Y-m-d h:i:s'),
            ],

        ];

        User::insert($users);
    }
}
