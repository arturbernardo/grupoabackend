<?php

use Illuminate\Database\Seeder;

class StudentsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Student::create([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'ca' => str_random(10),
            'cpf' => str_random(10),
        ]);
    }
}