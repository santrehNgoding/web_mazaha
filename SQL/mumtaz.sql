-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2025 pada 01.23
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mumtaz`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `ID` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` varchar(5000) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`ID`, `judul`, `isi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Lolos Unair!!', 'Alhamdulillah puji syukur ke hadirat Allah SWT. atas karunianya, santri Pondok Putri daru. Santri Darut Tauhid Zainul Hasan Genggong dapat lolos dalam SNBP pada Fakultas kedokteran UNAIR atas nama Nuri Faizatul Himmah Ramadhani. Santri berprestasi dengan segudang prestasi yang sudah banyak kali dia raih.', 'footer.jpg', '2025-02-24 15:48:01', '2025-02-25 14:23:41'),
(2, '\"Ketika Pesantren Membangun Jiwa, Alumni Membangun Masa Depan\"', 'Pesantren bukan sekadar tempat menimba ilmu, tetapi juga wadah yang membentuk karakter, kepribadian, serta nilai-nilai luhur yang menjadi bekal dalam menghadapi kehidupan. Di sinilah para santri digembleng dengan ilmu agama, kedisiplinan, serta semangat kebersamaan yang kelak akan mereka bawa saat mengabdi di masyarakat.\r\n\r\nAlumni adalah cerminan dari keberhasilan pendidikan di pesantren. Mereka adalah bukti nyata bahwa nilai-nilai yang telah ditanamkan selama bertahun-tahun di lingkungan pesantren terus hidup dan berkembang, mengantarkan mereka menjadi pribadi yang berdaya guna, penuh dedikasi, serta memiliki peran strategis dalam berbagai bidang kehidupan.\r\n\r\nSebagai bentuk apresiasi dan pengingat akan perjalanan yang tak terlupakan ini, kami dengan bangga mempersembahkan:\r\n\r\nPelantikan IKSADAT\r\n(Ikatan Santri dan Alumni)\r\nPondok Putri Darut Tauhid PZH Genggong\r\n\r\n? 15 September 2023 / 29 Shafar 1444 H\r\n\r\nMomen pelantikan ini bukan hanya seremoni, tetapi juga tonggak penting dalam memperkuat jalinan ukhuwah antara santri dan alumni. Sebuah langkah besar dalam membangun jaringan yang kokoh, di mana alumni tetap memiliki peran dalam mendukung kemajuan pesantren, membimbing generasi penerus, serta membawa perubahan positif di tengah masyarakat.\r\n\r\nSemoga ikatan yang telah terjalin ini semakin erat, menjadi sumber inspirasi bagi santri yang masih menuntut ilmu, serta menjadi penggerak dalam berbagai upaya kebaikan dan kebermanfaatan bagi umat. Mari terus melangkah bersama, menjaga nilai-nilai pesantren, dan membangun masa depan yang lebih gemilang! Barakallahu fiikum! ?', 'footer.jpg', '2025-02-28 15:08:28', '2025-02-28 15:09:41'),
(3, 'Haul Ke-3  Al-Marhum Al-Maghfurlah KH. Moh. Hasan Saiful Islam bin KH. Hasan Saifourridzall bin KH. Moh. Hasan', 'Haul bukan hanya sekadar mengenang kepergian seseorang, tetapi lebih dari itu, ia menjadi momentum untuk merefleksikan perjuangan, keteladanan, serta nilai-nilai kehidupan yang telah diwariskan. KH. Moh. Hasan Saiful Islam adalah sosok ulama yang dikenal dengan keistiqamahan dalam mengemban dakwah dan pendidikan, membimbing umat menuju jalan yang diridhai Allah SWT.\r\n\r\nBeliau merupakan bagian dari mata rantai keilmuan yang bersambung dari para ulama salaf, dengan dedikasi yang tak pernah luntur dalam mendidik generasi penerus Islam. Keteladanan yang beliau wariskan tak hanya dalam bentuk ilmu, tetapi juga dalam sikap tawadhu, kesabaran, serta keikhlasan dalam berjuang di jalan Allah.\r\n\r\nPada peringatan haul ini, kita bersama-sama mengirimkan doa terbaik untuk beliau, memohonkan ampunan dan rahmat Allah SWT, serta merenungkan kembali jejak perjuangan yang telah ditinggalkan. Semoga kita semua dapat meneladani kebaikan dan kebijaksanaan beliau, serta meneruskan perjuangan dalam menegakkan nilai-nilai Islam di tengah masyarakat.\r\n\r\nMari kita jadikan momen ini sebagai pengingat bahwa kehidupan di dunia hanyalah sementara, dan yang kekal adalah amal saleh serta kebermanfaatan bagi sesama. Semoga Allah SWT mengangkat derajat beliau di sisi-Nya, menjadikan kuburnya taman dari taman-taman surga, serta mengaruniakan keberkahan kepada kita semua yang masih diberikan kesempatan untuk meneruskan perjuangan beliau.\r\n\r\nAamiin ya Rabbal ‘Alamin.', 'footer.jpg', '2025-02-28 15:12:42', '2025-02-28 15:12:42'),
(4, '\"Meneladani Sholat Rasulullah: Kesempurnaan dalam Ibadah\"', '\"Dan sholatlah kalian sebagaimana kalian melihat aku sholat.\" (HR. Bukhari)\r\n\r\nSholat adalah tiang agama, ibadah yang menjadi sarana komunikasi langsung antara hamba dan Sang Ilahi. Dalam setiap gerakan dan bacaan, terkandung makna yang mendalam, sebagai bentuk penghambaan serta wujud ketundukan kepada Allah SWT. Oleh karena itu, penting bagi setiap muslim untuk memahami dan menunaikan sholat sesuai dengan tuntunan Rasulullah ?, dengan memenuhi syarat dan rukun yang telah ditetapkan agar ibadah ini semakin sempurna.\r\n\r\nSebagai upaya untuk meningkatkan pemahaman dan kesempurnaan dalam menunaikan sholat, kami menghadirkan:\r\n\r\n? Galeri Foto Kayfa Tusholli\r\n(Pelatihan Sholat)\r\nPondok Putri Darut Tauhid PZH Genggong\r\n\r\n? 22 September 2023 / 08 Rabiul Awwal 1444 H\r\n\r\nKegiatan ini menjadi momen penting dalam membekali santri dengan ilmu praktis tentang tata cara sholat yang benar, mulai dari niat, gerakan, bacaan, hingga kekhusyukan dalam ibadah. Dengan bimbingan para asatidzah, diharapkan para peserta dapat mengamalkan ilmu ini dalam kehidupan sehari-hari dan menyebarkan manfaatnya kepada lingkungan sekitar.\r\n\r\nSemoga pelatihan ini semakin meneguhkan hati dalam menjalankan sholat dengan penuh kesadaran dan keikhlasan, menjadikannya sebagai sumber ketenangan dan kebahagiaan dalam kehidupan. Mari terus belajar dan memperbaiki ibadah kita agar semakin mendekatkan diri kepada Allah SWT.\r\n\r\nBarakallahu fiikum!', 'footer.jpg', '2025-02-28 15:15:51', '2025-02-28 15:15:51'),
(5, '\"Meneladani Cahaya Rasulullah ? dalam Peringatan Maulid Nabi\"', 'Dalam cahaya kemuliaan Allah yang Maha Pengasih, kami berkumpul dalam kebersamaan dan kebahagiaan, merayakan hari yang penuh keberkahan ini, Maulid Nabi Muhammad Shallallahu ‘Alaihi wa Sallam. Hari di mana lahirnya manusia paling mulia, sosok yang membawa risalah kebenaran, rahmat bagi seluruh alam, dan teladan sempurna bagi umat manusia.\r\n\r\nKelahiran Rasulullah ? bukan sekadar peristiwa sejarah, melainkan momentum yang mengajarkan kita nilai-nilai luhur: kasih sayang, keadilan, ketulusan, serta akhlak yang mulia. Melalui peringatan ini, kita kembali merenungkan betapa besarnya perjuangan beliau dalam menyebarkan Islam, membimbing umat menuju cahaya hidayah, dan mengajarkan kita jalan menuju kebahagiaan dunia serta akhirat.\r\n\r\nSebagai bentuk kecintaan dan penghormatan kepada Rasulullah ?, kami menghadirkan:\r\n\r\n? Galeri Foto Peringatan Maulid Nabi Muhammad Shallallahu \'Alaihi wa Sallam\r\nBersama Ibu Muslimat Siti Khodijah\r\n? Pondok Putri Darut Tauhid PZH Genggong\r\n? 13 Oktober 2023\r\n\r\nMomen ini bukan hanya sekadar perayaan, tetapi juga sarana untuk memperkuat iman, memperdalam kecintaan kepada Rasulullah ?, serta menghidupkan sunnah-sunnah beliau dalam kehidupan sehari-hari. Dengan lantunan shalawat dan kajian penuh hikmah, semoga peringatan ini menjadi pengingat bagi kita untuk selalu meneladani akhlak beliau dalam setiap langkah kehidupan.\r\n\r\nSemoga keberkahan dari peringatan Maulid ini mengalir kepada kita semua, menguatkan keimanan, mempererat ukhuwah Islamiyah, serta menjadikan kita umat yang lebih baik di mata Allah SWT. Aamiin ya Rabbal ‘Alamin.\r\n\r\nShalluu ‘alan Nabi! ?', 'footer.jpg', '2025-02-28 15:18:29', '2025-02-28 15:18:29'),
(6, '\"Menyelami Cahaya Al-Qur’an: Menemukan Hikmah dan Kedamaian Sejati\"', '? Kata demi kata, Al-Qur\'an adalah hikmah yang menginspirasi jiwa dan menguatkan hati. Kunci untuk menemukan kedamaian sejati ada dalam memahami pesan-pesan Al-Qur\'an. Kehidupan ini adalah perjalanan, dan Al-Qur\'an adalah peta yang sempurna untuk mengarahkan kita menuju tujuan akhir. Baca Al-Qur\'an dengan hati yang tulus, dan kamu akan merasakan keajaiban cinta dan kebijaksanaan Allah.\r\n\r\nSebagai pedoman hidup yang sempurna, Al-Qur’an tidak hanya memberikan petunjuk dalam beribadah, tetapi juga mengajarkan kita tentang akhlak, keadilan, serta keteguhan hati dalam menghadapi berbagai ujian kehidupan. Dalam setiap ayatnya terkandung makna mendalam yang menuntun manusia menuju kebahagiaan dunia dan akhirat.\r\n\r\nSebagai upaya untuk memperdalam pemahaman dan mendekatkan hati dengan firman-Nya, kami mengundang Anda dalam:\r\n\r\n? Seminar Qur’ani\r\n? Menggali Hikmah dan Cahaya Al-Qur’an ?\r\n\r\nKegiatan ini bertujuan untuk membuka wawasan tentang bagaimana Al-Qur’an dapat menjadi pedoman dalam menjalani kehidupan, mengajarkan nilai-nilai kebijaksanaan, serta memberikan ketenangan jiwa bagi siapa saja yang mengamalkan dan mentadabburinya.\r\n\r\nMari bersama-sama memperkuat kecintaan kita terhadap Al-Qur’an, mendalami maknanya, dan menjadikannya sebagai pedoman hidup yang akan membimbing langkah kita menuju ridha Allah SWT.\r\n\r\n? \"Dan sesungguhnya Kami telah memudahkan Al-Qur’an untuk pelajaran, maka adakah orang yang mau mengambil pelajaran?\" (QS. Al-Qamar: 17)\r\n\r\nBersama Al-Qur’an, kita temukan cahaya kehidupan!', 'footer.jpg', '2025-02-28 15:22:11', '2025-02-28 15:22:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `id_guru1` int(11) DEFAULT NULL,
  `id_guru2` int(11) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id`, `title`, `id_guru1`, `id_guru2`, `foto`, `deskripsi`) VALUES
