<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        
        $orderCount = DB::table('orders')->count();
        $productCount = DB::table('products')->count();

        foreach (range(1, 100) as $index) {
            DB::table('order_details')->insert([
                'order_id' => $faker->numberBetween(1, $orderCount),  
                'product_id' => $faker->numberBetween(1, $productCount), 
                'quantity' => $faker->numberBetween(1, 10),  
            ]);
        }
    }
}