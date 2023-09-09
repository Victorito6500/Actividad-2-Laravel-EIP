<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      User::factory()->create([
        'name'  => 'Victor Jimenez',
        'email' => 'victor@gmail.com',
      ]);

      User::factory()->create([
        'name'  => 'Cristina Tineo',
        'email' => 'cristina@gmail.com',
      ]);

      User::factory()->create([
        'name'  => 'Paco Martínez',
        'email' => 'paco@gmail.com',
      ]);
    }
}
