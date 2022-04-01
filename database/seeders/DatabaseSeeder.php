<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RototicaSedeer;
use Database\Seeders\AutorsSedeer;
use Database\Seeders\CreadorsSedeer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RototicaSedeer::class);
        $this->call(AutorsSedeer::class);
        $this->call(CreadorsSedeer::class);
    }
}
