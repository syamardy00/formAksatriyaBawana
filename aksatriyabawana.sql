-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 11:02 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aksatriyabawana`
--
CREATE DATABASE IF NOT EXISTS `aksatriyabawana` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aksatriyabawana`;

-- --------------------------------------------------------

--
-- Table structure for table `calonanggota2017`
--

CREATE TABLE `calonanggota2017` (
  `id_daftar` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgllahir` varchar(50) NOT NULL,
  `jeniskelamin` varchar(15) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `angkatan` int(5) NOT NULL,
  `hobbi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `alasan` text NOT NULL,
  `notlp` varchar(25) NOT NULL,
  `pinbb` varchar(100) NOT NULL,
  `riwayat` varchar(10) NOT NULL,
  `asalsekolah` varchar(50) NOT NULL,
  `tgldaftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calonanggota2017`
--

INSERT INTO `calonanggota2017` (`id_daftar`, `nama`, `tgllahir`, `jeniskelamin`, `jurusan`, `angkatan`, `hobbi`, `email`, `alamat`, `alasan`, `notlp`, `pinbb`, `riwayat`, `asalsekolah`, `tgldaftar`) VALUES
(1, 'Moch. Naufal Albar', '8 Februari 1997', 'Laki-Laki', 'Mekanik Industri Dan Desain', 2015, 'Membaca, Game, dan Jalan', 'naufalalbar48@gmail.com', 'Jl. Serma Muuhtar Baru No. 75. Kec. Sumedang Utara, Kab. Sumedang', 'mempunyai pengalaman berpetualang seperti bolang, mencari teman, dan ingin merasakan indahnya alam yang bebas dan luas,', '089656008079', '089656008079', 'belum', 'SMK PGRI SUMEDANG', '2017-09-12 05:29:47'),
(2, 'sinta mustika', '2 September 1999', 'Perempuan', 'Rekam Medis dan Infokes', 2017, 'makan', 'sintamustika042@gmail.com', 'Neglasari Rt 04 Rw 07 Desa Bayah Barat Kec.Bayah Kab.Lebak Provinsi Banten', 'Ingin lebih mencintai alaqm dengan sepenuh hati', '085771287720', '083892331981', 'pernah', 'SMA NEGERI 1 BAYAH', '2017-09-12 05:50:27'),
(3, 'restiana ahzary', '21 Desember 1997', 'Perempuan', 'Rekam Medis dan Infokes', 2017, 'makan', 'restianaahzary21@gmail.com', 'jalan panday kampung babakan nanjung rt.03 rw.o7 cimahi tengah', 'ingin menguji kemampuan diri sampe mana kemampuan saya', '083821462898', '', 'belum', 'smk pgri 2 cimahi', '2017-09-12 09:26:56'),
(4, 'Sri wahyuni', '12 Juni 1999', 'Perempuan', 'Teknik Informatika', 2017, 'Pencak silat', 'yuniwahyu243@gmail.com', 'Ds.Genjahan, Dk.Klampok ,RT/RW : 006/002 ,Kec.Jiken, Kab.Blora ,Jawa Tengah', 'Ingin mengetahui dan menikmati indahnya alam ', '08987309694', '', 'belum', 'SMA MUHAMMADIYAH 1 BLORA', '2017-09-12 09:31:49'),
(5, 'wildan M zuhdan', '24 Juni 1998', 'Laki-Laki', 'Mekanik Industri Dan Desain', 2017, 'makan', 'mzwildean5@gmail.com', 'kp. cibodas Rt/w 02/16 ds, nagrog Kec. cicalengka Kab bandung', 'karna saya iningin ikut mpa', '087823892272', '087823892272', 'pernah', 'SMA Bina Muda Cicalengka', '2017-09-13 08:32:45'),
(6, 'agung ramadhan gusfatiana', '3 Januari 1999', 'Laki-Laki', 'Teknik Mesin', 2017, 'haiking/ futsal', 'agungramadhan496@gmail.com', 'kota cilegon', 'cinta alam, karena alam tidak akan mengkhianati kita. ', '081294238889', '081294238889', 'belum', 'SMKN 1 CILEGON', '2017-09-13 08:41:55'),
(7, 'aditya rizky maulana', '18 Juli 1999', 'Laki-Laki', 'Mekanik Industri Dan Desain', 2017, 'futsal', 'adityarizkymaulana8@gmail.com', 'kp cisiih rt 02 rw 01 desa situregen kec.panggarangan', 'karna saya dngan kegiatan alam', '081219303669', '081219303669', 'belum', 'smk n 1 cibeber', '2017-09-18 08:19:14'),
(8, 'ilham kurnia', '20 Agustus 1999', 'Laki-Laki', 'Mekanik Industri Dan Desain', 2017, 'futsal', 'ilhamkurnia788@gmail.com', 'kp.bantar gadung rt/rw 003/005 desa.cibeber kec.cibeber lebak.banten', 'karena saya menyukai alam', '081573555032', '081573555032', 'belum', 'smk n 1 cibeber', '2017-09-18 08:23:56'),
(9, 'Iman Maulana', '6 Juli 1999', 'Laki-Laki', 'Teknik Otomasi', 2017, 'Game', 'im974426@gmail.com', 'Jl.Terusan Jamika Gg.K.H.Ishak Wijaya Rt 05 Rw 05', 'Mencari pengalaman memperbanyak teman', '085723416090', '085723416090', 'belum', 'SMKN 4 Bandung', '2017-09-18 08:57:22'),
(10, 'Fahrul Fachriatul Despriansyah', '7 Desember 1999', 'Laki-Laki', 'Teknik Otomasi', 2017, 'Olahraga', 'Fdespriansyah@gmail.com', 'Perum.gandasari indah b.28 rt 04 rw 12', 'ingin mencoba hal baru', '087839688147', '', 'belum', 'SMK ANGKASAN 1 MARGAHAYU', '2017-09-18 09:21:26'),
(11, 'Ahmad Haris Sulistio', '19 Oktober 1993', 'Laki-Laki', 'Teknik Komputer', 2017, 'futsal', 'achmadaris08@gmail.com', 'cijerah II blok 17 n0 147 kel.melong kec.cimahi selatan', ' ', '082216142104', '082216142104', 'pernah', 'skm pasundan 2 bandung', '2017-09-18 09:40:21'),
(12, 'muhamad isrok maulana harahap ', '7 November 1998', 'Laki-Laki', 'Alat Berat', 2017, 'hacking', 'muhammadisrok6@gmail.com', 'jln h agus salim no 112 lubuk pakam sumatera utara ', 'ingin memiliki wawasan yang lebih luas tentang alam dan dan ingin bergabung menjadi anggota satria bawana', '081247827732', '081247827732', 'pernah', 'smkn 1 lubuk pakam ', '2017-09-19 05:14:18'),
(13, 'RAMDHANI AMRULLAH', '4 Februari 1997', 'Laki-Laki', 'Alat Berat', 2017, 'SEPAK BOLA', 'dudung_ramdhani@yahoo.co.id', 'btn.mandala blok n.no10 rt04rw12', 'ingin mendalami tentang alam-alam', '082279686395', '082279686395', 'belum', 'SMK BUKIT ASAM', '2017-09-19 05:17:59'),
(14, 'syawal al fitra', '19 Januari 1999', 'Laki-Laki', 'Teknik Informatika', 2017, 'futsal', 'syawal190199@gmail.com', 'jln. pesantren', 'ingin lebih dkat dengan alam', '082293366317', '082293366317', 'belum', 'sma 1 baubau', '2017-09-19 05:22:20'),
(15, 'Aldyka Ariefurriziq', '14 Mei 1999', 'Laki-Laki', 'Teknik Otomasi', 2017, 'Makan, Baca, dll', 'aldykaarief@gmail.com', 'Perum Jatihurip Blok 08 No. 01 Rt/Rw. 001/014 Kec. Sumedang Utara Kab. Sumedang 45321', 'Meneruskan kegiatan yang pernah di ikuti ketika SLTA - BACIL SAKURA (Barudak Pecinta Alam)', '081321177612', '081321177612', 'belum', 'MAN 2 Sumedang', '2017-09-19 05:54:34'),
(16, 'mochammad ridwan', '26 Agustus 2000', 'Laki-Laki', 'Teknik Otomasi', 2017, 'berpetualang', 'mochammadr578@gmail.com', 'dusun ciloa no. 39 rt/rw 02/03 desa sukajaya kecamatan sumedang selatan kabupaten sumedang', 'meneruskan pengalaman yang beraada di SLTA dan petualangan bagi saya adalah hidup saya', '0895343201559', '0895343201559', 'belum', 'MAN 2 Sumedang', '2017-09-19 05:58:35'),
(17, 'ririn wildaningsih', '19 Mei 2017', 'Perempuan', 'Rekam Medis dan Infokes', 2017, 'berenang', 'ririnwildaningsih19@gmail.com', 'jlcagak desa lagadar ', 'mau wee', '089640008290', '089640008290', 'belum', 'smkkes bhakti kencana', '2017-09-19 06:27:16'),
(18, 'pujiani nugraha putri', '18 September 1997', 'Perempuan', 'Teknik Komputer', 2017, 'maen', 'fuji.yani68@yahoo.co.id', 'kihapit timur ', 'karena saya suka dengan kegiatan di alam', '08995699603', '', 'belum', 'man 1 cimahi', '2017-09-19 09:18:20'),
(19, 'danil firdaus', '15 Februari 1999', 'Laki-Laki', 'Teknik Kontruksi Bangunan', 2017, 'traveling', 'danielfirdaus719@gamil.com', 'kp.cinangga.des.bayah timr,kec.bayah,kab.lebak', 'karena suka dengan alam dan harus menjagga alam', '085719735139', '', 'belum', 'man 2 lebak', '2017-09-19 10:04:08'),
(20, 'Reza febriansyah Darmawan', '19 Februari 1999', 'Laki-Laki', 'Alat Berat', 2017, 'hacking', 'rezafebriansyah31@yahoo.com', 'Jln. Cihanjuang Gg. Babut Girang Rt.04/11 Cimahi', 'cinta alam', '0895605510235', '0895605510235', 'belum', 'SMK PGRI 3 Cimahi', '2017-09-20 09:04:06'),
(21, 'Ilham Nur Fajardhani', '25 Mei 1999', 'Laki-Laki', 'Alat Berat', 2017, 'hacking', 'ismktn@gmail.com', 'Kertamulya Padalarang Bandung Barat', 'cinta alam', '0895605510235', '0895605510235', 'belum', 'SMK TUNAS BANGSA Ngamprah', '2017-09-20 09:05:47'),
(22, 'shobri harist', '15 September 1999', 'Laki-Laki', 'Teknik Otomasi', 2017, 'futsal', 'shobriharis0@gmail.com', 'cimahi', 'ingin mempunyai pengalamann', '083820380946', '', 'belum', 'sma sumur bandung', '2017-09-20 09:21:52'),
(23, 'angga abdulrahman', '1 Januari 2017', 'Laki-Laki', 'Teknik Komputer', 2017, 'asal', 'asal@gmail.com', 'asal', 'asal', 'asal', '089621880292', 'belum', 'asal', '2017-09-20 09:37:37'),
(24, 'yusup supardi', '1 Januari 2017', 'Laki-Laki', 'Teknik Kontruksi Bangunan', 2017, 'asal', 'asal1221@gmail.com', 'asal', 'asal', 'asal', '083821893383', 'belum', 'asal', '2017-09-20 09:38:01'),
(25, 'anisa luthfiani', '9 Juni 1999', 'Perempuan', 'Rekam Medis dan Infokes', 2017, 'berenang', 'luthfiani.anisa@gmail.com', 'jl. kp. babakan sari, cibeber ', 'karena ingin mencoba hal yang baru', '089698041014', '089698041014', 'belum', 'sman 4 cimahi', '2017-09-20 09:46:11'),
(26, 'imas hartini', '29 September 1999', 'Perempuan', 'Rekam Medis dan Infokes', 2017, 'memasak', 'hartiniimas29@gmail.com', 'jl. ciuyah RT 05/ 12 kelurahan citereup cimahi utara', 'karena ingin lebih mengenal lagi tentang alam', '08998598412', '08998598412', 'belum', 'MAN Cimahi', '2017-09-20 09:48:19'),
(27, 'evie apriyanti', '19 April 1999', 'Perempuan', 'Rekam Medis dan Infokes', 2017, 'membaca komik', 'evieapriyanti31@gmail.com', 'jl cihanjuang rt01/rw09', 'ingin coba', '087824222738', '087824222738', 'belum', 'man albidayah cangkorah', '2017-09-20 09:50:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calonanggota2017`
--
ALTER TABLE `calonanggota2017`
  ADD PRIMARY KEY (`id_daftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calonanggota2017`
--
ALTER TABLE `calonanggota2017`
  MODIFY `id_daftar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
