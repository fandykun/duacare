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
use App\Article;

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
            'Beasiswa berupa dana pendidikan bagi siswa/siswi SMAN Negeri 2 Lumajang yang berprestasi.',
            'Kegiatan Campus Expo dan Talkshow mengenai seputar dunia perkuliahan dan dapat dihadiri oleh seluruh siswa SMA di kabupaten Lumajang.',
            'Kegiatan bakti sosial pada bulan Ramadhan ke desa-desa yang membutuhkan di kabupaten Lumajang',
            'Internal day untuk meningkatkan kejasama antar organizer yang dilaksanakan setiap 2 tahun sekali.'
        ];

        for ($i = 0; $i < count($eventsTitle); $i++) {
            DB::table('events')->insert([
                'title' => $eventsTitle[$i],
                'description' => $eventsDescription[$i]
            ]);
        }

        $testimoniesTitle = [
            'Bpk. Tumiarno',
            'Farah azzahro',
            'Dhikma Yogi Senasta Aji',
            'Ananda Tegar',
            'Nur Indah Aminanti Putri'
        ];

        $testimoniesDetail = [
            'Kepala Dusun Kaliwungu',
            '-',
            'IPB - Fakultas Teknologi Pertanian',
            'UNEJ - Farmasi',
            'ITS - Teknik Industri'
        ];

        $testimoniesDescription = [
            'Kegiatan Duacare For Ramadhan, sangat bgus sekali, karena banyak manfaatnya utk warga. Misalnya, pembagian sembako, pemeriksaan kesehatan pasca banjir, dan bantuan utk anak yatim yg ada di yayasan mahaludin. Harapanya kegiatan ini hrs berlanjut trs, jgn berhenti. Dan yg terpenting sasaran harus tepat. Tetap semangat dan terus berbagi pd yg benar" membutuhkan. Untuk anak" duacare semoga sukses selalu semuanya.',
            'Saya sebagai salah satu penerima beasiswa duacare, merasa sangat terbantu dengan adanya beasiswa ini. Waktu itu uang beasiswa sebesar 900k/semester yang saya dapat waktu kelas 12 saya gunakan untuk membeli buku (baik persiapan olimpiade serta latihan soal sbmptn) dan mengkuti olimpiade yg ingin saya ikuti. singkatnya, dengan menerima beasiswa ini orang tua saya terkurangi bebannya. Alhamdulillah, saya diterima lewat jalur sbmptn (setelah ditolak lewat snmptn) dengan bantuan buku-buku yg saya beli menggunakan uang beasiswa duacare.',
            'DGTS tahun ini keren kak, mulai dari campus expo, talkshow, bedah jurusan. Semuanya keren. Manfaat yang bisa aku ambil banyak kak. Di campus expo aku bisa mengenal lebih tentang ptn favoritku. Aku dulu tanya2 tentang IPB dan Alhamdulillah aku sekarang masuk IPB. Waktu talkshow itu ada alumni smada, udah sukses. Jadi lebih termotivasi dengan kesuksesannya. Di bedah jurusan aku bisa tau jurusan mana yang cocok buat aku. Ya semoga aja emang jurusanku saat ini benar2 cocok buat aku kak hehe.',
            'Dengan adanya DGTS, sangat membantu sekali buat anak anak SMA karena acara ini dibuka untuk umum dan konsultasi bukan hanya untuk kelas 12 tapi kelas 10 11 juga bisa konsul, jadi kita bisa tau jurusan apa yg cocok untuk kita sejak awal SMA, lalu DGTS juga dibuka untuk umum jadi siswa selain smada bisa ke dgts dan ikut konsul, jadi sangat membantu karena konsul disitu gratis gak seperti di bimbel yang kudu bayar mahal, best wes pokoknya.',
            'Acara DGTS tahun ini sangat bagus dan bermanfaat sekali bagi siswa siswi terutama kelas 12. Dari bedah jurusan, talkshow, hingga campus expo. Dengan semua acara itu saya lebih termotivasi dan mengetahui jurusan yg saya inginkan. Namun, saat acara bedah jurusan,  kegiatan sedikit kurang tertata. Karena ada pemateri yg belum masuk kelas tepat waktu lalu teman2 juga kurang tau letak jurusan yg dituju di kelas mana.'
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

                Article::create([
                    'title' => $newsTitle[$i] . '-' . $j,
                    'description' => $newsDescription[$i],
                    'image' => $newsImage,
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
            $pemasukan = $faker->randomNumber($nbDigits = NULL, $strict = false);
            $pengeluaran = $faker->randomNumber($nbDigits = NULL, $strict = false);
            FinancialReport::create([
                'month' => $month,
                'year' => $year,
                'link_url' => $link_url,
                'income' => $pemasukan,
                'outcome' => $pengeluaran,
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
