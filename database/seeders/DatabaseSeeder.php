<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        DB::table('users')->insert([
            'name' => 'admin',
            'last_name'=>'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('Admin@12345'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sliders')->insert([
            'title' => 'Welcome to FBB Holding, Family of Businesses',
            'subtitle'=>'Providing top-quality services and products in a wide range of industries',
            'image' => '/images/slider/1680028250.png',
            'status' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('websites')->insert([
            'websitename' => 'FBB Holding L.L.C. - A step into the bright future',
            'websiteemail'=>'info@fbb.ae',
            'websitecontact' => '+971 48-839-261',
            'websitetiming' => 'Sat - Thu: 9:00 - 18:00',
            'websitelocation' => '406,BUILDING 51, BUSINESSBAY, DUBAI - UAE',
            'websitelocationiframe' => 'test',
            'websitelogo' => '/img/logo.svg',
            'websitefav' => '/img/logo.svg',
            'websitelogofooter' => '/img/footer-logo.png',
            'websitefacebook' => '#',
            'websitetwitter' => '#',
            'websiteinstagram' => '#',
            'websiteyoutube' => '#',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
