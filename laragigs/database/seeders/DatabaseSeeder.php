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
         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email1@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'This is the song that doesn\'t end.
            Yes, it goes on and on, my friend.
            Some people started singing it, not knowing what it was.
            And, they\'ll continue singing'
        ]);
        Listing::create([
            'title' => 'Senior QA',
            'tags' => 'QA, testing, quality',
            'company' => 'Bugs R Us',
            'location' => 'Baltimore, MD',
            'email' => 'ladybug@bugsrus.com',
            'website' => 'https://www.bugsrus.com',
            'description' => 'Snape: Snape, Snape, Severus Snape. Snape, Snape, Severus Snape.
            Dumbledore: (pops up) Dumbledore!
            Snape: Snape, Snape, Severus Snape.
            Dumbledore: (pops up) Dumbledore!'
        ]);
    }
}
