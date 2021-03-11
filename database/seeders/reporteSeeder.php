<?php

namespace Database\Seeders;

use App\Models\image;
use App\Models\reporte;

use Illuminate\Database\Seeder;

class reporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reportes = reporte::factory(20)->create();

        foreach ($reportes as $reporte){
            image::factory(1)->create([
                'imageable_id' => $reporte->id,
                'imageable_type' => reporte::class
            ]);
           // $reporte->tags()->attach([
               // rand(1, 6)
            //]);
        }
        //
    }
}
