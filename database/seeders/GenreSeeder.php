<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Genres')->insert([
            [
                'Title' => 'The Irishman',
                'Genre' => 'comedy',
                'Description' => 'A poor family, the Kims, con their way into becoming the servants of a rich family,
                the Parks. But their easy life gets complicated when their deception is threatened with exposure.',
            ],
            [
                'Title' => 'Parasite',
                'Genre' => 'comedy',
                'Description' => 'A poor family, the Kims, con their way into becoming the servants of a rich family,
                the Parks. But their easy life gets complicated when their deception is threatened with exposure.',
            ],
            [
                'Title'=> 'Parasite',
                'Genre'=> 'comedy',
                'Description'=> 'A poor family, the Kims, con their way into becoming the servants of a rich family,
                the Parks. But their easy life gets complicated when their deception is threatened with exposure.'
            ],
            [
                'Title'=> 'The Favourite',
                'Genre'=> 'comedy',
                'Description'=> 'In early 18th century England, a frail Queen Anne occupies the throne and
                her close friend, Lady Sarah, governs the country in her stead.
                When a new servant, Abigail, arrives, her charm endears her to Sarah.'
            ],
            [
                'Title'=> 'The Farewell I',
                'Genre'=> 'comedy',
                'Description'=> 'A Chinese family discovers their grandmother has only a short while
                left to live and decide to keep her in the dark, scheduling a wedding to gather before she dies.'
            ],
            [
                'Title'=> 'Marriage Story',
                'Genre'=> 'comedy',
                'Description'=> '"Noah Baumbach"s incisive and compassionate look at a marriage breaking up
                and a family staying together.'
            ],
            [
                'Title'=> 'Booksmart',
                'Genre'=> 'comedy',
                'Description'=> 'On the eve of their high school graduation, two academic superstars and best friends
                realize they should have worked less and played more. Determined not to fall short of their peers,
                the girls try to cram four years of fun into one night.'
            ]

        ]);
    }
}
