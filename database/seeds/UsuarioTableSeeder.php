<?php
use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder {
    public function run()
    {
        \DB::table('usuario')->insert([
            'nome' => 'Leonardo Machado',
            'email' => 'leo94.machado@gmail.com',
            'password' => bcrypt('leo123'),
        ]);

        \DB::table('usuario')->insert([
            'nome' => 'Thales Machado',
            'email' => 'thales.machado@gmail.com',
            'password' => bcrypt('thales123'),
        ]);

        \DB::table('usuario')->insert([
            'nome' => 'Helem Machado',
            'email' => 'helem.machado@gmail.com',
            'password' => bcrypt('helem123'),
        ]);
    }
}