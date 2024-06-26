<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);
        // \App\Models\User::factory(6)->create();
        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
    //     Listing::create([
    //         'title' => 'First listing',
    //         'tags' => 'first, listing',
    //         'company' => 'First company',
    //         'location' => 'First location',
    //         'email' => '123@gmail.com',
    //         'website' => 'www.first.com',
    //         'description' => 'BlaBlaBla'
    //     ]);
    // }
}
}
