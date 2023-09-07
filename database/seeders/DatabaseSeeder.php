<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Movies
        // DB::table('movies')->insert([
        //     [
        //         'title' => 'The Irishman',
        //         'release' => '2019-08-23',
        //         'length' => '90',
        //         'language' => 'English',
        //         'description' => 'An aging hitman recalls his time with the mob and the intersecting events with his friend, Jimmy Hoffa, through the 1950-70s.',
        //         'mpaa_rating' => '7.9',
        //     ],
        //     [
        //         'title' => 'Parasite',
        //         'release' => '2019-03-02',
        //         'length' => '60',
        //         'language' => 'English',
        //         'description' => 'A poor family, the Kims, con their way into becoming the servants of a rich family,the Parks. But their easy life gets complicated when their deception is threatened with exposure.',
        //         'mpaa_rating' => '8.6',
        //     ],

        //     [
        //         'title'=>'The Favourite',
        //         'release'=>'2021-04-04',
        //         'length'=>'75',
        //         'language'=>'English',
        //         'description'=>'In early 18th century England, a frail Queen Anne occupies the throne and her close friend, Lady Sarah, governs the country in her stead. When a new servant, Abigail, arrives, her charm endears her to Sarah.',
        //         'mpaa_rating'=>'7.6',
        //     ],
        //     [
        //         'title'=> 'The Farewell I',
        //         'release'=>'2021-06-08',
        //         'length'=>'80',
        //         'language'=>'English',
        //         'description'=> 'A Chinese family discovers their grandmother has only a short while left to live and decide to keep her in the dark, scheduling a wedding to gather before she dies.',
        //         'mpaa_rating'=>'7.6',
        //     ],
        //     [
        //         'title'=> 'Marriage Story',
        //         'release'=>'2021-08-25',
        //         'length'=>'90',
        //         'language'=>'English',
        //         'description'=> '"Noah Baumbach"s incisive and compassionate look at a marriage breaking up and a family staying together.',
        //         'rating'=>'8',
        //     ],
        //     [
        //         'title'=> 'Booksmart',
        //         'release'=>'2021-10-15',
        //         'length'=>'95',
        //         'language'=>'English',
        //         'description'=> 'On the eve of their high school graduation, two academic superstars and best friends realize they should have worked less and played more. Determined not to fall short of their peers,the girls try to cram four years of fun into one night.',
        //         'mpaa_rating'=>'7.2',
        //     ],
        //     [
        //         'title'=> 'Little Women',
        //         'release'=>'2021-08-20',
        //         'length'=>'95',
        //         'language'=>'English',
        //         'description'=> 'Jo March (Saoirse Ronan) reflects back and forth on her life, telling the beloved story of the March sisters - four young women each determined to live life on her own terms.',
        //         'mpaa_rating'=>'7.9',
        //     ],
        //     [
        //         'title'=> 'Avengers: Endgame',
        //         'release'=>'2021-09-30',
        //         'length'=>'120',
        //         'language'=>'English',
        //         'description'=> 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies,the Avengers assemble once more in order to reverse Thanos actions and restore balance to the universe.',
        //         'mpaa_rating'=>'8.4',
        //     ],
        //     [
        //         'title'=> 'Shoplifters',
        //         'release'=>'2021-07-02',
        //         'length'=>'80',
        //         'language'=>'English',
        //         'description'=> 'A family of small-time crooks take in a child they find outside in the cold.',
        //         'mpaa_rating'=>'8',
        //     ],

        // ]);

        //Genres
        // DB::table('genres')->insert([
        //     [
        //         'Genre_id'=>'1',
        //         'name'=>'comedy',
        //     ],
        //     [
        //         'Genre_id'=>'2',
        //         'name'=>'action',
        //     ],
        //     [
        //         'Genre_id'=>'3',
        //         'name'=>'adventure',
        //     ],
        // ]);

        //Rating
        // DB::table('rating')->insert([
        //     // [
        //     //     'Username'=>'comedy',
        //     //     'Rating' => '',
        //     //     'Description' => '',
        //     // ],
        //     // [
        //     //     'Username'=>'action',
        //     //     'Rating' => '',
        //     //     'Description' => '',
        //     // ],
        //     // [
        //     //     'Username'=>'adventure',
        //     //     'Rating' => '',
        //     //     'Description' => '',
        //     // ],
        // ]);

        //Performer
        // DB::table('performers')->insert([
        //     [
        //         'performer_id'=>'1',
        //         'first_name'=>'Gemma',
        //         'last_name'=>'Arterton',
        //     ],
        //     [
        //         'performer_id'=>'2',
        //         'first_name'=>'Matthew',
        //         'last_name'=>'Goode',
        //     ],
        //     [
        //         'performer_id'=>'3',
        //         'first_name'=>'Ralph',
        //         'last_name'=>'Fiennes',
        //     ],
        // ]);

        //Theater
        // DB::table('theaters')->insert([
        //     [
        //         'theater_id'=>'1',
        //         'theater_name'=>'ABC Movies',
        //     ],
        //     [
        //         'theater_id'=>'2',
        //         'theater_name'=>'GDC Cinema',
        //     ],
        // ]);

        //genremovie
        // DB::table('movie_genre')->insert([
        //     [
        //         'movie_id'=>'2',
        //         'genre_id'=>'1',
        //     ],
        //     [
        //         'movie_id'=>'3',
        //         'genre_id'=>'1',
        //     ],
        //     [
        //         'movie_id'=>'4',
        //         'genre_id'=>'1',
        //     ],
        //     [
        //         'movie_id'=>'5',
        //         'genre_id'=>'1',
        //     ],
        //     [
        //         'movie_id'=>'1',
        //         'genre_id'=>'3',
        //     ],
        //     [
        //         'movie_id'=>'6',
        //         'genre_id'=>'3',
        //     ],
        //     [
        //         'movie_id'=>'7',
        //         'genre_id'=>'3',
        //     ],
        //     [
        //         'movie_id'=>'8',
        //         'genre_id'=>'2',
        //     ],
        //     [
        //         'movie_id'=>'9',
        //         'genre_id'=>'2',
        //     ],
        // ]);

        //movietime
        // DB::table('slots')->insert([
        //     [
        //         'movie_id'=>'1',
        //         'theater_id'=>'1',
        //         'time_start'=>Carbon::parse('2019-09-23 09:00:00'),
        //         'time_end'=>Carbon::parse('2019-00-23 11:00:00'),
        //         'room_no'=>'3',
        //     ],
        //     [
        //         'movie_id'=>'2',
        //         'theater_id'=>'1',
        //         'time_start'=>Carbon::parse('2021-03-02 08:00:00'),
        //         'time_end'=>Carbon::parse('2021-03-02 09:00:00'),
        //         'room_no'=>'2',
        //     ],
        //     [
        //         'movie_id'=>'3',
        //         'theater_id'=>'1',
        //         'time_start'=>Carbon::parse('2021-04-04 08:00:00'),
        //         'time_end'=>Carbon::parse('2021-04-04 09:15:00'),
        //         'room_no'=>'4',
        //     ],
        //     [
        //         'movie_id'=>'4',
        //         'theater_id'=>'1',
        //         'time_start'=>Carbon::parse('2021-06-08 12:00:00'),
        //         'time_end'=>Carbon::parse('2021-06-08 01:20:00'),
        //         'room_no'=>'2',
        //     ],
        //     [
        //         'movie_id'=>'5',
        //         'theater_id'=>'2',
        //         'time_start'=>Carbon::parse('2021-08-25 09:00:00'),
        //         'time_end'=>Carbon::parse('2021-08-25 10:30:00'),
        //         'room_no'=>'1',
        //     ],
        //     [
        //         'movie_id'=>'6',
        //         'theater_id'=>'2',
        //         'time_start'=>Carbon::parse('2021-10-15 10:30:00'),
        //         'time_end'=>Carbon::parse('2021-10-15 12:05:00'),
        //         'room_no'=>'5',
        //     ],
        //     [
        //         'movie_id'=>'7',
        //         'theater_id'=>'2',
        //         'time_start'=>Carbon::parse('2021-08-20 10:00:00'),
        //         'time_end'=>Carbon::parse('2021-10-15 11:35:00'),
        //         'room_no'=>'5',
        //     ],
        //     [
        //         'movie_id'=>'8',
        //         'theater_id'=>'2',
        //         'time_start'=>Carbon::parse('2021-09-30 09:00:00'),
        //         'time_end'=>Carbon::parse('2021-09-30 11:00:00'),
        //         'room_no'=>'1',
        //     ],
        //     [
        //         'movie_id'=>'9',
        //         'theater_id'=>'1',
        //         'time_start'=>Carbon::parse('2021-07-02 12:00:00'),
        //         'time_end'=>Carbon::parse('2021-07-02 01:20:00'),
        //         'room_no'=>'3',
        //     ],
        // ]);

        //moviePerformer
        DB::table('movie_performers')->insert([
            [
                'movie_id'=>'2',
                'performer_id'=>'1',
            ],
            [
                'movie_id'=>'3',
                'performer_id'=>'1',
            ],
            [
                'movie_id'=>'4',
                'performer_id'=>'1',
            ],
            [
                'movie_id'=>'5',
                'performer_id'=>'1',
            ],
            [
                'movie_id'=>'1',
                'performer_id'=>'3',
            ],
            [
                'movie_id'=>'6',
                'performer_id'=>'3',
            ],
            [
                'movie_id'=>'7',
                'performer_id'=>'3',
            ],
            [
                'movie_id'=>'8',
                'performer_id'=>'2',
            ],
            [
                'movie_id'=>'9',
                'performer_id'=>'2',
            ],
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
