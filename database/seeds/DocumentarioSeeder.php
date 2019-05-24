<?php

use Illuminate\Database\Seeder;
use App\Documentario;

class DocumentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Documentario::truncate();
        $documentario = new Documentario;
        $documentario->name = 'Gerras Mundiais';
        $documentario->length = 120;
        $documentario->save(); 

        $documentario = new Documentario;
        $documentario->name = 'Aguas Mundiais';
        $documentario->length = 240;
        $documentario->save(); 
    }
}
