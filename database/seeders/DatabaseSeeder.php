<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::truncate();
        Category::truncate();

        
        $user = User::factory()->create();

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Category::create([
            'name'=>'Family',
            'slug'=>'family'
        ]);

        Category::create([
            'name'=>'Work',
            'slug'=>'work'
        ]);
    }
}
