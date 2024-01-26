<?php

namespace Database\Seeders;

use App\Models\Tindakan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TindakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tindakan::factory()
            ->count(8)
            ->create();
    }
}
