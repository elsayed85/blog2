<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        User::create([
            'name' => 'admin',
            'email' => "admin@gmail.com",
            'password' => Hash::make('password'),
        ])->assignRole(['admin', 'user']);

        User::create([
            'name' => 'user',
            'email' => "user@gmail.com",
            'password' => Hash::make('password'),
        ])->assignRole('user');


        User::factory()->count(50)->create()->each(function(User $user) {
            $user->assignRole('user');
            $user->posts()->saveMany(Post::factory()->count(1000)->make());
        });
    }
}
