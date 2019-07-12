<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\News;
use Carbon\Carbon;
use App\FinancialReport;
use App\Organizer;
use App\Slider;
use App\Dld;

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
        $newsImage = 'dummy-news.png';
        $newsEventID = [2, 1, 4];

        for ($j = 0; $j < 10; $j++) {
            for ($i = 0; $i < count($newsTitle); $i++) {

                $newsCreatedAt = Carbon::createFromTimeStamp($faker->dateTimeBetween('-30 days', '-2 days')->getTimestamp());

                News::create([
                    'title' => $newsTitle[$i] . '-' . $j,
                    'description' => $newsDescription[$i],
                    'image' => $newsImage,
                    'event_id' => $newsEventID[$i],
                    'created_at' => $newsCreatedAt
                ]);
            }
        }

        //Financial Report
        for ($i = 0; $i < 10; $i++) {
            $date = Carbon::createFromTimeStamp($faker->dateTimeBetween('now', '+1 year')->getTimestamp());
            $month = \Carbon\Carbon::parse($date)->formatLocalized('%B');
            $year = rand(2015, 2019);
            $link_url = 'intip.in/linknya-' . $i . '-disini';
            FinancialReport::create([
                'month' => $month,
                'year' => $year,
                'link_url' => $link_url
            ]);
        }

        $OrganizerPosition = [
            'Founder',
            'Branding & Communication',
            'Human Resource & Development',
            'Finance',
            'Enterpreneur'
        ];

        for ($i = 0; $i < 20; $i++) {
            Organizer::create([
                'name' => $faker->name,
                'position' => $OrganizerPosition[rand(0, 4)],
                'phone_number' => $faker->phoneNumber,
                'image' => 'dummy.png'
            ]);
        }

        //Slider
        for ($i = 0; $i < 10; $i++) {
            Slider::create([
                'name' => $eventsTitle[rand(0, 3)],
                'image' => 'dummy.png'
            ]);
        }

        //DLD
        $listBank = [
            'BRI', 'BNI', 'Mandiri', 'BCA', 'Bank Jatim'
        ];

        $donationType = [
            'Bulanan', 'Insidental'
        ];

        for ($i = 1; $i <= 15; $i++) {
            Dld::create([
                'name' => $faker->name,
                'graduation_year' => rand(2005, 2018),
                'origin_address' => $faker->streetAddress,
                'current_address' => $faker->address,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'line' => '@' . $faker->userName,
                'instagram' => '@' . $faker->userName,
                'bank' => $listBank[rand(0, 4)],
                'donation_type' => $donationType[$i % 2],
                'amount' => $i * 100000
            ]);
        }
    }
}
