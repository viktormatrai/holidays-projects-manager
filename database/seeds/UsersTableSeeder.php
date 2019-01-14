<?php

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
        DB::table('users')->insert([
            'name'=> 'admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('secret'),
            'free_days'=> 23
        ]);

        factory(\App\User::class, 20)->create()->each(function ($user){
            $user->post()->save(factory(App/Post::class)->make());
        });
    }
}
