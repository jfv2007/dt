<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');

         $this->call(UsersTableSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       /*  $users = factory('\App\Models\User', 25)->create();

        $faker = Faker::create();
        $imageUrl = $faker->imageUrl(640,480, null, false);

        foreach($products as $product){
            $gift->addMediaFromUrl($imageUrl)->toMediaCollection('images'); */
    }
}
