<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $writerRole = Role::where('name', 'writer')->first();
        User::create([
            'name' => 'Writer',
            'email' => 'writer@writer.com',
            'password' => Hash::make('123456'),
            'email_verified_at' => now(),
            'role_id' => $writerRole->id,
        ]);
    }
}
