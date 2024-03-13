<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdminUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this -> call(AdminUserSeeder::class);
         \App\Models\AdminUser::factory(1)->create();

       AdminUser::factory(1)->create([
            "name" => "Admin",
            "email" => "admin@email.ru",
            "password" =>bcrypt("Q1qqqqqq")
       ]);
    }
}
