<?php

use Illuminate\Database\Seeder;

class ShowtimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('showtimes')->insert([
            [
                'code' => 'AAA01',
                'theatre_name' => 'Les Scala',
                'room_num' => 2,
                'movie_id' => 21,
                'title_movie' => 'Babadook',
                'begin' => '2019-04-19 20:50:00',
                'end' => '2019-04-19 22:50:00'
            ],
            [
                'code' => 'AAA02',
                'theatre_name' => 'Pathé Balexert',
                'room_num' => 1,
                'movie_id' => 21,
                'title_movie' => 'Babadook',
                'begin' => '2019-04-19 20:50:00',
                'end' => '2019-04-19 22:50:00'
            ],
            [
                'code' => 'AAA03',
                'theatre_name' => 'Les Scala',
                'room_num' => 2,
                'movie_id' => 21,
                'title_movie' => 'Babadook',
                'begin' => '2019-04-19 20:50:00',
                'end' => '2019-04-19 22:50:00'
            ],
            [
                'code' => 'AAA04',
                'theatre_name' => 'Pathé Balexert',
                'room_num' => 1,
                'movie_id' => 19,
                'title_movie' => 'Beetlejuice',
                'begin' => '2019-04-19 20:50:00',
                'end' => '2019-04-19 22:50:00'
            ]
        ]);
    }
}
