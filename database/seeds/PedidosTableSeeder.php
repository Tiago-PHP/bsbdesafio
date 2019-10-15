<?php

use Illuminate\Database\Seeder;

class PedidosTableSeeder extends Seeder
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
            //'id'                => 1,
          //  'produto_id'        =>1,
            'quantidade'        => 3,
            'valor_unitario'    => 300.0,
         //   'data_pedido'       =>'2019-10-03',
            "created_at"        => $now,
            "updated_at"        => $now,
        ],
        [
          //  'id'                => 1,
       //     'produto_id'        =>2,
            'quantidade'        => 3,
            'valor_unitario'    => 300.0,
          //  'data_pedido'       =>'2019-10-03',
            "created_at"        => $now,
           "updated_at"        => $now,
        ],
        [
            //'id'                => 1,
            'quantidade'        => 3,
         //   'produto_id'        =>3,
            'valor_unitario'    => 300.0,
          //  'data_pedido'       =>'2019-10-03',
            "created_at"        => $now,
            "updated_at"        => $now,
        ],
        ]);
    }
}

