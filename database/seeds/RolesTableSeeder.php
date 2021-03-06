<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'name' => "admin",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('roles')->insert([
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'name' => "penonton",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
