<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {        
        \App\Models\User::factory(100)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
        ]);

        $itemOwners = \App\Models\User::inRandomOrder()->take(50)->get();

        foreach ($itemOwners as $owner) {
            for ($i=0; $i < rand(1, 5); $i++) {
                \App\Models\Item::factory()->create([
                    'user_id' => $owner->id
                ]);
            }
        }

    }

}
