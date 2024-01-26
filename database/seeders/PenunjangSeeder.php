<?php

namespace Database\Seeders;

use App\Models\Penunjang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenunjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penunjang::factory()
            ->count(8)
            ->create();
    }
}
