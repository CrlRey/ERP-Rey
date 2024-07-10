<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RegistersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $registers = [
            [
                'nombre' => 'Laura Martín',
                'email' => 'laura.martin@example.com',
                'department_id' => 1,
                'rol' => 'Assistant',
                'telefono' => '654321987',
                'nif' => 'F67890123',
                'fecha_alta' => Carbon::now()->subDays(15),
                'user_id' => 1,
            ],
            [
                'nombre' => 'Pedro Sánchez',
                'email' => 'pedro.sanchez@example.com',
                'department_id' => 2,
                'rol' => 'HR Specialist',
                'telefono' => '789456123',
                'nif' => 'G78901234',
                'fecha_alta' => Carbon::now()->subDays(25),
                'user_id' => 1,
            ],
            [
                'nombre' => 'Marta García',
                'email' => 'marta.garcia@example.com',
                'department_id' => 3,
                'rol' => 'Marketing Coordinator',
                'telefono' => '456789123',
                'nif' => 'H89012345',
                'fecha_alta' => Carbon::now()->subDays(35),
                'user_id' => 1,
            ],
            [
                'nombre' => 'Sofía Rodríguez',
                'email' => 'sofia.rodriguez@example.com',
                'department_id' => 4,
                'rol' => 'Procurement Specialist',
                'telefono' => '123789456',
                'nif' => 'I90123456',
                'fecha_alta' => Carbon::now()->subDays(45),
                'user_id' => 1,
            ],
            [
                'nombre' => 'Luis Fernández',
                'email' => 'luis.fernandez@example.com',
                'department_id' => 5,
                'rol' => 'Financial Analyst',
                'telefono' => '789321456',
                'nif' => 'J01234567',
                'fecha_alta' => Carbon::now()->subDays(55),
                'user_id' => 1,
            ],
            [
                'nombre' => 'Elena Morales',
                'email' => 'elena.morales@example.com',
                'department_id' => 1,
                'rol' => 'Director Assistant',
                'telefono' => '321789654',
                'nif' => 'K12345678',
                'fecha_alta' => Carbon::now()->subDays(5),
                'user_id' => 1,
            ],
            [
                'nombre' => 'José Herrera',
                'email' => 'jose.herrera@example.com',
                'department_id' => 2,
                'rol' => 'HR Manager',
                'telefono' => '654789321',
                'nif' => 'L23456789',
                'fecha_alta' => Carbon::now()->subDays(12),
                'user_id' => 1,
            ],
            [
                'nombre' => 'Patricia Méndez',
                'email' => 'patricia.mendez@example.com',
                'department_id' => 3,
                'rol' => 'Marketing Analyst',
                'telefono' => '987321654',
                'nif' => 'M34567890',
                'fecha_alta' => Carbon::now()->subDays(22),
                'user_id' => 1,
            ],
            [
                'nombre' => 'Javier Álvarez',
                'email' => 'javier.alvarez@example.com',
                'department_id' => 4,
                'rol' => 'Senior Buyer',
                'telefono' => '123654789',
                'nif' => 'N45678901',
                'fecha_alta' => Carbon::now()->subDays(32),
                'user_id' => 1,
            ],
            [
                'nombre' => 'Cristina Vega',
                'email' => 'cristina.vega@example.com',
                'department_id' => 5,
                'rol' => 'Finance Manager',
                'telefono' => '321456789',
                'nif' => 'O56789012',
                'fecha_alta' => Carbon::now()->subDays(42),
                'user_id' => 1,
            ],
            [
                'nombre' => 'Raúl Iglesias',
                'email' => 'raul.iglesias@example.com',
                'department_id' => 1,
                'rol' => 'Executive Assistant',
                'telefono' => '789654321',
                'nif' => 'P67890123',
                'fecha_alta' => Carbon::now()->subDays(52),
                'user_id' => 1,
            ],
            [
                'nombre' => 'Gloria Navarro',
                'email' => 'gloria.navarro@example.com',
                'department_id' => 2,
                'rol' => 'HR Consultant',
                'telefono' => '987654321',
                'nif' => 'Q78901234',
                'fecha_alta' => Carbon::now()->subDays(3),
                'user_id' => 1,
            ],
            [
                'nombre' => 'Mario Torres',
                'email' => 'mario.torres@example.com',
                'department_id' => 3,
                'rol' => 'Marketing Director',
                'telefono' => '654123789',
                'nif' => 'R89012345',
                'fecha_alta' => Carbon::now()->subDays(8),
                'user_id' => 1,
            ],
            [
                'nombre' => 'Susana Ramírez',
                'email' => 'susana.ramirez@example.com',
                'department_id' => 4,
                'rol' => 'Senior Procurement Specialist',
                'telefono' => '321987654',
                'nif' => 'S90123456',
                'fecha_alta' => Carbon::now()->subDays(18),
                'user_id' => 1,
            ],
            [
                'nombre' => 'Fernando Díaz',
                'email' => 'fernando.diaz@example.com',
                'department_id' => 5,
                'rol' => 'Chief Financial Officer',
                'telefono' => '789123654',
                'nif' => 'T01234567',
                'fecha_alta' => Carbon::now()->subDays(28),
                'user_id' => 1,
            ],
        ];

        DB::table('registers')->insert($registers);

    }
}
