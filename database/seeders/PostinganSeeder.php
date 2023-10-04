<?php

namespace Database\Seeders;

use App\Models\Posting;
use Illuminate\Database\Seeder;

class PostinganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Posting::factory(15)->create();
    }
}
