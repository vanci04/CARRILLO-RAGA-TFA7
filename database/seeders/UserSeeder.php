<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $records = [
            ['username' => 'ella.manager', 'full_name' => 'Ella Mendoza', 'role' => 'Manager'],
            ['username' => 'nico.barista', 'full_name' => 'Nico Ramos', 'role' => 'Barista'],
            ['username' => 'mia.cashier', 'full_name' => 'Mia Torres', 'role' => 'Cashier'],
            ['username' => 'leo.barista', 'full_name' => 'Leo Bautista', 'role' => 'Barista'],
            ['username' => 'ava.kitchen', 'full_name' => 'Ava Tan', 'role' => 'Kitchen'],
            ['username' => 'noah.cashier', 'full_name' => 'Noah Villanueva', 'role' => 'Cashier'],
        ];
        foreach ($records as $record) {
            User::updateOrCreate(['username' => $record['username']], $record);
        }
    }
}
