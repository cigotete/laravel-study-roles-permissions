<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function PHPUnit\Framework\isNull;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (is_null(Role::where('name', 'user')->first())) {
            Role::create(['name' => 'user']);
        }
        if (is_null(Role::where('name', 'admin')->first())) {
            Role::create(['name' => 'admin']);
        }
        if (is_null(Role::where('name', 'writer')->first())) {
            Role::create(['name' => 'writer']);
        }
    }
}
