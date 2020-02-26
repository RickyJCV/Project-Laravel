<?php
use App\Libro;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Libro::create([
            'nombre' => 'El Quijote',
            'resumen' => 'Un caballero muy loco va en busca de su amada Dulcinea',
            'npagina' => 300,
            'edicion' => 4,
            'autor' => 'Cervantes',
            'precio' => 15,
        ]);

        Libro::create([
            'nombre' => 'Teo va al cole',
            'resumen' => 'Una loca historia de teo',
            'npagina' => 40,
            'edicion' => 1,
            'autor' => 'Teo',
            'precio' => 9,
        ]);
    }
}