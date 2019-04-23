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
            [
                'name' => 'Nancy Tonye',
                'email' => 'tonyenancy1@gmail.com',
                'email_verified_at' => '2019-04-17 18:39:50',
                'password' => Hash::make('wonderful')
            ],
            [
                'name' => 'Cyril Bosson',
                'email' => 'nancy.tonye@crea-inseec.com',
                'email_verified_at' => '2019-04-17 18:39:50',
                'password' => Hash::make('greatworld')
            ],
        ]);
    }
}
