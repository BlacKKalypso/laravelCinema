<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            [
                'first_name' => 'Allen',
                'last_name' => 'Woody',
                'births_date' => 1938,
            ], [
                'first_name' => 'Tim',
                'last_name' => 'Burton',
                'births_date' => 1958,
            ], [
                'first_name' => 'Micheal',
                'last_name' => 'Douglas',
                'births_date' => 1951,
            ], [
                'first_name' => 'Jack',
                'last_name' => 'Nicholson',
                'births_date' => 1937,
            ], [
                'first_name' => 'Johnny',
                'last_name' => 'Depp',
                'births_date' => 1963,
            ], [
                'first_name' => 'Helena',
                'last_name' => 'Bonham Carter',
                'births_date' => 1938,
            ], [
                'first_name' => 'Eva',
                'last_name' => 'Green',
                'births_date' => 1980,
            ], [
                'first_name' => 'Noomi',
                'last_name' => 'Rapace',
                'births_date' => 1979,
            ], [
                'first_name' => 'Javier',
                'last_name' => 'Botet',
                'births_date' => 1977,
            ], [
                'first_name' => 'Allen',
                'last_name' => 'Woody',
                'births_date' => 1938,
            ], [
                'first_name' => 'James',
                'last_name' => 'Wan',
                'births_date' => 1977,
            ], [
                'first_name' => 'Tom',
                'last_name' => 'Hiddleston',
                'births_date' => 1981,
            ], [
                'first_name' => 'Andy',
                'last_name' => 'Muschietti',
                'births_date' => 1973,
            ], [
                'first_name' => 'Rob',
                'last_name' => 'Marshall',
                'births_date' => 1960,
            ], [
                'first_name' => 'Ziyi',
                'last_name' => 'Zhang',
                'births_date' => 1979,
            ], [
                'first_name' => 'Quentin',
                'last_name' => 'Tarantino',
                'births_date' => 1963,
            ], [
                'first_name' => 'Uma',
                'last_name' => 'Thurman',
                'births_date' => 1970,
            ], [
                'first_name' => 'Bruce',
                'last_name' => 'Willis',
                'births_date' => 1955,
            ], [
                'first_name' => 'George',
                'last_name' => 'Miller',
                'births_date' => 1945,
            ], [
                'first_name' => 'Tom',
                'last_name' => 'Hardy',
                'births_date' => 1977,
            ],
            [
                'first_name' => 'Chalize',
                'last_name' => 'Theron',
                'births_date' => 1975,
            ],
            [
                'first_name' => 'Jennifer',
                'last_name' => 'Kent',
                'births_date' => 1973,
            ],
            [
                'first_name' => 'Patrick',
                'last_name' => 'Wilson',
                'births_date' => 1973,
            ],
            [
                'first_name' => 'Tommy',
                'last_name' => 'Wirkola',
                'births_date' => 1979,
            ],
            [
                'first_name' => 'Micheal',
                'last_name' => 'Keaton',
                'births_date' => 1951,
            ],
            [
                'first_name' => 'Jordan',
                'last_name' => 'Peele',
                'births_date' => 1979,
            ],
            [
                'first_name' => 'Lupita',
                'last_name' => 'Nyong\'o',
                'births_date' => 1983,
            ],
            [
                'first_name' => 'Essie',
                'last_name' => 'Davis',
                'births_date' => 1970,
            ]
        ]);
    }
}
