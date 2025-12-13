<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $Roles = [
            [
                'role_name' => 'Admin',
                'description' => 'Administrator',
            ],
            [
                'role_name' => 'cashier',
                'description' => 'Kasir',
            ],
            [
                'role_name' => 'Chef',
                'description' => 'Koki',
            ],
            [
                'role_name' => 'customer',
                'description' => 'Pelanggan',
            ],
        ];
        
        DB::table('roles')->insert($Roles);
    }
}
