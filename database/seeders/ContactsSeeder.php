<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'nome'=>'João',
            'email'=>'joao@exemplo.com',
            'telefone'=> '(00)00000000',
            'data_nascimento'=>'1990-05-15'
        ]);

        DB::table('contacts')->insert([
            'nome'=>'Amanda',
            'email'=>'amanda@exemplo.com',
            'telefone'=> '(00) 11111111',
            'data_nascimento'=>'2000-04-20'
        ]);
    }
}
