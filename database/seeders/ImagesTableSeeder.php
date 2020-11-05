<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->truncate();
        DB::table('images')->insert([
            'id' => 1,
            'name' => 'img 1',
            'path' => 'img/1',
            'product_id' => 1,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        ]);
        DB::table('images')->insert([
            'id' => 2,
            'name' => 'img 2',
            'path' => 'img/2',
            'product_id' => 1,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        ]);
        DB::table('images')->insert([
            'id' => 3,
            'name' => 'img 3',
            'path' => 'img/3',
            'product_id' => 1,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        ]);
        DB::table('images')->insert([
            'id' => 4,
            'name' => 'img 4',
            'path' => 'img/4',
            'product_id' => 2,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        ]);
        DB::table('images')->insert([
            'id' => 5,
            'name' => 'img 5',
            'path' => 'img/5',
            'product_id' => 2,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        ]);
        DB::table('images')->insert([
            'id' => 6,
            'name' => 'img 6',
            'path' => 'img/6',
            'product_id' => 3,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        ]);
    }
}
