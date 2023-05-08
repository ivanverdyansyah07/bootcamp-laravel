<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'username' => 'Ivan Verdyansyah',
            'email' => 'ivanverdyansyah@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'admin',
        ]);

        Setting::create([
            'headline' => 'Listen to Pod Talk',
            'description' => 'Listen it everywhere. Explore your fav podcasts.',
            'button_label' => 'New Update Info',
            'navigation' => 'Home,About,Contact',
            'navigation_button' => 'Get Started',
        ]);
    }
}
