<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('priorities')->insert([
            'name' => 'niedrig',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('priorities')->insert([
            'name' => 'mittel',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('priorities')->insert([
            'name' => 'hoch',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
