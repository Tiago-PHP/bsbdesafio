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
           
        ]);
    }
}
