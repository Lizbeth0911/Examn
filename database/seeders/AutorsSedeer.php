<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutorsSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('autors')->insert([
            [
                'cordinador'=>'IDEKO S COOP',

            ],

            [
                'cordinador'=>'AEA s.r.l.',

            ],

            [
                'cordinador'=>'RHEINISCH-WESTFAELISCHE TECHNISCHE HOCHSCHULE AACHEN',

            ],

            
        ]);
    }
}
