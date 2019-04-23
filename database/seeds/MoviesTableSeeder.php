<?php

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Artist;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' =>'The Godfather',
                'year' => '1972'
            ],
            [
                'title' =>'The Godfather: Part 2',
                'year' => '1974'
            ],
            [
                'title' =>'The Dark Knight',
                'year' => '2008'
            ],
            [
                'title' =>'Schindler\'s list',
                'year' => '1993'
            ],
            [
                'title' =>'The Lord of the Rings: The Fellowship of the Ring',
                'year' => '2001'
            ],
            [
                'title' =>'The Lord of the Rings: The Return of the King',
                'year' => '2003'
            ],
            [
                'title' =>'The Lord of the rings: The Two Towers',
                'year' => '2003'
            ],
            [
                'title' =>'The Matrix',
                'year' => '1999'
            ],
            [
                'title' =>'Se7en',
                'year' => '1995'
            ],
            [
                'title' =>'The Silence of the Lambs',
                'year' => '1991'
            ],
            [
                'title' =>'Leon',
                'year' => '1994'
            ]
        ]);

        $mad = new Movie([
            'title' => 'Mad Max: Furry Road',
            'year' => 2015,
            'artist_id' => Artist::where('last_name', 'Miller')->first()->id,
            'director_name' => Artist::where('last_name', 'Miller')->first()->last_name
        ]);
        $mad->save();
        $actor = Artist::where('last_name', 'Hardy')->where('first_name', 'Tom')->first();
        $mad->actors()->attach($actor->id, ['role_name' => 'Max']);

        $actor = Artist::where('last_name', 'Theron')->first();
        $mad->actors()->attach( $actor->id, ['role_name' => 'Furiosa']);

        $kill = new Movie([
            'title' => 'Kill Bill: Vol. 1',
            'year' => 2003,
            'artist_id' => Artist::where('last_name', 'Tarantino')->first()->id,
            'director_name' => Artist::where('last_name', 'Tarantino')->first()->last_name
        ]);
        $kill->save();
        $actor = Artist::where('last_name', 'Thurman')->where('first_name', 'Uma')->first();
        $kill->actors()->attach($actor->id, ['role_name' => 'Black Mamba']);


        $geisha = new Movie([
            'title' => 'Memoirs of a Geisha',
            'year' => 2005,
            'artist_id' => Artist::where('last_name', 'Marshall')->first()->id,
            'director_name' => Artist::where('last_name', 'Marshall')->first()->last_name
        ]);
        $geisha->save();
        $actor = Artist::where('last_name', 'Zhang')->where('first_name', 'Ziyi')->first();
        $geisha->actors()->attach($actor->id, ['role_name' => 'Chiyo Sakamoto / Sayuri Nitta']);

        $mama = new Movie([
            'title' => 'Mamá',
            'year' => 2013,
            'artist_id' => Artist::where('last_name', 'Muschietti')->first()->id,
            'director_name' => Artist::where('last_name', 'Muschietti')->first()->last_name
        ]);
        $mama->save();
        $actor = Artist::where('last_name', 'Botet')->where('first_name', 'Javier')->first();
        $mama->actors()->attach($actor->id, ['role_name' => 'Mamá']);

        $conjuring = new Movie([
            'title' => 'The Conjuring',
            'year' => 2013,
            'artist_id' => Artist::where('last_name', 'Wan')->first()->id,
            'director_name' => Artist::where('last_name', 'Wan')->first()->last_name
        ]);
        $conjuring->save();

        $actor = Artist::where('last_name', 'Wilson')->where('first_name', 'Patrick')->first();
        $conjuring->actors()->attach($actor->id, ['role_name' => 'Ed Warren']);

        $monday = new Movie([
            'title' => 'What happened to Monday',
            'year' => 2017,
            'artist_id' => Artist::where('last_name', 'Wirkola')->first()->id,
            'director_name' => Artist::where('last_name', 'Wirkola')->first()->last_name
        ]);
        $monday->save();

        $actor = Artist::where('last_name', 'Rapace')->where('first_name', 'Noomi')->first();
        $monday->actors()->attach($actor->id, ['role_name' => 'The Settman Siblings']);

        $todd = new Movie([
            'title' => 'Sweeney Todd: The Demon Barber of Fleet Street',
            'year' => 2007,
            'artist_id' => Artist::where('last_name', 'Burton')->first()->id,
            'director_name' => Artist::where('last_name', 'Burton')->first()->last_name
        ]);
        $todd->save();

        $actor = Artist::where('last_name', 'Depp')->where('first_name', 'Johnny')->first();
        $todd->actors()->attach($actor->id, ['role_name' => 'Sweeney Todd']);

        $beetle = new Movie([
            'title' => 'Beetlejuice',
            'year' => 1988,
            'artist_id' => Artist::where('last_name', 'Burton')->first()->id,
            'director_name' => Artist::where('last_name', 'Burton')->first()->last_name
        ]);
        $beetle->save();

        $actor = Artist::where('last_name', 'Keaton')->where('first_name', 'Micheal')->first();
        $beetle->actors()->attach($actor->id, ['role_name' => 'Beetlejuice']);

        $us = new Movie([
            'title' => 'Us',
            'year' => 2019,
            'artist_id' => Artist::where('last_name', 'Peele')->first()->id,
            'director_name' => Artist::where('last_name', 'Peele')->first()->last_name
        ]);
        $us->save();

        $actor = Artist::where('last_name', 'Nyong\'o')->where('first_name', 'Lupita')->first();
        $us->actors()->attach($actor->id, ['role_name' => 'Adelaide Wilson']);

        $baba = new Movie([
            'title' => 'Babadook',
            'year' => 2014,
            'artist_id' => Artist::where('last_name', 'Kent')->first()->id,
            'director_name' =>Artist::where('last_name', 'Kent')->first()->last_name
        ]);
        $baba->save();

        $actor = Artist::where('last_name', 'Davis')->where('first_name', 'Essie')->first();
        $baba->actors()->attach($actor->id, ['role_name' => 'Adelaide Wilson']);
    }
}
