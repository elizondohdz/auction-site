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

        $itemsToBid = \App\Models\Item::inRandomOrder()->take(20)->get();
        $usersToBid = \App\Models\User::inRandomOrder()->take(50)->get();

        foreach($itemsToBid as $auction) {
            $bidders = $usersToBid->random(rand(1, 20));
            $current_bid = $auction->starting_bid;
            
            foreach($bidders as $bidder) {
                \App\Models\Bid::factory()->create([
                    'user_id' => $bidder->id,
                    'item_id' => $auction->id,
                    'amount' => $current_bid = $current_bid + rand(50, 500)
                ]);
            }
        }
    }
}
