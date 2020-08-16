<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nit' => '123456789-1',
            'nombre' => 'Johan Esteban',
            'direccion' => 'Diag 478 #1235-465',
            'ciudad' => 'Cali',
            'correoIngreso' => 'esteban.riveros2000@gmail.com',
            'email2' => 'ejemplo@gmail.com',
            'telefono' => '1234567890',
            'pais' => 'Colombia',
            'password' => bcrypt('1939601s'),
        ]);
        User::create([
            'nit' => '123456789-2',
            'nombre' => 'Riveros Giraldo',
            'direccion' => 'Diag 5123478 #1235-465',
            'ciudad' => 'Cali',
            'correoIngreso' => 'johan_esteban2000@hotmail.com',
            'email2' => 'ejemplo1@gmail.com',
            'telefono' => '1234567890',
            'pais' => 'Colombia',
            'password' => bcrypt('1939601s'),
        ]);
    }
}