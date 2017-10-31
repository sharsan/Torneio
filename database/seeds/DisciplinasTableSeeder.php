<?php

use Illuminate\Database\Seeder;

class DisciplinasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run() {
       DB::table('disciplinas')->insert([
           'nome' => 'Desenvolvimento de Aplicaões Web',
           'abreviatura' => 'DAW'
       ]);
       DB::table('disciplinas')->insert([
           'nome' => 'Engenharia de Software',
           'abreviatura' => 'ES'
       ]);
    }
}
