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

//    	foreach (range(1,50) as $index) {
//            DB::table('products')->insert([
//                'name' => $faker->name,
//                'warranty' => $faker->numberBetween(10, 100),
//                'description' => $faker->sentence,
//                'specification' => $faker->sentence,
//                'stored_since' => $faker->dateTimeBetween(),
//                'price' => $faker->randomFloat(2,0,999999),
//                'special_storing_terms' => $faker->numberBetween(0,1),
//                'volume' => $faker->randomFloat(2,0,999999),
//                'weight' => $faker->randomFloat(2,0,999999),
//            ]);
//        }

//        foreach (range(1,50) as $index) {
//            DB::table('users')->insert([
//                'username' => $faker->userName,
//                'email' => $faker->email,
//                'phone' => $faker->phoneNumber,
//                'password' => $faker->password,
//                'role' => $faker->randomElement(['client','employee','manager'])
//            ]);
//        }
        $indices = $faker->shuffleArray(range(1, 50));
        foreach (range(1,50) as $index) {
            DB::table('clients')->insert([
                'name' => $faker->name,
                'surname' => $faker->lastName,
                'age' => $faker->numberBetween(14, 200),
                'iban' => $faker->iban(),
                'address' => $faker->address,
                'postal_code' => $faker->postcode,
                'user_id' => $indices[$index]
            ]);
        }
    }
}
?>
