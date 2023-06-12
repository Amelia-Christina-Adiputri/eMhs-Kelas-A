<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PelamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 100; $i++) {
            DB::table('pelamar')->insert([
                'nik' => $faker->nik(),
                'nama' => $faker->name(),
                'gender' => $faker->lexify(),
                'tingkat_pendidikan' => $faker->title(),
                'bidang_keahlian' => $faker->jobTitle(),
            ]);
        }
    }
}
