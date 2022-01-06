<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<20;$i++){
            for($j=1;$j<10;$j++){
        $data[]=[
            'product_id'=>$i,
            'warehouse_id'=>$j,
            'quantity'=>'100',
        ];
    }
}
        DB::table('product_of_warehouses')->insert($data);
    }
}
