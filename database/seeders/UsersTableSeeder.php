<?php

namespace Database\Seeders;

use App\Models\Applicant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // ------------------------------Admin-----------------------------//
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'admin'
        ]);

        // ------------------------------Employers-----------------------------//
        $user = User::create([
            'name' => 'Imam',
            'email' => 'imam@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'employer'
        ]);

        User::create([
            'name' => 'Sajjat',
            'email' => 'sajjat@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'employer'
        ]);

        User::create([
            'name' => 'Nabil',
            'email' => 'nabil@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'employer'
        ]);

        User::create([
            'name' => 'Himu',
            'email' => 'himu@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'employer'
        ]);

        User::create([
            'name' => 'Sakib',
            'email' => 'sakib@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'employer'
        ]);
        // ------------------------------Employers-----------------------------//



        // ------------------------------Applicants-----------------------------//
        User::create([
            'name' => 'Alamin',
            'email' => 'alamin@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'applicant'
        ]);

        User::create([
            'name' => 'Shawon',
            'email' => 'shawon@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'applicant'
        ]);

        User::create([
            'name' => 'Tanvir',
            'email' => 'tanvir@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'applicant'
        ]);

        User::create([
            'name' => 'Nayem',
            'email' => 'nayem@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'applicant'
        ]);

        User::create([
            'name' => 'Shopnil',
            'email' => 'shopnil@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'applicant'
        ]);
    }
}
