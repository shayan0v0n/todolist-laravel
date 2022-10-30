<?php

namespace Database\Seeders;

use App\Models\Todo;
use Database\Factories\todoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class todoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todo::factory(15)->create();
    }
}
