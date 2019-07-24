<?php

use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('produtos')->insert([
            [
                'id'                => 1,
                'nome'              => 'Samsung Galaxy',
                'valor_unitario'    => 300.0,
                'quantidade'        => 3,
                "created_at"        => $now,
                "updated_at"        => $now,
            ],
            [
                'id'                => 2,
                'nome'              => 'Notebook',
                'valor_unitario'    => 2000.0,
                'quantidade'        => 5,
                "created_at"        => $now,
                "updated_at"        => $now,
            ],
            [
                'id'                => 3,
                'nome'              => 'Tablet SAmsung',
                'valor_unitario'    => 600.0,
                'quantidade'        => 12,
                "created_at"        => $now,
                "updated_at"        => $now,
            ],
            [
                'id'                => 4,
                'nome'              => 'Motorola MOTO G7',
                'valor_unitario'    => 1180.0,
                'quantidade'        => 5,
                "created_at"        => $now,
                "updated_at"        => $now,
            ],
            [
                'id'                => 5,
                'nome'              => 'Zen fone Asus',
                'valor_unitario'    => 1230.0,
                'quantidade'        => 7,
                "created_at"        => $now,
                "updated_at"        => $now,
            ],
            [
                'id'                => 6,
                'nome'              => 'All in One-LG',
                'valor_unitario'    => 2230.0,
                'quantidade'        => 7,
                "created_at"        => $now,
                "updated_at"        => $now,
            ]        
        ]);
    }
}
