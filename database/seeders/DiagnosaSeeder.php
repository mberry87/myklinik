<?php

namespace Database\Seeders;

use App\Models\Diagnosa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiagnosaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Diagnosa::factory()
            ->count(8)
            ->create();
    }
}
