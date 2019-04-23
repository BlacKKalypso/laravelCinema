<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $air = rand(0,1);
        $capacity = 400;

        DB::table('rooms')->insert([
            [
                'code' => 'PATB1',
                'theatre_name' => 'Pathé Balexert',
                'room_num' => 1,
                'air_conditioned' => $air,
                'capacity' => $capacity
            ],
            [
                'code' => 'SCAL2',
                'theatre_name' => 'Les Scala',
                'room_num' => 2,
                'air_conditioned' => $air,
                'capacity' => $capacity
            ],
            [
                'code' => 'CING3',
                'theatre_name' => 'Les Cinéma du Grütli',
                'room_num' => 3,
                'air_conditioned' => $air,
                'capacity' => $capacity
            ],
            [
                'code' => 'CIN14',
                'theatre_name' => 'Ciné 17',
                'room_num' => 4,
                'air_conditioned' => $air,
                'capacity' => $capacity
            ],
            [
                'code' => 'CINE5',
                'theatre_name' => 'Cinema Cinerama Empire',
                'room_num' => 5,
                'air_conditioned' => $air,
                'capacity' => $capacity
            ],
            [
                'code' => 'PATB6',
                'theatre_name' => 'Pathé Balexert',
                'room_num' => 6,
                'air_conditioned' => $air,
                'capacity' => $capacity
            ],
            [
                'code' => 'PATB7',
                'theatre_name' => 'Pathé Balexert',
                'room_num' => 7,
                'air_conditioned' => $air,
                'capacity' => $capacity
            ],
        ]);
    }
}
