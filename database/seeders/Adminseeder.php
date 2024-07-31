<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            "name"=>"admin",
            "email"=>"admin@admin.com",
            "isAdmin"=>"1",
            "password"=>"admin123"
        ]);

    }
}
