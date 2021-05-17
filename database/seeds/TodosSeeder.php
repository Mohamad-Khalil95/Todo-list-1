<?php

use Illuminate\Database\Seeder;
use App\Todo;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Todo::class,10)->create();
    }
}
