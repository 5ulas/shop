<?php

use Illuminate\Database\Seeder;

// Import DB and Faker services
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

    	foreach (range(1,500) as $index) {
            DB::table('products')->insert([
                'name' => $faker->name,
                'warranty' => $faker->warranty,
                'description' => $faker->description,
                'specification' => $faker->specification,
                'stored_since' => $faker->date($format = 'D-m-y', $max = '2010',$min = '1980'),
                'price' => $faker->price,
                'special_storing_terms' => $faker->special_storing_terms,
                'volume' => $faker->volume,
                'weight' => $faker->weight,
            ]);
        }
    }
}
?>
