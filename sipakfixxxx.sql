-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 08:42 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipak`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` int(90) NOT NULL,
  `agama` text NOT NULL,
  `count` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `agama`, `count`) VALUES
(1, 'Islam', ''),
(2, 'Kristen', ''),
(3, 'Protestan', ''),
(4, 'Konghuchu', ''),
(5, 'Hindu', ''),
(6, 'Katholik', '');

-- --------------------------------------------------------

--
-- Table structure for table `dah_options`
--

CREATE TABLE `dah_options` (
  `option_id` int(11) NOT NULL,
  `option_name` varchar(60) NOT NULL,
  `option_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dah_options`
--

INSERT INTO `dah_options` (`option_id`, `option_name`, `option_value`) VALUES
(0, '13', 'struktur'),
(1, 'blog_name', 'Administrasi Desa'),
(2, 'blog_description', 'Sebuah Aplikasi untuk mendata penduduk dan surat menyurat'),
(3, 'blog_logo', '884488349_logoutu1.png'),
(7, 'widget_social_facebook', 'https://www.facebook.com/malasngodingpage'),
(10, 'widget_social_instagram', 'https://www.instagram.com/malasngoding/'),
(12, 'blog_welcome', '<h4><strong>Prosedur pemesanan surat : </strong></h4>\r\n\r\n<ol>\r\n	<li>Pastikan Anda terdaftar sebagai penduduk Ulee Ceubrek</li>\r\n	<li>Jika belum terdaftar harap melapor ke sekretaris desa</li>\r\n	<li>Jika terdaftar harap login dengan NIK serta password default (NIK)</li>\r\n	<li>Pilih Surat yang ingin dipesan yang ada di sistem</li>\r\n	<li>lengkapi syarat yang harus dipenuhi serta upload syarat tersebut</li>\r\n	<li>Mengisi data yang belum lengkap</li>\r\n	<li>Pastikan data yang diisi dengan benar</li>\r\n	<li>Lalu klik tombol kirim</li>\r\n	<li>Tunggu pemberitahuan surat kapan bisa diambil dengan cara mengunjungi sistem kembali</li>\r\n	<li>Jika sudah/belum selesai surat maka kunjungi kantor kepala desa</li>\r\n</ol>\r\n'),
(13, 'struktur', '<table border=\"0\" cellpadding=\"4\" cellspacing=\"2\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Kepala Desa&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n			<td>Rudi sembako</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sekretaris&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n			<td>Numarmono</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tuha 8&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>Draja suka melawai</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bendahara&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n			<td>Munarwan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tuha 4&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>1. Sunarpa</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>2.&nbsp; Buria</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>3. Pulan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>4. Jhon Doe</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>5.&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>6.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kaur Pemerintahan&nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kaur pembangunan&nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kaur kesra&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kadus Bak Buloh&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kadus Tgk Di kulam&nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kadus lampoh kubu&nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(14, 'pengembang', '<table border=\"0\" cellpadding=\"4\" cellspacing=\"2\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></td>\r\n			<td>Rudi sembako</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Nim</strong></td>\r\n			<td>Numarmono</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Tempat Lahir</strong></td>\r\n			<td>Draja suka melawai</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Tanggal Lahir</strong></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Golongan Darah</strong></td>\r\n			<td>Munarwan</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Alamat</strong></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Nomor HP</strong></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Email</strong></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Prodi</strong></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Jurusan</strong></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Kampus</strong></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Judul TGA</strong></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(15, 'umum', '<table border=\"0\" cellpadding=\"6\" cellspacing=\"4\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Luas Wilayah&nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n			<td>1050 Ha</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jumlah Dusun</td>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>1. Dusun Bak Buloh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>2. Tgk Di Kulam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>3. Lampoh Kubu</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n'),
(16, 'nama_desa', 'xx'),
(17, 'pelayanan_surat', '<ol>\r\n	<li>Surat Keterangan Kartu Keluarga Baru</li>\r\n	<li>Surat Keterangan Penambahan Anggota KK</li>\r\n	<li>Surat Keterangan Pengurangan Anggota KK</li>\r\n	<li>Surat Keterangan KTP Baru</li>\r\n	<li>Surat Keterangan Kehilangan KTP</li>\r\n	<li>Surat Keterangan Kelahiran</li>\r\n	<li>Surat Keterangan Meninggal Dunia</li>\r\n	<li>Surat Keterangan Pindah Penduduk</li>\r\n	<li>Surat Keterangan Kurang Mampu(Miskin)</li>\r\n	<li>Surat Keterangan Sudah Menikah</li>\r\n	<li>Surat Keterangan Belum Menikah</li>\r\n	<li>Surat Keterangan Bercerai</li>\r\n</ol>\r\n'),
(18, 'foto_dev', '7088_foto_dul.png');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(120) NOT NULL,
  `jabatan` text NOT NULL,
  `count` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`, `count`) VALUES
(1, 'Geuchik', ''),
(2, 'Sekretaris', ''),
(3, 'Tuha 8', ''),
(4, 'Bendahara', ''),
(5, 'Tuha 4', ''),
(6, 'Kaur Pemerintahan', ''),
(7, 'Kaur Pembangunan', ''),
(8, 'Kaur Kesra', ''),
(9, 'Kadus Bak Buloh', ''),
(10, 'Kadus TGK Di Kulam', ''),
(11, 'Kadus Lampoh Kubu', '');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_mohon`
--

CREATE TABLE `jenis_mohon` (
  `id` int(11) NOT NULL,
  `penduduk_id` text NOT NULL,
  `surat_id` text NOT NULL,
  `kode_surat` text NOT NULL,
  `tgl_ajukan` datetime NOT NULL,
  `tgl_disahkan` datetime NOT NULL,
  `nomor_mohon_surat` text NOT NULL,
  `nomor_surat` text NOT NULL,
  `format_surat` longtext NOT NULL,
  `upload` text NOT NULL,
  `info` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_mohon`
--

INSERT INTO `jenis_mohon` (`id`, `penduduk_id`, `surat_id`, `kode_surat`, `tgl_ajukan`, `tgl_disahkan`, `nomor_mohon_surat`, `nomor_surat`, `format_surat`, `upload`, `info`, `status`) VALUES
(3, '1', '1', 'SKSC', '2020-07-26 00:00:00', '2020-07-26 00:00:00', 'SKSC-7143', '005', '<p>Geuchik Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara , dengan ini menerangkan bahwa :</p>\r\n\r\n<p>I. DATA KELUARGA</p>\r\n\r\n<table class=\"data_surat\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Nama Kepala Keluarga &nbsp;&nbsp;</td>\r\n			<td>:&nbsp;Sumantri</td>\r\n		</tr>\r\n		<tr>\r\n			<td>No. KK</td>\r\n			<td>:&nbsp;0982772635</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Alamat</td>\r\n			<td>:&nbsp;Gampong Ulee Ceubrek</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;&nbsp;Kecamatan Meurah Mulia. Kabupaten Aceh Utara</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>II. DATA INDIVIDU PENAMBAHAN</p>\r\n\r\n<table class=\"data_surat\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Nama</td>\r\n			<td>:&nbsp;Sumail</td>\r\n		</tr>\r\n		<tr>\r\n			<td>NIK</td>\r\n			<td>:&nbsp;1309928829</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jenis Kelamin</td>\r\n			<td>:&nbsp;Laki-laki</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tempat / Tgl. lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:&nbsp;Lhokseumawe,&nbsp;13-06-1997</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Agama</td>\r\n			<td>:&nbsp;Islam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pendidikan</td>\r\n			<td>:&nbsp;SMA</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pekerjaan</td>\r\n			<td>:&nbsp;Wiraswasta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Status Perkawinan</td>\r\n			<td>:&nbsp;Belum Menikah</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Status Hub.Keluarga</td>\r\n			<td>:&nbsp;Anak</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Benar yang tersebut namanya diatas penduduk Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara, dan benar ianya ingin melakukan <strong>penambahan</strong> anggota dari Kartu Keluarga (KK).</p>\r\n\r\n<p>Demikian surat keterangan ini kami perbuat dengan sebenarnya agar dapat dipergunakan seperlunya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class=\"tanda_tangan\" style=\"margin-top:20px\">\r\n<p style=\"text-align:center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n</div>\r\n', '1085_xxsdasd.PNG', 'Harap Datang ke kantor besok jam 4', 'diterima'),
(4, '1', '1', 'SKSC', '2020-07-27 00:00:00', '2020-07-27 00:00:00', 'SKSC-9010', '002', '<p>Geuchik Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara , dengan ini menerangkan bahwa :</p>\r\n\r\n<p>I. DATA KELUARGA</p>\r\n\r\n<table class=\"data_surat\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Nama Kepala Keluarga &nbsp;&nbsp;</td>\r\n			<td>:&nbsp;Sumantri</td>\r\n		</tr>\r\n		<tr>\r\n			<td>No. KK</td>\r\n			<td>:&nbsp;0982772635</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Alamat</td>\r\n			<td>:&nbsp;Gampong Ulee Ceubrek</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;&nbsp;Kecamatan Meurah Mulia. Kabupaten Aceh Utara</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>II. DATA INDIVIDU PENAMBAHAN</p>\r\n\r\n<table class=\"data_surat\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Nama</td>\r\n			<td>:&nbsp;Sumail</td>\r\n		</tr>\r\n		<tr>\r\n			<td>NIK</td>\r\n			<td>:&nbsp;1309928829</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jenis Kelamin</td>\r\n			<td>:&nbsp;Laki-laki</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tempat / Tgl. lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:&nbsp;Lhokseumawe,&nbsp;13-06-1997</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Agama</td>\r\n			<td>:&nbsp;Islam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pendidikan</td>\r\n			<td>:&nbsp;SMA</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pekerjaan</td>\r\n			<td>:&nbsp;Wiraswasta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Status Perkawinan</td>\r\n			<td>:&nbsp;Belum Menikah</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Status Hub.Keluarga</td>\r\n			<td>:&nbsp;Anak</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Benar yang tersebut namanya diatas penduduk Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara, dan benar ianya ingin melakukan <strong>penambahan</strong> anggota dari Kartu Keluarga (KK).</p>\r\n\r\n<p>Demikian surat keterangan ini kami perbuat dengan sebenarnya agar dapat dipergunakan seperlunya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class=\"tanda_tangan\" style=\"margin-top:20px\">\r\n<p style=\"text-align:center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n</div>\r\n', '1580_Capture.PNG', 'tesdulu ', 'diterima'),
(5, '1', '3', 'SBN', '2020-07-27 00:00:00', '2020-07-27 00:00:00', 'SBN-8106', '002', '<p>Geuchik Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara , dengan ini menerangkan bahwa :</p>\r\n\r\n<p>Data Pemohon</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Nama</td>\r\n			<td>:&nbsp;budi</td>\r\n		</tr>\r\n		<tr>\r\n			<td>NIK</td>\r\n			<td>:&nbsp;120966637739</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jenis Kelamin</td>\r\n			<td>:&nbsp;Laki-laki</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tempat / Tgl. lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:&nbsp;Lhokseumawe,&nbsp;04-12-1992</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Agama</td>\r\n			<td>:&nbsp;Islam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pendidikan</td>\r\n			<td>:&nbsp;SMA</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pekerjaan</td>\r\n			<td>:&nbsp;Nelayan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Status Perkawinan</td>\r\n			<td>:&nbsp;Menikah</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Status Hub.Keluarga</td>\r\n			<td>:&nbsp;Kepala Keluarga</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Benar yang tersebut namanya diatas penduduk Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara, dan benar ianya&nbsp;telah <strong>Bebas Narkoba</strong>.</p>\r\n\r\n<p>Demikian surat keterangan ini kami perbuat dengan sebenarnya agar dapat dipergunakan seperlunya.</p>\r\n', '9694_Capture.PNG', '', 'diterima'),
(6, '1', '1', 'SKSC', '2020-07-27 00:00:00', '2020-07-27 00:00:00', 'SKSC-1290', '002', '<p>Geuchik Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara , dengan ini menerangkan bahwa :</p>\r\n\r\n<p>I. DATA KELUARGA</p>\r\n\r\n<table class=\"data_surat\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Nama Kepala Keluarga &nbsp;&nbsp;</td>\r\n			<td>:&nbsp;Sumantri</td>\r\n		</tr>\r\n		<tr>\r\n			<td>No. KK</td>\r\n			<td>:&nbsp;0982772635</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Alamat</td>\r\n			<td>:&nbsp;Gampong Ulee Ceubrek</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;&nbsp;Kecamatan Meurah Mulia. Kabupaten Aceh Utara</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>II. DATA INDIVIDU PENAMBAHAN</p>\r\n\r\n<table class=\"data_surat\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Nama</td>\r\n			<td>:&nbsp;Sumail</td>\r\n		</tr>\r\n		<tr>\r\n			<td>NIK</td>\r\n			<td>:&nbsp;1309928829</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jenis Kelamin</td>\r\n			<td>:&nbsp;Laki-laki</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tempat / Tgl. lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:&nbsp;Lhokseumawe,&nbsp;13-06-1997</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Agama</td>\r\n			<td>:&nbsp;Islam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pendidikan</td>\r\n			<td>:&nbsp;SMA</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pekerjaan</td>\r\n			<td>:&nbsp;Wiraswasta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Status Perkawinan</td>\r\n			<td>:&nbsp;Belum Menikah</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Status Hub.Keluarga</td>\r\n			<td>:&nbsp;Anak</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Benar yang tersebut namanya diatas penduduk Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara, dan benar ianya ingin melakukan <strong>penambahan</strong> anggota dari Kartu Keluarga (KK).</p>\r\n\r\n<p>Demikian surat keterangan ini kami perbuat dengan sebenarnya agar dapat dipergunakan seperlunya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class=\"tanda_tangan\" style=\"margin-top:20px\">\r\n<p style=\"text-align:center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n</div>\r\n', '5459_Capture.PNG', '', 'diterima'),
(7, '1', '4', 'SRI', '2020-07-27 00:00:00', '2020-07-27 00:00:00', 'SRI-3312', '002', '<p>Geuchik Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara , dengan ini menerangkan bahwa :</p>\r\n\r\n<p>Data Pemohon</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Nama</td>\r\n			<td>: Budi</td>\r\n		</tr>\r\n		<tr>\r\n			<td>NIK</td>\r\n			<td>:&nbsp;120966637739&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jenis Kelamin</td>\r\n			<td>: Laki- laki</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tempat / Tgl. lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:&nbsp;Lhokseumawe / 04-12-1992&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Agama</td>\r\n			<td>: Islam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pendidikan</td>\r\n			<td>: bla</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pekerjaan</td>\r\n			<td>: bla</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Status Perkawinan</td>\r\n			<td>: bla</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Status Hub.Keluarga</td>\r\n			<td>:&nbsp; bla&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Benar yang tersebut namanya diatas penduduk Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara, dan benar ianya sedang <strong>rawat inap</strong>.</p>\r\n\r\n<p>Demikian surat keterangan ini kami perbuat dengan sebenarnya agar dapat dipergunakan seperlunya.</p>\r\n', '7194_Capture.PNG', '', 'diterima');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `id` int(11) NOT NULL,
  `nama_surat` text NOT NULL,
  `kode_surat` text NOT NULL,
  `syarat_surat` text NOT NULL,
  `format_surat` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_surat`
--

INSERT INTO `jenis_surat` (`id`, `nama_surat`, `kode_surat`, `syarat_surat`, `format_surat`) VALUES
(1, 'Surat Keterangan Sehat Covid', 'SKSC', '<ul>\r\n	<li>KTP</li>\r\n	<li>Surat Keterangan Dokter</li>\r\n</ul>\r\n', '<p>Geuchik Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara , dengan ini menerangkan bahwa :</p>\r\n\r\n<p>I. DATA KELUARGA</p>\r\n\r\n<table class=\"data_surat\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Nama Kepala Keluarga &nbsp;&nbsp;</td>\r\n			<td>:&nbsp;Sumantri</td>\r\n		</tr>\r\n		<tr>\r\n			<td>No. KK</td>\r\n			<td>:&nbsp;0982772635</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Alamat</td>\r\n			<td>:&nbsp;Gampong Ulee Ceubrek</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;&nbsp;Kecamatan Meurah Mulia. Kabupaten Aceh Utara</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>II. DATA INDIVIDU PENAMBAHAN</p>\r\n\r\n<table class=\"data_surat\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Nama</td>\r\n			<td>:&nbsp;Sumail</td>\r\n		</tr>\r\n		<tr>\r\n			<td>NIK</td>\r\n			<td>:&nbsp;1309928829</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jenis Kelamin</td>\r\n			<td>:&nbsp;Laki-laki</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tempat / Tgl. lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:&nbsp;Lhokseumawe,&nbsp;13-06-1997</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Agama</td>\r\n			<td>:&nbsp;Islam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pendidikan</td>\r\n			<td>:&nbsp;SMA</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pekerjaan</td>\r\n			<td>:&nbsp;Wiraswasta</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Status Perkawinan</td>\r\n			<td>:&nbsp;Belum Menikah</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Status Hub.Keluarga</td>\r\n			<td>:&nbsp;Anak</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Benar yang tersebut namanya diatas penduduk Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara, dan benar ianya ingin melakukan <strong>penambahan</strong> anggota dari Kartu Keluarga (KK).</p>\r\n\r\n<p>Demikian surat keterangan ini kami perbuat dengan sebenarnya agar dapat dipergunakan seperlunya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class=\"tanda_tangan\" style=\"margin-top:20px\">\r\n<p style=\"text-align:center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n</div>\r\n'),
(3, 'Surat Bebas Narkoba', 'SBN', '<ul>\r\n	<li>KTP (Kartiu Tanda Penduduk)</li>\r\n	<li>Surat Dokter</li>\r\n</ul>\r\n', '<p>Geuchik Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara , dengan ini menerangkan bahwa :</p>\r\n\r\n<p>Data Pemohon</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Nama</td>\r\n			<td>:&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>NIK</td>\r\n			<td>:&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jenis Kelamin</td>\r\n			<td>:&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tempat / Tgl. lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Agama</td>\r\n			<td>:&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pendidikan</td>\r\n			<td>:&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pekerjaan</td>\r\n			<td>:&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Status Perkawinan</td>\r\n			<td>:&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Status Hub.Keluarga</td>\r\n			<td>:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Benar yang tersebut namanya diatas penduduk Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara, dan benar ianya&nbsp;telah <strong>Bebas Narkoba</strong>.</p>\r\n\r\n<p>Demikian surat keterangan ini kami perbuat dengan sebenarnya agar dapat dipergunakan seperlunya.</p>\r\n'),
(4, 'Surat Rawat Inap', 'SRI', '<ul>\r\n	<li>Kartu Keluarga</li>\r\n	<li>Ktp</li>\r\n</ul>\r\n', '<p>Geuchik Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara , dengan ini menerangkan bahwa :</p>\r\n\r\n<p>Data Pemohon</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Nama</td>\r\n			<td>:&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>NIK</td>\r\n			<td>:&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jenis Kelamin</td>\r\n			<td>:&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tempat / Tgl. lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>\r\n			<td>:&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Agama</td>\r\n			<td>:&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pendidikan</td>\r\n			<td>:&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pekerjaan</td>\r\n			<td>:&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Status Perkawinan</td>\r\n			<td>:&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Status Hub.Keluarga</td>\r\n			<td>:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Benar yang tersebut namanya diatas penduduk Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara, dan benar ianya sedang <strong>rawat inap</strong>.</p>\r\n\r\n<p>Demikian surat keterangan ini kami perbuat dengan sebenarnya agar dapat dipergunakan seperlunya.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(70) NOT NULL,
  `pekerjaan` text NOT NULL,
  `count` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `pekerjaan`, `count`) VALUES
(1, 'Petani', ''),
(2, 'PNS (Pegawai Negeri Sipil)', ''),
(3, 'Nelayan', ''),
(4, 'Dokter', ''),
(5, 'Wiraswasta', '');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` bigint(20) NOT NULL,
  `pendidikan` text NOT NULL,
  `count` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `pendidikan`, `count`) VALUES
(2, 'SD ', ''),
(3, 'SMA', ''),
(4, 'SMP', ''),
(5, 'D1', ''),
(6, 'D2', ''),
(7, 'D3', ''),
(8, 'D4', ''),
(9, 'S1', ''),
(10, 'S2', ''),
(11, 'S3', ''),
(12, 'Lainya', '');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` bigint(60) NOT NULL,
  `nama` text NOT NULL,
  `nik` text NOT NULL,
  `nomor_kk` text NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` text NOT NULL,
  `pendidikan` text NOT NULL,
  `pekerjaan` text NOT NULL,
  `no_hp` text NOT NULL,
  `status_nikah` text NOT NULL,
  `status_hub_keluarga` text NOT NULL,
  `status_warga_negara` text NOT NULL,
  `nama_ayah` text NOT NULL,
  `nama_ibu` text NOT NULL,
  `gol_darah` varchar(56) NOT NULL,
  `alamat` text NOT NULL,
  `dusun` text NOT NULL,
  `desa` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` text NOT NULL,
  `kode_pos` text NOT NULL,
  `provinsi` text NOT NULL,
  `kelurahan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nama`, `nik`, `nomor_kk`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `pendidikan`, `pekerjaan`, `no_hp`, `status_nikah`, `status_hub_keluarga`, `status_warga_negara`, `nama_ayah`, `nama_ibu`, `gol_darah`, `alamat`, `dusun`, `desa`, `kecamatan`, `kabupaten`, `kode_pos`, `provinsi`, `kelurahan`) VALUES
(1, 'budi', '120966637739', '881728827', 'pria', 'Lhokseumawe', '1992-12-04', 'Islam', 'SMA', 'Nelayan', '', 'menikah', 'kepala', 'wni', '', '', 'o', '', 'dikulam', '', '', '', '', '', ''),
(4, 'Rudi', '1300299288275', '9819928829', 'pria', 'Aceh Utara', '1996-05-13', 'Islam', 'S1', 'Wiraswasta', '082733662277', 'menikah', 'kepala', 'wni', 'Budi', 'Surtini', 'ab', 'jl.melati. perumahan eks Arun', 'lampoh', 'Paloh lada', '', '', '', '', 'Paloh Lada'),
(5, 'Santi', '130099988899', '9819928829', 'wanita', 'Banda Aceh', '1997-05-14', 'Islam', 'SD ', 'Petani', '', 'menikah', 'istri', 'wni', '', '', 'a', '', 'buloh', '', '', '', '', '', ''),
(6, 'Firaun', '330989987', '928817726', 'pria', 'Mesir', '1989-04-10', 'Islam', 'S3', 'Wiraswasta', '08218277288', 'menikah', 'kepala', 'wni', 'Remeses 1', 'Mardiah', 'a', 'Mesir Raya', 'buloh', 'Mesir', '', '', '', '', 'Sukamesir'),
(7, 'Sumail', '1309928829', '0982772635', 'pria', 'Lhokseumawe', '1997-06-13', 'Islam', 'SMA', 'Wiraswasta', '', 'belum_menikah', 'anak', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'sindoro', '1234567890288', '', 'pria', '', '2020-06-27', 'Islam', '', '', '', '', 'anak', 'wni', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'tesdulu', '45454545', '7898855', 'pria', 'Lhok', '1998-07-27', 'Islam', 'SMA', 'PNS (Pegawai Negeri Sipil)', '085656555', 'belum_menikah', 'famili', 'wni', '', '', 'a', '', 'dikulam', '', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh', '');

-- --------------------------------------------------------

--
-- Table structure for table `sr_akte_lahir`
--

CREATE TABLE `sr_akte_lahir` (
  `id` int(90) NOT NULL,
  `nomor_surat` text NOT NULL,
  `surat_mohon_id` text NOT NULL,
  `tgl_lahir` datetime NOT NULL,
  `tmp_lahir` text NOT NULL,
  `nama_lahir` text NOT NULL,
  `kelamin` text NOT NULL,
  `nomor_anak` text NOT NULL,
  `istri_id` text NOT NULL,
  `suami_id` text NOT NULL,
  `tgl_ajukan` datetime NOT NULL,
  `tgl_disahkan` datetime NOT NULL,
  `ket_gk` text NOT NULL,
  `foto_kopi_ktp` text NOT NULL,
  `foto_kopi_kk` text NOT NULL,
  `surat_lahir` text NOT NULL,
  `foto_kopi_nikah` text NOT NULL,
  `foto_kopi_ijazah` text NOT NULL,
  `status_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sr_akte_mati`
--

CREATE TABLE `sr_akte_mati` (
  `id` int(90) NOT NULL,
  `nomor_surat` text NOT NULL,
  `surat_mohon_id` text NOT NULL,
  `penduduk_id` text NOT NULL,
  `pelapor_id` text NOT NULL,
  `nama_mati` text NOT NULL,
  `tgl_mati` datetime NOT NULL,
  `sebab_mati` text NOT NULL,
  `tempat_mati` text NOT NULL,
  `hub_pelapor` text NOT NULL,
  `tgl_diajukan` datetime NOT NULL,
  `tgl_disahkan` datetime NOT NULL,
  `ket_gk` text NOT NULL,
  `sk_rs` text NOT NULL,
  `foto_kopi_kk` text NOT NULL,
  `foto_kopi_ktp` text NOT NULL,
  `status_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sr_belum_nikah`
--

CREATE TABLE `sr_belum_nikah` (
  `id` int(90) NOT NULL,
  `nomor_surat` text NOT NULL,
  `surat_mohon_id` text NOT NULL,
  `tgl_diajukan` datetime NOT NULL,
  `tgl_disahkan` datetime NOT NULL,
  `penduduk_id` text NOT NULL,
  `foto_kopi_kk` text NOT NULL,
  `foto_kopi_ktp` text NOT NULL,
  `status_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sr_ket_cerai`
--

CREATE TABLE `sr_ket_cerai` (
  `id` int(90) NOT NULL,
  `nomor_surat` text NOT NULL,
  `surat_mohon_id` text NOT NULL,
  `penduduk_id` text NOT NULL,
  `pertama_id` text NOT NULL,
  `kedua_id` text NOT NULL,
  `tgl_diajukan` datetime NOT NULL,
  `tgl_disahkan` datetime NOT NULL,
  `foto_kopi_kk` text NOT NULL,
  `ktp_suami` text NOT NULL,
  `ktp_istri` text NOT NULL,
  `status_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sr_ket_miskin`
--

CREATE TABLE `sr_ket_miskin` (
  `id` int(90) NOT NULL,
  `nomor_surat` text NOT NULL,
  `surat_mohon_id` text NOT NULL,
  `penduduk_id` text NOT NULL,
  `nama_ayah` text NOT NULL,
  `nama_ibu` text NOT NULL,
  `tgl_diajukan` datetime NOT NULL,
  `tgl_disahkan` datetime NOT NULL,
  `foto_kopi_kk` text NOT NULL,
  `foto_kopi_ktp` text NOT NULL,
  `status_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sr_ket_nikah`
--

CREATE TABLE `sr_ket_nikah` (
  `id` int(90) NOT NULL,
  `nomor_surat` text NOT NULL,
  `surat_mohon_id` text NOT NULL,
  `penduduk_id` text NOT NULL,
  `suami_id` text NOT NULL,
  `istri_id` text NOT NULL,
  `tgl_diajukan` datetime NOT NULL,
  `tgl_disahkan` datetime NOT NULL,
  `foto_kopi_kk` text NOT NULL,
  `ktp_suami` text NOT NULL,
  `ktp_istri` text NOT NULL,
  `buku_nikah` text NOT NULL,
  `status_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sr_ket_pindah`
--

CREATE TABLE `sr_ket_pindah` (
  `id` int(100) NOT NULL,
  `nomor_surat` text NOT NULL,
  `surat_mohon_id` text NOT NULL,
  `penduduk_id` text NOT NULL,
  `tgl_diajukan` datetime NOT NULL,
  `tgl_disahkan` datetime NOT NULL,
  `desa` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` text NOT NULL,
  `alasan_pindah` text NOT NULL,
  `anggota` text NOT NULL,
  `ket_gk` text NOT NULL,
  `foto_kopi_kk` text NOT NULL,
  `kk_asli` text NOT NULL,
  `foto_kopi_ktp` text NOT NULL,
  `status_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sr_kk_baru`
--

CREATE TABLE `sr_kk_baru` (
  `id` int(90) NOT NULL,
  `nomor_surat` text NOT NULL,
  `penduduk_id` text NOT NULL,
  `tgl_diajukan` datetime NOT NULL,
  `tgl_disahkan` datetime NOT NULL,
  `kepala_keluarga` text NOT NULL,
  `surat_mohon_id` text NOT NULL,
  `no_kk_lama` text NOT NULL,
  `jlh_anggota` text NOT NULL,
  `ket_gk` text NOT NULL,
  `foto_kopi_kk` text NOT NULL,
  `foto_kopi_ktp` text NOT NULL,
  `foto_kopi_nikah` text NOT NULL,
  `foto_kopi_lahir` text NOT NULL,
  `status_surat` text NOT NULL,
  `list_anggota` text NOT NULL,
  `list_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sr_kk_baru`
--

INSERT INTO `sr_kk_baru` (`id`, `nomor_surat`, `penduduk_id`, `tgl_diajukan`, `tgl_disahkan`, `kepala_keluarga`, `surat_mohon_id`, `no_kk_lama`, `jlh_anggota`, `ket_gk`, `foto_kopi_kk`, `foto_kopi_ktp`, `foto_kopi_nikah`, `foto_kopi_lahir`, `status_surat`, `list_anggota`, `list_admin`) VALUES
(2, '', '1', '2020-07-09 00:00:00', '0000-00-00 00:00:00', '1', 'SK3B-99758', '55663333', '4', '', '5228_Screenshot_(1).png', '64572_Screenshot_(1).png', '44780_Screenshot_(1).png', '31376_Screenshot_(2).png', 'review', 'budi 1920209, Risma 929828', '');

-- --------------------------------------------------------

--
-- Table structure for table `sr_kk_kurang`
--

CREATE TABLE `sr_kk_kurang` (
  `id` int(11) NOT NULL,
  `nomor_surat` text NOT NULL,
  `penduduk_id` text NOT NULL,
  `tgl_diajukan` datetime NOT NULL,
  `tgl_disahkan` datetime NOT NULL,
  `surat_mohon_id` text NOT NULL,
  `kpl_keluarga` text NOT NULL,
  `anggota_id` text NOT NULL,
  `no_kk` text NOT NULL,
  `foto_kopi_kk` text NOT NULL,
  `ket_meninggal` text NOT NULL,
  `ket_pindah` text NOT NULL,
  `status_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sr_kk_tambah`
--

CREATE TABLE `sr_kk_tambah` (
  `id` int(90) NOT NULL,
  `nomor_surat` text NOT NULL,
  `penduduk_id` text NOT NULL,
  `tgl_diajukan` datetime NOT NULL,
  `tgl_disahkan` datetime NOT NULL,
  `surat_mohon_id` text NOT NULL,
  `kpl_keluarga` text NOT NULL,
  `anggota_id` text NOT NULL,
  `no_kk` text NOT NULL,
  `ket_gk` text NOT NULL,
  `foto_kopi_kk` text NOT NULL,
  `foto_kopi_lahir` text NOT NULL,
  `status_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sr_kk_tambah`
--

INSERT INTO `sr_kk_tambah` (`id`, `nomor_surat`, `penduduk_id`, `tgl_diajukan`, `tgl_disahkan`, `surat_mohon_id`, `kpl_keluarga`, `anggota_id`, `no_kk`, `ket_gk`, `foto_kopi_kk`, `foto_kopi_lahir`, `status_surat`) VALUES
(1, '001', '4', '2020-06-07 00:00:00', '2020-06-08 00:00:00', 'SKPnAKK-3618', 'umam', '1', '9992992001', '6175_Screenshot_(8).png', '28025_Screenshot_(1).png', '54900_Screenshot_(4).png', 'diterima');

-- --------------------------------------------------------

--
-- Table structure for table `sr_ktp_baru`
--

CREATE TABLE `sr_ktp_baru` (
  `id` int(90) NOT NULL,
  `nomor_surat` text NOT NULL,
  `surat_mohon_id` text NOT NULL,
  `penduduk_id` text NOT NULL,
  `tgl_diajukan` datetime NOT NULL,
  `tgl_disahkan` datetime NOT NULL,
  `nama_ayah` text NOT NULL,
  `nama_ibu` text NOT NULL,
  `foto_kopi_kk` text NOT NULL,
  `ket_umur` text NOT NULL,
  `ket_gk` text NOT NULL,
  `foto_kopi_nikah` text NOT NULL,
  `foto_kopi_akta` text NOT NULL,
  `status_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sr_ktp_baru`
--

INSERT INTO `sr_ktp_baru` (`id`, `nomor_surat`, `surat_mohon_id`, `penduduk_id`, `tgl_diajukan`, `tgl_disahkan`, `nama_ayah`, `nama_ibu`, `foto_kopi_kk`, `ket_umur`, `ket_gk`, `foto_kopi_nikah`, `foto_kopi_akta`, `status_surat`) VALUES
(1, '', 'SKKTPB-6845', '4', '2020-06-06 00:00:00', '0000-00-00 00:00:00', 'Umam', 'Balqis', '7586_Screenshot_(4).png', '', '64093_Screenshot_(8).png', '', '57816_Screenshot_(5).png', 'review');

-- --------------------------------------------------------

--
-- Table structure for table `sr_ktp_hilang`
--

CREATE TABLE `sr_ktp_hilang` (
  `id` int(90) NOT NULL,
  `nomor_surat` text NOT NULL,
  `penduduk_id` text NOT NULL,
  `tgl_ajukan` datetime NOT NULL,
  `tgl_disahkan` datetime NOT NULL,
  `surat_mohon_id` text NOT NULL,
  `foto_kopi_kk` text NOT NULL,
  `surat_hilang_polisi` text NOT NULL,
  `status_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sr_ktp_hilang`
--

INSERT INTO `sr_ktp_hilang` (`id`, `nomor_surat`, `penduduk_id`, `tgl_ajukan`, `tgl_disahkan`, `surat_mohon_id`, `foto_kopi_kk`, `surat_hilang_polisi`, `status_surat`) VALUES
(9, '007', '4', '2020-05-28 00:00:00', '2020-06-01 00:00:00', 'SKK-1179827964', 'pdfaja.pdf', '74424_Screenshot_(6).png', 'diterima');

-- --------------------------------------------------------

--
-- Table structure for table `surat_mohon`
--

CREATE TABLE `surat_mohon` (
  `id` int(11) NOT NULL,
  `surat_mohon_id` text NOT NULL,
  `penduduk_id` text NOT NULL,
  `jenis_surat` text NOT NULL,
  `nomor_surat` text NOT NULL,
  `tgl_diajukan` datetime NOT NULL,
  `tgl_surat` datetime NOT NULL,
  `berlaku_sampai` datetime NOT NULL,
  `syarat` text NOT NULL,
  `ket_surat` text NOT NULL,
  `notif` text NOT NULL COMMENT '1=review, 2=terima,tolak, 3=sudah lihat',
  `status_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_mohon`
--

INSERT INTO `surat_mohon` (`id`, `surat_mohon_id`, `penduduk_id`, `jenis_surat`, `nomor_surat`, `tgl_diajukan`, `tgl_surat`, `berlaku_sampai`, `syarat`, `ket_surat`, `notif`, `status_surat`) VALUES
(9, 'SKK-1179827964', '4', 'SKK', '', '0000-00-00 00:00:00', '2020-06-01 00:00:00', '0000-00-00 00:00:00', '', 'Pengajuan KTP Hilang', '3', 'review'),
(20, 'SKKTPB-6845', '4', 'SKKTPB', '', '0000-00-00 00:00:00', '2020-06-07 00:00:00', '0000-00-00 00:00:00', '', 'Pengajuan Pembuatan KTP Baru', '3', 'review'),
(22, 'SKPnAKK-3618', '4', 'SKPnAKK', '001', '0000-00-00 00:00:00', '2020-06-08 00:00:00', '0000-00-00 00:00:00', '', 'Pengajuan Penambahan Anggota Kartu Keluarga', '3', 'diterima'),
(27, 'SK3B-99758', '1', 'SK3B', '', '2020-07-09 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'Pengajuan Pembuatan Kartu Keluarga Baru', '1', 'review');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(50) NOT NULL,
  `penduduk_id` text NOT NULL,
  `user_lvl` text NOT NULL,
  `jabatan` text NOT NULL,
  `jabatan_status` int(11) NOT NULL,
  `user_status` text NOT NULL,
  `user_login` text NOT NULL,
  `user_name` text NOT NULL,
  `user_pass` text NOT NULL,
  `user_email` text NOT NULL,
  `user_hp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `penduduk_id`, `user_lvl`, `jabatan`, `jabatan_status`, `user_status`, `user_login`, `user_name`, `user_pass`, `user_email`, `user_hp`) VALUES
(1, '1', 'admin', '2', 1, '1', 'sekretaris', 'sekretaris', '21232f297a57a5a743894a0e4a801fc3', 'sekretaris@admin.com', '0852442566'),
(5, '4', 'rakyat', '0', 0, '1', '120878198909853', 'Rudi', '540e6b4d31e3c694e10a8218ccdebbf7', '', ''),
(6, '5', 'rakyat', '0', 0, '1', '130099988899', 'Santi', '444a530f8665b2d541fe9bfd0943b6f4', '', ''),
(7, '6', 'lurah', '1', 1, '1', '330989987', 'Firaun', '79c53108dbaeb3c00f6b686ad5133fca', '', ''),
(8, '7', 'rakyat', '', 0, '1', '1309928829', 'Sumail', '86a60eb98f284596ac4301109d26f54b', '', ''),
(9, '8', 'rakyat', '', 0, '1', '1234567890289', 'sindoro', 'c81c773c2a38ceccaf842dff80f8fa25', '', ''),
(10, '9', 'rakyat', '', 0, '1', '45454545', 'tesdulu', '3f74ed1b90de7d06a51891228750fcb1', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dah_options`
--
ALTER TABLE `dah_options`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_mohon`
--
ALTER TABLE `jenis_mohon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sr_akte_lahir`
--
ALTER TABLE `sr_akte_lahir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sr_akte_mati`
--
ALTER TABLE `sr_akte_mati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sr_belum_nikah`
--
ALTER TABLE `sr_belum_nikah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sr_ket_cerai`
--
ALTER TABLE `sr_ket_cerai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sr_ket_miskin`
--
ALTER TABLE `sr_ket_miskin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sr_ket_nikah`
--
ALTER TABLE `sr_ket_nikah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sr_ket_pindah`
--
ALTER TABLE `sr_ket_pindah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sr_kk_baru`
--
ALTER TABLE `sr_kk_baru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sr_kk_kurang`
--
ALTER TABLE `sr_kk_kurang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sr_kk_tambah`
--
ALTER TABLE `sr_kk_tambah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sr_ktp_baru`
--
ALTER TABLE `sr_ktp_baru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sr_ktp_hilang`
--
ALTER TABLE `sr_ktp_hilang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_mohon`
--
ALTER TABLE `surat_mohon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `jenis_mohon`
--
ALTER TABLE `jenis_mohon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` bigint(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sr_akte_lahir`
--
ALTER TABLE `sr_akte_lahir`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sr_akte_mati`
--
ALTER TABLE `sr_akte_mati`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sr_belum_nikah`
--
ALTER TABLE `sr_belum_nikah`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sr_ket_cerai`
--
ALTER TABLE `sr_ket_cerai`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sr_ket_miskin`
--
ALTER TABLE `sr_ket_miskin`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sr_ket_nikah`
--
ALTER TABLE `sr_ket_nikah`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sr_ket_pindah`
--
ALTER TABLE `sr_ket_pindah`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sr_kk_baru`
--
ALTER TABLE `sr_kk_baru`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sr_kk_kurang`
--
ALTER TABLE `sr_kk_kurang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sr_kk_tambah`
--
ALTER TABLE `sr_kk_tambah`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sr_ktp_baru`
--
ALTER TABLE `sr_ktp_baru`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sr_ktp_hilang`
--
ALTER TABLE `sr_ktp_hilang`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `surat_mohon`
--
ALTER TABLE `surat_mohon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;