<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (User::where('email', 'admin@signart.com')->doesntExist()) {
            User::factory()->create([
                'name' => 'Administrator',
                'email' => 'admin@signart.com',
                'password' => bcrypt('password'),
            ]);
        }

        $this->call([
            BillboardSeeder::class,
        ]);
    }
}