(2, 'Pramuka', 2, 11, 'ekstra-20250324 153256.jpg', NULL),
(3, 'Bahasa Arab', 3, NULL, 'ekstra-20250324 153637.jpg', NULL),
(4, 'Tartil dan Tilawah', 4, 10, 'ekstra-20250324 153744.jpg', NULL),
(5, 'Karya Ilmiah Remaja', 5, 6, 'ekstra-20250324 153823.jpg', NULL),
(6, 'Master of Ceremony (MC)', 7, 1, 'ekstra-20250324 153942.jpg', NULL),
(7, 'Olahraga Futsal', 8, NULL, 'ekstra-20250324 154059.jpg', NULL),
(8, 'Keputrian', 9, 14, 'ekstra-20250324 154221.jpg', NULL),
(9, 'Olahraga Voly', 15, NULL, 'ekstra-20250324 172330.jpg', NULL),
(10, 'Pagar Nusa', 16, NULL, 'ekstra-20250324 172525.jpg', NULL),
(11, 'Hadrah', 17, NULL, 'ekstra-20250324 172614.jpg', NULL),
(12, 'Paduan Suara', 18, NULL, 'ekstra-20250324 173126.jpg', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `file` varchar(200) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `file`, `title`, `kategori`, `created_at`, `keterangan`) VALUES
(18, 'img-20250312 092217-67d152490b71a.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:22:17', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(19, 'img-20250312 092217-67d15249172c8.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:22:17', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(20, 'img-20250312 092217-67d1524918147.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:22:17', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(21, 'img-20250312 092217-67d1524918f6e.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:22:17', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(22, 'img-20250312 092217-67d1524919bac.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:22:17', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(25, 'img-20250312 092217-67d152491ccbf.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:22:17', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(26, 'img-20250312 092217-67d152491db4d.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:22:17', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(27, 'img-20250312 092642-67d153529d0aa.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:26:42', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(28, 'img-20250312 092642-67d15352a6887.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:26:42', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(29, 'img-20250312 092642-67d15352a7868.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:26:42', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(30, 'img-20250312 092642-67d15352a8334.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:26:42', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(31, 'img-20250312 092642-67d15352a9464.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:26:42', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(32, 'img-20250312 092642-67d15352aa13b.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:26:42', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(33, 'img-20250312 092642-67d15352ab708.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:26:42', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(34, 'img-20250312 092642-67d15352ac293.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:26:42', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(35, 'img-20250312 092642-67d15352acef8.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:26:42', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(36, 'img-20250312 092642-67d15352adc0c.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:26:42', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(37, 'img-20250312 092800-67d153a0e5663.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:00', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(38, 'img-20250312 092800-67d153a0e9935.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:00', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(39, 'img-20250312 092800-67d153a0ea5d2.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:00', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(40, 'img-20250312 092800-67d153a0eb02e.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:00', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(41, 'img-20250312 092800-67d153a0ebacd.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:00', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(42, 'img-20250312 092800-67d153a0ec5fb.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:00', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(43, 'img-20250312 092800-67d153a0ed32c.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:00', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(44, 'img-20250312 092800-67d153a0ee0e7.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:00', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(45, 'img-20250312 092800-67d153a0ee912.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:00', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(46, 'img-20250312 092800-67d153a0ef46c.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:00', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(47, 'img-20250312 092838-67d153c6db37c.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:38', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(48, 'img-20250312 092838-67d153c6dffe4.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:38', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(49, 'img-20250312 092838-67d153c6e09e9.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:38', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(50, 'img-20250312 092838-67d153c6e1b60.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:38', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(51, 'img-20250312 092838-67d153c6e253e.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:38', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(52, 'img-20250312 092838-67d153c6e35d2.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:38', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(53, 'img-20250312 092838-67d153c6e4237.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:38', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(54, 'img-20250312 092838-67d153c6e4d3e.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:38', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(55, 'img-20250312 092838-67d153c6e5b51.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:38', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(56, 'img-20250312 092838-67d153c6e6949.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:38', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(57, 'img-20250312 092838-67d153c6e7324.jpg', 'Mitra UM', 'Mitra UM', '2025-03-12 16:28:38', 'Kolaborasi gemilang...! MA Zainul Hasan 1 Genggong menjalin kemitraan dengan Universitas Negeri Malang dalam program unggulan PRODISTIK sejak 11 Desember 2023.  Langkah besar ini membuka pintu bagi para santri untuk mengembangkan keterampilan teknologi dan informatika dengan standar akademik tinggi. Bersama, kita ciptakan masa depan penuh inovasi!'),
(58, 'img-20250312 122609-67d17d61ca83e.jpg', 'Juara 2 Videografi', 'Juara 2 Videografi', '2025-03-12 19:26:09', 'Selamat dan sukses untuk Mutiara Nirwana Cahyani atas prestasinya sebagai Juara 2 Lomba Videography dalam kegiatan EPIM 2024 di Teknologi Informasi, Politeknik Negeri Jember pada Ahad, 01 September 2024. Semoga terus menginspirasi dan meraih kesuksesan di masa depan!'),
(59, 'img-20250312 122609-67d17d61d5da1.jpg', 'Juara 2 Videografi', 'Juara 2 Videografi', '2025-03-12 19:26:09', 'Selamat dan sukses untuk Mutiara Nirwana Cahyani atas prestasinya sebagai Juara 2 Lomba Videography dalam kegiatan EPIM 2024 di Teknologi Informasi, Politeknik Negeri Jember pada Ahad, 01 September 2024. Semoga terus menginspirasi dan meraih kesuksesan di masa depan!'),
(62, 'img-20250312 122609-67d17d61d86b8.jpg', 'Juara 2 Videografi', 'Juara 2 Videografi', '2025-03-12 19:26:09', 'Selamat dan sukses untuk Mutiara Nirwana Cahyani atas prestasinya sebagai Juara 2 Lomba Videography dalam kegiatan EPIM 2024 di Teknologi Informasi, Politeknik Negeri Jember pada Ahad, 01 September 2024. Semoga terus menginspirasi dan meraih kesuksesan di masa depan!'),
(63, 'img-20250312 122609-67d17d61d9541.jpg', 'Juara 2 Videografi', 'Juara 2 Videografi', '2025-03-12 19:26:09', 'Selamat dan sukses untuk Mutiara Nirwana Cahyani atas prestasinya sebagai Juara 2 Lomba Videography dalam kegiatan EPIM 2024 di Teknologi Informasi, Politeknik Negeri Jember pada Ahad, 01 September 2024. Semoga terus menginspirasi dan meraih kesuksesan di masa depan!'),
(64, 'img-20250312 122609-67d17d61da5d2.jpg', 'Juara 2 Videografi', 'Juara 2 Videografi', '2025-03-12 19:26:09', 'Selamat dan sukses untuk Mutiara Nirwana Cahyani atas prestasinya sebagai Juara 2 Lomba Videography dalam kegiatan EPIM 2024 di Teknologi Informasi, Politeknik Negeri Jember pada Ahad, 01 September 2024. Semoga terus menginspirasi dan meraih kesuksesan di masa depan!'),
(65, 'img-20250312 122609-67d17d61db084.jpg', 'Juara 2 Videografi', 'Juara 2 Videografi', '2025-03-12 19:26:09', 'Selamat dan sukses untuk Mutiara Nirwana Cahyani atas prestasinya sebagai Juara 2 Lomba Videography dalam kegiatan EPIM 2024 di Teknologi Informasi, Politeknik Negeri Jember pada Ahad, 01 September 2024. Semoga terus menginspirasi dan meraih kesuksesan di masa depan!'),
(67, 'img-20250312 122609-67d17d61dc991.jpg', 'Juara 2 Videografi', 'Juara 2 Videografi', '2025-03-12 19:26:09', 'Selamat dan sukses untuk Mutiara Nirwana Cahyani atas prestasinya sebagai Juara 2 Lomba Videography dalam kegiatan EPIM 2024 di Teknologi Informasi, Politeknik Negeri Jember pada Ahad, 01 September 2024. Semoga terus menginspirasi dan meraih kesuksesan di masa depan!'),
(69, 'img-20250312 122609-67d17d61de56f.jpg', 'Juara 2 Videografi', 'Juara 2 Videografi', '2025-03-12 19:26:09', 'Selamat dan sukses untuk Mutiara Nirwana Cahyani atas prestasinya sebagai Juara 2 Lomba Videography dalam kegiatan EPIM 2024 di Teknologi Informasi, Politeknik Negeri Jember pada Ahad, 01 September 2024. Semoga terus menginspirasi dan meraih kesuksesan di masa depan!'),
(70, 'img-20250312 124651-67d1823b52205.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:46:51', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(71, 'img-20250312 124651-67d1823b5bf60.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:46:51', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(72, 'img-20250312 124651-67d1823b5c978.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:46:51', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(73, 'img-20250312 124651-67d1823b5d924.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:46:51', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(74, 'img-20250312 124651-67d1823b5e3d5.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:46:51', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(75, 'img-20250312 124651-67d1823b5ee31.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:46:51', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(76, 'img-20250312 124651-67d1823b5f773.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:46:51', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(77, 'img-20250312 124651-67d1823b6022e.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:46:51', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(78, 'img-20250312 124651-67d1823b60bd4.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:46:51', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(79, 'img-20250312 124651-67d1823b6168e.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:46:51', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(80, 'img-20250312 124651-67d1823b6255e.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:46:51', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(81, 'img-20250312 124651-67d1823b63e67.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:46:51', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(82, 'img-20250312 124651-67d1823b6494b.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:46:51', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(83, 'img-20250312 124651-67d1823b6542d.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:46:51', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(84, 'img-20250312 124651-67d1823b65e39.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:46:51', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(85, 'img-20250312 124651-67d1823b66a74.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:46:51', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(86, 'img-20250312 124750-67d18276a5f1e.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:47:50', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(87, 'img-20250312 124750-67d18276a9899.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:47:50', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(88, 'img-20250312 124750-67d18276aa5f9.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:47:50', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(89, 'img-20250312 124750-67d18276ab34f.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:47:50', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(90, 'img-20250312 124750-67d18276abc8e.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:47:50', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(91, 'img-20250312 124750-67d18276ac4b9.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:47:50', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(92, 'img-20250312 124750-67d18276accf1.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:47:50', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(93, 'img-20250312 124750-67d18276ad520.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:47:50', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(94, 'img-20250312 124750-67d18276add79.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:47:50', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(95, 'img-20250312 124750-67d18276ae6f1.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:47:50', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(96, 'img-20250312 124750-67d18276af007.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:47:50', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(97, 'img-20250312 124750-67d18276af791.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:47:50', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(98, 'img-20250312 124750-67d18276affbc.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:47:50', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(99, 'img-20250312 124750-67d18276b0836.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:47:50', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(100, 'img-20250312 124750-67d18276b102b.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:47:50', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(101, 'img-20250312 124750-67d18276b34ca.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:47:50', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(102, 'img-20250312 124823-67d182977387c.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:48:23', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(103, 'img-20250312 124823-67d1829778020.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:48:23', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(104, 'img-20250312 124823-67d18297789a5.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:48:23', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(105, 'img-20250312 124823-67d18297793e1.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:48:23', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(106, 'img-20250312 124823-67d1829779df0.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:48:23', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(107, 'img-20250312 124823-67d182977a604.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:48:23', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(108, 'img-20250312 124823-67d182977ade9.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:48:23', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(109, 'img-20250312 124823-67d182977b584.jpg', 'Sidang UM 2024', 'Sidang UM 2024', '2025-03-12 19:48:23', 'Sidang Munaqosah Tugas Akhir PRODISTIK oleh Universitas Negeri Malang (UM) tahun 2024 berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(110, 'img-20250312 172831-67d1c43f06236.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(111, 'img-20250312 172831-67d1c43f1112b.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(112, 'img-20250312 172831-67d1c43f11e53.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(113, 'img-20250312 172831-67d1c43f12cfd.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(114, 'img-20250312 172831-67d1c43f13a93.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(115, 'img-20250312 172831-67d1c43f14619.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(116, 'img-20250312 172831-67d1c43f1635c.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(117, 'img-20250312 172831-67d1c43f16efd.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(118, 'img-20250312 172831-67d1c43f17a38.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(119, 'img-20250312 172831-67d1c43f186b6.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(120, 'img-20250312 172831-67d1c43f19531.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(121, 'img-20250312 172831-67d1c43f1a296.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(122, 'img-20250312 172831-67d1c43f1b068.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(123, 'img-20250312 172831-67d1c43f1bb64.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(124, 'img-20250312 172831-67d1c43f1da0f.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(125, 'img-20250312 172831-67d1c43f1e75a.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(126, 'img-20250312 172831-67d1c43f1f28d.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(127, 'img-20250312 172831-67d1c43f202dd.jpg', 'Munaqosah 2023', 'Munaqosah 2023', '2025-03-13 00:28:31', 'Sidang Munaqosah Tugas Akhir berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(139, 'img-20250312 225922.jpg', 'Day 1', 'PPLH Putra', '2025-03-13 05:59:22', 'Outdoor Learning \r\nSantri Putra Kelas XII IPA dan IPS\r\nMA Zainul Hasan 1 Genggong\r\ndi Pusat Pendidikan Lingkungan Hidup (PPLH)\r\nSeloliman Trawas Mojokerto\r\n01 - 03 Februari 2025'),
(140, 'img-20250312 225952-67d211e8c2361.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 05:59:52', '1. Teknik Rekayasa Budidaya Pertanian: Kapiler dan Vertikultur\r\n2. Prakarya dan Kewirausahaan: Wedhang pokak, sirup herbal, teh japulo, dan selai nanas.'),
(141, 'img-20250312 225952-67d211e8c9e11.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 05:59:52', '1. Teknik Rekayasa Budidaya Pertanian: Kapiler dan Vertikultur\r\n2. Prakarya dan Kewirausahaan: Wedhang pokak, sirup herbal, teh japulo, dan selai nanas.'),
(142, 'img-20250312 225952-67d211e8cad68.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 05:59:52', '1. Teknik Rekayasa Budidaya Pertanian: Kapiler dan Vertikultur\r\n2. Prakarya dan Kewirausahaan: Wedhang pokak, sirup herbal, teh japulo, dan selai nanas.'),
(143, 'img-20250312 225952-67d211e8cbafb.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 05:59:52', '1. Teknik Rekayasa Budidaya Pertanian: Kapiler dan Vertikultur\r\n2. Prakarya dan Kewirausahaan: Wedhang pokak, sirup herbal, teh japulo, dan selai nanas.'),
(144, 'img-20250312 225952-67d211e8cc9a8.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 05:59:52', '1. Teknik Rekayasa Budidaya Pertanian: Kapiler dan Vertikultur\r\n2. Prakarya dan Kewirausahaan: Wedhang pokak, sirup herbal, teh japulo, dan selai nanas.'),
(145, 'img-20250312 225952-67d211e8cd9bc.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 05:59:52', '1. Teknik Rekayasa Budidaya Pertanian: Kapiler dan Vertikultur\r\n2. Prakarya dan Kewirausahaan: Wedhang pokak, sirup herbal, teh japulo, dan selai nanas.'),
(146, 'img-20250312 225952-67d211e8ce75a.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 05:59:52', '1. Teknik Rekayasa Budidaya Pertanian: Kapiler dan Vertikultur\r\n2. Prakarya dan Kewirausahaan: Wedhang pokak, sirup herbal, teh japulo, dan selai nanas.'),
(147, 'img-20250312 225952-67d211e8cf42c.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 05:59:52', '1. Teknik Rekayasa Budidaya Pertanian: Kapiler dan Vertikultur\r\n2. Prakarya dan Kewirausahaan: Wedhang pokak, sirup herbal, teh japulo, dan selai nanas.'),
(148, 'img-20250312 230041.jpg', 'Day 2', 'PPLH Putra', '2025-03-13 06:00:41', 'Outdoor Learning \r\nSantri Putra Kelas XII IPA dan IPS\r\nMA Zainul Hasan 1 Genggong\r\ndi Pusat Pendidikan Lingkungan Hidup (PPLH)\r\nSeloliman Trawas Mojokerto\r\n01 - 03 Februari 2025'),
(149, 'img-20250312 230111-67d21237ac5c5.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 06:01:11', '1. Observasi ke Petirtaan Jolotundo (Peninggalan Raja Airlangga)\r\n2. Capacity Team Building \r\n3. Jelajah Malam dan Malam keakraban (Api Unggun).'),
(150, 'img-20250312 230111-67d21237b4732.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 06:01:11', '1. Observasi ke Petirtaan Jolotundo (Peninggalan Raja Airlangga)\r\n2. Capacity Team Building \r\n3. Jelajah Malam dan Malam keakraban (Api Unggun).'),
(151, 'img-20250312 230111-67d21237b575b.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 06:01:11', '1. Observasi ke Petirtaan Jolotundo (Peninggalan Raja Airlangga)\r\n2. Capacity Team Building \r\n3. Jelajah Malam dan Malam keakraban (Api Unggun).'),
(152, 'img-20250312 230111-67d21237b6601.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 06:01:11', '1. Observasi ke Petirtaan Jolotundo (Peninggalan Raja Airlangga)\r\n2. Capacity Team Building \r\n3. Jelajah Malam dan Malam keakraban (Api Unggun).'),
(153, 'img-20250312 230111-67d21237b741c.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 06:01:11', '1. Observasi ke Petirtaan Jolotundo (Peninggalan Raja Airlangga)\r\n2. Capacity Team Building \r\n3. Jelajah Malam dan Malam keakraban (Api Unggun).'),
(154, 'img-20250312 230111-67d21237b847e.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 06:01:11', '1. Observasi ke Petirtaan Jolotundo (Peninggalan Raja Airlangga)\r\n2. Capacity Team Building \r\n3. Jelajah Malam dan Malam keakraban (Api Unggun).'),
(155, 'img-20250312 230111-67d21237b94a6.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 06:01:11', '1. Observasi ke Petirtaan Jolotundo (Peninggalan Raja Airlangga)\r\n2. Capacity Team Building \r\n3. Jelajah Malam dan Malam keakraban (Api Unggun).'),
(156, 'img-20250312 230201.jpg', 'Day 3', 'PPLH Putra', '2025-03-13 06:02:01', 'Outdoor Learning \r\nSantri Putra Kelas XII IPA dan IPS\r\nMA Zainul Hasan 1 Genggong\r\ndi Pusat Pendidikan Lingkungan Hidup (PPLH)\r\nSeloliman Trawas Mojokerto\r\n01 - 03 Februari 2025'),
(157, 'img-20250312 230248-67d2129812a65.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 06:02:48', '1. Jelajah Alam Seloliman \r\n2. Outbound Susur Sungai'),
(158, 'img-20250312 230248-67d212981c05d.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 06:02:48', '1. Jelajah Alam Seloliman \r\n2. Outbound Susur Sungai'),
(159, 'img-20250312 230248-67d212981d2f4.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 06:02:48', '1. Jelajah Alam Seloliman \r\n2. Outbound Susur Sungai'),
(160, 'img-20250312 230248-67d212981e126.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 06:02:48', '1. Jelajah Alam Seloliman \r\n2. Outbound Susur Sungai'),
(161, 'img-20250312 230248-67d212981efd7.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 06:02:48', '1. Jelajah Alam Seloliman \r\n2. Outbound Susur Sungai'),
(162, 'img-20250312 230248-67d212981fd1e.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 06:02:48', '1. Jelajah Alam Seloliman \r\n2. Outbound Susur Sungai'),
(163, 'img-20250312 230248-67d2129820798.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 06:02:48', '1. Jelajah Alam Seloliman \r\n2. Outbound Susur Sungai'),
(164, 'img-20250312 230248-67d21298215c5.jpg', 'PPLH Putra', 'PPLH Putra', '2025-03-13 06:02:48', '1. Jelajah Alam Seloliman \r\n2. Outbound Susur Sungai'),
(165, 'img-20250312 230556.jpg', 'Day 1', 'PPLH Putri', '2025-03-13 06:05:56', 'Outdoor Learning \r\nSantri Putri Kelas XII IPA dan IPS\r\nMA Zainul Hasan 1 Genggong\r\ndi Pusat Pendidikan Lingkungan Hidup (PPLH)\r\nSeloliman Trawas Mojokerto\r\n05 - 07 Februari 2025'),
(166, 'img-20250312 230627-67d21373a8bea.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:06:27', '1. Teknik Rekayasa Budidaya Pertanian: Kapiler, Vertikultur dan sambung pucuk\r\n2. Prakarya dan Kewirausahaan: Wedhang pokak, sirup herbal, teh japulo, dan selai nanas.'),
(167, 'img-20250312 230627-67d21373b0242.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:06:27', '1. Teknik Rekayasa Budidaya Pertanian: Kapiler, Vertikultur dan sambung pucuk\r\n2. Prakarya dan Kewirausahaan: Wedhang pokak, sirup herbal, teh japulo, dan selai nanas.'),
(168, 'img-20250312 230627-67d21373b128b.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:06:27', '1. Teknik Rekayasa Budidaya Pertanian: Kapiler, Vertikultur dan sambung pucuk\r\n2. Prakarya dan Kewirausahaan: Wedhang pokak, sirup herbal, teh japulo, dan selai nanas.'),
(169, 'img-20250312 230627-67d21373b21b2.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:06:27', '1. Teknik Rekayasa Budidaya Pertanian: Kapiler, Vertikultur dan sambung pucuk\r\n2. Prakarya dan Kewirausahaan: Wedhang pokak, sirup herbal, teh japulo, dan selai nanas.'),
(170, 'img-20250312 230627-67d21373b3238.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:06:27', '1. Teknik Rekayasa Budidaya Pertanian: Kapiler, Vertikultur dan sambung pucuk\r\n2. Prakarya dan Kewirausahaan: Wedhang pokak, sirup herbal, teh japulo, dan selai nanas.'),
(171, 'img-20250312 230627-67d21373b40b0.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:06:27', '1. Teknik Rekayasa Budidaya Pertanian: Kapiler, Vertikultur dan sambung pucuk\r\n2. Prakarya dan Kewirausahaan: Wedhang pokak, sirup herbal, teh japulo, dan selai nanas.'),
(172, 'img-20250312 230627-67d21373b4f7c.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:06:27', '1. Teknik Rekayasa Budidaya Pertanian: Kapiler, Vertikultur dan sambung pucuk\r\n2. Prakarya dan Kewirausahaan: Wedhang pokak, sirup herbal, teh japulo, dan selai nanas.'),
(173, 'img-20250312 230714.jpg', 'Day 2', 'PPLH Putri', '2025-03-13 06:07:14', 'Outdoor Learning \r\nSantri Putri Kelas XII IPA dan IPS\r\nMA Zainul Hasan 1 Genggong\r\ndi Pusat Pendidikan Lingkungan Hidup (PPLH)\r\nSeloliman Trawas Mojokerto\r\n05 - 07 Februari 2025'),
(174, 'img-20250312 230748-67d213c461cc1.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:07:48', '1. Observasi ke Petirtaan Jolotundo (Peninggalan Raja Airlangga)\r\n2. Capacity Team Building \r\n3. Jelajah Malam dan Malam keakraban (Api Unggun).'),
(175, 'img-20250312 230748-67d213c4692ef.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:07:48', '1. Observasi ke Petirtaan Jolotundo (Peninggalan Raja Airlangga)\r\n2. Capacity Team Building \r\n3. Jelajah Malam dan Malam keakraban (Api Unggun).'),
(176, 'img-20250312 230748-67d213c46a565.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:07:48', '1. Observasi ke Petirtaan Jolotundo (Peninggalan Raja Airlangga)\r\n2. Capacity Team Building \r\n3. Jelajah Malam dan Malam keakraban (Api Unggun).'),
(177, 'img-20250312 230748-67d213c46b243.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:07:48', '1. Observasi ke Petirtaan Jolotundo (Peninggalan Raja Airlangga)\r\n2. Capacity Team Building \r\n3. Jelajah Malam dan Malam keakraban (Api Unggun).'),
(178, 'img-20250312 230748-67d213c46bee7.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:07:48', '1. Observasi ke Petirtaan Jolotundo (Peninggalan Raja Airlangga)\r\n2. Capacity Team Building \r\n3. Jelajah Malam dan Malam keakraban (Api Unggun).'),
(179, 'img-20250312 230748-67d213c46cba7.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:07:48', '1. Observasi ke Petirtaan Jolotundo (Peninggalan Raja Airlangga)\r\n2. Capacity Team Building \r\n3. Jelajah Malam dan Malam keakraban (Api Unggun).');
INSERT INTO `galeri` (`id`, `file`, `title`, `kategori`, `created_at`, `keterangan`) VALUES
(180, 'img-20250312 230748-67d213c46d9f2.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:07:48', '1. Observasi ke Petirtaan Jolotundo (Peninggalan Raja Airlangga)\r\n2. Capacity Team Building \r\n3. Jelajah Malam dan Malam keakraban (Api Unggun).'),
(181, 'img-20250312 230748-67d213c46e751.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:07:48', '1. Observasi ke Petirtaan Jolotundo (Peninggalan Raja Airlangga)\r\n2. Capacity Team Building \r\n3. Jelajah Malam dan Malam keakraban (Api Unggun).'),
(182, 'img-20250312 230826.jpg', 'Day 3', 'PPLH Putri', '2025-03-13 06:08:26', 'Outdoor Learning \r\nSantri Putri Kelas XII IPA dan IPS\r\nMA Zainul Hasan 1 Genggong\r\ndi Pusat Pendidikan Lingkungan Hidup (PPLH)\r\nSeloliman Trawas Mojokerto\r\n05 - 07 Februari 2025'),
(183, 'img-20250312 230855-67d214071dff0.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:08:55', '1. Jelajah Alam Seloliman \r\n2. Outbound Susur Sungai'),
(184, 'img-20250312 230855-67d21407263b1.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:08:55', '1. Jelajah Alam Seloliman \r\n2. Outbound Susur Sungai'),
(185, 'img-20250312 230855-67d214072743d.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:08:55', '1. Jelajah Alam Seloliman \r\n2. Outbound Susur Sungai'),
(186, 'img-20250312 230855-67d214072869c.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:08:55', '1. Jelajah Alam Seloliman \r\n2. Outbound Susur Sungai'),
(187, 'img-20250312 230855-67d2140729527.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:08:55', '1. Jelajah Alam Seloliman \r\n2. Outbound Susur Sungai'),
(188, 'img-20250312 230855-67d214072a341.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:08:55', '1. Jelajah Alam Seloliman \r\n2. Outbound Susur Sungai'),
(189, 'img-20250312 230855-67d214072b19d.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:08:55', '1. Jelajah Alam Seloliman \r\n2. Outbound Susur Sungai'),
(190, 'img-20250312 230855-67d214072c095.jpg', 'PPLH Putri', 'PPLH Putri', '2025-03-13 06:08:55', '1. Jelajah Alam Seloliman \r\n2. Outbound Susur Sungai'),
(191, 'img-20250313 002110-67d224f689a3d.jpg', 'ABS 2025', 'ABS 2025', '2025-03-13 07:21:10', 'Galeri\r\nPemberangkatan Amal Bakti Santri (ABS)\r\nProgram Keagamaan\r\nMA Zainul Hasan 1 Genggong'),
(192, 'img-20250313 002110-67d224f6930a8.jpg', 'ABS 2025', 'ABS 2025', '2025-03-13 07:21:10', 'Galeri\r\nPemberangkatan Amal Bakti Santri (ABS)\r\nProgram Keagamaan\r\nMA Zainul Hasan 1 Genggong'),
(193, 'img-20250313 002110-67d224f694595.jpg', 'ABS 2025', 'ABS 2025', '2025-03-13 07:21:10', 'Galeri\r\nPemberangkatan Amal Bakti Santri (ABS)\r\nProgram Keagamaan\r\nMA Zainul Hasan 1 Genggong'),
(194, 'img-20250313 002110-67d224f69555f.jpg', 'ABS 2025', 'ABS 2025', '2025-03-13 07:21:10', 'Galeri\r\nPemberangkatan Amal Bakti Santri (ABS)\r\nProgram Keagamaan\r\nMA Zainul Hasan 1 Genggong'),
(195, 'img-20250313 002110-67d224f69624c.jpg', 'ABS 2025', 'ABS 2025', '2025-03-13 07:21:10', 'Galeri\r\nPemberangkatan Amal Bakti Santri (ABS)\r\nProgram Keagamaan\r\nMA Zainul Hasan 1 Genggong'),
(196, 'img-20250313 002110-67d224f6970a4.jpg', 'ABS 2025', 'ABS 2025', '2025-03-13 07:21:10', 'Galeri\r\nPemberangkatan Amal Bakti Santri (ABS)\r\nProgram Keagamaan\r\nMA Zainul Hasan 1 Genggong'),
(197, 'img-20250313 002110-67d224f697ec6.jpg', 'ABS 2025', 'ABS 2025', '2025-03-13 07:21:10', 'Galeri\r\nPemberangkatan Amal Bakti Santri (ABS)\r\nProgram Keagamaan\r\nMA Zainul Hasan 1 Genggong'),
(198, 'img-20250313 002534-67d225fe2de96.jpg', 'Tasmi\' Al-Quran', 'Tahfiz 2025', '2025-03-13 07:25:34', 'Program Unggulan Tahfidzul Qur\'an\r\nBersama\r\nJam\'iyyatul Qurra\' Wal Huffadz NU Kota Kraksaan \r\nSenin, 06 Januari 2025'),
(199, 'img-20250313 002534-67d225fe3723c.jpg', 'Tasmi\' Al-Quran', 'Tahfiz 2025', '2025-03-13 07:25:34', 'Program Unggulan Tahfidzul Qur\'an\r\nBersama\r\nJam\'iyyatul Qurra\' Wal Huffadz NU Kota Kraksaan \r\nSenin, 06 Januari 2025'),
(200, 'img-20250313 002534-67d225fe38271.jpg', 'Tasmi\' Al-Quran', 'Tahfiz 2025', '2025-03-13 07:25:34', 'Program Unggulan Tahfidzul Qur\'an\r\nBersama\r\nJam\'iyyatul Qurra\' Wal Huffadz NU Kota Kraksaan \r\nSenin, 06 Januari 2025'),
(201, 'img-20250313 002534-67d225fe38e9d.jpg', 'Tasmi\' Al-Quran', 'Tahfiz 2025', '2025-03-13 07:25:34', 'Program Unggulan Tahfidzul Qur\'an\r\nBersama\r\nJam\'iyyatul Qurra\' Wal Huffadz NU Kota Kraksaan \r\nSenin, 06 Januari 2025'),
(202, 'img-20250313 002534-67d225fe39919.jpg', 'Tasmi\' Al-Quran', 'Tahfiz 2025', '2025-03-13 07:25:34', 'Program Unggulan Tahfidzul Qur\'an\r\nBersama\r\nJam\'iyyatul Qurra\' Wal Huffadz NU Kota Kraksaan \r\nSenin, 06 Januari 2025'),
(203, 'img-20250313 002830-67d226ae9bf36.jpg', 'Pemilihan Jurusan', 'Seminar PRODISTIK', '2025-03-13 07:28:30', 'Seminar Jurusan Kelas X\r\nProgram Unggulan Madrasah\r\nProdistik (Program Studi Intensifikasi TIK).\r\nSabtu, 04 Januari 2025'),
(204, 'img-20250313 002830-67d226aea539e.jpg', 'Pemilihan Jurusan', 'Seminar PRODISTIK', '2025-03-13 07:28:30', 'Seminar Jurusan Kelas X\r\nProgram Unggulan Madrasah\r\nProdistik (Program Studi Intensifikasi TIK).\r\nSabtu, 04 Januari 2025'),
(205, 'img-20250313 002830-67d226aea680a.jpg', 'Pemilihan Jurusan', 'Seminar PRODISTIK', '2025-03-13 07:28:30', 'Seminar Jurusan Kelas X\r\nProgram Unggulan Madrasah\r\nProdistik (Program Studi Intensifikasi TIK).\r\nSabtu, 04 Januari 2025'),
(206, 'img-20250313 002830-67d226aea7e24.jpg', 'Pemilihan Jurusan', 'Seminar PRODISTIK', '2025-03-13 07:28:30', 'Seminar Jurusan Kelas X\r\nProgram Unggulan Madrasah\r\nProdistik (Program Studi Intensifikasi TIK).\r\nSabtu, 04 Januari 2025'),
(207, 'img-20250313 005007-67d22bbfd497f.jpg', 'Day 1 Pembukaan', 'MATSAMA 2024', '2025-03-13 07:50:07', '352 Santri Baru MA Zainul Hasan 1 Genggong Ikuti MATSAMA 2024\r\nGenggong, MA Zainul Hasan 1 Genggong menggelar Apel Pembukaan MATSAMA (Masa Ta\'aruf Santri Madrasah) untuk menyambut 352 santri baru. Acara ini diselenggarakan pada Senin pagi, 8 Juli 2024, di halaman madrasah. Apel tersebut diselenggarakan oleh Panitia Penerimaan Santri Baru bekerja sama dengan pengurus OSIS.\r\nDalam sambutannya, Kepala MA Zainul Hasan 1 Genggong, Nun Ahsan Maliki, S.Sy., M.Pd., mengucapkan selamat datang dan selamat bergabung kepada para santri baru.'),
(208, 'img-20250313 005007-67d22bbfde9f4.jpg', 'Day 1 Pembukaan', 'MATSAMA 2024', '2025-03-13 07:50:07', '352 Santri Baru MA Zainul Hasan 1 Genggong Ikuti MATSAMA 2024\r\nGenggong, MA Zainul Hasan 1 Genggong menggelar Apel Pembukaan MATSAMA (Masa Ta\'aruf Santri Madrasah) untuk menyambut 352 santri baru. Acara ini diselenggarakan pada Senin pagi, 8 Juli 2024, di halaman madrasah. Apel tersebut diselenggarakan oleh Panitia Penerimaan Santri Baru bekerja sama dengan pengurus OSIS.\r\nDalam sambutannya, Kepala MA Zainul Hasan 1 Genggong, Nun Ahsan Maliki, S.Sy., M.Pd., mengucapkan selamat datang dan selamat bergabung kepada para santri baru.'),
(209, 'img-20250313 005007-67d22bbfdf74e.jpg', 'Day 1 Pembukaan', 'MATSAMA 2024', '2025-03-13 07:50:07', '352 Santri Baru MA Zainul Hasan 1 Genggong Ikuti MATSAMA 2024\r\nGenggong, MA Zainul Hasan 1 Genggong menggelar Apel Pembukaan MATSAMA (Masa Ta\'aruf Santri Madrasah) untuk menyambut 352 santri baru. Acara ini diselenggarakan pada Senin pagi, 8 Juli 2024, di halaman madrasah. Apel tersebut diselenggarakan oleh Panitia Penerimaan Santri Baru bekerja sama dengan pengurus OSIS.\r\nDalam sambutannya, Kepala MA Zainul Hasan 1 Genggong, Nun Ahsan Maliki, S.Sy., M.Pd., mengucapkan selamat datang dan selamat bergabung kepada para santri baru.'),
(210, 'img-20250313 005007-67d22bbfe0587.jpg', 'Day 1 Pembukaan', 'MATSAMA 2024', '2025-03-13 07:50:07', '352 Santri Baru MA Zainul Hasan 1 Genggong Ikuti MATSAMA 2024\r\nGenggong, MA Zainul Hasan 1 Genggong menggelar Apel Pembukaan MATSAMA (Masa Ta\'aruf Santri Madrasah) untuk menyambut 352 santri baru. Acara ini diselenggarakan pada Senin pagi, 8 Juli 2024, di halaman madrasah. Apel tersebut diselenggarakan oleh Panitia Penerimaan Santri Baru bekerja sama dengan pengurus OSIS.\r\nDalam sambutannya, Kepala MA Zainul Hasan 1 Genggong, Nun Ahsan Maliki, S.Sy., M.Pd., mengucapkan selamat datang dan selamat bergabung kepada para santri baru.'),
(211, 'img-20250313 005131-67d22c1394654.jpg', 'Day 1', 'MATSAMA 2024', '2025-03-13 07:51:31', '352 Santri Baru MA Zainul Hasan 1 Genggong Ikuti MATSAMA 2024\r\nDalam sambutannya, Kepala MA Zainul Hasan 1 Genggong, Nun Ahsan Maliki, S.Sy., M.Pd., mengucapkan selamat datang dan selamat bergabung kepada para santri baru.'),
(212, 'img-20250313 005131-67d22c139c807.jpg', 'Day 1', 'MATSAMA 2024', '2025-03-13 07:51:31', '352 Santri Baru MA Zainul Hasan 1 Genggong Ikuti MATSAMA 2024\r\nDalam sambutannya, Kepala MA Zainul Hasan 1 Genggong, Nun Ahsan Maliki, S.Sy., M.Pd., mengucapkan selamat datang dan selamat bergabung kepada para santri baru.'),
(213, 'img-20250313 005131-67d22c139d3d3.jpg', 'Day 1', 'MATSAMA 2024', '2025-03-13 07:51:31', '352 Santri Baru MA Zainul Hasan 1 Genggong Ikuti MATSAMA 2024\r\nDalam sambutannya, Kepala MA Zainul Hasan 1 Genggong, Nun Ahsan Maliki, S.Sy., M.Pd., mengucapkan selamat datang dan selamat bergabung kepada para santri baru.'),
(214, 'img-20250313 005131-67d22c139df73.jpg', 'Day 1', 'MATSAMA 2024', '2025-03-13 07:51:31', '352 Santri Baru MA Zainul Hasan 1 Genggong Ikuti MATSAMA 2024\r\nDalam sambutannya, Kepala MA Zainul Hasan 1 Genggong, Nun Ahsan Maliki, S.Sy., M.Pd., mengucapkan selamat datang dan selamat bergabung kepada para santri baru.'),
(215, 'img-20250313 005131-67d22c139ead9.jpg', 'Day 1', 'MATSAMA 2024', '2025-03-13 07:51:31', '352 Santri Baru MA Zainul Hasan 1 Genggong Ikuti MATSAMA 2024\r\nDalam sambutannya, Kepala MA Zainul Hasan 1 Genggong, Nun Ahsan Maliki, S.Sy., M.Pd., mengucapkan selamat datang dan selamat bergabung kepada para santri baru.'),
(216, 'img-20250313 005225-67d22c49ad999.jpg', 'Day 2 Seminar', 'MATSAMA 2024', '2025-03-13 07:52:25', '352 Santri Baru MA Zainul Hasan 1 Genggong Ikuti MATSAMA 2024\r\nDalam sambutannya, Kepala MA Zainul Hasan 1 Genggong, Nun Ahsan Maliki, S.Sy., M.Pd., mengucapkan selamat datang dan selamat bergabung kepada para santri baru.'),
(217, 'img-20250313 005225-67d22c49b7471.jpg', 'Day 2 Seminar', 'MATSAMA 2024', '2025-03-13 07:52:25', '352 Santri Baru MA Zainul Hasan 1 Genggong Ikuti MATSAMA 2024\r\nDalam sambutannya, Kepala MA Zainul Hasan 1 Genggong, Nun Ahsan Maliki, S.Sy., M.Pd., mengucapkan selamat datang dan selamat bergabung kepada para santri baru.'),
(218, 'img-20250313 005343-67d22c97a840a.jpg', 'Day 2 Game', 'MATSAMA 2024', '2025-03-13 07:53:43', 'Galeri \r\nMasa Ta\'aruf Santri Madrasah (Matsama) 2024\r\nMA Zainul Hasan 1 Genggong.\r\n\"Wujudkan Pelajar Pancasila yang Berdedikasi Tinggi dan Berakhlak Mulia\".'),
(219, 'img-20250313 005343-67d22c97afd1e.jpg', 'Day 2 Game', 'MATSAMA 2024', '2025-03-13 07:53:43', 'Galeri \r\nMasa Ta\'aruf Santri Madrasah (Matsama) 2024\r\nMA Zainul Hasan 1 Genggong.\r\n\"Wujudkan Pelajar Pancasila yang Berdedikasi Tinggi dan Berakhlak Mulia\".'),
(220, 'img-20250313 005343-67d22c97b0b1e.jpg', 'Day 2 Game', 'MATSAMA 2024', '2025-03-13 07:53:43', 'Galeri \r\nMasa Ta\'aruf Santri Madrasah (Matsama) 2024\r\nMA Zainul Hasan 1 Genggong.\r\n\"Wujudkan Pelajar Pancasila yang Berdedikasi Tinggi dan Berakhlak Mulia\".'),
(221, 'img-20250313 005429-67d22cc53f915.jpg', 'Day 2 Sosialisasi', 'MATSAMA 2024', '2025-03-13 07:54:29', 'Galeri \r\nMasa Ta\'aruf Santri Madrasah (Matsama) 2024\r\nMA Zainul Hasan 1 Genggong.\r\n\"Wujudkan Pelajar Pancasila yang Berdedikasi Tinggi dan Berakhlak Mulia\".'),
(222, 'img-20250313 005429-67d22cc548f40.jpg', 'Day 2 Sosialisasi', 'MATSAMA 2024', '2025-03-13 07:54:29', 'Galeri \r\nMasa Ta\'aruf Santri Madrasah (Matsama) 2024\r\nMA Zainul Hasan 1 Genggong.\r\n\"Wujudkan Pelajar Pancasila yang Berdedikasi Tinggi dan Berakhlak Mulia\".'),
(223, 'img-20250313 005537-67d22d094ffdd.jpg', 'Day 3 Penutupan', 'MATSAMA 2024', '2025-03-13 07:55:37', 'Galeri \r\nMasa Ta\'aruf Santri Madrasah (Matsama) 2024\r\nMA Zainul Hasan 1 Genggong.\r\n\"Wujudkan Pelajar Pancasila yang Berdedikasi Tinggi dan Berakhlak Mulia\".'),
(224, 'img-20250313 005537-67d22d0957942.jpg', 'Day 3 Penutupan', 'MATSAMA 2024', '2025-03-13 07:55:37', 'Galeri \r\nMasa Ta\'aruf Santri Madrasah (Matsama) 2024\r\nMA Zainul Hasan 1 Genggong.\r\n\"Wujudkan Pelajar Pancasila yang Berdedikasi Tinggi dan Berakhlak Mulia\".'),
(225, 'img-20250313 005537-67d22d0958a51.jpg', 'Day 3 Penutupan', 'MATSAMA 2024', '2025-03-13 07:55:37', 'Galeri \r\nMasa Ta\'aruf Santri Madrasah (Matsama) 2024\r\nMA Zainul Hasan 1 Genggong.\r\n\"Wujudkan Pelajar Pancasila yang Berdedikasi Tinggi dan Berakhlak Mulia\".'),
(226, 'img-20250313 005537-67d22d0959b47.jpg', 'Day 3 Penutupan', 'MATSAMA 2024', '2025-03-13 07:55:37', 'Galeri \r\nMasa Ta\'aruf Santri Madrasah (Matsama) 2024\r\nMA Zainul Hasan 1 Genggong.\r\n\"Wujudkan Pelajar Pancasila yang Berdedikasi Tinggi dan Berakhlak Mulia\".'),
(227, 'img-20250313 005627-67d22d3b0ee50.jpg', 'Day 3 Pembagian hadiah', 'MATSAMA 2024', '2025-03-13 07:56:27', 'Galeri \r\nMasa Ta\'aruf Santri Madrasah (Matsama) 2024\r\nMA Zainul Hasan 1 Genggong.\r\n\"Wujudkan Pelajar Pancasila yang Berdedikasi Tinggi dan Berakhlak Mulia\".'),
(228, 'img-20250313 005627-67d22d3b16870.jpg', 'Day 3 Pembagian hadiah', 'MATSAMA 2024', '2025-03-13 07:56:27', 'Galeri \r\nMasa Ta\'aruf Santri Madrasah (Matsama) 2024\r\nMA Zainul Hasan 1 Genggong.\r\n\"Wujudkan Pelajar Pancasila yang Berdedikasi Tinggi dan Berakhlak Mulia\".'),
(229, 'img-20250313 005800-67d22d98a5063.jpg', 'Day 3 Bhakti Sosial', 'MATSAMA 2024', '2025-03-13 07:58:00', 'Galeri \r\nMasa Ta\'aruf Santri Madrasah (Matsama) 2024\r\nMA Zainul Hasan 1 Genggong.\r\n\"Wujudkan Pelajar Pancasila yang Berdedikasi Tinggi dan Berakhlak Mulia\".'),
(230, 'img-20250313 005800-67d22d98adecb.jpg', 'Day 3 Bhakti Sosial', 'MATSAMA 2024', '2025-03-13 07:58:00', 'Galeri \r\nMasa Ta\'aruf Santri Madrasah (Matsama) 2024\r\nMA Zainul Hasan 1 Genggong.\r\n\"Wujudkan Pelajar Pancasila yang Berdedikasi Tinggi dan Berakhlak Mulia\".'),
(231, 'img-20250313 010606-67d22f7eca6b0.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:06:06', 'Sidang Munaqosah Tugas Akhir PRODISTIK berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(232, 'img-20250313 010606-67d22f7ed2ffd.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:06:06', 'Sidang Munaqosah Tugas Akhir PRODISTIK berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(233, 'img-20250313 010606-67d22f7ed3c18.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:06:06', 'Sidang Munaqosah Tugas Akhir PRODISTIK berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(234, 'img-20250313 010754-67d22fea36135.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:07:54', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan Desain Grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(235, 'img-20250313 010754-67d22fea3d6f7.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:07:54', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan Desain Grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(236, 'img-20250313 010754-67d22fea3eaba.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:07:54', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan Desain Grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(237, 'img-20250313 010754-67d22fea3fa7f.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:07:54', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan Desain Grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(238, 'img-20250313 010754-67d22fea40cae.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:07:54', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan Desain Grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(239, 'img-20250313 010754-67d22fea41c64.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:07:54', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan Desain Grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(240, 'img-20250313 010858-67d2302a46928.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:08:58', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan Multimedia berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(241, 'img-20250313 011213-67d230eda4245.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(242, 'img-20250313 011213-67d230edac66c.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(243, 'img-20250313 011213-67d230edade42.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(244, 'img-20250313 011213-67d230edaf3a3.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(245, 'img-20250313 011213-67d230edb0465.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(246, 'img-20250313 011213-67d230edb18e8.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(247, 'img-20250313 011213-67d230edb299d.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(248, 'img-20250313 011213-67d230edb385a.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(249, 'img-20250313 011213-67d230edb4704.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(250, 'img-20250313 011213-67d230edb5369.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(251, 'img-20250313 011213-67d230edb61b6.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(252, 'img-20250313 011213-67d230edb6e6e.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(253, 'img-20250313 011213-67d230edb7d29.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(254, 'img-20250313 011213-67d230edb8cee.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(255, 'img-20250313 011213-67d230edb9a5b.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(256, 'img-20250313 011213-67d230edba919.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(257, 'img-20250313 011213-67d230edbb6d2.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(258, 'img-20250313 011213-67d230edbc550.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(259, 'img-20250313 011213-67d230edbd720.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(260, 'img-20250313 011213-67d230edbe727.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:12:13', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(261, 'img-20250313 011309-67d23125bf069.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:13:09', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(262, 'img-20250313 011309-67d23125c5eb9.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:13:09', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(263, 'img-20250313 011309-67d23125c721c.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:13:09', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(264, 'img-20250313 011309-67d23125c923f.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:13:09', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(265, 'img-20250313 011309-67d23125caced.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:13:09', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(266, 'img-20250313 011453-67d2318d696f6.jpg', 'Program Tahqiq', 'Munaqosah 2025', '2025-03-13 08:14:53', 'Sidang Munaqosah Tugas Akhir Tahqiq berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(267, 'img-20250313 011453-67d2318d779f9.jpg', 'Program Tahqiq', 'Munaqosah 2025', '2025-03-13 08:14:53', 'Sidang Munaqosah Tugas Akhir Tahqiq berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(268, 'img-20250313 011453-67d2318d78bf3.jpg', 'Program Tahqiq', 'Munaqosah 2025', '2025-03-13 08:14:53', 'Sidang Munaqosah Tugas Akhir Tahqiq berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(269, 'img-20250313 011453-67d2318d79e48.jpg', 'Program Tahqiq', 'Munaqosah 2025', '2025-03-13 08:14:53', 'Sidang Munaqosah Tugas Akhir Tahqiq berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(270, 'img-20250313 011453-67d2318d7b549.jpg', 'Program Tahqiq', 'Munaqosah 2025', '2025-03-13 08:14:53', 'Sidang Munaqosah Tugas Akhir Tahqiq berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(271, 'img-20250313 011453-67d2318d7c7e9.jpg', 'Program Tahqiq', 'Munaqosah 2025', '2025-03-13 08:14:53', 'Sidang Munaqosah Tugas Akhir Tahqiq berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(272, 'img-20250313 011558-67d231ce0f00c.jpg', 'Pembukaan', 'Munaqosah 2025', '2025-03-13 08:15:58', 'Sidang Munaqosah Program Unggulan berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(273, 'img-20250313 011558-67d231ce15e8a.jpg', 'Pembukaan', 'Munaqosah 2025', '2025-03-13 08:15:58', 'Sidang Munaqosah Program Unggulan berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(274, 'img-20250313 011558-67d231ce16c6a.jpg', 'Pembukaan', 'Munaqosah 2025', '2025-03-13 08:15:58', 'Sidang Munaqosah Program Unggulan berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(275, 'img-20250313 011558-67d231ce178a0.jpg', 'Pembukaan', 'Munaqosah 2025', '2025-03-13 08:15:58', 'Sidang Munaqosah Program Unggulan berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(276, 'img-20250313 011558-67d231ce18420.jpg', 'Pembukaan', 'Munaqosah 2025', '2025-03-13 08:15:58', 'Sidang Munaqosah Program Unggulan berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(277, 'img-20250313 011743-67d23237ba9b9.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:17:43', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan APK berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(278, 'img-20250313 011743-67d23237c32c9.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:17:43', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan APK berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(279, 'img-20250313 011832-67d23268dfeeb.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:18:32', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(280, 'img-20250313 011832-67d23268e80f0.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:18:32', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(281, 'img-20250313 011832-67d23268e9507.jpg', 'PRODISTIK', 'Munaqosah 2025', '2025-03-13 08:18:32', 'Sidang Munaqosah Tugas Akhir PRODISTIK jurusan desain grafis berlangsung sebagai tahap akhir dalam penyelesaian program. Kegiatan ini menjadi momen evaluasi hasil belajar dan pengujian kompetensi peserta sebelum menyelesaikan studi.'),
(282, 'img-20250313 012132-67d2331c6b436.jpg', 'Apel Pelantikan', 'Pelantikan OSIS 2024', '2025-03-13 08:21:32', 'Pelantikan Pengurus OSIS Putra dan Putri MA Zainul Hasan 1 Genggong\r\nMasa Khidmat 2024 - 2025'),
(283, 'img-20250313 012132-67d2331c739b8.jpg', 'Apel Pelantikan', 'Pelantikan OSIS 2024', '2025-03-13 08:21:32', 'Pelantikan Pengurus OSIS Putra dan Putri MA Zainul Hasan 1 Genggong\r\nMasa Khidmat 2024 - 2025'),
(284, 'img-20250313 012132-67d2331c74c44.jpg', 'Apel Pelantikan', 'Pelantikan OSIS 2024', '2025-03-13 08:21:32', 'Pelantikan Pengurus OSIS Putra dan Putri MA Zainul Hasan 1 Genggong\r\nMasa Khidmat 2024 - 2025'),
(285, 'img-20250313 012132-67d2331c7605e.jpg', 'Apel Pelantikan', 'Pelantikan OSIS 2024', '2025-03-13 08:21:32', 'Pelantikan Pengurus OSIS Putra dan Putri MA Zainul Hasan 1 Genggong\r\nMasa Khidmat 2024 - 2025'),
(286, 'img-20250313 012132-67d2331c77141.jpg', 'Apel Pelantikan', 'Pelantikan OSIS 2024', '2025-03-13 08:21:32', 'Pelantikan Pengurus OSIS Putra dan Putri MA Zainul Hasan 1 Genggong\r\nMasa Khidmat 2024 - 2025'),
(287, 'img-20250313 012132-67d2331c78072.jpg', 'Apel Pelantikan', 'Pelantikan OSIS 2024', '2025-03-13 08:21:32', 'Pelantikan Pengurus OSIS Putra dan Putri MA Zainul Hasan 1 Genggong\r\nMasa Khidmat 2024 - 2025'),
(288, 'img-20250313 012132-67d2331c78f12.jpg', 'Apel Pelantikan', 'Pelantikan OSIS 2024', '2025-03-13 08:21:32', 'Pelantikan Pengurus OSIS Putra dan Putri MA Zainul Hasan 1 Genggong\r\nMasa Khidmat 2024 - 2025'),
(289, 'img-20250313 012132-67d2331c79c9c.jpg', 'Apel Pelantikan', 'Pelantikan OSIS 2024', '2025-03-13 08:21:32', 'Pelantikan Pengurus OSIS Putra dan Putri MA Zainul Hasan 1 Genggong\r\nMasa Khidmat 2024 - 2025'),
(290, 'img-20250313 012330-67d233921f78f.jpg', 'Pelatihan Guru', 'Pelatihan UM 2024', '2025-03-13 08:23:30', '\"Peningkatan Kapabilitas Guru untuk mengintegrasikan Computational Thinking dalam Pembelajaran berkolaborasi berbasis Teknologi Digital\"\r\nDI MA ZAINUL HASAN 1 GENGGONG\r\nOleh\r\nFAKULTAS ILMU PENDIDIKAN (FIP) \r\nUNIVERSITAS NEGERI MALANG\r\nSenin, 14 Oktober 2024'),
(291, 'img-20250313 012330-67d23392281ea.jpg', 'Pelatihan Guru', 'Pelatihan UM 2024', '2025-03-13 08:23:30', '\"Peningkatan Kapabilitas Guru untuk mengintegrasikan Computational Thinking dalam Pembelajaran berkolaborasi berbasis Teknologi Digital\"\r\nDI MA ZAINUL HASAN 1 GENGGONG\r\nOleh\r\nFAKULTAS ILMU PENDIDIKAN (FIP) \r\nUNIVERSITAS NEGERI MALANG\r\nSenin, 14 Oktober 2024'),
(292, 'img-20250313 012330-67d23392291a7.jpg', 'Pelatihan Guru', 'Pelatihan UM 2024', '2025-03-13 08:23:30', '\"Peningkatan Kapabilitas Guru untuk mengintegrasikan Computational Thinking dalam Pembelajaran berkolaborasi berbasis Teknologi Digital\"\r\nDI MA ZAINUL HASAN 1 GENGGONG\r\nOleh\r\nFAKULTAS ILMU PENDIDIKAN (FIP) \r\nUNIVERSITAS NEGERI MALANG\r\nSenin, 14 Oktober 2024'),
(293, 'img-20250313 012330-67d233922a516.jpg', 'Pelatihan Guru', 'Pelatihan UM 2024', '2025-03-13 08:23:30', '\"Peningkatan Kapabilitas Guru untuk mengintegrasikan Computational Thinking dalam Pembelajaran berkolaborasi berbasis Teknologi Digital\"\r\nDI MA ZAINUL HASAN 1 GENGGONG\r\nOleh\r\nFAKULTAS ILMU PENDIDIKAN (FIP) \r\nUNIVERSITAS NEGERI MALANG\r\nSenin, 14 Oktober 2024'),
(294, 'img-20250313 012330-67d233922b6ff.jpg', 'Pelatihan Guru', 'Pelatihan UM 2024', '2025-03-13 08:23:30', '\"Peningkatan Kapabilitas Guru untuk mengintegrasikan Computational Thinking dalam Pembelajaran berkolaborasi berbasis Teknologi Digital\"\r\nDI MA ZAINUL HASAN 1 GENGGONG\r\nOleh\r\nFAKULTAS ILMU PENDIDIKAN (FIP) \r\nUNIVERSITAS NEGERI MALANG\r\nSenin, 14 Oktober 2024'),
(295, 'img-20250313 012330-67d233922c5ef.jpg', 'Pelatihan Guru', 'Pelatihan UM 2024', '2025-03-13 08:23:30', '\"Peningkatan Kapabilitas Guru untuk mengintegrasikan Computational Thinking dalam Pembelajaran berkolaborasi berbasis Teknologi Digital\"\r\nDI MA ZAINUL HASAN 1 GENGGONG\r\nOleh\r\nFAKULTAS ILMU PENDIDIKAN (FIP) \r\nUNIVERSITAS NEGERI MALANG\r\nSenin, 14 Oktober 2024'),
(296, 'img-20250313 012330-67d233922d184.jpg', 'Pelatihan Guru', 'Pelatihan UM 2024', '2025-03-13 08:23:30', '\"Peningkatan Kapabilitas Guru untuk mengintegrasikan Computational Thinking dalam Pembelajaran berkolaborasi berbasis Teknologi Digital\"\r\nDI MA ZAINUL HASAN 1 GENGGONG\r\nOleh\r\nFAKULTAS ILMU PENDIDIKAN (FIP) \r\nUNIVERSITAS NEGERI MALANG\r\nSenin, 14 Oktober 2024'),
(297, 'img-20250313 012330-67d233922e0ef.jpg', 'Pelatihan Guru', 'Pelatihan UM 2024', '2025-03-13 08:23:30', '\"Peningkatan Kapabilitas Guru untuk mengintegrasikan Computational Thinking dalam Pembelajaran berkolaborasi berbasis Teknologi Digital\"\r\nDI MA ZAINUL HASAN 1 GENGGONG\r\nOleh\r\nFAKULTAS ILMU PENDIDIKAN (FIP) \r\nUNIVERSITAS NEGERI MALANG\r\nSenin, 14 Oktober 2024'),
(298, 'img-20250313 012330-67d233922f3dc.jpg', 'Pelatihan Guru', 'Pelatihan UM 2024', '2025-03-13 08:23:30', '\"Peningkatan Kapabilitas Guru untuk mengintegrasikan Computational Thinking dalam Pembelajaran berkolaborasi berbasis Teknologi Digital\"\r\nDI MA ZAINUL HASAN 1 GENGGONG\r\nOleh\r\nFAKULTAS ILMU PENDIDIKAN (FIP) \r\nUNIVERSITAS NEGERI MALANG\r\nSenin, 14 Oktober 2024'),
(299, 'img-20250313 012523-67d234035bcb5.jpg', 'Training of Trainer', 'Pelatihan ITS', '2025-03-13 08:25:23', 'Training of Trainer (TOT) Olimpiade Matematika untuk guru dan siswa SLTA se Genggong di MA Zainul Hasan 1 Genggong.\r\noleh Tim Departemen Matematika FSAD ITS Surabaya \r\n13 Juli 2024'),
(300, 'img-20250313 012523-67d234036382d.jpg', 'Training of Trainer', 'Pelatihan ITS', '2025-03-13 08:25:23', 'Training of Trainer (TOT) Olimpiade Matematika untuk guru dan siswa SLTA se Genggong di MA Zainul Hasan 1 Genggong.\r\noleh Tim Departemen Matematika FSAD ITS Surabaya \r\n13 Juli 2024'),
(301, 'img-20250313 012523-67d234036489a.jpg', 'Training of Trainer', 'Pelatihan ITS', '2025-03-13 08:25:23', 'Training of Trainer (TOT) Olimpiade Matematika untuk guru dan siswa SLTA se Genggong di MA Zainul Hasan 1 Genggong.\r\noleh Tim Departemen Matematika FSAD ITS Surabaya \r\n13 Juli 2024'),
(302, 'img-20250313 012523-67d2340365850.jpg', 'Training of Trainer', 'Pelatihan ITS', '2025-03-13 08:25:23', 'Training of Trainer (TOT) Olimpiade Matematika untuk guru dan siswa SLTA se Genggong di MA Zainul Hasan 1 Genggong.\r\noleh Tim Departemen Matematika FSAD ITS Surabaya \r\n13 Juli 2024'),
(303, 'img-20250313 012523-67d2340366e8c.jpg', 'Training of Trainer', 'Pelatihan ITS', '2025-03-13 08:25:23', 'Training of Trainer (TOT) Olimpiade Matematika untuk guru dan siswa SLTA se Genggong di MA Zainul Hasan 1 Genggong.\r\noleh Tim Departemen Matematika FSAD ITS Surabaya \r\n13 Juli 2024'),
(304, 'img-20250313 012523-67d2340367f9e.jpg', 'Training of Trainer', 'Pelatihan ITS', '2025-03-13 08:25:23', 'Training of Trainer (TOT) Olimpiade Matematika untuk guru dan siswa SLTA se Genggong di MA Zainul Hasan 1 Genggong.\r\noleh Tim Departemen Matematika FSAD ITS Surabaya \r\n13 Juli 2024'),
(305, 'img-20250313 012523-67d2340368f8d.jpg', 'Training of Trainer', 'Pelatihan ITS', '2025-03-13 08:25:23', 'Training of Trainer (TOT) Olimpiade Matematika untuk guru dan siswa SLTA se Genggong di MA Zainul Hasan 1 Genggong.\r\noleh Tim Departemen Matematika FSAD ITS Surabaya \r\n13 Juli 2024'),
(306, 'img-20250313 012523-67d2340369ebe.jpg', 'Training of Trainer', 'Pelatihan ITS', '2025-03-13 08:25:23', 'Training of Trainer (TOT) Olimpiade Matematika untuk guru dan siswa SLTA se Genggong di MA Zainul Hasan 1 Genggong.\r\noleh Tim Departemen Matematika FSAD ITS Surabaya \r\n13 Juli 2024'),
(307, 'img-20250313 012523-67d234036b997.jpg', 'Training of Trainer', 'Pelatihan ITS', '2025-03-13 08:25:23', 'Training of Trainer (TOT) Olimpiade Matematika untuk guru dan siswa SLTA se Genggong di MA Zainul Hasan 1 Genggong.\r\noleh Tim Departemen Matematika FSAD ITS Surabaya \r\n13 Juli 2024'),
(308, 'img-20250313 012637-67d2344d65755.jpg', 'Semester Ganjil', 'Rapor 2024', '2025-03-13 08:26:37', 'Galeri\r\nPembagian Rapor Semester Ganjil. Tahun pelajaran 2024 - 2025\r\nAhad, 29 Desember 2024'),
(309, 'img-20250313 012637-67d2344d6e855.jpg', 'Semester Ganjil', 'Rapor 2024', '2025-03-13 08:26:37', 'Galeri\r\nPembagian Rapor Semester Ganjil. Tahun pelajaran 2024 - 2025\r\nAhad, 29 Desember 2024'),
(310, 'img-20250313 012637-67d2344d6f8e9.jpg', 'Semester Ganjil', 'Rapor 2024', '2025-03-13 08:26:37', 'Galeri\r\nPembagian Rapor Semester Ganjil. Tahun pelajaran 2024 - 2025\r\nAhad, 29 Desember 2024'),
(311, 'img-20250313 012637-67d2344d70797.jpg', 'Semester Ganjil', 'Rapor 2024', '2025-03-13 08:26:37', 'Galeri\r\nPembagian Rapor Semester Ganjil. Tahun pelajaran 2024 - 2025\r\nAhad, 29 Desember 2024'),
(312, 'img-20250313 012637-67d2344d71426.jpg', 'Semester Ganjil', 'Rapor 2024', '2025-03-13 08:26:37', 'Galeri\r\nPembagian Rapor Semester Ganjil. Tahun pelajaran 2024 - 2025\r\nAhad, 29 Desember 2024'),
(313, 'img-20250313 012637-67d2344d7201c.jpg', 'Semester Ganjil', 'Rapor 2024', '2025-03-13 08:26:37', 'Galeri\r\nPembagian Rapor Semester Ganjil. Tahun pelajaran 2024 - 2025\r\nAhad, 29 Desember 2024'),
(314, 'img-20250313 012637-67d2344d72de3.jpg', 'Semester Ganjil', 'Rapor 2024', '2025-03-13 08:26:37', 'Galeri\r\nPembagian Rapor Semester Ganjil. Tahun pelajaran 2024 - 2025\r\nAhad, 29 Desember 2024'),
(315, 'img-20250313 012637-67d2344d73c6b.jpg', 'Semester Ganjil', 'Rapor 2024', '2025-03-13 08:26:37', 'Galeri\r\nPembagian Rapor Semester Ganjil. Tahun pelajaran 2024 - 2025\r\nAhad, 29 Desember 2024'),
(316, 'img-20250313 012838-67d234c6e8550.jpg', 'Semester Genap', 'Rapor 2024', '2025-03-13 08:28:38', 'Galeri\r\nPembagian Rapor Santri Kelas X dan XI MA Zainul Hasan 1 Genggong.\r\nAhad, 30 Juni 2024'),
(317, 'img-20250313 012838-67d234c6f16ce.jpg', 'Semester Genap', 'Rapor 2024', '2025-03-13 08:28:38', 'Galeri\r\nPembagian Rapor Santri Kelas X dan XI MA Zainul Hasan 1 Genggong.\r\nAhad, 30 Juni 2024'),
(318, 'img-20250313 012838-67d234c6f28d5.jpg', 'Semester Genap', 'Rapor 2024', '2025-03-13 08:28:38', 'Galeri\r\nPembagian Rapor Santri Kelas X dan XI MA Zainul Hasan 1 Genggong.\r\nAhad, 30 Juni 2024'),
(319, 'img-20250313 012838-67d234c6f38a6.jpg', 'Semester Genap', 'Rapor 2024', '2025-03-13 08:28:39', 'Galeri\r\nPembagian Rapor Santri Kelas X dan XI MA Zainul Hasan 1 Genggong.\r\nAhad, 30 Juni 2024'),
(320, 'img-20250313 012839-67d234c7005ea.jpg', 'Semester Genap', 'Rapor 2024', '2025-03-13 08:28:39', 'Galeri\r\nPembagian Rapor Santri Kelas X dan XI MA Zainul Hasan 1 Genggong.\r\nAhad, 30 Juni 2024'),
(321, 'img-20250313 012839-67d234c701fe9.jpg', 'Semester Genap', 'Rapor 2024', '2025-03-13 08:28:39', 'Galeri\r\nPembagian Rapor Santri Kelas X dan XI MA Zainul Hasan 1 Genggong.\r\nAhad, 30 Juni 2024'),
(322, 'img-20250313 012839-67d234c703222.jpg', 'Semester Genap', 'Rapor 2024', '2025-03-13 08:28:39', 'Galeri\r\nPembagian Rapor Santri Kelas X dan XI MA Zainul Hasan 1 Genggong.\r\nAhad, 30 Juni 2024'),
(323, 'img-20250313 012839-67d234c703fe9.jpg', 'Semester Genap', 'Rapor 2024', '2025-03-13 08:28:39', 'Galeri\r\nPembagian Rapor Santri Kelas X dan XI MA Zainul Hasan 1 Genggong.\r\nAhad, 30 Juni 2024'),
(324, 'img-20250328 094607-67e66fdfbbdb2.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(325, 'img-20250328 094607-67e66fdfbfb7e.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(326, 'img-20250328 094607-67e66fdfc0821.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(327, 'img-20250328 094607-67e66fdfc1850.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(328, 'img-20250328 094607-67e66fdfc2372.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(329, 'img-20250328 094607-67e66fdfc2c0b.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(330, 'img-20250328 094607-67e66fdfc34a4.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(331, 'img-20250328 094607-67e66fdfc4107.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(332, 'img-20250328 094607-67e66fdfc4bc0.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(333, 'img-20250328 094607-67e66fdfc5756.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(334, 'img-20250328 094607-67e66fdfc6090.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(335, 'img-20250328 094607-67e66fdfc6bd0.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(336, 'img-20250328 094607-67e66fdfc7722.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(337, 'img-20250328 094607-67e66fdfc8232.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(338, 'img-20250328 094607-67e66fdfc8d16.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(339, 'img-20250328 094607-67e66fdfc98f0.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(340, 'img-20250328 094607-67e66fdfca20a.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(341, 'img-20250328 094607-67e66fdfcad09.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(342, 'img-20250328 094607-67e66fdfcb8d8.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(343, 'img-20250328 094607-67e66fdfcc414.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:46:07', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.');
INSERT INTO `galeri` (`id`, `file`, `title`, `kategori`, `created_at`, `keterangan`) VALUES
(344, 'img-20250328 094835-67e670734865e.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:48:35', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.'),
(345, 'img-20250328 094835-67e670734cdb4.jpg', 'Kemah Blok', 'Kemah Blok', '2025-03-28 16:48:35', 'Kemah Blok Pramuka adalah kegiatan rutin tahunan yang diselenggarakan oleh MA Zainul Hasan 1 Genggong khusus untuk siswa kelas 10. Kegiatan ini merupakan salah satu tradisi penting yang menjadi simbolisasi resmi bahwa peserta didik tersebut telah sah dikatakan sebagai siswa MA Zainul Hasan 1 Genggong.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `NamaGuru` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `Profil` varchar(200) DEFAULT NULL,
  `tahun` varchar(20) DEFAULT NULL,
  `Bidang` varchar(500) DEFAULT NULL,
  `Motto` text DEFAULT NULL,
  `Telegram` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `noHp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `NamaGuru`, `alamat`, `Profil`, `tahun`, `Bidang`, `Motto`, `Telegram`, `Email`, `noHp`) VALUES
(1, 'Nun Ahsan Maliki, S.Sy, M.Pd', 'Karangbong-Pajarakan', 'Kepala Madrasah.png\r\n\r\n', '2012', 'Aqidah Akhlaq', 'Teruslah menjadi orang yang bermanfaat!', 'AlexSaif', 'alexsaif@yahoo.com', '0811355455'),
(2, 'Zaenih, M.Pd\r\n', 'Karangbong-Pajarakan', 'IMG_5119.jpg', '1997', 'Aqidah Akhlaq', 'Hidup adalah aqidah dan perjuangan\r\n', 'zaenih', 'zainizainuri41@gmail.com\r\n', '085230253951'),
(3, 'Solihin, M.Pd', 'Sambirampak Lor-Kotaanyar', 'IMG-20250315 042313.jpg', '2003', 'Sejarah Kebudayaan Islam', 'Hadapi masalah dengan senyuman', 'lihincan', 'mazaha1genggong@gmail.com', '085233050511'),
(4, 'Ahmad Taufiq,S.Ag', NULL, 'IMG-20250321 113115.png', '1990', 'Fiqih ( Fathul Qorib)', 'Ketulusan adalah kunci kebahagiaan sejati', 'TaufiqMA', 'afiqaja2016@gmail.com', '085258740225'),
(5, 'Saifullah, S. Pd.', 'Karangbong-Pajarakan', 'IMG_5106.jpg', '1996', 'Ekonomi', 'Hidup hanya sekali, gunakanlah sebaik mungkin untuk bertaqwa', 'Saifullah', 'saifullahma1997@gmail.com', '082336400799'),
(6, 'Ahmad Juwaini M. S.Ag., M.Pd.\r\n', 'Jrebeng Kidul-Wonoasih', 'IMG_5120.jpg', '1994', 'PKn', 'Hidup adalah Khidmah, sedangkan Sukses adalah buahnya\r\n', 'Jo3w3n', 'juwen270671@gmail.com\r\n', '085335118999\r\n'),
(7, 'Ahmad Muhibul Firdaus, M.Pd', 'Karangbong-Pajarakan', 'IMG_5145.jpg', '2002', 'Bahasa Arab', 'Tawasaw Bil Haqqi Watawasaw Bis Shobri', 'abi_fardhan', 'ahmadmuhibul@gmail.com\r\n', '085234556820'),
(8, 'Azkalakum Zakiyullah', 'Jatiurip-Krejengan', 'IMG-20250321 113158.png', '2023', 'Karyawan Perpusda', 'Setiap langkah ada hikmah dan barokah.', 'Azkalakum22', 'azkajih88@gmail.com', '082338792318'),
(9, 'Ira Daniati, S.Pd\r\n', 'Talkandang-Kotaanyar', 'IMG_5114.JPG', '2010', 'Geografi', 'Selama anda hidup selalu berbuat baik \r\n', 'Irasenewi', 'ira.senewi@gmail.com\r\n', '085258740329'),
(10, 'Abdillah Luthfi, S.Th.I', 'Karangbong-Pajarakan', 'IMG-20250321 113229.png', '2005', 'Al-Qur\'an dan Hadits', 'Tidak ada tujuan yang lebih baik dan lebih utama selain Ilahi Anta Maqshudi', 'abdillah_luthfi', 'luthfi.234@gmail.com', '081234504234'),
(11, 'Winanto', NULL, 'IMG-20250321 113348.png', '2009', 'Sejarah', 'Berjuang terus pantang menyerah', 'Winanto', 'Mariaulfa@gmail.com', '085230519960'),
(12, 'Ali Munir Mustaghfirin,SH.I', 'Wangkal-Gading', 'IMG_5126.JPG', '1997', 'Fikih/ Ushul Fikih', 'Laki laki sejati bukan orang yang pasrah terhadap takdir. Tetapi orang yang berusaha dari takdir yang satu ke takdir yang lain\r\n', 'N64710', 'Masiing71@gmail.com\r\n', '082228758889'),
(13, 'Sri Adi Wahyuni, S.Hum\r\n', 'Pakuniran-Pakuniran', 'IMG_5107.jpg', '2021', 'Bahasa Indonesia', 'Bekerjalah untuk duniamu seakan-akan kamu hidup selamanya, beramalah untuk akhiratku seakan-akan kamu mati besok. \r\n', 'Sri adi wahyuni\r\n', 'sriadiwahyuni5@gmail.com\r\n', '085253600997'),
(14, 'Maisurah, M.Pd', 'Jurang Jero-Gading', 'IMG_5127.jpg', '2007', 'Sejarah kebudayaan Islam', 'Kesuksesan adalah akumulasi dari Proses\r\n', 'meme2510', 'maysurahmeme@gmail.com\r\n', '085230506087'),
(15, 'Mohammad Hendra, M.Pd.I', 'Maron Kidul-Maron', 'IMG_5095.jpg', '2008', 'Sejarah kebudayaan Islam', 'Humanis religius', 'Hendra_Senyum', 'hendramuhammad603@gmail.com', '081333661100'),
(16, 'Almuharrom', 'Sentul-Gading', 'IMG_5128.jpg', '2017', 'Ilmu Fiqih', 'kudu mempeng', 'almuharrom', 'almuharrom90@gmail.com\r\n', '082233315546'),
(17, 'Sumaryono, M.Pd.I', 'Gebangan-Krejengan', 'IMG_5146.jpg', '2012', 'Informatika', 'Berjuang tanpa henti, meski hidup hanya sekali\r\n', 'SumaRyon0', 's.youn2011@gmail.com\r\n', '085204891113'),
(18, 'Robiatul Adawiyah, S.Si', 'Karangbong-Pajarakan', 'IMG-20250310 015753.jpg', '2014', 'Matematika', 'Hidup itu bukan tentang memiliki segalanya, tapi mensyukuri yang ada☺️', 'Robicc', 'robikadawiyah32@gmail.com', '082330712412'),
(19, 'Mohammad Jamalul Lail, S.Pd.\r\n', 'Nogosaren-Gading', 'IMG_5132.jpg', '2015', 'Fisika', 'Titik tertinggi yang dikejar ternyata hanya ruang kosong', 'iyLoeL', 'iyloel.terkep@gmail.com\r\n', '082331103145'),
(20, 'Mulyadi, S.Pd', 'Randupitu-Gending', 'IMG_5138.jpg', '2005', 'Matematika', 'Man Jadda wajada\r\n', 'Mulyadi', 'alfiahmulyadi1975@gmail.com\r\n', '085288003243'),
(21, 'Barokatul Laili, S.H.I', 'Suko-Maron', 'IMG_5112.jpg', '2013', 'Hadits', 'Semangat, sabar dan tetap rendah hati', 'Laili_NL', 'nellychy29@gmail.com\r\n', '085204854304'),
(22, 'Ahmad Efendi', 'Ranuyoso-Lumajang', 'IMG_5124.jpg', '2022', 'PJOK', 'Orang sukses paham tentang Proses\r\n', 'Pepen1304', 'ahmadefendi121304@gmail.com\r\n', '082331146276'),
(23, 'Dwi Restiana Widyaningsih, S.Pd', 'Mangunharjo-Mayangan', 'IMG_5135.jpg', '2009', 'Matematika', 'Tidak ada yg sia sia dalam belajar,karena ilmu akan bermanfaat pada waktunya\r\n', 'DwiR_ana', 'dwirestiana.w@gmail.com\r\n', '082234778427'),
(24, 'Misbahun Najib, S.Pd', NULL, 'IMG-20250312 094426.jpg', '2012', 'Fiqih dan Ta\'lim', 'Berusahalah selalu ingat sama Allah', 'MisbahunNajib', 'misbahunnajib@gmail.com', '082334118331'),
(25, 'Linda Anggraeni, S.Pd.I', 'Ganting Kulon-Maron', 'IMG_5102 (2).jpg', '2011', 'Hadits', 'Mulailah darimana kau berada dan lakukan yang kau bisa\r\n', 'Linsyaif', 'linsyaif91@gmail.com\r\n', '081331512714'),
(26, 'Moh Fauzi Afnani, S.Pd\r\n', 'Tiris-Tiris', 'IMG_5129.JPG\r\n', '2018', 'Alfiyah Ibnu Malik & Aqidah Alhlak', 'Manfaatkan masa mudamu sebaik-baiknya dan carilah ilmu sebanyak-banyaknya. Jangan batasi diri dengan satu ilmu saja, tapi carilah ilmu apa saja.\r\n', 'aanz89', 'aanvauzy89@gmail.com\r\n', '082233315665'),
(27, 'Sholehuddin, S.Hum', 'Karangbong-Pajarakan', 'IMG-20250312 094620.jpg', '2024', 'Sejarah Indonesia', 'aku mung cah angon, angon roso, angon rogo', 'Sholeh300497', 'sholehuddin0430@gmail.com', '085731794837'),
(28, 'Mariyatul Kiptiyah,S.Ag', 'Karangbong-Pajarakan', 'IMG_5117.jpg', '1997', 'Fikih', 'Terus melangkah dan berfikir positif', 'me_ry', 'mariyatulqibti82@gmail.com', '082233118235'),
(29, 'Riatiningsih, S.Pd', 'Tigasan Wetan-Leces', 'IMG_5115.jpg', '2011', 'Biologi', 'Jadilah versi terbaik dari dirimu setiap hari\r\n', 'Ria_88', 'khansariatiningsih@gmail.com\r\n', '082293767701'),
(30, 'Amaris Subiantoro, S.Pd.I', 'Pajarakan Kulon-Pajarakan', 'IMG_5105 (1).jpg', '2006', 'Pendidikan Kewarganegaraan', 'Tidak ada yang lebih berharga dari pada Ilmu yang bermanfaat, tidak ada yang lebih tinggi dari pada adab, dan tidak ada yang lebih penting daripada kepatuhan kepada Orang tua dan Guru\r\n', 'amaris87', 'amarissubiantoro.as@gmail.com\r\n', '085335137113'),
(31, 'Aninatul Baidiyah, S.TP', 'Liprak Kidul-Banyuanyar', 'IMG_5108.jpg', '2013', 'Biologi, Geografi', 'Di jalani, Di syukuri, dan Jangan lupa bahagia☺️', '@aninatul_baidiyah', 'baidiyahaninatul@gmail.com', '85233075078\r'),
(32, 'Ayu Malinda Bulqis, S.H.I', 'Karangbong-Pajarakan', 'IMG_5110.jpg', '2012', 'Akhlak', 'Jadikan akhlak sebagai perhiasan dan tameng dari ilmu pengetahuan', '@ayubulqis', 'malinda.bulqis@gmail.com', '82338403299\r'),
(33, 'Herawati, S.Pd', 'Randupitu-Gending', 'IMG_5116.jpg', '2003', 'Ekonomi', 'Tetaplah jadi orang baik', '@H3rawati', 'hera140475@gmail.com', '82333507952\r'),
(34, 'M Sahri, M.Pd', 'Sumbersecang-Gading', 'IMG_5142.jpg', '2009', 'Ilmu Tafsir', 'Dadio wong apik seng iso manfaat marang liyane', '@sahriks', 'Syahriemohammad@gmail.com', '85330150812\r'),
(35, 'Najwan Nada, S. Sos', 'Karangbong-Pajarakan', 'IMG_5111.JPG', '2019', 'Bimbingan Konseling', 'Hidup itu hanya tentang dua hal: Bergerak atau diam saja.', '@najwannada', 'najwannada12@gmail.com', '82234510002\r'),
(36, 'Rialis Kriswati, S.Pd', 'Bulu-Kraksaan', 'IMG_5137.JPG', '2002', 'Bahasa indonesia', 'Keikhlasan & kesabaran juga butuh kejujuran', 'Mbklies', 'rialiskriswati0505@gmail.com', '87761132480\r'),
(37, 'Ach. Mustain, M.Pd.I', 'Kregenan-Kraksaan', 'IMG_5104.JPG', '1999', 'Hadist / Bahasa arab', 'Profesi seorang guru adalah pribadi yang tulus mengabdi', 'must41n@', 'tetesanilmi11@gmail.com', '81233410996\r'),
(38, 'Didik Supriyanto, S.H', 'Karangbong-Pajarakan', 'IMG_5099.jpg', '2007', 'Pkn', '\" Hidup hanya sekali buatlah berarti \"', '@didik supriyanto', 'didiksupritanto@gmail.com', '85336220899\r'),
(39, 'Moh Su\'udi, S.Pd.I', NULL, 'IMG_5096.jpg', NULL, 'KA TU', '', '@Udik_bae', 'Mohammad.suudi@yahoo.co.id', '85236140526\r'),
(40, 'Mohammad Ahsanun Na\'im, S.SOS', 'Opo Opo-Krejengan', 'IMG_5141.jpg', '2019', 'Bimbingan Konseling', 'LIFE TEST US BIG TO MAKE US BIG', '@ahsanaim', 'achsan95@gmail.com', '85234003424\r'),
(41, 'Lilikatus sholeha, S.Pd.I', 'Nogosaren-Gading', 'IMG_5123.JPG', '2013', 'Mulok', '', '@liliksholeha', 'Lilikatussholeha@gmail.com', '81235233222\r'),
(42, 'Gatot Heriyanto, S.Pd.I', 'Puspan-Maron', 'IMG_5121.JPG', '2006', 'Alqur\'an Hadis', 'Man jadda wajada', '@GatotHeriyanto', 'gatotheriyanto73270@gmail.com', '85236755355\r'),
(43, 'Zaimatus Sholehah, S.Pd', 'Bucorwetan-Pakuniran', 'IMG_5131.JPG', '2020', 'Bahasa Inggris', 'Just keep working until you know that no useless effort inthis world. There is always happiness waiting in your future', '@zaimatuss', 'zaimatissholehah@gmail.com', '85156009382\r'),
(44, 'Mukadi, S.H.I', 'Penambangan-Pajarakan', 'IMG-20250321 114134.png', '2005', 'Sorof', 'Rendah diri memberi jalan pada terangkatnya derajat', 'Jisalman', 'Mukadi@gmail.com', NULL),
(45, 'Ika Cahyanti, S.Pd.', 'Klaseman-Gending', 'IMG_5136.JPG', '2018', 'Bahasa Indonesia', 'Belajarlah dari hari kemarin, hidup untuk hari ini, dan berharaplah untuk hari esok', 'Ika0912', 'ikacahyanti0@gmail.com', '82230309231\r'),
(46, 'Izudin, s.pd.i', NULL, 'IMG-20250312 130805.jpg', '1998', 'Qur an Hadits', 'Pengabdian Abadi', 'Izudin', 'izudin8972@gmail.com', '085259044258'),
(47, 'Abd. Rahim, Lc.', 'Jorongan-Leces', 'IMG-20250310 020231.JPG', '2001', 'Bhs. Arab', 'Belajar sepanjang hidup. Uthlubul \'ilmi minal mahdi ilal lahdi', '@AR_LC66', 'abdrhmlc@gmail.com', '08999223455'),
(48, 'Siti Bahria, S.Pdi', 'Karangpati-Pajarakan', 'IMG_5109.jpg', '2011', 'Fiqih', 'Berkhidmat untuk lembaga dan pesantren', 'Siti Bahria', 'romsaja@gmail.com', '82335524014\r'),
(49, 'Yanto, S.Pd.I., M.Si', 'Sumberanyar-Paiton', 'IMG_5143.JPG', '2006', 'Sosiologi', 'Motivasi diri itu lebih penting dari pada termotivasi oleh orang lain', 'yanto87', 'yantopaiton9@gmail.com', '85330207559\r'),
(50, 'Izzah Himayatud Dauliyah, S.Hum', NULL, 'IMG_5130.jpg', '2021', 'Bahasa Inggris', 'Lakukan segalanya dengan penuh ikhlas', '@nila_izzah', 'izzahhimayatuddauliyah@gmail.com', '85258335631\r'),
(51, 'Bambang Dwi Mulyadi, S.Pd', NULL, 'IMG_5139.jpg', '2000', 'Bahasa Inggris, Pramuka, PKWU', 'Jadilah orang yang berguna dan beradab di manapun berada', 'DM BAMBANG\r\n', 'bambangdm45@gmail.id\r\n', '082334747284\r\n'),
(52, 'Shohihah, M.Pd', NULL, 'IMG_5113.JPG', '2007', 'Aqidah Akhlak', 'Khoirunnas yanfa\'u linnas\r\n', 'Shohihah', 'sohihah02@gmail.com\r\n', '081249592220'),
(53, 'Syaifullah', NULL, 'IMG_5125.JPG', NULL, 'Komputer', 'Try and Try until we cry never give up la tahzan inna Allaha ma\'ana', '082299577946\r\n', 'rahs8391@gmail.com\r\n', '082299577946'),
(54, 'Tutik Hardianti, S.Pd', 'Wonorejo-Maron', 'IMG_5101.jpg', '2020', 'Petugas Piket', 'Permata tidak bisa berkilau tanpa gesekan, begitu juga manusia. Tidak ada manusia yang luar biasa tanpa cobaan\r\n', 'tutikhardianti', 'tutikhardianti17@gmail.com \r\n', '085259710809'),
(55, 'Mukhlas Kholil, S.H.I', NULL, 'IMG-20250321 113544.png', '2004', 'Bahasa Arab', 'Bahasa Arab mahkota Islam', 'Mukhlaskholil', 'mukhlashalil@gmail.com', '085259299956'),
(56, 'Susilawati, S.Pd.I', NULL, 'IMG-20250312 094859.jpg', NULL, 'Karyawan TU', 'Semangat hidup meraih perjuangan', 'susil45', 'kucing05@gmail.com', '082334747328'),
(57, 'Deo A. Pramadhan', 'Besuki-Situbondo', 'IMG-20250312 095030.jpg', '2018', 'Al Qur\'an dan Hadist', 'Hidup sekali, sanggup berbaik hati', 'deramadhan85', 'deramadhan85@gmail.com', '08568747911'),
(58, 'Shautul Azkiyak. S.Pd.I', 'Karangbong-Pajarakan', 'IMG-20250321 113624.png', '2021', 'koordinator prodistik', 'Jika kamu ingin menjadi kuat, pelajari cara bertarung sendirian.', 'azkiyak07', 'azkiyak07@gmail.com', '085792518395'),
(59, 'Candra Useh, S.Pd.I', NULL, 'IMG-20250321 113653.png', NULL, 'Mulok', 'Barang siapa belum pernah merasakan pahitnya mencari ilmu walau sesaat, ia akan menelan hinanya kebodohan sepanjang hidupnya', 'candrauseh', 'candrauseh999@gmail.com', '085258740227'),
(60, 'Muhammad Fakhrur Rizky, SE', 'Bungatan-Situbondo', 'IMG-20250312 095217.jpg', '2019', 'Ketua Tim Media', 'Belajar dengan Hati, Berkarya dengan Ilmu.', 'rizzky_muhammad', 'rizzkymuhammad19@gmail.com', '085707426773'),
(61, 'Moh. Zarkasyi, S.Pd.I\r\n', NULL, 'IMG_5122.JPG', '2014', 'Ilmu Hadis\r\n', 'Khidmah ilmu, guru, dan orang tua\r\n', 'Kaziy87', 'moh.zarkasyi@gmail.com\r\n', '085235592093'),
(62, 'Nur Fitriyah, S.Pd.I', 'Karangbong-Pajarakan', 'IMG-20250312 095345.jpg', '2017', 'Karyawan', 'Hidup adalah ibadah', 'Fitriyah', 'fitriyahfitri1416@gmail.com', '085234049987'),
(63, 'Ali Imron Maulana,S.M', 'Patemon-Krejengan', 'IMG-20250321 113732.png', '2024', 'Pewarta', 'Bisa Karena Biasa', 'Aliimronmaulana', 'aliimronmaulana99@gmail.com', '082231322797'),
(64, 'Moh. Zainul Hasan S.pd\r\n', 'Nogosaren-Gading', 'IMG_5144.JPG', '2022', 'Piket putra\r\n', 'Terus berjuang sampai kau mencapai puncak  Sehingga cacian itu berubah menjadi tepuk tangan...!!!\r\n', 'ZainulBinSalim', 'Zainulcb30@gmail.com\r\n', '085219868994'),
(65, 'M Zainul Arifin, S.Pd', NULL, 'IMG-20250312 131025.jpg', NULL, 'Staf Kurikulum', 'Jalani hidup dengan semangat', 'Z41nul_4r1f1n', 'az7746520@gmail.com', NULL),
(66, 'Muhammad Daniel Ainul Islam', 'Jrebeng Kidul-Wonoasih', 'IMG-20250312 095540.jpg', '2016', 'Al Quran Hadits', 'Berdoa dan berjuanglah untuk mimpimu', 'Muhammaddanielainulislam', 'daniel.ainulislam@gmail.com', '082325588569'),
(67, 'Sholeh Hasan', 'Karangbong-Pajarakan', 'IMG-20250321 113901.png', '2021', NULL, 'Jangan mengaku jadi orang sabar, sebelum menjadi operstor madrasah', 'zhoel_89', 'ahsanzhoel03@gmail.com', '082336163232'),
(68, 'Agus Surahman, S.Si., Gr\r\n', 'Karanggeger-Pajarakan', 'IMG_5134.jpg', '2015', 'Kimia', 'Ketika sekarang terpikir, segeralah mengukir biar esok kan terukir\r\n', 'agus_surahman', 'gusurgusur@gmail.com\r\n', '082236517179'),
(69, 'Maziyyatul Qudsiyah', 'Pakuniran-Pakuniran', 'IMG_5100.jpg', '2021', 'Petugas Piket', 'Jadilah berharga meski tak dihargai', 'Yaluhmezi', 'alfathoniy608@gmail.com', '6282232274945'),
(70, 'Fakhrur Razi, S.H.I', 'Besuki-Situbondo', 'IMG_5133.JPG', '2004', 'Kifayatul Akhyar\r\n', 'Qoola Umar bin Al-Khattab ra.: (tafaqqohuu qobla an tusawwaduu)ma\'naahu ta\'allamul \'ilma maa dumtum shighooron qobla an tashiruu saadatan ruasaan mandzuuron ilaihim, fain lam tata\'allamu qobla an yastahyaytum an tata\'allamu ba\'da alkibaro fabaqoitum juhhaalan ta\'khuzuunahu minal ashoogiri allaziina laa yuhsinuunal \'ilma fayuzrii zaalika bikum', 'FAKHRUR_RAZI_AS', 'ahsanzainina4@gmail.com\r\n', '0816563626'),
(71, 'Bambang Sumaryono, S.T', 'Gebangan-Krejengan', 'IMG-20250321 113812.png', '2012', 'Kimia', 'Semesta cinta - SEMESTA ILAHI', 'Bambangst007', 'semestacinta55@gmail.com', '081335511405'),
(75, 'Ahmad Yani, S.Kom', NULL, 'IMG-20250312 130448.jpg', NULL, 'Developer', 'tidak ada kata terlambat untuk mempelajari suatu hal yang baru', 'abu_naum', 'ahmad.yani.ar.dath@gmail.com', '085173456771'),
(76, 'Siti Walida, S.Pd.', 'Maron Kidul-Maron', 'IMG-20250312 131602.jpg', '2015', 'Staf Keuangan', 'Jika orang lain bisa, maka aku juga pasti bisa', 'Lieda06', 'sitiwalida73@gmail.com', '082234129990');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guruekstra`
--

CREATE TABLE `guruekstra` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `foto` text DEFAULT NULL,
  `bidang` text NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tele` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `wa` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guruekstra`
--

INSERT INTO `guruekstra` (`id`, `nama`, `foto`, `bidang`, `tahun`, `alamat`, `tele`, `email`, `wa`) VALUES
(1, 'Nabiela Kamalia', 'mc-1.jpg', 'Public Speaking', 2024, NULL, 'nabielaka', 'nabielak22@gmail.com', '85'),
(2, 'Bambang Dwi Mulyadi, S.Pd', 'guru-20250324 103013.jpg', 'Pramuka', 2020, NULL, 'DM BAMBANG', 'bambangdm45@gmail.id', '082334747284'),
(3, 'Ahmad Muhibul Firdaus, M.Pd', 'guru-20250324 103643.jpg', 'Bahasa Arab', NULL, NULL, 'abi_fardhan', 'ahmadmuhibul@gmail.com', '085234556820'),
(4, 'Zaenih, M.Pd', 'guru-20250324 103826.jpg', 'Tartil dan Tilawah', NULL, NULL, 'zaenih', 'zainizainuri41@gmail.com', '085230253951'),
(5, 'Mohammad Hendra, M.Pd.I', 'guru-20250324 104246.jpg', 'Karya Ilmiah Remaja', NULL, NULL, 'Hendra_Senyum', 'hendramuhammad603@gmail.com', '081333661100'),
(6, 'Abdillah Luthfi, S.Th.I', 'guru-20250324 150450.png', 'Karya Ilmiah Remaja', NULL, NULL, 'abdillah_luthfi', 'uthfi.234@gmail.com', '081234504234'),
(7, 'Najwan Nada, S. Sos', 'guru-20250324 150649.JPG', 'Master of Ceremony (MC)', NULL, NULL, 'najwannada', 'najwannada12@gmail.com', '082234510002'),
(8, 'Ahmad Efendi', 'guru-20250324 150846.jpg', 'Olahraga Futsal', NULL, NULL, 'Pepen1304', 'ahmadefendi121304@gmail.com', '082331146276'),
(9, 'Shohihah, M.Pd', 'guru-20250324 151038.JPG', 'Keputrian', NULL, NULL, 'Shohihah', 'sohihah02@gmail.com', '081249592220'),
(10, 'M Ilyas Rifaldi', 'guru-20250324 151328.jpg', 'Tartil danTilawah', 2019, NULL, 'Ilyas1420', 'mohilyasrifaldi@gmail.com', '082338481183'),
(11, 'Moh Hasan Habibul Ahkam Romadhoni', 'guru-20250324 151621.jpg', 'Pramuka', 2024, NULL, 'santribroadcast', 'mohhasanhab.r@gmail.com', '0895337748611'),
(12, 'Latifa Haddinirul Sakina', 'guru-20250324 151931.png', 'Keputrian 3', 2024, NULL, 'latifa Haddinirul', 'latifahaddinirul@gmail.com', '081335585556'),
(13, 'Robiatul Adawiyah', 'guru-20250324 152114.jpg', 'Keputrian 2', 2024, NULL, 'Robikchoco', 'robip202434@gmail.com', '082214245512'),
(14, 'Catur Neny Widiyati,M.Pd', 'guru-20250324 152309.jpg', 'Keputrian', 2005, NULL, 'caturneny_75', 'caturneny1975@gmail.com', '085469255359'),
(15, 'Muh. Qosim', 'guru-20250324 152439.jpg', 'Bola Voly', 2024, NULL, 'MUH.QOSIM', 'qosim6286@gmail.com', '085731337566'),
(16, 'Mardiono', 'guru-20250324 152743.jpg', 'Pagar Nusa', 2023, NULL, 'mardiono5634', 'm2470596@gmail.com', '085785955174'),
(17, 'Muqorrobin', 'guru-20250324 152922.jpg', 'Hadrah', 2023, NULL, 'muqorrobin_dt', 'muqorr00@gmail.com', '082334681242'),
(18, 'Abdurrahman', 'guru-20250324 153036.jpg', 'Paduan Suara', 2023, NULL, 'Dudung Aja aja', 'dusungasyikhana@gmail.com', '08124905785');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instruktur`
--

CREATE TABLE `instruktur` (
  `id` int(11) NOT NULL,
  `NamaGuru` varchar(200) NOT NULL,
  `file` text NOT NULL,
  `alamat` text DEFAULT NULL,
  `jabatan` text DEFAULT NULL,
  `telegram` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `mapel` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `instruktur`
--

INSERT INTO `instruktur` (`id`, `NamaGuru`, `file`, `alamat`, `jabatan`, `telegram`, `instagram`, `mapel`) VALUES
(1, 'A Muhibul Firdaus, M.Pd.I', 'ket.png', 'KARANGBONG-PAJARAKAN', 'KETUA-PENDIDIK', 'abi_fardhan', 'ahmadmuhibul', '[\"Microsoft Excel\", \"Microsoft Power Point\"]'),
(2, 'Sumaryono, M.Pd.I', 'sek.png', 'GEBANGAN-KREJENGAN', 'SEKRETARIS-PENDIDIK', 'SumaRyon0', NULL, '[\"Microsoft Excel\", \"Basic Design Grapich\"]'),
(3, 'Yanto,S.Pd.I, M.Si', 'bend.png', 'SUMBERANYAR-PAITON', 'BENDAHARA-PENDIDIK', 'yanto87', 'santrehngoding', '[\"UI/UX\", \"HTML\", \"CSS\", \"JavaScript\", \"Microsoft Access\"]'),
(4, 'Iqbal Zakariyah, S.T, M.Kom', 'iqbal.png', 'BRUMBUNGAN LOR-GENDING', 'PENDIDIK', 'iqbal_zakariyah', NULL, '[\"Frontend Frameworks & Technologies\", \"Framework-Based Web Development\", \"Database\", \"Full-Stack Web Development\", \"API\"]'),
(5, 'Rofiqo Handayani, S.Kom', 'rofiqo.png', 'PIKATAN-GENDING', 'Pendidik', 'Ryani11', 'Rofiqotulhikmah', '[\"Adobe XD\", \"Basic Desain Grafis\", \"Microsoft Word\"]'),
(6, 'Ahmad Muzanni, S.Kom', 'muzanni.png', 'BANYUANYAR TENGAH-BANYUANYAR', 'PENDIDIK', 'comemind', 'comemind_art', '[\"Digital Branding\", \"Digital Imaging\"]'),
(7, 'Taufiqur Rahman, S.Kom', 'taufiq.png', NULL, 'Pendidik', 'taufiqqurrohman91', NULL, '[\"UI/UX\", \"HTML\", \"CSS\", \"JavaScript\", \"Microsoft Access\"]'),
(8, 'Muhammad Ishomuddin', 'new.png', NULL, 'Pendidik', 'yanto87', NULL, '[\"UI/UX\", \"HTML\", \"CSS\", \"JavaScript\", \"Microsoft Access\"]');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(11) NOT NULL,
  `matkul` text NOT NULL,
  `sks` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `jurusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `file` text NOT NULL,
  `tahun` int(11) NOT NULL,
  `berita` text DEFAULT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id`, `title`, `file`, `tahun`, `berita`, `created_at`) VALUES
(7, 'Juara 3 FHQ', 'winner-20250312 135949.jpg', 2021, 'Selamat dan sukses atas diraihnya beberapa kejuaran pada lomba Tingkat Nasional oleh santri MA Zainul Hasan 1 Genggong.', '2021-02-10'),
(8, 'Harapan 2 FHQ', 'winner-20250312 140042.jpg', 2021, 'Selamat dan sukses atas diraihnya beberapa kejuaran pada lomba Tingkat Nasional oleh santri MA Zainul Hasan 1 Genggong.', '2021-02-10'),
(9, 'Medali Perunggu FHQ', 'winner-20250312 140230.jpg', 2021, 'Selamat dan sukses atas diraihnya beberapa kejuaran pada lomba Tingkat Nasional oleh santri MA Zainul Hasan 1 Genggong.', '2021-02-10'),
(10, 'Medali Perunggu FHQ', 'winner-20250312 140259.jpg', 2021, 'Selamat dan sukses atas diraihnya beberapa kejuaran pada lomba Tingkat Nasional oleh santri MA Zainul Hasan 1 Genggong.', '2021-02-10'),
(11, 'Bronze Award TIMO', 'winner-20250312 140432.jpg', 2021, 'Alhamdulillah..\r\nSelamat dan sukses atas diraihnya prestasi oleh santri MA Zainul Hasan 1 Genggong pada Thailand International Mathematical Olympiad 2020-2021.', '2021-02-11'),
(12, 'Merit Award TIMO', 'winner-20250312 140511.jpg', 2021, 'Alhamdulillah..\r\nSelamat dan sukses atas diraihnya prestasi oleh santri MA Zainul Hasan 1 Genggong pada Thailand International Mathematical Olympiad 2020-2021.', '2021-02-11'),
(13, 'Medali Perak MSC', 'winner-20250312 142304.jpg', 2021, 'Alhamdulillah. Selamat dan sukses untuk santri MA Zainul Hasan 1 Genggong yang meraih medali pada Olimpiade MSC (Madrasah Sains Competition) 28 Februari lalu.', '2021-03-22'),
(14, 'Medali Perunggu MSC', 'winner-20250312 142348.jpg', 2021, 'Alhamdulillah. Selamat dan sukses untuk santri MA Zainul Hasan 1 Genggong yang meraih medali pada Olimpiade MSC (Madrasah Sains Competition) 28 Februari lalu.', '2021-03-22'),
(15, 'Medali Perunggu MSC', 'winner-20250312 142422.jpg', 2021, 'Alhamdulillah. Selamat dan sukses untuk santri MA Zainul Hasan 1 Genggong yang meraih medali pada Olimpiade MSC (Madrasah Sains Competition) 28 Februari lalu.', '2021-03-22'),
(16, 'Medali Perunggu MSC', 'winner-20250312 142532.jpg', 2021, 'Alhamdulillah. Selamat dan sukses untuk santri MA Zainul Hasan 1 Genggong yang meraih medali pada Olimpiade MSC (Madrasah Sains Competition) 28 Februari lalu.', '2021-03-22'),
(17, 'Medali Perunggu MSC', 'winner-20250312 142609.jpg', 2021, 'Alhamdulillah. Selamat dan sukses untuk santri MA Zainul Hasan 1 Genggong yang meraih medali pada Olimpiade MSC (Madrasah Sains Competition) 28 Februari lalu.', '2021-03-22'),
(18, 'Medali Perunggu MSC', 'winner-20250312 142721.jpg', 2021, 'Alhamdulillah. Selamat dan sukses untuk santri MA Zainul Hasan 1 Genggong yang meraih medali pada Olimpiade MSC (Madrasah Sains Competition) 28 Februari lalu.', '2021-03-22'),
(19, 'Medali Perunggu MSC', 'winner-20250312 142756.jpg', 2021, 'Alhamdulillah. Selamat dan sukses untuk santri MA Zainul Hasan 1 Genggong yang meraih medali pada Olimpiade MSC (Madrasah Sains Competition) 28 Februari lalu.', '2021-03-22'),
(20, 'Medali Perunggu MSC', 'winner-20250312 142834.jpg', 2021, 'Alhamdulillah. Selamat dan sukses untuk santri MA Zainul Hasan 1 Genggong yang meraih medali pada Olimpiade MSC (Madrasah Sains Competition) 28 Februari lalu.', '2021-03-22'),
(21, 'Lolos SNMPTN 2021', 'winner-20250312 143038.jpg', 2021, 'Selamat dan Sukses Santri MA Zainul Hasan 1 Genggong.\r\nYang Lulus Seleksi Perguruan Tinggi Jalur SNMPTN 2021.', '2021-03-24'),
(22, 'Silver Award PhIMO', 'winner-20250312 143241.jpg', 2021, 'Alhamdulillah. Selamat dan sukses kepada Salsabila Meisefiyani yang telah meraih SILVER AWARD pada Phillipine International Mathematical Olympiad Heat Round 2021. Semoga membawa barokah. Aamiin', '2021-04-04'),
(23, 'Silver Award TIMO', 'winner-20250312 143622.jpg', 2021, 'Alhamdulillah. Selamat dan sukses kepada Salsabila Meisefiyani yang telah meraih Silver Award pada Thailand International Mathematical  Olympiad 2020-2021. Sebuah kabar gembira untuk Keluarga Besar MA Zainul Hasan 1 Genggong di tengah suasana Idulfitri dan pandemi. Semoga membawa barokah. Aamiin', '2021-05-17'),
(24, 'Achiever Medal PIMSO', 'winner-20250312 143947.jpg', 2021, 'Alhamdulillah. Selamat dan sukses atas diraihnya Medali Achiever pada Philippine International Math and Science Olympics (Indonesia Region 2021). Semoga barokah', '2021-06-07'),
(25, 'Lolos KSN-K Fisika', 'winner-20250312 144117.jpg', 2021, 'Alhamdulillah. Kabar bahagia datang lagi untuk MA Zaha \r\nSelamat dan sukses untuk Akmal Aditya yang lolos pada KSN Tingkat Kabupaten se-Jatim (Mapel Fisika).\r\nSemoga membawa berkah dan dilancarkan di tingkat Provinsi nanti. Aamiin', '2021-06-21'),
(26, 'Lolos KSM-K', 'winner-20250312 144340.jpg', 2021, 'Selamat dan sukses untuk santri-santri MA Zainul Hasan 1 Genggong yang telah berhasil Lolos Kompetisi Sains Madrasah (KSM) 2021 tingkat Kabupaten.', '2021-08-28'),
(27, 'Juara 1 Bahasa Arab', 'winner-20250312 144544.jpg', 2021, 'Selamat dan Sukses kepada:\r\nMuhammad Abdul Qodir\r\natas diraihnya Juara 1\r\nKhitobah Bahasa Arab Tingkat Nasional\r\npada Festival Nasional Zukhruf\r\nUIN Sunan Ampel Surabaya', '2021-10-23'),
(28, 'Gold Medal TIMO', 'winner-20250312 144725.jpg', 2021, 'Alhamdulillah untuk kesekian kalinya Ananda Salsa mengharumkan nama MA Zaha dan Pesantren di ajang Internasional. \r\nSelamat dan sukses kepada Salsabila Meisefiyani yang telah meraih GOLD MEDAL pada Thailand International Mathematical Olympiad (TIMO) Indonesia Region 2021. Semoga membawa barokah', '2021-11-09'),
(29, 'Juara 1 Desain grafis', 'winner-20250312 144922.jpg', 2021, 'Selamat dan sukses atas prestasi santri MA Zaha dalam ajang Pekan Olahraga dan Seni (PORSENI) yang diadakan oleh Kemenag Kab. Probolinggo tanggal 13 - 16 November 2021. Mumtaz!', '2021-11-29'),
(30, 'Juara 2 Bahasa Inggris', 'winner-20250312 145008.jpg', 2021, 'Selamat dan sukses atas prestasi santri MA Zaha dalam ajang Pekan Olahraga dan Seni (PORSENI) yang diadakan oleh Kemenag Kab. Probolinggo tanggal 13 - 16 November 2021. Mumtaz!', '2021-11-26'),
(31, 'Juara 2 Bahasa Arab', 'winner-20250312 145052.jpg', 2021, 'Selamat dan sukses atas prestasi santri MA Zaha dalam ajang Pekan Olahraga dan Seni (PORSENI) yang diadakan oleh Kemenag Kab. Probolinggo tanggal 13 - 16 November 2021. Mumtaz!', '2021-11-26'),
(32, 'Juara 3 Cipta puisi', 'winner-20250312 145133.jpg', 2021, 'Selamat dan sukses atas prestasi santri MA Zaha dalam ajang Pekan Olahraga dan Seni (PORSENI) yang diadakan oleh Kemenag Kab. Probolinggo tanggal 13 - 16 November 2021. Mumtaz!', '2021-11-26'),
(33, 'Juaa 3 MFQ', 'winner-20250312 145220.jpg', 2021, 'Selamat dan sukses atas prestasi santri MA Zaha dalam ajang Pekan Olahraga dan Seni (PORSENI) yang diadakan oleh Kemenag Kab. Probolinggo tanggal 13 - 16 November 2021. Mumtaz!', '2021-11-26'),
(34, 'Desain Konten Terfavorit', 'winner-20250312 145439.jpg', 2021, 'Selamat dan sukses atas prestasi santri MA Zaha di tingkat Nasional dalam ajang Procommit V.11 Prodistik ITS Surabaya yang memperoleh Juara Desain Content Instagram Terfavorit atas nama Sasa Nola Tsaira (XI IPA 3)', '2021-11-29'),
(35, 'Juara 2 Procommit', 'winner-20250312 145607.jpg', 2021, 'Selamat dan sukses atas prestasi santri MA Zaha di tingkat Nasional dalam ajang Procommit V.11 Prodistik ITS Surabaya yang memperoleh  Juara 2 Apresiasi Karya Akhir Siswa dengan judul \"Aplikasi Database Klinik Hafshawaty Pesantren Zainul Hasan Menggunakan Ms Access\" atas nama Yuliatin Ningsih (XII IPA 3)', '2021-11-29'),
(36, 'Bronze Award PhIMO', 'winner-20250312 145846.jpg', 2021, 'Selamat dan sukses atas prestasi santri MA Zaha di tingkat Internasional atas nama Salsabila Meisefiyani (XI PK 1)\r\nMendapat Bronze Award dalam ajang PHIMO (Philippine International Mathematical Olympiad) Final Internasional yg bersaing dengan negara-negara lain.', '2021-11-29'),
(37, 'Lolos SNMPTN 2022', 'winner-20250312 151121.jpg', 2022, 'Alhamdulillah. Sebanyak 19 santri diterima di Perguruan Tinggi melalui jalur SNMPTN.', '2022-04-10'),
(38, 'Lolos SPAN PTKIN', 'winner-20250312 151303.jpg', 2022, 'Alhamdulillah. Sebanyak 60 santri diterima di Perguruan Tinggi Negeri  melalui jalur SPAN-PTKIN 2022.', '2022-04-18'),
(39, 'Silver Award HKIMO', 'winner-20250312 151505.jpg', 2022, 'Selamat dan sukses \r\nAnanda Salsabila Meisefiyani Mendapatkan *Silver Award* dalam ajang HKIMO (Hongkong Internasional Mathematical Olympiad) Indonesia round 2022', '2022-06-08'),
(40, 'Lolos OSN-K Geografi', 'winner-20250312 151639.jpg', 2022, 'FAHMI RAMADHAN SIREGAR (XI IPS 2)\r\nLolos ke tingkat Provinsi (OSN - P) 2022\r\nBidang Geografi\r\n\r\nMohon doanya, semoga diberikan kemudahan di tingkat provinsi dan lolos ke tingkat Nasional.', '2022-06-15'),
(41, 'Lolos PTN Jalur Prestasi', 'winner-20250312 151843.jpg', 2022, 'Selamat dan sukses kepada santri MA Zaha yang lolos seleksi jalur prestasi Universitas Negeri Surabaya (UNESA) 2022', '2022-07-20'),
(42, 'Juara 3 KSM-K Ekonomi', 'winner-20250312 152017.jpg', 2022, 'Kabar gembira di bulan Kemerdekaan. Santri MA Zaha atas nama Ahmad Kusairi meraih Juara 3 pada ajang Olimpiade Kompetisi Sains Madrasah 2022 Bidang Studi Ekonomi Tingkat Kabupaten.', '2022-08-20'),
(43, 'Semifinalis OLMAT UINSA', 'winner-20250312 152220.jpg', 2022, 'Alhamdulillah 2 peserta santri MA Zainul Hasan 1 Genggong LOLOS ke babak Semifinal Olimpiade Matematika yang diselenggarakan oleh UIN Sunan Ampel Surabaya, atas nama:\r\n- Salsabila Meisefiyani XII PK 1 (peserta 50 terbaik nasional) \r\n(10 % terbaik tingkat rayon se-Malang)', '2022-09-14'),
(44, 'Semifinalis OLMAT UINSA', 'winner-20250312 152308.jpg', 2022, 'Alhamdulillah 2 peserta santri MA Zainul Hasan 1 Genggong LOLOS ke babak Semifinal Olimpiade Matematika yang diselenggarakan oleh UIN Sunan Ampel Surabaya, atas nama:\r\n- Barizatul Jannah XII IPA 1 \r\n(10 % terbaik tingkat rayon se-Malang)', '2022-09-14'),
(45, 'Juara 1 Ghina\' Araby', 'winner-20250312 152458.jpg', 2022, 'Selamat dan Sukses\r\nkepada Afifah Al Kamil (XII PK 1)\r\nsebagai Juara 1 Lomba Ghina\' Araby Tingkat Nasional\r\nFestival Zukhruf UIN Sunan Ampel Surabaya 2022', '2022-09-11'),
(46, 'Semifinalis Matriks', 'winner-20250312 152649.jpg', 2022, 'Selamat dan sukses \r\nKepada \r\nSalsabila Meisefiyani\r\nAtas prestasi nya sebagai\r\nPeserta lolos babak semifinal MATRIKS COMPETITION VI 2022\r\nOlimpiade Matematika tingkat SMA/SMK/MA se-Jawa Timur\r\nYang diselenggarakan oleh \r\nUniversitas Islam Negeri Jember', '2022-11-20'),
(47, 'Juara 1 Pemrograman GIM', 'winner-20250312 152900.jpg', 2022, 'Selamat Dan Sukses\r\nAtas Penghargaan yang didapat\r\nProcommit V.12\r\ndi Prodistik ITS Surabaya\r\nJuara 1\r\nLomba Pemrograman GIM', '2022-11-27'),
(48, 'Penghafal Nadzom Alfiyah', 'winner-20250312 153450.jpg', 2023, '24 santri putri MA Zaha sebagai penghafal Nadhom Alfiyah Ibnu Malik 1002 bait yang mendapatkan penghargaan pada Haflatul Imtihan (Putri) ke 91 Pondok Pesantren Zainul Hasan Genggong.', '2023-03-07'),
(49, 'Penghafal Nadzom Alfiyah', 'winner-20250312 153557.jpg', 2023, '19 santri putra MA Zaha sebagai penghafal Nadhom Alfiyah Ibnu Malik 1002 bait yang mendapatkan penghargaan pada Haflatul Imtihan (Putra) ke 91 Pondok Pesantren Zainul Hasan Genggong.', '2023-03-07'),
(50, 'Lolos PTN jalur SNBP', 'winner-20250312 153729.jpg', 2023, 'Alhamdulillah.\r\nSebanyak 26 santri kelas XII MA Zainul Hasan 1 Genggong diterima di Perguruan Tinggi Negeri Jalur SNBP (Seleksi Nasional Berdasarkan Prestasi) 2023.\r\nLulusan MA Zaha terbukti diterima di Perguruan Tinggi Negeri Favorit.\r\nJangan ragu, bergabunglah bersama kami!\r\nMA Zaha Mumtaz Berkualitas.', '2023-03-29'),
(51, 'Mahasiswa Termuda UNAIR', 'winner-20250312 153854.jpg', 2023, 'Alhamdulillah\r\nSiti Ma\'rifatul Khoir\r\nSalah satu santri MA Zaha yang lolos SNBP 2023 di kampus UNAIR Surabaya.\r\nBaca beritanya di sini:\r\nhttps://unair.ac.id/siswa-asal-probolinggo-menjadi-mahasiswa-termuda-unair-saat-berusia-15-tahun/', '2023-04-01'),
(52, 'Lolos PTN jalur SPAN', 'winner-20250312 154455.jpg', 2023, 'Alhamdulillah.\r\nSebanyak 42 santri MA Zainul Hasan 1 Genggong diterima di Perguruan Tinggi Negeri Jalur SPAN PTKIN 2023.\r\nJangan ragu, bergabunglah bersama kami!\r\nMA Zaha Mumtaz Berkualitas.', '2023-04-03'),
(53, 'Silver Award Final TIMO', 'winner-20250312 154623.jpg', 2023, 'Selamat dan sukses\r\nSalsabila Meisefiyani atas diraihnya SILVER AWARD pada ajang Thailand International Mathematical Olympiad (TIMO) Final Round 2022 - 2023 di Pattaya, Thailand.', '2023-05-06'),
(54, 'Juara 2 Poster', 'winner-20250312 154727.jpg', 2023, 'Selamat dan Sukses\r\nIrma Yuni Dwi Lestari (XI IPA 3)\r\nJuara 2 Lomba Poster\r\nBEM Stikes Hafshawaty Genggong dalam rangka Hari Kesehatan Sedunia 2023', '2023-05-14'),
(55, 'Lolos seleksi BSPP', 'winner-20250312 154858.jpg', 2023, 'Selamat dan Sukses\r\nkepada santri MA ZAHA.\r\nMoh. Hasan Naufal Maulana \r\n(lolos seleksi Program Beasiswa Santri Pondok Pesantren (BSPP) ke Universitas Al-Azhar Kairo Mesir 2023 LPPD Provinsi Jawa Timur)\r\nTerima kasih kepada Gubernur Jawa Timur dan Lembaga Pengembangan Pesantren dan Diniyah (LPPD) Jawa Timur.\r\nSemoga bisa menjadi motivasi bagi santri yang lain.', '2023-06-03'),
(56, 'Diterima S1 Bachelor', 'winner-20250312 155033.jpg', 2023, 'Selamat dan Sukses\r\nMieke Cahaya Putri\r\nSantri MA Zainul Hasan 1 Genggong \r\natas diterimanya pada program Bachelor (S1) di Holy Quran and Islamic Sciences University, Hadromaut Yaman', '2023-06-16'),
(57, 'Lolos PTN jalur SNBT', 'winner-20250312 155151.jpg', 2023, 'Selamat dan Sukses \r\nSantri MA Zainul Hasan 1 Genggong diterima di Perguruan Tinggi Negeri Jalur SNBT SNPMB 2023\r\n1. Atina Salsabila \r\nTata Busana - Universitas Negeri Surabaya\r\n2. Barizatul Jannah\r\nMatematika - Universitas Jember\r\n3. Wardatun Hasanah\r\nPendidikan Matematika - Universitas Negeri Surabaya \r\nJangan ragu, bergabunglah bersama kami!\r\nMA Zaha Mumtaz Berkualitas.', '2023-06-23'),
(58, 'Juara KSM-K', 'winner-20250312 155401.jpg', 2023, 'Selamat dan Sukses\r\n\r\n3 Santri MA Zaha menorehkan prestasi pada ajang Kompetisi Sains Madrasah (KSM) 2023 Tingkat Kabupaten dan berhak mewakili Kabupaten Probolinggo ke tingkat Provinsi.\r\n1. Sidqiana Azzahra (Juara 1 KSM Matematika Terintegrasi)\r\n2. Ghinan Nafsi Manzilatul Hasanah (Juara 1 KSM Kimia Terintegrasi)\r\n3. Da\'imatul Istiqomah (Juara 3 KSM Fisika Terintegrasi)\r\nSemoga diberikan kemudahan dan kelancaran di tingkat provinsi.', '2023-07-14'),
(59, 'Lolos PTN jalur Prestasi', 'winner-20250312 155525.jpg', 2023, 'Selamat dan Sukses \r\n6 Santri MA Zaha diterima di Universitas Negeri Surabaya melalui jalur prestasi 2023\r\n1. Adzani Farhan Habibie (S1 Teknik Sipil)\r\n2. Nafisah Lutfiah Latifah (S1 Psikologi)\r\n3. Ridlan Daulabi (S1 Teknik Mesin)\r\n4. Elok Faiqoh (S1 Informatika)\r\n5. Kasyiful Kurob (S1 PGSD)\r\n6. Fila Indana (S1 Informatika)', '2023-07-20'),
(60, 'Juara Gerak Jalan', 'winner-20250312 155710.jpg', 2023, 'Selamat dan Sukses\r\nMA Zainul Hasan 1 Genggong \r\nBorong Juara\r\nLomba gerak jalan tingkat SLTA se Kecamatan dalam rangka HUT RI ke 78.\r\nJuara 1 Putra (No 143)\r\nJuara 4 Putra (No 153)\r\nMA Zaha Mumtaz Berkualitas.\r\nMadrasah Hebat Bermartabat, Mandiri Berprestasi.', '2023-08-20'),
(61, 'Juara 3 Content Creator', 'winner-20250312 155831.jpg', 2023, 'Selamat dan Sukses\r\nSantri Prodistik MA Zainul Hasan 1 Genggong\r\nJuara 3 \r\nContent Creator dan Web \r\npada ajang Pesantren Digital yang diselenggarakan oleh TV9 dan XL Axiata (diikuti 118 pesantren se Jawa Timur) tanggal 12 September 2023.\r\n1. Afcharina Diniyil Muhlisin\r\n2. Febby Aulia Diva\r\n3. Jinani Firdausiyah\r\n4. Nuri Faizatul Himmah\r\n5. Karimatus Sya\'diyah', '2023-09-12'),
(62, 'Finalis PHI', 'winner-20250312 155943.jpg', 2023, 'Selamat dan sukses \r\nkepada\r\nSidqiana Azzahra (XI IPA 1)\r\nLolos ke babak perebutan juara\r\nOlimpiade Matematika Tingkat Nasional PHI XXII 2023\r\nUniversitas Islam Malang (UNISMA)', '2023-09-17'),
(63, 'Semifinalis Nupho', 'winner-20250312 160052.jpg', 2023, 'Selamat dan sukses \r\nkepada\r\nM. AMRI AMIRUDDIN (XII IPA 4)\r\nLolos ke babak semifinal\r\nOlimpiade Fisika Tingkat Nasional NuPho 2023 Universitas Negeri Malang.', '2023-09-24'),
(64, 'Merit Award Final PHI', 'winner-20250312 160205.jpg', 2023, 'Selamat dan sukses \r\nkepada\r\nSidqiana Azzahra (XI IPA 1)\r\nmendapatkan Merit Award pada Grand Final\r\nOlimpiade Matematika Tingkat Nasional PHI XXII 2023\r\nUniversitas Islam Malang (UNISMA)', '2023-10-03'),
(65, 'Silver Medal LIMAS', 'winner-20250312 160317.jpg', 2023, 'Selamat dan sukses \r\nkepada\r\nSidqiana Azzahra (XI IPA 1)\r\nAtas diraihnya Silver Medal pada Olimpiade Matematika Tingkat Nasional LIMAS IV 2023 oleh COLUMNA SAINTICIA.\r\nBerhak maju ke Grand Final dan mengikuti Indonesian Math Camp di Kota Batu.', '2023-10-19'),
(66, 'Medalis TIMO', 'winner-20250312 160421.jpg', 2023, 'Selamat dan sukses \r\n3 santri MA Zaha Goes to Thailand\r\n1. Faizah Vivi Wulandari (Silver Award)\r\n2. Sidqiana Azzahra (Bronze Award)\r\n3. Nuriyah Rahmawati (Silver Award)\r\nBerhak maju ke babak final di Thailand pada ajang Thailand Internasional Mathematical Olympiad (TIMO) 2023 - 2024.', '2023-11-03'),
(67, 'Bronze Award BBB', 'winner-20250312 160544.jpg', 2023, 'Congratulations\r\nSantri MA ZAHA GOES to MACAU-HONGKONG\r\nNuriyah Rahmawati (BRONZE AWARD)\r\nMaju ke babak FINAL di Hongkong pada ajang Olimpiade BBB (Big Bay Bei) International Mathematical Olympiad 2023 - 2024.', '2023-11-29'),
(68, 'Semifinalis KMNR-19', 'winner-20250312 160804.jpg', 2024, 'Selamat dan sukses\r\n- Faizah Vivi Agustin X IPAS 1\r\n- Aliya Firnanda X IPAS 3\r\n- Nuriyah Rahmawati X PK 1\r\n- Sidqiana Azzahra XI IPA 1\r\nLolos ke babak semifinal\r\nOlimpiade KMNR-19 (Kompetisi Matematika Nalaria Realistik) se-Indonesia oleh KPM (Klinik Pendidikan MIPA) Readi Human School', '2024-01-05'),
(69, 'Penghafal Nadzom Alfiyah', 'winner-20250312 161117.jpg', 2024, 'Selamat dan Sukses\r\n26 santri putri MA Zainul Hasan 1 Genggong Program Keagamaan sebagai penghafal Nadhom Alfiyah Ibnu Malik 1002 bait yang mendapatkan penghargaan pada Haflatul Imtihan (Putri) ke 92 Pondok Pesantren Zainul Hasan Genggong.\r\n23 Februari 2024', '2024-02-24'),
(70, 'Penghafal Nadzom Alfiyah', 'winner-20250312 161211.jpg', 2024, 'Selamat dan Sukses\r\n18 santri putra MA Zainul Hasan 1 Genggong Program Keagamaan sebagai penghafal Nadhom Alfiyah Ibnu Malik 1002 bait yang mendapatkan penghargaan pada Haflatul Imtihan (Putra) ke 92 Pondok Pesantren Zainul Hasan Genggong.', '2024-02-24'),
(71, 'Semifinalis LSM UNY', 'winner-20250312 161323.jpg', 2024, 'Selamat dan sukses\r\nAnanda\r\nSIDQIANA AZZAHRA XI IPA 1\r\nLolos ke babak semifinal\r\nOlimpiade Matematika Tingkat Nasional LSM XXXII 2024 UNY (Universitas Negeri Yogyakarta) \r\nMA ZAHA goes to JOGJA', '2024-02-29'),
(72, 'Merit Award LSM UNY', 'winner-20250312 161501.jpg', 2024, 'Congratulations\r\nAnanda\r\nSidqiana Azzahra \r\nPada Grand Final Olimpiade Matematika Tingkat Nasional LSM XXXII oleh UNY (Universitas Negeri Yogyakarta) mendapatkan MERIT AWARD', '2024-03-03'),
(73, 'Medalis OLNAS', 'winner-20250312 161618.jpg', 2024, 'Congratulations\r\nAnanda\r\n- Nur Jannah Binti Jamal Mendapatkan Medali Perak (Olimpiade Bhs Inggris) \r\n- Salsabila Nadiah Mendapatkan Medali Emas (Olimpiade Biologi) \r\n- Salzabila Ghina Firyal Mendapatkan Medali Perak (Olimpiade Biologi) \r\nPada ajang OLNAS (Olimpiade Sains Nasional) 2024\r\nPenyelenggara :\r\nRUANG DOSEN RI\r\nSTAI YAPNAS NASIONAL\r\nTRANS STUDIO', '2024-03-04'),
(74, 'Lolos PTN Jalur SNBP', 'winner-20250312 161732.jpg', 2024, 'SELAMAT DAN SUKSES\r\n21 santri MA Zaha diterima di Perguruan Tinggi Negeri Jalur SNBP (Seleksi Nasional Berdasarkan Prestasi) 2024.', '2024-03-28'),
(75, 'Finalis KMNR-19', 'winner-20250312 161838.jpg', 2024, 'Congratulations\r\nAnanda\r\n- Nuriyah Rahmawati X PK 1\r\nLolos ke BABAK FINAL\r\nOlimpiade KMNR-19 (Kompetisi Matematika Nalaria Realistik) se-Indonesia oleh KPM (Klinik Pendidikan MIPA) Readi Human School\r\nMA ZAHA goes to JAKARTA', '2024-03-30'),
(76, 'Lolos PTN Jalur SPAN', 'winner-20250312 161933.jpg', 2024, 'Alhamdulillah.\r\nSebanyak 54 santri MA Zainul Hasan 1 Genggong diterima di Perguruan Tinggi Negeri Jalur SPAN PTKIN 2024.\r\nJangan ragu, bergabunglah bersama kami!\r\nMA Zaha Mumtaz Berkualitas.', '2024-04-04'),
(77, 'Juara 1 Pilmapres', 'winner-20250312 162042.jpg', 2024, 'SELAMAT DAN SUKSES\r\nHasan Abdul Bar\r\n(Alumni MA Zaha 2021)\r\nJuara 1 Pemilihan Mahasiswa Berprestasi (Pilmapres) UNESA 2024', '2024-04-09'),
(78, 'Merit Award Final BBB', 'winner-20250312 162141.jpg', 2024, 'Congratulations\r\nNuriyah Rahmawati X PK 1\r\nMendapatkan MERIT AWARD\r\nBabak FINAL Olimpiade Matematika Internasional BBB (Big Bay Bei) MACAU-HONGKONG 2023 - 2024', '2024-04-21'),
(79, 'Juara 1 OSN-K Informatika', 'winner-20250312 162246.jpg', 2024, 'Selamat dan Sukses\r\nAnanda\r\nShidqiana Azzahra XI IPA 1\r\nJuara 1 Tingkat Kabupaten Mapel Informatika \r\nLolos ke Tingkat Provinsi\r\nOSN 2024 (Olimpiade Sains Nasional) oleh Kemendikbud', '2024-04-22'),
(80, 'Merit Award Final TIMO', 'winner-20250312 162408.jpg', 2024, 'Congratulations\r\nAnanda\r\n1. Sidqiana Azzahra \r\n2. Nuriyah Rahmawati\r\n3. Faizah Vivi Agustin\r\nMendapatkan MERIT AWARD\r\nBabak FINAL Olimpiade Matematika Internasional TIMO (Thailand International Mathematic Olympiad) 2023 - 2024\r\nBangkok, 25-29 April 2024', '2024-04-29'),
(81, 'Juara 2 Cerdas Cermat', 'winner-20250312 162722.jpg', 2024, 'Selamat dan Sukses \r\nPramuka Reguler MA Zaha\r\nJuara 2 Cerdas Cermat Putra\r\nProbolinggo Scout Competition\r\nTahun 2024', '2024-06-25'),
(82, 'Lolos PTN Jalur Prestasi', 'winner-20250312 162826.jpg', 2024, 'Selamat dan Sukses \r\n10 Santri MA Zaha diterima di Universitas Negeri Surabaya (UNESA) 2024 jalur beasiswa.', '2024-06-26'),
(83, 'Lolos PTN Jalur SNBT', 'winner-20250312 162932.jpg', 2024, 'SELAMAT DAN SUKSES\r\nSantri diterima di Perguruan Tinggi Negeri Jalur SNBT (Seleksi Nasional Berdasarkan Tes) 2024.\r\n1. Cahayu Asashofa (S1 Desain Produk Industri - ISI Surakarta)\r\n2. Ahmad Farhan Okta Giyantono (S1 Teknologi Industri Pertanian - Universitas Jember)', '2024-06-28'),
(84, 'Juara 1 KSM-K', 'winner-20250312 163042.jpg', 2024, 'Selamat dan Sukses\r\nTIM MA Zaha\r\n1. Tania Lutfiyani (XI IPA 1)\r\n2. Listiana Azizah (XI IPA 1)\r\n2. Wely Astutik (XI IPS 2)\r\nJuara 1 \r\nMapel Sosial Sains Terpadu\r\nPada ajang KSM (Kompetisi Sains Madrasah) 2024 oleh KEMENAG \r\ndan Lolos ke Tingkat PROVINSI.', '2024-07-07'),
(85, 'Juara 3 Film Dokumenter', 'winner-20250312 163237.jpg', 2024, 'Selamat dan Sukses \r\nTim MA Zaha \r\n1. Diana Khotibi (XII IPA 2)\r\n2. Fiantika Naematul J. (XII IPS 1)\r\n3. Laella Farkiyah Fitriana (XII IPS 1)\r\n4. Ivelyna Livia Putri Aisyah (XII IPA 2)\r\n5. Adinda Nayla Shakira (XII IPA 1)\r\n6. Camelia Medina (XI IPS 1)\r\nJuara 3\r\nFilm Dokumenter Inspiratif \r\npada ajang Cikal Aksi 2024 Pramuka Tingkat Penegak se-Indonesia yang diadakan oleh Pramuka PP3 Universitas Negeri Malang.', '2024-08-14'),
(86, 'Juara 2 Gerak Jalan', 'winner-20250312 163344.jpg', 2024, 'Selamat dan Sukses\r\nTIM Gerak Jalan Putra (No 138)\r\nMA Zainul Hasan 1 Genggong \r\nJuara 2 \r\nLomba Gerak Jalan Jenjang SLTA se Kecamatan Pajarakan\r\ndalam rangka HUT RI ke 79\r\noleh PGRI Cabang Pajarakan', '2024-08-24'),
(87, 'Juara 2 Videography', 'winner-20250312 163501.jpg', 2024, 'Selamat Dan Sukses\r\nMutiara Nirwana Cahyani\r\nJuara 2 lomba Videography\r\nPada Kegiatan EPIM 2024\r\nTeknologi Informasi Politeknik Negeri Jember.', '2024-09-01'),
(88, 'Juara 3 Futsal', 'winner-20250312 163559.jpg', 2024, 'Selamat dan Sukses\r\nTim Futsal MA Zaha\r\nJuara 3\r\nKejurkab Futsal Bupati Cup\r\nTingkat SMA, MA, dan SMK sederajat 2024.', '2024-09-15'),
(89, 'Finalis PHI', 'winner-20250312 163729.jpg', 2024, 'Congratulations\r\nAnanda\r\nFaizah Vivi Agustin XI IPA 1\r\nAisyah Putri Maulidasyah XII IPA 3\r\nLolos ke babak perebutan juara\r\nOlimpiade Matematika Tingkat Nasional PHI XXIII 2024 oleh Universitas Islam Malang (UNISMA)', '2024-09-19'),
(90, 'Merit Award Final PHI', 'winner-20250312 163833.jpg', 2024, 'Selamat dan sukses \r\nFaizah Vivi Agustin (XI IPA 1)\r\nAisyah Putri Maulidasyah (XII IPA 3) \r\nmendapatkan Merit Award pada Grand Final\r\nOlimpiade Matematika Tingkat Nasional PHI XXIII 2024\r\nUniversitas Islam Malang (UNISMA)', '2024-10-01'),
(91, 'Juara 2 Futsal', 'winner-20250312 163949.jpg', 2024, 'Selamat dan Sukses\r\nTim Futsal MA Zaha\r\nJuara 2 dan The Best Goalkeeper \r\nPiala Santri 2024\r\nTurnamen Futsal Antar Pesantren se-Kabupaten Probolinggo dalam Rangka Hari Santri Nasional 2024', '2024-10-08'),
(92, 'Finalis Matematika EMC', 'winner-20250312 164113.jpg', 2024, 'Congratulations\r\nAnanda\r\nSaelan Maulidany Midad (X-I) \r\nWidhat Ainur Muttaqin (X-G) \r\nFaizah Vivi Agustin (XI IPA 1) \r\nAliya Firnanda (XI IPA 3) \r\nNuriyah Rahmawati (XI PK 1) \r\nSidqiana Azzahra (XII IPA 1)\r\nLOLOS BABAK FINAL\r\nOlimpiade Matematika Tingkat Nasional EMC (Eduversal Mathematics Competition) oleh Eduversal Foundation di Malang.', '2024-11-09'),
(93, 'Bronze Medal IKSC', 'winner-20250312 164245.jpg', 2024, 'Congratulations\r\nNayfal Alif Azzamul Haq (X-I) \r\nMendapatkan BRONZE MEDAL\r\nPada ajang Olimpiade IKSC (International Kangaroo Science Contest) se-Indonesia\r\nPenyelenggara KPM (Klinik Pendidikan MIPA) Readi Human School', '2024-11-20'),
(94, 'Semifinalis Fisika UNEJ', 'winner-20250312 164408.jpg', 2024, 'Congratulations\r\nAnanda\r\nNuri Faizatul Himmah Ramadhani XII IPA 2\r\nSidqiana Azzahra XII IPA 1\r\nLolos ke babak Semifinal \r\nOlimpiade Fisika Tingkat Nasional 2024 di Universitas Negeri Jember (UNEJ) OFFLINE', '2024-11-30'),
(95, 'Juara Fisika UNEJ', 'winner-20250312 164742.jpg', 2024, 'Selamat dan sukses \r\nkepada\r\nSidqiana Azzahra (XII IPA 1) Juara Harapan 3\r\nNuri Faizatul Himmah R. (XII IPA 2) Juara 10 Besar \r\nPada Grand Final (Offline) \r\nOlimpiade Fisika Tingkat Nasional PHYSTON 2024\r\nUniversitas Negeri Jember (UNEJ)', '2024-12-04'),
(96, 'Semifinalis KMNR-20', 'winner-20250312 165415.jpg', 2025, 'Congratulations\r\n- Sidqiana Azzahra XII IPA 1\r\n- Faizah Vivi Agustin XI IPA 1\r\n- Aliya Firnanda XI IPA 3\r\n- Nuriyah Rahmawati XI PK 1\r\n- Widhat Ainur Muttaqin X-G\r\n- Saelan Maulidany Midad X-I \r\nLOLOS BABAK SEMIFINAL\r\nOlimpiade KMNR-20 (Kompetisi Matematika Nalaria Realistik) se-Indonesia oleh KPM (Klinik Pendidikan MIPA) Readi Human School 2025.', '2025-02-08'),
(97, 'Penghafal Hadis Arbain', 'winner-20250312 165941.jpg', 2025, 'Alhamdulillah \r\nSelamat dan Sukses\r\nkepada Santri MA Zainul Hasan 1 Genggong sebagai:\r\n1. Penghafal Hadits Arbain Nawawi (16 Santri Putra)\r\n2. Penghafal Nadhom Alfiyah Ibnu Malik 1002 bait (24 Santri Putra)\r\n3. Penghafal Nadhom Alfiyah Ibnu Malik 1002 bait (27 Santri Putri)\r\nmendapatkan penghargaan pada Haflatul Imtihan ke 93 Pondok Pesantren Zainul Hasan Genggong.', '2025-02-13'),
(98, 'Finalis OLNAS', 'winner-20250326 171810.jpg', 2025, 'Congratulations\r\n\r\n- Faizah Vivi Agustin XI IPA 1\r\n- Aliya Firnanda XI IPA 3\r\n- Nuriyah Rahmawati XI PK 1\r\n- Aril Prasetya XI IPA 4 \r\n- Ula Syafwan Maulana XI IPA 4 \r\n\r\nLOLOS BABAK FINAL\r\nOLNAS 2025 (Olimpiade Sains Nasional) se-Indonesia oleh Ruang Dosen RI ke Batu (Malang) Tgl 27 April 2025.', '2025-03-16'),
(99, 'Lolos PTN jalur SNBP', 'winner-20250326 171957.jpg', 2025, 'SELAMAT DAN SUKSES\r\n\r\n25 santri MA Zaha diterima di Perguruan Tinggi Negeri Jalur SNBP (Seleksi Nasional Berdasarkan Prestasi) 2025.', '2025-03-17'),
(100, 'Finalis KMNR-20', 'winner-20250326 172138.jpg', 2025, 'Congratulations\r\n- Widhat Ainur Muttaqin X-G\r\n- Sidqiana Azzahra XII IPA 1\r\nLOLOS BABAK FINAL\r\nOlimpiade KMNR-20 (Kompetisi Matematika Nalaria Realistik) se-Indonesia oleh KPM (Klinik Pendidikan MIPA) Readi Human School 2025 ke Tangerang (Banten) \r\n26 - 28 April 2025.', '2025-03-25'),
(102, 'Lolos SPAN PTKIN 2025', 'winner-20250414 050710.jpg', 2025, 'SELAMAT DAN SUKSES\r\n\r\n71 santri MA Zaha diterima di Perguruan Tinggi Negeri Jalur SPAN-PTKIN 2025.', '2025-03-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni_alumni`
--

CREATE TABLE `testimoni_alumni` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `foto` text DEFAULT NULL,
  `nama` text NOT NULL,
  `tahun_lulus` varchar(100) DEFAULT NULL,
  `testimoni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni_prodistik`
--

CREATE TABLE `testimoni_prodistik` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `nama` text NOT NULL,
  `foto` text DEFAULT NULL,
  `tahun_lulus` varchar(20) DEFAULT NULL,
  `jurusan` text DEFAULT NULL,
  `testimoni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `testimoni_prodistik`
--

INSERT INTO `testimoni_prodistik` (`id`, `created_at`, `nama`, `foto`, `tahun_lulus`, `jurusan`, `testimoni`) VALUES
(1, '2025-03-27 23:14:01', 'Seseorang', 'person.png', '2026', '', 'Hai, aku senang di siniiii'),
(2, '2025-04-05 14:43:24', 'Hamba Allah', 'person.png', NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, molestias!'),
(5, '2025-04-05 14:50:58', 'Salah', 'person.png', NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, molestias!'),
(6, '2025-04-05 14:54:41', 'Bismillah', 'tes-20250405 075441.png', '2000', 'Keislaman', 'ka dkef fkefm ekenvcm mv jvr'),
(7, '2025-04-05 14:58:17', 'Alumni MA', 'tes-20250405 075817.png', '2031', 'Multimedia', 'Thanks for MA ZAHA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugasakhir`
--

CREATE TABLE `tugasakhir` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `file` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `name` text NOT NULL,
  `jurusan` text NOT NULL,
  `tahun` varchar(20) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tugasakhir`
--

INSERT INTO `tugasakhir` (`id`, `title`, `file`, `link`, `name`, `jurusan`, `tahun`, `deskripsi`) VALUES
(1, 'Website \"Psychic\"', 'header.png', NULL, 'Sidqiana Azzahra', 'Programming', '2025', 'Perancangan Website \"Psychic\" Sebagai Sarana Tes Minat Bakat Berdasarkan Metode John Holland Menggunakan Laravel 8\r\n'),
(3, 'Film \"The Puzzle\"', 'slide2.png', 'oj5x2Ru908g', 'Leni Devi Anggita', 'Multimedia', '2025', '#kotak {\r\n  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);\r\n  filter: blur(10px);\r\n}\r\n#kotak{\r\n  -webkit-mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 1) 60%, rgba(0, 0, 0, 0) 100%); */\r\n  /* mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 1) 60%, rgba(0, 0, 0, 0) 100%); */\r\n\r\n'),
(5, 'Film \"Cinta yang Disisipkan\"', 'ta-20250406 075511.avif', 'DPEpOIfaSdE', 'Hilmiyatin Ningsih', 'Multimedia', '2022', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, molestias!'),
(6, 'Website \"Diva Pratama\"', 'ta-20250414 054413.jpg', NULL, 'Alisa Nafisa Nadiratul Jannah', 'Programming', '2025', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, molestias!'),
(7, 'Website Pondok Raudhatul Hasaniyah 1', 'ta-20250414 054606.png', NULL, 'Anggun Diah Permata Sari', 'Programming', '2025', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, molestias!'),
(8, 'Website \"UD Barokah\"', 'ta-20250414 054910.png', NULL, 'Bunga Citra Lestari', 'Programming', '2025', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, molestias!'),
(9, 'Website Penjualan Aksesoris Handphone', 'ta-20250414 055025.png', NULL, 'Erina Zulvana', 'Programming', '2025', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, molestias!'),
(10, 'Website MA Raudlatul Ulum', 'ta-20250414 055345.png', NULL, 'Hikmiya Haidaro', 'Programming', '2025', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, molestias!'),
(11, 'Website Puskesmas Condong', 'ta-20250414 055652.png', NULL, 'Lailatul Hilalah', 'Programming', '2025', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, molestias!'),
(12, 'Website Ponkesdes Bulang', 'ta-20250414 055915.png', NULL, 'Najma Safa Robbani', 'Programming', '2025', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, molestias!'),
(13, 'Film \"Kejaran Tulah\"', 'ta-20250414 060524.avif', 'ldjKBWgT-k0', 'Laella Farkiyah Fitriana', 'Multimedia', '2025', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, molestias!'),
(14, 'Website \"FanTajwid\"', 'ta-20250414 064334.png', NULL, 'Nuri Faizatul Himmah Ramadhani', 'Programming', '2025', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, molestias!'),
(15, 'Website Desa Klampok', 'ta-20250414 064804.png', NULL, 'Rodiyah Ajeng Galuh Pitaloka', 'Programming', '2025', 'Perancangan Dan Pembuatan Aplikasi \"Sistem Informasi Administrasi Di Desa Klampok\" Dengan Menggunakan Laravel 8'),
(16, 'Website \"Fara Butik\"', 'ta-20250414 064933.png', NULL, 'Tania Lutfiyani', 'Programming', '2025', 'Perancangan Dan Pembuatan Aplikasi E-Commerce Sederhana \"Fara Butik\" Berbasis Website Menggunakan Laravel 8'),
(17, 'Film \"Imposible is Nothing\"', 'ta-20250414 065725.avif', 'x9UZ625MaLk', 'Cindy Damayanti', 'Multimedia', '2023', 'Film Pendek | Imposible Is Nothing | CINDY DAMAYANTI | TA Prodistik MA ZAHA 1'),
(18, 'Dokumenter \"This Is My Island\"', 'ta-20250414 071229.avif', 'oJSJ2J1yI20', 'Firda Unaysie Salsabila', 'Multimedia', '2023', 'Film Dokumenter - This Is My Island [ Firda Unaysie Salsabila ] TA PRODISTIK MA ZAHA 1 GENGGONG'),
(19, 'Video Motivasi Rasulullah', 'ta-20250414 072712.avif', '5ezii7nZQmw', 'Moh. Rojil Ghufron', 'Multimedia', '2018', 'Motivasi dapat diartikan sebagai suatu tujuan atau pendorong, dengan tujuan sebenarnya tersebut yang menjadi daya penggerak utama bagi seseorang dalam berupaya dalam mendapatkan atau mencapai apa yang diinginkannya baik itu secara positif ataupun negatif. Di padukan dengan dakwah untuk mengatasi tradisi yang salah kaprah, dengan mengaku cinta kepada Rasulullah tapi tidak mencerminkan cinta mereka kepada Rasulullah SAW.'),
(20, 'Manajemen Bank Sentra', 'ta-20250414 173825.png', NULL, 'Afifatul Faizah', 'Administrasi Perkantoran', '2025', 'Perancangan Aplikasi Peminjaman Online \"Manajemen Online Pengajuan Pinjaman Bank Sentra\" Dengan Menggunakan Aplikasi Microsoft Excel 2021'),
(21, 'Manajemen Kasir Toko Sepatu', 'its.jpg', NULL, 'Anis Silvia', 'Administrasi Perkantoran', '2025', 'Perancangan Aplikasi Kasir Toko Sepatu Dengan Menggunakan Microsoft Acces 2019'),
(22, 'Managemen Pembayaran SPP', 'ta-20250414 175544.jpg', NULL, 'Desy Astutik Rahayu Ningsih', 'Administrasi Perkantoran', '2025', 'Perancangan Aplikasi \"Pembayaran SPP Prodistik Ma Zainul Hasan 1 Genggong\" Dengan Menggunakan Aplikasi Microsoft Acces 2021'),
(23, 'Manajemen Hotel \"Bromo View\"', 'ta-20250414 180429.png', NULL, 'Julia Cindy Camelia Arifin', 'Administrasi Perkantoran', '2025', 'Perancangan Aplikasi Optimasi Persediaan Dan Pemesanan Bahan Baku Hotel \"Bromo View\" Dengan Menggunakan Aplikasi Microsoft Excel 2021'),
(24, 'Manajemen Tabungan Sembako', 'ta-20250414 180628.jpg', NULL, 'Laila Nabil Kustina', 'Administrasi Perkantoran', '2025', 'Perancangan Aplikasi \"Tabungan Sembako\" Dengan Menggunakan Aplikasi Microsoft Acces 2016'),
(25, 'Manajemen Toko Kelontang \"Mbak Fitri\"', 'ta-20250414 181528.jpg', NULL, 'Listiana Azizah', 'Administrasi Perkantoran', '2025', 'Perancangan Aplikasi Manajemen Pengelolaan Toko Kelontong \"Mbak Fitri\" Menggunakan Microsoft Excel 2021'),
(26, 'Manajemen Kasir \"Mayda Bakery\"', 'ta-20250414 181802.jpg', NULL, 'Maidahtul Naimah', 'Administrasi Perkantoran', '2025', 'Perancangan Aplikasi Kasir \"Mayda Bakery\" Dengan Menggunakan Aplikasi Microsoft Acces 2019'),
(27, 'Manajemen \"Tabungan Siswa  SDN 2 Lubawang\"', 'ta-20250414 181913.jpg', NULL, 'Nadila Kurnia Putri', 'Administrasi Perkantoran', '2025', 'Perancangan Aplikasi \"Tabungan Siswa  SDN 2 Lubawang\" Dengan Menggunakan Aplikasi Microsoft Acses 2021'),
(28, 'Manajemen \"Toko Kreasi Kueku\"', 'ta-20250414 182523.png', NULL, 'Nafra Masulatul Ladhibah', 'Administrasi Perkantoran', '2025', 'Perancangan Aplikasi Manajemen Stok Alat Dan Bahan \"Toko Kreasi Kueku\" Dengan Menggunakan Aplikasi Microsoft Acces 2013'),
(29, 'Manajemen Rental Mobil \"Bima Satrio Trans\"', 'ta-20250414 182635.png', NULL, 'Nania Syalwa Aurenata', 'Administrasi Perkantoran', '2025', 'Perancangan Aplikasi Kasir Rental Mobil\" Bima Satrio Trans\" Dengan Menggunakan Microsoft Acces 2016'),
(30, 'Manajemen Kasir \"Penjualan Tiket Pesawat\"', 'ta-20250414 182958.png', NULL, 'Nur Risma Wati Ningsih', 'Administrasi Perkantoran', '2025', 'Perancangan Aplikasi Kasir \"Penjualan Tiket Pesawat\" Dengan Menggunakan Aplikasi Microsoft Accces 2020'),
(31, 'Manajemen Toko Sepatu \"Brezee\"', 'ta-20250414 183111.png', NULL, 'Nurul Aisyah', 'Administrasi Perkantoran', '2025', 'Perancangan Aplikasi Kasir Toko Sepatu \"Brezee\" Dengan Menggunakan Aplikasi Microsoft Acces 2021'),
(32, 'Manajemen Penjualan \"Buku Maistro\"', 'ta-20250414 183220.jpg', NULL, 'Siti Maryam', 'Administrasi Perkantoran', '2025', 'Perancangan Aplikasi Kasir Penjualan \"Buku Maistro\" Dengan Menggunakan Microsoft Acces 2021'),
(33, 'Manajemen Mebel \"Barokah\"', 'ta-20250414 183331.jpg', NULL, 'Vina Anggraeni', 'Administrasi Perkantoran', '2025', 'Perancangan Aplikasi Kasir Mebel \"Barokah\" Dengan Menggunakan Microsoft Acces 2016'),
(34, 'Manajemen Apotek \"Rahayu Medika\"', 'ta-20250414 183426.jpg', NULL, 'Wildatul Aluf', 'Administrasi Perkantoran', '2025', 'Perancangan Aplikasi Apotek \"Rahayu Medika\" Dengan Menggunakan Aplikasi Microsoft Acces 2021'),
(35, 'Manajemen \"Kasir Toko Atk Sisiwa\"', 'ta-20250414 183530.jpg', NULL, 'Zalfa Zahiyah Putri Lestari', 'Administrasi Perkantoran', '2025', 'Perancangan Aplikasi \"Kasir Toko Atk Sisiwa\" Dengan Menggunakan Aplikasi Microsoft Acces 2019'),
(36, 'Manajemen \"Apotek Surya\"', 'ta-20250414 183628.png', NULL, 'Zuhriyatuh Nasak', 'Administrasi Perkantoran', '2025', 'Perancangan Aplikasi Kasir Penjualan Obat \"Apotek Surya\" Dengan Menggunakan Aplikasi Microsoft Excel 2021'),
(37, 'Film \"Trust in Friendship\"', 'ta-20250414 185313.avif', 'mNymFyXVnnU', 'Silvia Atiatun Aisyah', 'Multimedia', '2023', 'FILM PENDEK \"TRUST IN FRIENDSHIP\" SILVIAATIATUN AISYAH-TUGAS AKHIR PRODISTIK MA ZAHA'),
(38, 'Film \"Sahabat Terakhir\"', 'ta-20250414 190108.avif', '5WD7FoWE5vo', 'Achmad Zaldi Khoirul Anam', 'Multimedia', '2023', 'Film Pendek - SAHABAT TERAKHIR | ACHMAD ZALDI KHOIRUL ANAM | TA Prodistik MA ZAHA 1 Genggong'),
(39, 'Website MA Zainul Hasan 1', 'ta-20250414 190430.png', NULL, 'Elok Faiqoh', 'Programming', '2023', 'Perancangan front end website MAdrasah Aliyah Zainul Hasan 1 Genggong menggunakan HTML, CSS, dan JavaScript'),
(40, 'Dokumenter \"Sampah\"', 'ta-20250414 191101.avif', 'ZZZvIE_pBLc&', 'Fahri Hibatur Rahman', 'Multimedia', '2023', 'Film Dokumenter \"Sampah\"'),
(41, 'Film \"Ini Saatnya\"', 'ta-20250414 191428.avif', 'DoUo-O7WlAo', 'Silsilatul Makwah', 'Multimedia', '2022', '\"INI SAATNYA\" - TA PRODISTIK MA ZAHA _Silsilatul Makwah'),
(42, 'Film \"Aku Berbeda\"', 'ta-20250414 192116.avif', 'cPuLTQIC5vY', 'Nurul Ilmiah', 'Multimedia', '2021', '\"jangan pernah mengeluh atas  kekuranganmu.karena kekurangan akan  mengingatkanmu  untuk terus mencari  kelebihan yang ada dalam dirimu. sebab tidak segalanya dapat kita mengerti  meski berapa hal dapat mudah dihadapi  dengan sebuah penerimaan\".'),
(43, 'Film \"PR\"', 'ta-20250414 192809.avif', 'Z0fXfbJp3QI', 'M. Saiful Haq', 'Multimedia', '2018', 'FILM PENDEK \"PR\" - TA PRODISTIK MA ZAHA 1 - M. Saiful Haq - TA Terbaik 1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guruekstra`
--
ALTER TABLE `guruekstra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `instruktur`
--
ALTER TABLE `instruktur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni_alumni`
--
ALTER TABLE `testimoni_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni_prodistik`
--
ALTER TABLE `testimoni_prodistik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tugasakhir`
--
ALTER TABLE `tugasakhir`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=346;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `guruekstra`
--
ALTER TABLE `guruekstra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `instruktur`
--
ALTER TABLE `instruktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT untuk tabel `testimoni_alumni`
--
ALTER TABLE `testimoni_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `testimoni_prodistik`
--
ALTER TABLE `testimoni_prodistik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tugasakhir`
--
ALTER TABLE `tugasakhir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
