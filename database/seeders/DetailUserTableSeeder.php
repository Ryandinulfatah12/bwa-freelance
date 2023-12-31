<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetailUser;


class DetailUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_user = [
            [
                'users_id'=> 1,
                'photo'=> '',
                'role'=> 'Website Developer',
                'contact_number'=>'',
                'biography'=> '',
                'created_at'=> date('Y-m-d h:i:s'),
                'updated_at'=> date('Y-m-d h:i:s'),
            ],
            [
                'users_id'=> 2,
                'photo'=> '',
                'role'=> 'Front-end Developer',
                'contact_number'=>'',
                'biography'=> '',
                'created_at'=> date('Y-m-d h:i:s'),
                'updated_at'=> date('Y-m-d h:i:s'),
            ],

        ];

        DetailUser::insert($detail_user);
    }
}
