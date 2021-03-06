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
            'user_role' => 'admin'
        ]);

        factory(\App\User::class, 20)->create()->each(function ($user){
            $user->post()->save()->make();
        });
    }
}
