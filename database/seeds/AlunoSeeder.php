<?php

use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert(['nome'=>'João da Silva','endereco'=>'Rua Quinze de Novembro, 44','dataNascimento'=>'1997-11-22']);
        DB::table('alunos')->insert(['nome'=>'Maria da Silva','endereco'=>'Rua Carlos de Almeida, 932','dataNascimento'=>'1985-03-12']);
    }
}
