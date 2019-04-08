<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Tour & Travel</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('theme/landing/style5.css')}}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">

        @include('partials/_sidebar_guest')

        <div id="content">

            @include('partials/_navbar_guest')

            <style media="screen">
              @media only screen and (max-width: 768px) {
                .figure-img{
                  width: 100%;
                }
              }
              p{
                color:#4c4c4c;
              }
            </style>

            <h4>Tempat Wisata di Sumatera Barat</h4><br><br>

            <div class="container">
              <h4>1. Jam Gadang</h4>
              <figure class="figure text-center">
                <img src="{{ asset('storage/gallery/jam-gadang.jpg') }}" class="figure-img img-fluid rounded">
                <figcaption class="figure-caption">Source: https://nyero.id.</figcaption>
              </figure>
              <p>Jam Gadang merupakan salah satu ikon pariwisata Sumbar yang unik dan khas. Jam ini memiliki nilai historis yang tinggi karena sudah ada sejak zaman penjajahan Belanda.
              Dengan ukuran 13×4 meter dan tinggi mencapai 26 meter, Jam Gadang memiliki keunikan tersendiri dengan bentuk angkanya yang tidak lazim. Dimana pada angka 4 yang biasa ditulis dengan simbol IV justru ditulis IIII.
              Selain menyaksikan keunikan jam Gadang dan berfoto ria, kamu juga bisa mampir ke Pasar Bukit Tinggi yang berada tidak jauh dari lokasi ini.
              <br><br>Lokasi: Pusat kota Bukittinggi, Sumatera Barat, Indonesia.

            </div>

            <div class="container" style="margin-top:5%">
              <h4>2. Jembatan Siti Nurbaya</h4>
              <figure class="figure text-left">
                <img src="{{ asset('storage/gallery/jembatan-siti-nurbaya.jpg') }}" class="figure-img img-fluid rounded" width="60%">
              </figure>
              <p>Selain Jam Gadang, wisata Sumbar juga identik dengan Jembatan Siti Nurbaya yang dibangun di atas Muara Batang Arau.
                Jembatan ini menghubungkan kota tua Padang dengan lokasi Taman Siti Nurbaya yang merupakan tempat pemakaman Siti Nurbaya, sosok wanita yang kisahnya begitu populer dalam dunia sastra Indonesia.
                Waktu terbaik mengunjungi Jembatan Siti Nurbaya adalah sore hari menjelang petang sehingga bisa menyaksikan keindahan sunset yang mempesona.
            </div>

            <div class="container" style="margin-top:5%">
              <h4>3. Danau Maninjau</h4>
              <figure class="figure text-left">
                <img src="{{ asset('storage/gallery/maninjau.jpg') }}" class="figure-img img-fluid rounded" width="45%">
              </figure>
              <p>Danau ini menyajikan pemandangan alam yang begitu menakjubkan keindahannya.  Danau terbesar ke-2 di Sumatera Barat ini terbentuk dari letusan gunung berapi.  Dengan suasana alam yang masih asri dan sejuk, danau ini sangat cocok untuk mengisi agenda liburan bagi wisatawan yang berburu ketenangan.
                <br><br>Lokasi: Kecamatan Tanjung Raya, Kabupaten Agam, Sumatera Barat.
            </div>

            <div class="container" style="margin-top:5%">
              <h4>4. Daun Singkarak</h4>
              <figure class="figure text-left">
                <img src="{{ asset('storage/gallery/danau-singkarak.jpg') }}" class="figure-img img-fluid rounded" width="70%">
              </figure>
              <p>Danau Singkarak merupakan salah satu potensi wisata Sumbar yang sangat populer, terlebih dengan adanya penyelenggaraan festival internasional Tour de Singkarak setiap dua tahun sekali yang banyak diikuti oleh pesepeda dari dalam maupun luar negeri.
                Danau yang dinobatkan sebagai danau terluas ke-2 setelah Danau Toba ini bukan hanya dimanfaatkan sebagai tempat wisata tetapi juga sebagai pembangkit tenaga listrik sehingga memberikan banyak bagi masyarakat.
                <br><br>Lokasi: Kabupaten Solok dan Tanah Datar, Provinsi Sumatera Barat.
            </div>

            <div class="container" style="margin-top:5%">
              <h4>5. Museum Adityawarman</h4>
              <figure class="figure text-left">
                <img src="{{ asset('storage/gallery/museum.jpg') }}" class="figure-img img-fluid rounded" width="55%">
              </figure>
              <p>Museum yang dibangun pada tahun 1974 ini sangat terkenal di kota Padang dan sering disebut-sebut sebagai Taman Mini-nya kota Padang.
                Museum bersejarah ini banyak menyimpan benda-benda peninggalan sejarah yang sangat berharga, mulai dari arsip dan dokumen hingga pengenalan kebudayaan Minangkabau.
                <br><br>Lokasi: Jl. Diponegoro No.10, Belakang Tangsi, Kota Padang, Sumatera Barat.
            </div>

            <div class="container" style="margin-top:5%">
              <h4>6. Miniatur Makkah</h4>
              <figure class="figure text-left">
                <img src="{{ asset('storage/gallery/miniatur.jpg') }}" class="figure-img img-fluid rounded" width="50%">
              </figure>
              <p>Kawasan mesjid ini biasanya berfungsi sebagai kawasan Manasik haji. Namun masyarakat dan pemerintahan sekitar juga menjadikan masjid ini sebagai destinasi wisata religi di kota padang. Di kawasan mesjid ini terdapat beberapa bangunan yang unik seperti mesjid yang di dalamnya ada miniatur ka’bah. Tak jarang orang-orang menyebutnya mekkah mini. Untuk masuk kekawasan mesjid ini cukup membayar 5000/orang
            </div>

            <div class="container" style="margin-top:5%">
              <h4>7. Puncak Gobah</h4>
              <figure class="figure text-left">
                <img src="{{ asset('storage/gallery/puncak-gobah.jpg') }}" class="figure-img img-fluid rounded" width="50%">
                <figcaption class="figure-caption">Source: @gabriellamelisa.</figcaption>
              </figure>
              <p>Puncak Gobah merupakan sebuah objek wisata yang masih baru dan sedang populer di Kabupaten Solok. Puncak ini berada di ketinggian Nagari Aripan yang menghadap ke Danau Singkarak. Keindahan Panorama Puncak Gobah menyuguhkan panorama alam yang sangat menakjubkan dengan hamparan persawahan, hutam dan kawasan pesisir bagian selatan Danau singkarak. Di lokasi puncak ini juga dilengkapi oleh sebuah rumah pohon untuk berfoto yang menambah daya tarik pengunjung ke tempat wisata ini.</p>
            </div>

            <div class="container" style="margin-top:5%">
              <h4>8. Ngarai Sianok</h4>
              <figure class="figure text-left">
                <img src="{{ asset('storage/gallery/ngarai.jpg') }}" class="figure-img img-fluid rounded" width="65%">
              </figure>
              <p>Ngarai sianok ini membentang sejauh kurang lebih 15 km dari sisi selatan Nagari Koto Gadang hingga Nagari Sianok Enam Suku, dengan kedalaman lembah mencapai 100 meter dan lebar celah sekitar 200 meter.
                Ngarai Sianok merupakan suatu wujud visual yang paling jelas dari aktivitas pergerakan lempeng bumi “tektonik” di Pulau Sumatera ini. Proses terbentuk patahan tersebut menghasilkan sebuah kawasan yang subur dengan panorama yang indah.
                Kawasan ngarai sianok ini memiliki sebutan lain yaitu, Lembah Pendiam, karena suasananya yang tenang dan damai. Didukung dengan udaranya yang sejuk dan angin yang berhembus semilir, diiringi latar suara kicauan burung kecil kecil dan gemericik air sungai, ngarai ini cocok sebagai tempat melepaskan beban pikiran dari rutinitas sehari-hari.</p>
            </div>

            <div class="container" style="margin-top:5%">
              <h4>9. Puncak Gagoan</h4>
              <figure class="figure text-left">
                <img src="{{ asset('storage/gallery/gagoan.jpg') }}" class="figure-img img-fluid rounded" width="65%">
              </figure>
              <p>Puncak Gagoan merupakan sebuah tebing curam nan indah yang terletak di Paninggahan, Junjung Sirih, Solok, Sumatera Barat. Puncak Gagoan ini memiliki keindahan panorama alam yang sungguh menarik dan unik dengan dihiasi oleh batuan karangnya yang terlihat menarik jika kita foto di sini.
                Diatas Puncak ini akan terlihat pemandangan alam serta pesona Danau Singkarak yang terletak tidak jauh dari puncak ini. Selain itu, Pengunjung akan dimanjakan oleh semilir angin yang bertiup cukup kencang dengan udaranya yang sangat sejuk menyejukan. Hal ini dikarenakan bukit ini memang dikelilingi oleh hutan yang masih terjaga keasriannya.</p>
            </div>

            <div class="container" style="margin-top:5%">
              <h4>10. Kebuh Teh Alahan Panjang</h4>
              <figure class="figure text-left">
                <img src="{{ asset('storage/gallery/teh.jpg') }}" class="figure-img img-fluid rounded" width="50%">
              </figure>
              <p>Kebun teh yang terdapat di Alahan panjang, Solok, Sumatera Barat merupakan salah satu tempat wisata yang wajib untuk dikunjungi oleh para pemburu panorama alam. Selain tempatnya yang sejuk, mata Anda akan di manjakan dengan hamparan teh yang hijau dengan bentuk permukaan yang unik, sehingga membuat kita tidak bosan dan ingin datang lagi kesana. Untuk memasuki kebun teh tidak di pungut biaya sedikitpun alias GRATIS.</p>
            </div>

            <div class="container" style="margin-top:5%">
              <h4>11. Pulau Pagang</h4>
              <figure class="figure text-left">
                <img src="{{ asset('storage/gallery/pulau-pagang.jpg') }}" class="figure-img img-fluid rounded" width="80%">
                <figcaption class="figure-caption">Source: https://travelingyuk.com.</figcaption>
              </figure>
              <p>Pulau Pagang juga bisa ditempuh dari Pelabuhan Bungus. Yang keren dari tempat ini adalah pantai yang eksotis dengan air lautnya yang jernih kebiruan. Pepohonan yang rindang akan langsung menyambutmu dan memberikan udara yang begitu segar khas pantai yang nggak mungkin bisa kamu rasakan di tengah-tengah kota. Sampai saat ini Pulau Pagang masih terus dikembangkan sebagai destinasi wisata bahari andalan di Sumatera Barat.</p>
            </div>

            <div class="container" style="margin-top:5%">
              <h4>12. Pulau Mandeh</h4>
              <figure class="figure text-left">
                <img src="{{ asset('storage/gallery/mandeh.jpg') }}" class="figure-img img-fluid rounded" width="55%">
                <figcaption class="figure-caption">Source: https://travelingyuk.com.</figcaption>
              </figure>
              <p>Pulau Mandeh inilah yang sering disebut sebagai Raja Ampatnya Sumatera Barat. Kenapa bisa begitu? Kamu baru akan tahu jawabannya jika bertandang ke sana langsung. Gugusan pulau-pulau kecil dihubungkan dengan lautan yang biru, menawarkan keindahan layaknya taman surga. Secara Administratif, Mandeh masuk dalam wilayah Kecamatan Koto XI Tarusan yang berdekat dengan Kota Padang.</p>
            </div>

            <div class="container" style="margin-top:5%">
              <h4>13. Pulau Pasumpahan</h4>
              <figure class="figure text-left">
                <img src="{{ asset('storage/gallery/pasumpahan.jpg') }}" class="figure-img img-fluid rounded" width="70%">
                <figcaption class="figure-caption">Source: https://travelingyuk.com.</figcaption>
              </figure>
              <p>Pulau Pasumpahan memiliki kondisi alam yang masih alami, baik di darat maupun lautannya. Dengan begitu, kamu bisa puas bermain-main di hamparan pasir pantai sambil menyantap kuliner setelah itu snorkeling mengintip ikan-ikan berenang di sela-sela terumbu karang. berbagai biota laut akan memanjakan matamu, dijamin kamu bakal betah berlama-lama di sana. Pulau Pasumpahan berada dalam wilayah Kecamatan Bungus Teluk Kabung, Kota Padang.</p>
            </div>

            <div class="container" style="margin-top:5%">
              <h4>14. Pulau Air</h4>
              <figure class="figure text-left">
                <img src="{{ asset('storage/gallery/air.jpg') }}" class="figure-img img-fluid rounded" width="60%">
                <figcaption class="figure-caption">Source: https://travelingyuk.com.</figcaption>
              </figure>
              <p>Tidak begitu jauh dari Pulau Sawo, terdapat daratan yang luasnya sekitar 4,7 hektare. Masyarakat Sumatera Barat menyebutnya dengan nama Pulau Air. Sampai saat ini, Pulau Air terus dipromosikan sebagai destinasi wisata taman laut dengan terumbu karang dan biota laut yang beragam. Kamu bisa datang ke sini untuk melakukan snorkeling, diving dan lain sebagainya, pasti seru sekali kan? Secara administratif Pulau Air masuk dalam wilayah Lubuk Begalung, Kota Padang, Sumatera Barat.</p>
            </div>

            <div class="container" style="margin-top:5%">
              <h4>15. Pulau Sibunta</h4>
              <figure class="figure text-left">
                <img src="{{ asset('storage/gallery/sibunta.jpg') }}" class="figure-img img-fluid rounded" width="55%">
                <figcaption class="figure-caption">Source: https://travelingyuk.com.</figcaption>
              </figure>
              <p>Pulau Sibunta memiliki keindahan tersendiri yang nggak mungkin bisa kamu temukan di tempat lain. Baik daratan maupun baharinya, menyuguhkan keindahan yang begitu memanjakan mata. Kamu yang mencari ketenangan bisa juga datang ke Pulau Sibunta untuk mengistirahatkan tubuh menyegarkan pikiran. Untuk menginjakkan kaki di daratannya, kamu harus mengarungi lautan dari Padang dengan perjalanan selama 18 menit, jaraknya sekitar 12,5 kilometer dan bisa dicapai dengan perahu motor milik nelayan.</p>
            </div>

            <br><br><h4>Budaya di Sumatera Barat</h4><br><br>

            <div class="container">
              <h4>1. Pacu Jawi</h4>
              <figure class="figure text-center">
                <img src="{{ asset('storage/gallery/pacu-jawi.jpg') }}" class="figure-img img-fluid rounded">
                <figcaption class="figure-caption">Source: https://www.silontong.com.</figcaption>
              </figure>
              <p>Pacu jawi (Pacu Sapi) yaitu sebuah atraksi permainan tradisional yang dilombakan di Kabupaten Tanah Datar, Provinsi Sumatera Barat. Menjadi kebiasaan setiap setahun sekali untuk diselanggarakan secara bergiliran selama empat minggu di empat kecamatan di Kabupaten Tanah Datar. Berdasarkan sejarahnya, upacara adat ini telah ada ratusan tahun tang lalu yang awalnya dilakukan para petani setelah musim panen.</p>
            </div>

            <div class="container" style="margin-top:5%">
              <h4>2. Pacu Itiak</h4>
              <figure class="figure text-center">
                <img src="{{ asset('storage/gallery/pacu-itiak.jpg') }}" class="figure-img img-fluid rounded">
                <figcaption class="figure-caption">Source: https://www.silontong.com.</figcaption>
              </figure>
              <p>Pacu Itiak termasuk upacara yang berasal dari daerah Sumatera Barat. Pacu Itiak atau dalam bahasa Indonesianya Pacu bebek (duck race) ini adalah salah satu event anak nagari yang bisa dibilang event satu-satunya didunia yang turun temurun sejak tahun 1928, bertepatan dengan tahun hari lahirnya Sumpah Pemuda.</p>
            </div>

            <div class="container" style="margin-top:5%">
              <h4>3. Tabuik</h4>
              <figure class="figure text-center">
                <img src="{{ asset('storage/gallery/tabuik.jpg') }}" class="figure-img img-fluid rounded">
                <figcaption class="figure-caption">Source: https://www.silontong.com.</figcaption>
              </figure>
              <p>Tabuik adalah sebuah upacara adat Sumatera Barat yang biasa dilaksanakan setial tanggal 10 Muharam. Upacara ini memperingati wafatnya Husein, cucu dari Nabi Muhammad SAW dan lebih dikenal dengan sebutan hari Asyura. Berdasarkan sejarahnya, Tabuik pertama kali dikenalkan oleh tentara Tamil muslim yang berasal dari India pada tahun 1831. Pengertian dari Tabuik sendiri merupakan pengusungan jenazah.
                Awalnya, upacara ini merupakan adat Syi’ah namun kini tak sedikit penganut Sunni latah melaksanakan upacara Tabuik ini.
                Peringatan Asyura meliputi upacara pelabuhan tabuik ke laut lepas. Bagi sebagain masyarakat Minang, Tabuik sangat penting untuk menghormati keluarga Nabi Muhammad SAW. Banyak warga desa yang berbondong-bondong ke pantai untuk melakukan upacara atau sekedar menyaksikan hiruk pikuknya pelaksanaan tersebut.</p>
            </div>

            <div class="container" style="margin-top:5%">
              <h4>4. Balimau</h4>
              <figure class="figure text-center">
                <img src="{{ asset('storage/gallery/balimau.jpg') }}" class="figure-img img-fluid rounded">
                <figcaption class="figure-caption">Source: https://www.silontong.com.</figcaption>
              </figure>
              <p>Balimau merupakan upacara atau tradisi agama Hindu yang masih mengakar di Sumatera Barat. Upacara ini yakni dengan membersihkan diri di sungai atau di tempat-tempat pemandian umum. Diadakan saat sebelum bulan Ramadhan, Balimau bertujuan untuk menyucikan diri secara lahir dan batin. Beberapa hal yang unik dari tradisi ini adalah cara mandinya dengan menggunakan air limau atau jeruk nipis. Jeruk nipis dipercaya dapat membasuh kotoran serta keringat yang melekat pada kulit.
                Kini, upacara yang dulunya merupakan upacara keagamaan kini beralih fungsi menjadi sebuah perayaan atau rekreasi.</p>
            </div>

            <div class="container" style="margin-top:5%">
              <h4>5. Makan Bajamba</h4>
              <figure class="figure text-center">
                <img src="{{ asset('storage/gallery/makan-bajamba.jpg') }}" class="figure-img img-fluid rounded">
                <figcaption class="figure-caption">Source: https://www.silontong.com.</figcaption>
              </figure>
              <p>Makan Bajamba adalah upacara adat Sumatera Barat yaitu berupa kegiatan makan masyarakat Minang dengan cara duduk bersama-sama di sebuah tempat yang sudah ditentukan. Tujuan dari tradisi ini untuk mendekatkan diri satu sama lain tanpa memandang kelas sosial seseorang.
                Hari-hari libur biasanya jadi waktu untuk melaksanakan upacra ini atau ketika sedang ada pesta adat. Makan Bajamba juga sering diadakan saat sedang ada pertemuan penting.
                Selain sebagai budaya lokal, pertujuakan ini sering mendapat perhatian dari wisatawan manca negara yang penasaran terhadap Makan Bajamba. Meja yang panjang dan alas seadanya menjadi tempat perjamuan berlangsung.</p>
            </div>

            @include('partials/_footer_guest')

        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>
