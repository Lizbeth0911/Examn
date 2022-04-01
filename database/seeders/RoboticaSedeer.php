<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoboticaSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('robots')->insert([
            [
                'name'=>'COROMA',
                'descripción'=>'Se trata de un robot, capaz de comprender y aprender del entorno que lo rodea, y que hace uso de sus capacidades integradas de razonamiento y detección para funcionar de forma autónoma.',
                'Fecha_de_inicio'=>'1 Octubre 2016',
                'Fecha_de_finalización'=>'30 Septiembre 2019'
            ],

            [
                'name'=>'GO0D MAN',
                'descripción'=>'El proyecto GO0D MAN se planteó recoger grandes cantidades de datos de producción durante un largo periodo de tiempo en tres escenarios industriales: Volkswagen Autoeuropa, Zannini y Electrolux.',
                'Fecha_de_inicio'=>'1 Octubre 2016',
                'Fecha_de_finalización'=>'30 Septiembre 2019',
            ],

            [
                'name'=>'Bots2ReC',
                'descripción'=>'El amianto ha sido calificado de “asesino silencioso”. Se estima que solo en Europa se han producido más de 100.000 muertes por exposición a esta sustancia.

                ',
                'Fecha_de_inicio'=>'1 Octubre 2016',
                'Fecha_de_finalización'=>'30 Noviembre 2019',
            ],

            
        ]);

    }
}
