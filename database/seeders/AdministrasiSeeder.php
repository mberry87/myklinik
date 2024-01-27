<?php

namespace Database\Seeders;

use App\Models\Administrasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdministrasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Administrasi::factory()
            ->count(8)
            ->create();
    }
}
