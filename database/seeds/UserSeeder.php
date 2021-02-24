<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $faker = Factory::create();
        for ($i = 0; $i < 20; $i++) {
            $fakerName = $faker->userName;
            $type = "editor";
            if ($i % 2) {
                $type = "reporter";
            }
            DB::table('users')->insert([
                'name'       => $fakerName,
                'email'      => $fakerName . "@gmail.com",
                'password'   => Hash::make('password'),
                'type'       => $type,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
