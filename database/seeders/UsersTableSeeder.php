<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* \App\Models\User::factory(10)->create(); */
        $users = User::factory(1)->create();

           foreach($users as $user){
            Image::factory(1)->create([
                'imageable_id'=>$user,
                'imageable_type'=> User::class
            ]);
          }


        /* factory(User::class, 20000)->create(); */
        /*User::factory(20000)->create();*/
    }
}
