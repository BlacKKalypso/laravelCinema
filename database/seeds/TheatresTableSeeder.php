<?php

use Illuminate\Database\Seeder;

class TheatresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theatres')->insert([
            [
                'name' => 'Pathé Balexert',
                'address' => 'Avenue Louis-Casaï 27, 1211 Genève'
            ],
            [
                'name' => 'Les Scala',
                'address' => 'Rue des Eaux-Vives 23, 1207 Genève'
            ],
            [
                'name' => 'Les Cinéma du Grütli',
                'address' => 'Rue du Général-dufour 16, 1204 Genève'
            ],
            [
                'name' => 'Ciné 17',
                'address' => 'Rue de la Corraterie 17, 1204 genève'
            ],
            [
                'name' => 'Cinema Cinerama Empire',
                'address' => 'Rue de Carouge 72-74, 1205 Genève'
            ],
            [
                'name' => 'Cinema Le City',
                'address' => 'Place des Eaux-Vives 3, 1207 Genève'
            ],
            [
                'name' => 'Arena Cinemas La Praille',
                'address' => 'Route des Jeunes 10, 1227 Carouge'
            ],
            [
                'name' => 'Spoutnik',
                'address' => 'Place des Volontaires 4, 1204 Genève'
            ],
            [
                'name' => 'Cinema Bio',
                'address' => 'Rue Saint-Joseph 47, 1227 Carouge'
            ],
            [
                'name' => 'Allianz Cinema',
                'address' => 'Quai Gustave-Ador 87, 1207 Genève'
            ]
        ]);
    }
}
