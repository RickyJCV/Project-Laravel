<?php
use App\Pedidos;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Pedidos::create([
            'usuario' => 'Ricardo',
            'cantidad' => 4,
            'prioridad' => 3,
            'direccion' => 'Sevilla 41019',
            'precio' => 45,
        ]);

         Pedidos::create([
            'usuario' => 'Profesor',
            'cantidad' => 10,
            'prioridad' => 1,
            'direccion' => 'Sevilla 41019',
            'precio' => 120,
        ]);
    }
}
