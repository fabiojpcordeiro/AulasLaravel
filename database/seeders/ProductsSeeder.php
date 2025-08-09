<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{

    public function run(): void
    {

        DB::table('products')->insert(
            [
                'name'=>'Celular',
                'price'=>1500.00,
                'description'=>'Just a smartphone'
            ]
        );
        DB::table('products')->insert(
            [
                'name'=>'Televisão',
                'price'=>2000.00,
                'description'=>'A TV'
            ]
        );
        DB::table('products')->insert(
            [
                'name'=>'Liquidificador',
                'price'=>150.00,
                'description'=>'A blender'
            ]
        );
    }
}
