<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('ArtistsTableSeeder');
        $this->call('MoviesTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('TheatresTableSeeder');
        $this->call('RoomsTableSeeder');
        $this->call('ShowtimesTableSeeder');
    }
}
