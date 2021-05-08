<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SlucajSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x <= 1; $x++) {
            DB::table('slucaj')->insert([
                'naziv' => Str::random(10),
                'opis' => Str::random(10),
                'korisnik' => Str::random(10),
                'arhiviran' => rand(0,1),
                'user_id' => (bool)rand(1, 12),
                'tipSlucaja' => Str::random(10),
            ]);
        
        }
    }
}
