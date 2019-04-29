-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 11:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loyal`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(190) NOT NULL,
  `type_car` varchar(100) NOT NULL,
  `plate_car` varchar(20) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `phone`, `email`, `photo`, `type_car`, `plate_car`, `deleted_at`) VALUES
(1, 'Driver A', '0829123129219', 'driver@admin.com', 'driver_cxampptmpphp958dtmp_1554190528.jpg', 'Suzuki Ertiga GA', 'BA 90121 WJ', NULL),
(2, 'Driver C', '08990120391', 'admin@admin.coms', 'driver_cxampptmpphp95e3tmp_1554190856.jpg', 'Daihatsu Terios', 'BA 0921 JJ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `driver_order`
--

CREATE TABLE `driver_order` (
  `id_driver` int(5) NOT NULL,
  `id_order` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `photo` varchar(190) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `photo`, `description`) VALUES
(3, '1. Jam Gadang', 'driver_cxampptmpphp3ff2tmp_1555246166.jpg', '<p>Jam Gadang merupakan salah satu ikon pariwisata Sumbar yang unik dan khas. Jam ini memiliki nilai historis yang tinggi karena sudah ada sejak zaman penjajahan Belanda. Dengan ukuran 13&times;4 meter dan tinggi mencapai 26 meter, Jam Gadang memiliki keunikan tersendiri dengan bentuk angkanya yang tidak lazim. Dimana pada angka 4 yang biasa ditulis dengan simbol IV justru ditulis IIII. Selain menyaksikan keunikan jam Gadang dan berfoto ria, kamu juga bisa mampir ke Pasar Bukit Tinggi yang berada tidak jauh dari lokasi ini.&nbsp;</p>\r\n\r\n<p>Lokasi: Pusat kota Bukittinggi, Sumatera Barat, Indonesia.</p>'),
(4, '2. Jembatan Siti Nurbaya', 'driver_cxampptmpphpbf93tmp_1555246199.jpg', '<p>Selain Jam Gadang, wisata Sumbar juga identik dengan Jembatan Siti Nurbaya yang dibangun di atas Muara Batang Arau. Jembatan ini menghubungkan kota tua Padang dengan lokasi Taman Siti Nurbaya yang merupakan tempat pemakaman Siti Nurbaya, sosok wanita yang kisahnya begitu populer dalam dunia sastra Indonesia. Waktu terbaik mengunjungi Jembatan Siti Nurbaya adalah sore hari menjelang petang sehingga bisa menyaksikan keindahan sunset yang mempesona.</p>'),
(5, '3. Danau Maninjau', 'driver_cxampptmpphp46e4tmp_1555246234.jpg', '<p>Danau ini menyajikan pemandangan alam yang begitu menakjubkan keindahannya. Danau terbesar ke-2 di Sumatera Barat ini terbentuk dari letusan gunung berapi. Dengan suasana alam yang masih asri dan sejuk, danau ini sangat cocok untuk mengisi agenda liburan bagi wisatawan yang berburu ketenangan.&nbsp;</p>\r\n\r\n<p><br />\r\nLokasi: Kecamatan Tanjung Raya, Kabupaten Agam, Sumatera Barat.</p>'),
(6, '4. Daun Singkarak', 'driver_cxampptmpphpc4dftmp_1555246266.jpg', '<p>Danau Singkarak merupakan salah satu potensi wisata Sumbar yang sangat populer, terlebih dengan adanya penyelenggaraan festival internasional Tour de Singkarak setiap dua tahun sekali yang banyak diikuti oleh pesepeda dari dalam maupun luar negeri. Danau yang dinobatkan sebagai danau terluas ke-2 setelah Danau Toba ini bukan hanya dimanfaatkan sebagai tempat wisata tetapi juga sebagai pembangkit tenaga listrik sehingga memberikan banyak bagi masyarakat.&nbsp;</p>\r\n\r\n<p><br />\r\nLokasi: Kabupaten Solok dan Tanah Datar, Provinsi Sumatera Barat.</p>'),
(7, '5. Museum Adityawarman', 'driver_cxampptmpphp7043tmp_1555246310.jpg', '<p>Museum yang dibangun pada tahun 1974 ini sangat terkenal di kota Padang dan sering disebut-sebut sebagai Taman Mini-nya kota Padang. Museum bersejarah ini banyak menyimpan benda-benda peninggalan sejarah yang sangat berharga, mulai dari arsip dan dokumen hingga pengenalan kebudayaan Minangkabau.&nbsp;</p>\r\n\r\n<p><br />\r\nLokasi: Jl. Diponegoro No.10, Belakang Tangsi, Kota Padang, Sumatera Barat.</p>'),
(8, '6. Miniatur Makkah', 'driver_cxampptmpphpe4d8tmp_1555246340.jpg', '<p>Kawasan mesjid ini biasanya berfungsi sebagai kawasan Manasik haji. Namun masyarakat dan pemerintahan sekitar juga menjadikan masjid ini sebagai destinasi wisata religi di kota padang. Di kawasan mesjid ini terdapat beberapa bangunan yang unik seperti mesjid yang di dalamnya ada miniatur ka&rsquo;bah. Tak jarang orang-orang menyebutnya mekkah mini. Untuk masuk kekawasan mesjid ini cukup membayar 5000/orang</p>'),
(9, '7. Puncak Gobah', 'driver_cxampptmpphp4a59tmp_1555246366.jpg', '<p>Puncak Gobah merupakan sebuah objek wisata yang masih baru dan sedang populer di Kabupaten Solok. Puncak ini berada di ketinggian Nagari Aripan yang menghadap ke Danau Singkarak. Keindahan Panorama Puncak Gobah menyuguhkan panorama alam yang sangat menakjubkan dengan hamparan persawahan, hutam dan kawasan pesisir bagian selatan Danau singkarak. Di lokasi puncak ini juga dilengkapi oleh sebuah rumah pohon untuk berfoto yang menambah daya tarik pengunjung ke tempat wisata ini.</p>'),
(10, '8. Ngarai Sianok', 'driver_cxampptmpphpaeb2tmp_1555246391.jpg', '<p>Ngarai sianok ini membentang sejauh kurang lebih 15 km dari sisi selatan Nagari Koto Gadang hingga Nagari Sianok Enam Suku, dengan kedalaman lembah mencapai 100 meter dan lebar celah sekitar 200 meter. Ngarai Sianok merupakan suatu wujud visual yang paling jelas dari aktivitas pergerakan lempeng bumi &ldquo;tektonik&rdquo; di Pulau Sumatera ini. Proses terbentuk patahan tersebut menghasilkan sebuah kawasan yang subur dengan panorama yang indah. Kawasan ngarai sianok ini memiliki sebutan lain yaitu, Lembah Pendiam, karena suasananya yang tenang dan damai. Didukung dengan udaranya yang sejuk dan angin yang berhembus semilir, diiringi latar suara kicauan burung kecil kecil dan gemericik air sungai, ngarai ini cocok sebagai tempat melepaskan beban pikiran dari rutinitas sehari-hari.</p>'),
(11, '9. Puncak Gagoan', 'driver_cxampptmpphp1760tmp_1555246418.jpg', '<p>Puncak Gagoan merupakan sebuah tebing curam nan indah yang terletak di Paninggahan, Junjung Sirih, Solok, Sumatera Barat. Puncak Gagoan ini memiliki keindahan panorama alam yang sungguh menarik dan unik dengan dihiasi oleh batuan karangnya yang terlihat menarik jika kita foto di sini. Diatas Puncak ini akan terlihat pemandangan alam serta pesona Danau Singkarak yang terletak tidak jauh dari puncak ini. Selain itu, Pengunjung akan dimanjakan oleh semilir angin yang bertiup cukup kencang dengan udaranya yang sangat sejuk menyejukan. Hal ini dikarenakan bukit ini memang dikelilingi oleh hutan yang masih terjaga keasriannya.</p>'),
(12, '10. Kebuh Teh Alahan Panjang', 'driver_cxampptmpphp8a6etmp_1555246447.jpg', '<p>Kebun teh yang terdapat di Alahan panjang, Solok, Sumatera Barat merupakan salah satu tempat wisata yang wajib untuk dikunjungi oleh para pemburu panorama alam. Selain tempatnya yang sejuk, mata Anda akan di manjakan dengan hamparan teh yang hijau dengan bentuk permukaan yang unik, sehingga membuat kita tidak bosan dan ingin datang lagi kesana. Untuk memasuki kebun teh tidak di pungut biaya sedikitpun alias GRATIS.</p>'),
(13, '11. Pulau Pagang', 'driver_cxampptmpphpf28ftmp_1555246474.jpg', '<p>Pulau Pagang juga bisa ditempuh dari Pelabuhan Bungus. Yang keren dari tempat ini adalah pantai yang eksotis dengan air lautnya yang jernih kebiruan. Pepohonan yang rindang akan langsung menyambutmu dan memberikan udara yang begitu segar khas pantai yang nggak mungkin bisa kamu rasakan di tengah-tengah kota. Sampai saat ini Pulau Pagang masih terus dikembangkan sebagai destinasi wisata bahari andalan di Sumatera Barat.</p>'),
(14, '12. Pulau Mandeh', 'driver_cxampptmpphp7414tmp_1555246507.jpg', '<p>Pulau Mandeh inilah yang sering disebut sebagai Raja Ampatnya Sumatera Barat. Kenapa bisa begitu? Kamu baru akan tahu jawabannya jika bertandang ke sana langsung. Gugusan pulau-pulau kecil dihubungkan dengan lautan yang biru, menawarkan keindahan layaknya taman surga. Secara Administratif, Mandeh masuk dalam wilayah Kecamatan Koto XI Tarusan yang berdekat dengan Kota Padang.</p>'),
(15, '13. Pulau Pasumpahan', 'driver_cxampptmpphpaff1tmp_1555246588.jpg', '<p>Pulau Pasumpahan memiliki kondisi alam yang masih alami, baik di darat maupun lautannya. Dengan begitu, kamu bisa puas bermain-main di hamparan pasir pantai sambil menyantap kuliner setelah itu snorkeling mengintip ikan-ikan berenang di sela-sela terumbu karang. berbagai biota laut akan memanjakan matamu, dijamin kamu bakal betah berlama-lama di sana. Pulau Pasumpahan berada dalam wilayah Kecamatan Bungus Teluk Kabung, Kota Padang.</p>'),
(16, '14. Pulau Air', 'driver_cxampptmpphp3975tmp_1555246623.jpg', '<p>Tidak begitu jauh dari Pulau Sawo, terdapat daratan yang luasnya sekitar 4,7 hektare. Masyarakat Sumatera Barat menyebutnya dengan nama Pulau Air. Sampai saat ini, Pulau Air terus dipromosikan sebagai destinasi wisata taman laut dengan terumbu karang dan biota laut yang beragam. Kamu bisa datang ke sini untuk melakukan snorkeling, diving dan lain sebagainya, pasti seru sekali kan? Secara administratif Pulau Air masuk dalam wilayah Lubuk Begalung, Kota Padang, Sumatera Barat.</p>'),
(17, '15. Pulau Sibunta', 'driver_cxampptmpphp9552tmp_1555246647.jpg', '<p>Pulau Sibunta memiliki keindahan tersendiri yang nggak mungkin bisa kamu temukan di tempat lain. Baik daratan maupun baharinya, menyuguhkan keindahan yang begitu memanjakan mata. Kamu yang mencari ketenangan bisa juga datang ke Pulau Sibunta untuk mengistirahatkan tubuh menyegarkan pikiran. Untuk menginjakkan kaki di daratannya, kamu harus mengarungi lautan dari Padang dengan perjalanan selama 18 menit, jaraknya sekitar 12,5 kilometer dan bisa dicapai dengan perahu motor milik nelayan.</p>'),
(18, '16. Pacu Jawi', 'driver_cxampptmpphp204dtmp_1555246682.jpg', '<p>Pacu jawi (Pacu Sapi) yaitu sebuah atraksi permainan tradisional yang dilombakan di Kabupaten Tanah Datar, Provinsi Sumatera Barat. Menjadi kebiasaan setiap setahun sekali untuk diselanggarakan secara bergiliran selama empat minggu di empat kecamatan di Kabupaten Tanah Datar. Berdasarkan sejarahnya, upacara adat ini telah ada ratusan tahun tang lalu yang awalnya dilakukan para petani setelah musim panen.</p>'),
(19, '17. Pacu Itiak', 'driver_cxampptmpphp9a40tmp_1555246714.jpg', '<p><strong>Pacu Itiak</strong> termasuk upacara yang berasal dari daerah Sumatera Barat. Pacu Itiak atau dalam bahasa Indonesianya Pacu bebek (duck race) ini adalah salah satu event anak nagari yang bisa dibilang event satu-satunya didunia yang turun temurun sejak tahun 1928, bertepatan dengan tahun hari lahirnya Sumpah Pemuda.</p>'),
(20, '18. Tabuik', 'driver_cxampptmpphp2a7btmp_1555246751.jpg', '<p>Tabuik adalah sebuah upacara adat Sumatera Barat yang biasa dilaksanakan setial tanggal 10 Muharam. Upacara ini memperingati wafatnya Husein, cucu dari Nabi Muhammad SAW dan lebih dikenal dengan sebutan hari Asyura. Berdasarkan sejarahnya, Tabuik pertama kali dikenalkan oleh tentara Tamil muslim yang berasal dari India pada tahun 1831. Pengertian dari Tabuik sendiri merupakan pengusungan jenazah. Awalnya, upacara ini merupakan adat Syi&rsquo;ah namun kini tak sedikit penganut Sunni latah melaksanakan upacara Tabuik ini. Peringatan Asyura meliputi upacara pelabuhan tabuik ke laut lepas. Bagi sebagain masyarakat Minang, Tabuik sangat penting untuk menghormati keluarga Nabi Muhammad SAW. Banyak warga desa yang berbondong-bondong ke pantai untuk melakukan upacara atau sekedar menyaksikan hiruk pikuknya pelaksanaan tersebut.</p>'),
(21, '19. Balimau', 'driver_cxampptmpphpe476tmp_1555246798.jpg', '<p>Balimau merupakan upacara atau tradisi agama Hindu yang masih mengakar di Sumatera Barat. Upacara ini yakni dengan membersihkan diri di sungai atau di tempat-tempat pemandian umum. Diadakan saat sebelum bulan Ramadhan, Balimau bertujuan untuk menyucikan diri secara lahir dan batin. Beberapa hal yang unik dari tradisi ini adalah cara mandinya dengan menggunakan air limau atau jeruk nipis. Jeruk nipis dipercaya dapat membasuh kotoran serta keringat yang melekat pada kulit. Kini, upacara yang dulunya merupakan upacara keagamaan kini beralih fungsi menjadi sebuah perayaan atau rekreasi.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(5) NOT NULL,
  `id_package` int(5) NOT NULL,
  `ray` int(5) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) DEFAULT 'waiting',
  `duration` int(11) DEFAULT '1',
  `confirmation_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `route_start` varchar(190) NOT NULL,
  `destination` varchar(190) NOT NULL,
  `price_3_ray` int(100) NOT NULL,
  `price_2_ray` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `route_start`, `destination`, `price_3_ray`, `price_2_ray`) VALUES
(1, 'Trip', 'Airport', 'Kota Padang', 13, 11),
(2, 'Trip', 'Airport', 'Pelabuhan Bungus', 20, 16),
(3, 'Trip', 'Kota Padang', 'Pelabuhan Bungus', 13, 11),
(4, 'Trip', 'Kota Padang', 'Airport', 13, 11),
(5, 'Trip', 'Pelabuhan Bungus', 'Airport', 20, 16),
(6, 'Rental', '-', '-', 37, 33);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$IFNsqccnteyfkbqvwvEIEOv4T3EBD1waJ4MZO1nWx4YegkfXc9o4y', 'MDfOuVoH3WylENAi35geW7AfFYO9f6UppY6ziYWUeY2EHu9PWd9YgzHBuySx', '2019-04-01 19:30:01', '2019-04-01 19:30:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_order`
--
ALTER TABLE `driver_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_driver` (`id_driver`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_package` (`id_package`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `driver_order`
--
ALTER TABLE `driver_order`
  ADD CONSTRAINT `driver_order_ibfk_1` FOREIGN KEY (`id_driver`) REFERENCES `drivers` (`id`),
  ADD CONSTRAINT `driver_order_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_package`) REFERENCES `packages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
