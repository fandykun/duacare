<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 3; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => 'admin' . ($i + 1) . '@gmail.com',
                'password' => bcrypt('secret'),
            ]);
        }


        $eventsTitle = ['Beasiswa Duacare', 'Duacare Goes To School', 'Duacare For Ramadhan', 'Duacare Camp'];
        $eventsDescription = [
            'Beasiswa berupa dana pendidikan bagi siswa/siswi SMAN Negeri 2 Lumajang',
            'Kegiatan Campus Expo dan Talkshow mengenai seputar perkuliahan',
            'Kegiatan bakti sosial pada bulan Ramadhan ke desa-desa yang membutuhkan',
            'Internal day untuk meningkatkan kejasama antar organizer'
        ];

        for ($i = 0; $i < count($eventsTitle); $i++) {
            DB::table('events')->insert([
                'title' => $eventsTitle[$i],
                'description' => $eventsDescription[$i]
            ]);
        }

        $testimoniesTitle = [
            'Mahmud',
            'Maulani Syahrozad',
            'Azidan'
        ];

        $testimoniesDetail = [
            'Astronot - FTIK ITS',
            'Mahasiswi - Sosiologi UNAR',
            'Dokter - FK ITS'
        ];

        $testimoniesDescription = [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
        ];

        for ($i = 0; $i < count($testimoniesTitle); $i++) {
            DB::table('testimonies')->insert([
                'title' => $testimoniesTitle[$i],
                'detail' => $testimoniesDetail[$i],
                'description' => $testimoniesDescription[$i]
            ]);
        }

        $newsTitle = [
            'Duacare Goes To School hadirkan alumni dari Institut Ternak Lele',
            'Beasiswa Duacare memfasilitasi biaya siswa SMAN 2 Lumajang hingga lulus',
            'Duacarecamp 2021 berlokasi di Puncak Semeru'
        ];

        $newsDescription = $testimoniesDescription;
        $newsImage = 'dummy-news.jpg';
        $newsEventID = [2, 1, 4];

        for ($i = 0; $i < count($newsTitle); $i++) {
            DB::table('news')->insert([
                'title' => $newsTitle[$i],
                'description' => $newsDescription[$i],
                'image' => $newsImage,
                'event_id' => $newsEventID[$i]
            ]);
        }
    }
}
