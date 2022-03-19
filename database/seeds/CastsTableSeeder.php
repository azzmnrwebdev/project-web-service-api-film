<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CastsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            DB::table('casts')->insert([
                'id' => $faker->uuid(),
                'name' => $faker->name(),
                'age' => random_int(5, 70),
                'bio' => $faker->text(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
