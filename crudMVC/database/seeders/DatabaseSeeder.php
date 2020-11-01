<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

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
        $this->call(ClientesSeeder::class);
        $Cliente1 = new Cliente();

        $Cliente1->rfc = "QWER123450";
        $Cliente1->nombre = "Alberto";
        $Cliente1->edad = 20;
        $Cliente1->idCiudad = 1;
        $Cliente1->save();

        $cliente2 = new Cliente();
        $cliente2->rfc = "QWER123451";
        $cliente2->nombre = "Carlos";
        $cliente2->edad = "22";
        $cliente2->idCiudad = "1";
        $cliente2->save();

        $cliente3 = new Cliente();
        $cliente3->rfc = "QWER123452";
        $cliente3->nombre = "Gabriel";
        $cliente3->edad = "29";
        $cliente3->idCiudad = "1";
        $cliente3->save();

        $cliente4 = new Cliente();
        $cliente4->rfc = "QWER123453";
        $cliente4->nombre = "Yair";
        $cliente4->edad = "21";
        $cliente4->idCiudad = "1";
        $cliente4->save();

        $cliente5 = new Cliente();
        $cliente5->rfc = "QWER123454";
        $cliente5->nombre = "Alejandra";
        $cliente5->edad = "36";
        $cliente5->idCiudad = "1";
        $cliente5->save();

        $cliente6 = new Cliente();
        $cliente6->rfc = "QWER123455";
        $cliente6->nombre = "Maria";
        $cliente6->edad = "53";
        $cliente6->idCiudad = "1";
        $cliente6->save();

        $cliente7 = new Cliente();
        $cliente7->rfc = "QWER123456";
        $cliente7->nombre = "Alex";
        $cliente7->edad = "32";
        $cliente7->idCiudad = "1";
        $cliente7->save();

        $cliente8 = new Cliente();
        $cliente8->rfc = "QWER123457";
        $cliente8->nombre = "Yareli";
        $cliente8->edad = "35";
        $cliente8->idCiudad = "1";
        $cliente8->save();

        $cliente9 = new Cliente();
        $cliente9->rfc = "QWER123458";
        $cliente9->nombre = "Maricela";
        $cliente9->edad = "18";
        $cliente9->idCiudad = "1";
        $cliente9->save();

        $cliente10 = new Cliente();
        $cliente10->rfc = "QWER123459";
        $cliente10->nombre = "Juan";
        $cliente10->edad = "26";
        $cliente10->idCiudad = "1";
        $cliente10->save();

        $cliente11 = new Cliente();
        $cliente11->rfc = "QWER123440";
        $cliente11->nombre = "Abel";
        $cliente11->edad = "25";
        $cliente11->idCiudad = "2";
        $cliente11->save();



    }
}
