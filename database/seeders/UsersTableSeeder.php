<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        for ($i=0;$i<30;$i++){
            DB::table('users')->insert([
                'name' => 'admin',
                'phone' => '1234567890',
                'address' => '1234567890',
                'role' => '1',
                'email' => $i.'admin@gmail.com',
                'password' => bcrypt('123456'),
            ]);
        }
    }
}
