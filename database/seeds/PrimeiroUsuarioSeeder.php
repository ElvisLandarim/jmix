<?php

use Illuminate\Database\Seeder;

class PrimeiroUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Edison Julianoti
         * Insert do usuário administrador no sistema.
         */
        DB::table('users')->insert([
            'name' => 'administrador',
            'email' => 'admin@123',
            'password' => bcrypt('123'),
        ]);
    }
}
