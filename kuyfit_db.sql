-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 02:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuyfit_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_pemilik_lapangan`
--

CREATE TABLE `akun_pemilik_lapangan` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(16) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akun_pemilik_lapangan`
--

INSERT INTO `akun_pemilik_lapangan` (`id`, `firstName`, `lastName`, `email`, `phoneNumber`, `gender`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Makara', 'Natsir', 'mitra.wastuti@example.com', '+628779168731177', 1, '$2y$10$BMrWIL6DYJUm3sMIhzvJ1.r/HDf8Z7XfYx3NbY.t4iPxz5WnIC03y', '2023-06-17 16:22:32', '2023-06-17 16:22:32'),
(2, 'Baktiono', 'Zulkarnain', 'hafshah66@example.org', '+62227055306457', 1, '$2y$10$8Bn/AxrUAQVXRmUnxngThe6IP.9DgvOSL.TFk.ONBIiDu4SpdLP/q', '2023-06-17 16:22:32', '2023-06-17 16:22:32'),
(3, 'Endra', 'Waskita', 'virman.maheswara@example.net', '+629363808716858', 1, '$2y$10$o5YjxxwDyPpQNdaT0oANGOKmYDGcwf4e2bgxba3o1QJ4pEorHOBb6', '2023-06-17 16:22:32', '2023-06-17 16:22:32'),
(4, 'Siska', 'Hariyah', 'knamaga@example.com', '+624484908256533', 0, '$2y$10$gupoabPlKErtDk7YNjD6POvMEf63W6Jkc71UDmBSm6XP4c5eHd5Ue', '2023-06-17 16:22:32', '2023-06-17 16:22:32'),
(5, 'Zalindra', 'Usamah', 'tampubolon.latika@example.com', '+62856185798532', 0, '$2y$10$nmrNTIufZeBP9mgseJlG1uM1svJif4.D0u1wpD.CDUcPiSjtE0nTq', '2023-06-17 16:22:32', '2023-06-17 16:22:32'),
(6, 'Ophelia', 'Mardhiyah', 'wastuti.argono@example.org', '+627447250494376', 0, '$2y$10$SKIGIw82xhnHgC5TAConPOdH3Vcsi9O2LE/OX8tip9ItlJ2Zn1ZGG', '2023-06-17 16:22:32', '2023-06-17 16:22:32'),
(7, 'Lintang', 'Maryati', 'prakosa.nasyidah@example.com', '+62887555089744', 0, '$2y$10$9irh4FZ3bENAxlJ5vsYDTerjVgMV.gj999qdYlWbEzMrPwbVo9EIC', '2023-06-17 16:22:32', '2023-06-17 16:22:32'),
(8, 'Vero', 'Mangunsong', 'hlaksita@example.net', '+628996415842810', 1, '$2y$10$8Xcl8l02.fwF8bjTmqIX.udkUOpZ3jbuPA5ZrM/ezv5K4oIGtbIKK', '2023-06-17 16:22:32', '2023-06-17 16:22:32'),
(9, 'Chelsea', 'Melani', 'uhastuti@example.net', '+625125922285651', 0, '$2y$10$10MKKq3p5ci3YdcK1AO4j.ELYjWhI6yg81pi5Iu6OPt2CS0qvPMAm', '2023-06-17 16:22:32', '2023-06-17 16:22:32'),
(10, 'Wardaya', 'Hakim', 'samiah69@example.net', '+627785015075950', 1, '$2y$10$9bFMgUQFs5QtQVvmCgjDTeCd1W2DmYfjf0fBNzbbQk5Y/PL1q5xD2', '2023-06-17 16:22:32', '2023-06-17 16:22:32'),
(11, 'Admin', 'Pertama', 'admin@gmail.com', '82139948427', 1, '$2y$10$KY0d7P.TYHzIgAqbCUTR7Oh0Dpop4c4xXYqg65aNmv01XoMYTcQae', '2023-06-17 17:07:58', '2023-06-17 17:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `akun_penyewa`
--

CREATE TABLE `akun_penyewa` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(16) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akun_penyewa`
--

INSERT INTO `akun_penyewa` (`id`, `firstName`, `lastName`, `email`, `phoneNumber`, `gender`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Patricia', 'Hariyah', 'omustofa@example.org', '+626711057529735', 0, '$2y$10$ZGJs6GA2nFG5JAH5htk5iOk35FKuuPWNBzGU6dSgcUn33Ub3dKaNa', '2023-06-17 16:22:30', '2023-06-17 16:22:30'),
(2, 'Usman', 'Jailani', 'kamila.siregar@example.org', '+628446372938869', 1, '$2y$10$/Naodx/iAgkLhrLsM6GxtOu2VutQCzTcUlrk0MjMUjb/Bkc44Vfr6', '2023-06-17 16:22:30', '2023-06-17 16:22:30'),
(3, 'Rizki', 'Sitompul', 'nasyiah.praba@example.com', '+628868009398705', 1, '$2y$10$qBsfFDl8s15dDLKjlyRgvu/vXyP1npyk02HSUILOWck2.V8jt51wa', '2023-06-17 16:22:30', '2023-06-17 16:22:30'),
(4, 'Mitra', 'Prabowo', 'cinthia64@example.net', '+623361305486821', 1, '$2y$10$ZDPszWEGXwFy1NtAboHXV.4aS/D/Nw9DO2AqIRP9FvdQUHioyPntO', '2023-06-17 16:22:30', '2023-06-17 16:22:30'),
(5, 'Sabar', 'Mangunsong', 'yani34@example.net', '+623070505763567', 1, '$2y$10$ky2f3TPZn10NU5F5YsEbO.RCrlxkDxfPPeHze0lYe3rvkJrefZL.a', '2023-06-17 16:22:30', '2023-06-17 16:22:30'),
(6, 'Ratna', 'Mardhiyah', 'vino43@example.org', '+62518674116585', 0, '$2y$10$6T3a0DYwy/0.1lU9fElucOMnzzLEa3bi2hOeB2yACQtjCiIGpphDW', '2023-06-17 16:22:30', '2023-06-17 16:22:30'),
(7, 'Gaiman', 'Wibowo', 'simanjuntak.jumadi@example.org', '+621636056255968', 1, '$2y$10$YSYRSke03DjUUvkGU1RHzOPy8V6sZTwhWJbg3gUSJCzYIhKqziGfW', '2023-06-17 16:22:30', '2023-06-17 16:22:30'),
(8, 'Rahmi', 'Wijayanti', 'ami89@example.net', '+625405101911664', 0, '$2y$10$fNJ9CASh4WmuDvfiHo8P9ekZO.AqaBYS1fpBDghW4spL0A7aJzF56', '2023-06-17 16:22:30', '2023-06-17 16:22:30'),
(9, 'Luwar', 'Ardianto', 'maida.irawan@example.net', '+626871305997272', 1, '$2y$10$Hns0skRNKarwutQOgiLUSuwf4DHteVUn1U3UbOswphAHmqBJut5OG', '2023-06-17 16:22:30', '2023-06-17 16:22:30'),
(10, 'Fathonah', 'Mulyani', 'pangeran65@example.com', '+622501220021980', 0, '$2y$10$ecThDpOdz4n1bsvr3EPcHeKPSX/lh6v5.ZOF9qAxNK7eb4IFNhQcu', '2023-06-17 16:22:30', '2023-06-17 16:22:30'),
(11, 'Bayu Siddhi', 'Mukti 2', 'bayu2mukti18@gmail.com', '82123456789', 1, '$2y$10$VGJbAzRnkiTW7NeQyPkDiOb22sZudrn9UziiYNp5XGTfdw0FK0Eba', '2023-06-17 17:08:30', '2023-06-17 17:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_olahraga`
--

CREATE TABLE `jenis_olahraga` (
  `id` int(10) UNSIGNED NOT NULL,
  `sportType` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_olahraga`
--

INSERT INTO `jenis_olahraga` (`id`, `sportType`) VALUES
(1, 'Basketball'),
(2, 'Futsal'),
(3, 'Badminton');

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `id` int(10) UNSIGNED NOT NULL,
  `venueName` varchar(32) NOT NULL,
  `oprTime` varchar(32) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phoneNumber` varchar(16) NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `toilet` tinyint(1) NOT NULL,
  `canteen` tinyint(1) NOT NULL,
  `musalla` tinyint(1) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `timeStamp` timestamp NULL DEFAULT current_timestamp(),
  `sportId` int(10) UNSIGNED NOT NULL,
  `ownerId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id`, `venueName`, `oprTime`, `address`, `phoneNumber`, `price`, `wifi`, `toilet`, `canteen`, `musalla`, `photo`, `timeStamp`, `sportId`, `ownerId`) VALUES
(1, 'Lapangan Bapak Irwan', '10.00 - 18.00', 'Jln. Sampangan No. 988, Tebing Tinggi 68008, Babel', '+623914805004113', 90000, 0, 0, 1, 0, 'https://picsum.photos/200', '2023-06-17 23:22:32', 1, 8),
(2, 'Lapangan Ibu Oliva', '10.00 - 18.00', 'Dk. Jambu No. 161, Palopo 35107, Kaltara', '+628643720147111', 97000, 1, 1, 1, 1, 'https://picsum.photos/200', '2023-06-17 23:22:32', 1, 6),
(3, 'Lapangan Ibu Zalindra', '10.00 - 18.00', 'Psr. Ronggowarsito No. 138, Manado 73069, Sumsel', '+629086104233001', 86000, 1, 1, 0, 1, 'https://picsum.photos/200', '2023-06-17 23:22:32', 1, 7),
(4, 'Lapangan Ibu Unjani', '10.00 - 18.00', 'Ki. Bazuka Raya No. 191, Madiun 38770, Kepri', '+626644939607227', 53000, 0, 1, 1, 1, 'https://picsum.photos/200', '2023-06-17 23:22:32', 1, 4),
(5, 'Lapangan Bapak Nrima', '10.00 - 18.00', 'Gg. Cikutra Timur No. 533, Pangkal Pinang 71168, Babel', '+623609026784949', 63000, 1, 0, 1, 1, 'https://picsum.photos/200', '2023-06-17 23:22:32', 1, 8),
(6, 'Lapangan Bapak Embuh', '10.00 - 18.00', 'Psr. Kyai Gede No. 958, Lubuklinggau 48881, Kalsel', '+623176672411298', 84000, 0, 0, 1, 1, 'https://picsum.photos/200', '2023-06-17 23:22:32', 1, 9),
(7, 'Lapangan Ibu Ghaliyati', '10.00 - 18.00', 'Kpg. Uluwatu No. 748, Samarinda 46409, Bali', '+621880101377144', 55000, 0, 1, 1, 1, 'https://picsum.photos/200', '2023-06-17 23:22:32', 1, 4),
(8, 'Lapangan Ibu Indah', '10.00 - 18.00', 'Ki. Dahlia No. 885, Serang 68429, NTT', '+62507079161247', 79000, 1, 1, 1, 0, 'https://picsum.photos/200', '2023-06-17 23:22:32', 1, 6),
(9, 'Lapangan Bapak Ega', '10.00 - 18.00', 'Jln. Haji No. 217, Pekalongan 17424, Sumbar', '+625156735154067', 99000, 0, 0, 0, 1, 'https://picsum.photos/200', '2023-06-17 23:22:32', 1, 10),
(10, 'Lapangan Ibu Irma', '10.00 - 18.00', 'Gg. Rumah Sakit No. 254, Palangka Raya 59577, Maluku', '+628158885727999', 95000, 1, 0, 1, 1, 'https://picsum.photos/200', '2023-06-17 23:22:32', 1, 8),
(11, 'Lapangan Ibu Ophelia', '10.00 - 18.00', 'Gg. Moch. Yamin No. 66, Pekalongan 65671, Bali', '+626748761351992', 90000, 1, 0, 0, 0, 'https://picsum.photos/200', '2023-06-17 23:22:32', 2, 5),
(12, 'Lapangan Ibu Calista', '10.00 - 18.00', 'Dk. Dewi Sartika No. 853, Banjarmasin 42359, Riau', '+625696447870997', 65000, 0, 1, 0, 0, 'https://picsum.photos/200', '2023-06-17 23:22:32', 2, 1),
(13, 'Lapangan Bapak Jagaraga', '10.00 - 18.00', 'Dk. Sudirman No. 138, Surabaya 21833, DKI', '+62437305134734', 56000, 1, 1, 0, 0, 'https://picsum.photos/200', '2023-06-17 23:22:32', 2, 9),
(14, 'Lapangan Bapak Cengkir', '10.00 - 18.00', 'Psr. Raden No. 837, Administrasi Jakarta Pusat 90785, Jatim', '+629132101020768', 95000, 1, 0, 1, 0, 'https://picsum.photos/200', '2023-06-17 23:22:32', 2, 5),
(15, 'Lapangan Ibu Dalima', '10.00 - 18.00', 'Gg. Jayawijaya No. 206, Tasikmalaya 65677, Bengkulu', '+621830534486717', 60000, 0, 0, 1, 0, 'https://picsum.photos/200', '2023-06-17 23:22:32', 2, 7),
(16, 'Lapangan Ibu Kezia', '10.00 - 18.00', 'Kpg. Sukajadi No. 947, Cirebon 98864, Sulsel', '+626034298993824', 98000, 0, 0, 0, 0, 'https://picsum.photos/200', '2023-06-17 23:22:32', 2, 3),
(17, 'Lapangan Ibu Ani', '10.00 - 18.00', 'Dk. Adisucipto No. 191, Samarinda 49565, Pabar', '+621470661753346', 55000, 1, 1, 1, 0, 'https://picsum.photos/200', '2023-06-17 23:22:32', 2, 2),
(18, 'Lapangan Bapak Adikara', '10.00 - 18.00', 'Kpg. Industri No. 356, Probolinggo 29064, Bengkulu', '+629524497552761', 53000, 0, 0, 0, 1, 'https://picsum.photos/200', '2023-06-17 23:22:32', 2, 4),
(19, 'Lapangan Ibu Syahrini', '10.00 - 18.00', 'Jr. Bakhita No. 437, Pagar Alam 72059, Pabar', '+622261072457817', 75000, 0, 1, 1, 1, 'https://picsum.photos/200', '2023-06-17 23:22:32', 2, 6),
(20, 'Lapangan Bapak Kambali', '10.00 - 18.00', 'Jr. Setia Budi No. 8, Pariaman 51625, Kaltara', '+627409317333178', 53000, 0, 1, 0, 1, 'https://picsum.photos/200', '2023-06-17 23:22:32', 2, 10),
(21, 'Lapangan Ibu Silvia', '10.00 - 18.00', 'Ki. Baung No. 712, Tangerang 90986, Aceh', '+626648998148512', 77000, 0, 1, 1, 0, 'https://picsum.photos/200', '2023-06-17 23:22:32', 3, 8),
(22, 'Lapangan Bapak Lulut', '10.00 - 18.00', 'Kpg. Industri No. 216, Pekanbaru 96561, Jabar', '+622939484588346', 82000, 0, 1, 0, 0, 'https://picsum.photos/200', '2023-06-17 23:22:32', 3, 5),
(23, 'Lapangan Ibu Chelsea', '10.00 - 18.00', 'Ds. Urip Sumoharjo No. 101, Tangerang Selatan 84137, Malut', '+627206394250381', 69000, 1, 0, 1, 1, 'https://picsum.photos/200', '2023-06-17 23:22:32', 3, 10),
(24, 'Lapangan Bapak Eman', '10.00 - 18.00', 'Dk. Adisumarmo No. 780, Solok 25236, Banten', '+626123163228231', 51000, 1, 0, 1, 1, 'https://picsum.photos/200', '2023-06-17 23:22:32', 3, 10),
(25, 'Lapangan Ibu Jessica', '10.00 - 18.00', 'Dk. Gedebage Selatan No. 522, Bima 78200, Lampung', '+629593835039216', 91000, 1, 0, 1, 0, 'https://picsum.photos/200', '2023-06-17 23:22:32', 3, 5),
(26, 'Lapangan Bapak Raden', '10.00 - 18.00', 'Ds. Bak Mandi No. 331, Subulussalam 13506, Sulteng', '+620241540306985', 62000, 1, 1, 0, 0, 'https://picsum.photos/200', '2023-06-17 23:22:32', 3, 7),
(27, 'Lapangan Bapak Cakrajiya', '10.00 - 18.00', 'Ki. Yogyakarta No. 299, Cirebon 52412, Sumbar', '+624388645191453', 95000, 0, 0, 0, 0, 'https://picsum.photos/200', '2023-06-17 23:22:32', 3, 3),
(28, 'Lapangan Bapak Kuncara', '10.00 - 18.00', 'Psr. Karel S. Tubun No. 277, Depok 46128, Jambi', '+626899040011475', 84000, 0, 0, 0, 0, 'https://picsum.photos/200', '2023-06-17 23:22:32', 3, 2),
(29, 'Lapangan Bapak Martaka', '10.00 - 18.00', 'Ds. Ujung No. 855, Surabaya 36325, Banten', '+622042611336222', 100000, 1, 1, 0, 0, 'https://picsum.photos/200', '2023-06-17 23:22:32', 3, 8),
(30, 'Lapangan Bapak Jagapati', '10.00 - 18.00', 'Kpg. Bakti No. 407, Denpasar 26654, Bengkulu', '+627131204833357', 90000, 1, 0, 0, 0, 'https://picsum.photos/200', '2023-06-17 23:22:32', 3, 3),
(31, 'ITS JAYA FUTSAL', '08:00 - 17:00', 'Jalan Sistem Informasi', '082123456789', 25000, 1, 1, 0, 0, 'images/fotolapangan/cb7a5768-9410-4b1f-84e8-cef41576f6b11687047098.jpg', '2023-06-18 00:10:10', 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_13_081555_create_akun_penyewa', 1),
(6, '2023_05_13_081604_create_akun_pemilik_lapangan', 1),
(7, '2023_05_13_081623_create_jenis_olahraga', 1),
(8, '2023_05_13_081630_create_lapangan', 1),
(9, '2023_05_13_081656_create_pesanan_sewa_lapangan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_sewa_lapangan`
--

CREATE TABLE `pesanan_sewa_lapangan` (
  `id` int(10) UNSIGNED NOT NULL,
  `renterId` int(10) UNSIGNED NOT NULL,
  `ownerId` int(10) UNSIGNED NOT NULL,
  `bankId` varchar(255) NOT NULL,
  `lapanganId` int(10) UNSIGNED DEFAULT NULL,
  `schedule` varchar(255) NOT NULL,
  `totalPrice` int(10) UNSIGNED NOT NULL,
  `timeStamp` timestamp NULL DEFAULT current_timestamp(),
  `paymentProof` varchar(255) NOT NULL,
  `deadline` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanan_sewa_lapangan`
--

INSERT INTO `pesanan_sewa_lapangan` (`id`, `renterId`, `ownerId`, `bankId`, `lapanganId`, `schedule`, `totalPrice`, `timeStamp`, `paymentProof`, `deadline`, `status`) VALUES
(1, 11, 11, 'bca', 31, '06/19/2023 - 14,15', 50000, '2023-06-18 00:15:34', 'images/buktipembayaran/e2326696-a311-459e-a48c-313ffb34c47a1687047334.jpg', '2023-06-20 00:00:00', 'ongoing'),
(3, 11, 11, 'bca', 31, '06/26/2023 - 17,18', 50000, '2023-06-18 00:25:14', 'images/buktipembayaran/c0bfaaa8-82f8-4321-b349-5f95449c45091687047914.png', '2023-06-27 00:00:00', 'cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_pemilik_lapangan`
--
ALTER TABLE `akun_pemilik_lapangan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_unique_email` (`email`);

--
-- Indexes for table `akun_penyewa`
--
ALTER TABLE `akun_penyewa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_unique_email` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis_olahraga`
--
ALTER TABLE `jenis_olahraga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_sportId` (`sportId`),
  ADD KEY `idx_ownerId` (`ownerId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesanan_sewa_lapangan`
--
ALTER TABLE `pesanan_sewa_lapangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_ownerId_status` (`ownerId`,`status`),
  ADD KEY `pesanan_sewa_lapangan_lapanganid_foreign` (`lapanganId`),
  ADD KEY `idx_renterId` (`renterId`);

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
-- AUTO_INCREMENT for table `akun_pemilik_lapangan`
--
ALTER TABLE `akun_pemilik_lapangan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `akun_penyewa`
--
ALTER TABLE `akun_penyewa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_olahraga`
--
ALTER TABLE `jenis_olahraga`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan_sewa_lapangan`
--
ALTER TABLE `pesanan_sewa_lapangan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD CONSTRAINT `lapangan_ownerid_foreign` FOREIGN KEY (`ownerId`) REFERENCES `akun_pemilik_lapangan` (`id`),
  ADD CONSTRAINT `lapangan_sportid_foreign` FOREIGN KEY (`sportId`) REFERENCES `jenis_olahraga` (`id`);

--
-- Constraints for table `pesanan_sewa_lapangan`
--
ALTER TABLE `pesanan_sewa_lapangan`
  ADD CONSTRAINT `pesanan_sewa_lapangan_lapanganid_foreign` FOREIGN KEY (`lapanganId`) REFERENCES `lapangan` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `pesanan_sewa_lapangan_ownerid_foreign` FOREIGN KEY (`ownerId`) REFERENCES `akun_pemilik_lapangan` (`id`),
  ADD CONSTRAINT `pesanan_sewa_lapangan_renterid_foreign` FOREIGN KEY (`renterId`) REFERENCES `akun_penyewa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
