<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(6)->create();
        Listing::factory(6)->create();
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
