<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        for ($i = 1; $i <= 20;$i++){
            DB::table('products')->insert([
                'name' => 'Iphone'.$i,
                'slug' => 'Iphone-'.$i,
                'origin_price' => 5000*$i,
                'sale_price' => 4500*$i,
                'discount_percent' => ((5000*$i) - (4500*$i)) / 100,
                'content' => 'jsbgjdishbfghjrbdfhjrdf dfghdkgbkdrjgdkrjhkdrge dkrgdrgedrkgjdr dgdrjnbkdrhdbnjgdghdf  drfdrgfbhdvgdjnhbdgbdhjgbjdg drgvehd',
                'user_id' => $i,
                'category_id' => $i,
                'status' => 1,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'deleted_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ]);
        }
    }
}
