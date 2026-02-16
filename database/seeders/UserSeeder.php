<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $allowed_permissions = [
            'create-user',
            'read-user',
            'update-user',
            'delete-user',
            'create-profile',
            'read-profile',
            'update-profile',
            'delete-profile',
            'create-rolesManager',
            'read-rolesManager',
            'update-rolesManager',
            'delete-rolesManager',
        ];

        $user_developer = User::create([
            'name' => 'DEVELOPER',
            'email' => 'developer@gms.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123123')
        ]);
        $user_developer -> addRole('superAdministrator');
        $user_developer -> syncPermissions($allowed_permissions);


        $user_administrator = User::create([
            'name' => 'ADMINISTRATOR',
            'email' => 'administrator@gms.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123123')
        ]);
        $user_administrator -> addRole('administrator');
        $user_administrator -> syncPermissions($allowed_permissions);






        $accountants = ['Mohamed', 'bassem', 'haney', 'Bader', 'Mahmoud', 'Amera', 'aboduallad', 'yasser'];
        foreach ($accountants as $accountant)
        {
            $user_accountants = User::create([
                'name' => $accountant,
                'email' => $accountant.'@gms.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123123')
            ]);
            $user_accountants -> addRole('accountant');
            $user_accountants -> syncPermissions(['read-profile', 'update-profile']);
        }


    }
}
