<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Damas Amirul Karim',
                'email' => 'damasamirulkarim@gmail.com',
                'is_admin' => 0
            ],
            [
                'name' => 'Administrator',
                'email' => 'admin@kodedasar.com',
                'is_admin' => 1
            ]
        ];

        foreach ($users as $user) {
            User::updateOrCreate([
                'email' => $user['email']
            ], [
                'name' => $user['name'],
                'is_admin' => $user['is_admin'],
                'password' => Hash::make('rahasia'),
                'email_verified_at' => now()
            ]);
        }
    }
}
