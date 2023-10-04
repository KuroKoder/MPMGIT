<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Konsultasi;
use App\Models\Posting;
use App\Models\Testimoni;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Posting::factory(15)->create();
        Testimoni::factory(5)->create();
        Konsultasi::factory(10)->create();
    }
}
