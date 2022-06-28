<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name' => 'Sweet Maevel Boligao',
            'email' => 'sweetboligao@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password123')
        ],
        [
            'name' => 'John Sena',
            'email' => 'johnsena@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password123')
        ],
        [
            'name' => 'Ariana Redhorse',
            'email' => 'ariana@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password123')
        ],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
