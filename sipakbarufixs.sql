-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 10:37 AM
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
  `agama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Protestan'),
(4, 'Konghuchu'),
(5, 'Hindu'),
(6, 'Katholik'),
(7, 'Lainnya');

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
(2, 'blog_description', 'Sebuah Aplikasi Untuk Mendata Penduduk Serta Melayani Jenis Surat                     '),
(3, 'blog_logo', '884488349_logoutu1.png'),
(7, 'widget_social_facebook', 'https://www.facebook.com/malasngodingpage'),
(10, 'widget_social_instagram', 'https://www.instagram.com/malasngoding/'),
(12, 'blog_welcome', '<p><span style=\"font-size:18px\"><span style=\"color:#c0392b\"><strong>Prosedur Pemesanan Surat : </strong></span></span></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Login sebagai penduduk di desa Ulee Ceubrek</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Masukkan Username NIK dan Password NIK (default) anda</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Jika berhasil masuk, silahkan pilih surat yang ingin diajukan</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Lengkapi syarat dan isi data anda dengan benar sesuai surat yang anda ajukan</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Jenis surat yang dapat diajukan sebagai berikut :</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Setelah berhasil diajukan maka jangan lupa mengunjungi sistem kembali agar mengetahui pemberitahuan surat dengan status Review, Selesai dan Ditolak serta keterangan untuk pengambilan surat.</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Jika selesai/ditolak maka segera&nbsp;kunjungi kantor Kepala Desa</span></span></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\"><u><span style=\"color:#c0392b\"><span style=\"font-family:Comic Sans MS,cursive\">Petunjuk bagi penduduk :</span></span></u></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:12px\"><span style=\"font-family:Comic Sans MS,cursive\">Jika&nbsp;sudah berhasil login maka disarankan untuk mengganti username dan password di Menu</span><span style=\"color:#c0392b\"><span style=\"font-family:Comic Sans MS,cursive\"><strong> Profil Saya</strong></span></span></span></li>\r\n	<li><span style=\"font-size:12px\"><span style=\"font-family:Comic Sans MS,cursive\">Jika mau lihat dan ubah data pribadi anda maka klik di Menu <span style=\"color:#c0392b\">Data Pribadi</span></span></span></li>\r\n	<li><span style=\"font-size:12px\"><span style=\"font-family:Comic Sans MS,cursive\">Jika mau ajukan surat maka klik&nbsp;Menu <span style=\"color:#c0392b\">Ajukan Surat&nbsp;</span>lalu pilih surat yang diinginkan serta upload syarat dan isi data dengan lengkap dan benar</span></span></li>\r\n	<li><span style=\"font-size:12px\"><span style=\"font-family:Comic Sans MS,cursive\">Jika mau lihat surat yang sudah berhasil diajukan dengan status review, selesai dan ditolak di Menu <span style=\"color:#c0392b\">Jejak Pengajuan Surat</span></span></span></li>\r\n	<li><span style=\"font-size:12px\"><span style=\"font-family:Comic Sans MS,cursive\">Jika mau lihat tentang informasi desa maka klik <span style=\"color:#c0392b\">Menu Tentang (Umum, Struktur, Pelayanan Surat dan Pengembang)</span></span></span></li>\r\n	<li><span style=\"font-size:12px\"><span style=\"font-family:Comic Sans MS,cursive\">Jika anda mau keluar maka klik Menu <span style=\"color:#c0392b\">Logout</span></span></span></li>\r\n</ul>\r\n'),
(13, 'struktur', '<table border=\"0\" cellpadding=\"4\" cellspacing=\"2\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Kepala Desa&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n			<td>Nasrul Fadhil, ST</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sekretaris&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n			<td>Abdullah, SE</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tuha 8&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>Tgk Halim, S.Pd</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bendahara&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n			<td>Abdullah, S.Sos</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tuha 4&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>1.&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>2.&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>3.&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>4.&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>5.&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>6.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>7.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kaur Pemerintahan&nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>Abdul Bahri</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kaur Pembangunan&nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>Saifunnur</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kaur Kesra&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n			<td>Tgk Rasyidi.Y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kadus Bak Buloh&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>Muhammad</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kadus Tgk Di kulam&nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>Tarmizi.B</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kadus Lampoh Kubu&nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>Muhammad Rizal, S.Pd</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(14, 'pengembang', '<table border=\"0\" cellpadding=\"4\" cellspacing=\"2\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></td>\r\n			<td>: Muhammad Ichsan</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>NIM</strong></td>\r\n			<td>: 1657301062</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Tempat Lahir</strong></td>\r\n			<td>: Ulee Cibrek</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Tanggal Lahir</strong></td>\r\n			<td>: 11 Agustus 1998</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Alamat</strong></td>\r\n			<td>: Desa Ulee Ceubrek</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Nomor HP</strong></td>\r\n			<td>: 0822-7924-8267</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Email</strong></td>\r\n			<td>: ichsanaifaichravaro1998@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Prodi</strong></td>\r\n			<td>: Teknik Informatika</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Jurusan</strong></td>\r\n			<td>: Teknologi Informasi dan Komputer</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Kampus</strong></td>\r\n			<td>: Politeknik Negeri Lhokseumawe</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Judul TGA</strong></td>\r\n			<td>: Sistem Informasi Pelayanan Administrasi Kependudukan Berbasis Web</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp; ( Studi Kasus : Desa Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp; Aceh Utara )</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(15, 'umum', '<table border=\"0\" cellpadding=\"6\" cellspacing=\"4\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Luas Wilayah&nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n			<td>60 Ha</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jumlah Dusun</td>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>1. Dusun Bak Buloh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>2. Dusun Tgk Di Kulam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>3. Dususn Lampoh Kubu</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n'),
(16, 'nama_desa', 'xx'),
(17, 'pelayanan_surat', '<ol>\r\n	<li>Surat Keterangan Kartu Keluarga Baru</li>\r\n	<li>Surat Keterangan Penambahan Anggota KK</li>\r\n	<li>Surat Keterangan Pengurangan Anggota KK</li>\r\n	<li>Surat Keterangan KTP Baru</li>\r\n	<li>Surat Keterangan Kehilangan KTP</li>\r\n	<li>Surat Keterangan Kelahiran</li>\r\n	<li>Surat Keterangan Meninggal Dunia</li>\r\n	<li>Surat Keterangan Pindah Penduduk</li>\r\n	<li>Surat Keterangan Kurang Mampu(Miskin)</li>\r\n	<li>Surat Keterangan Sudah Menikah</li>\r\n	<li>Surat Keterangan Belum Menikah</li>\r\n	<li>Surat Keterangan Bercerai</li>\r\n</ol>\r\n'),
(18, 'foto_dev', '7088_foto_dul.png');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(120) NOT NULL,
  `jabatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`) VALUES
(1, 'Geuchik'),
(2, 'Sekretaris'),
(3, 'Tuha 8'),
(4, 'Bendahara'),
(5, 'Tuha 4'),
(6, 'Kaur Pemerintahan'),
(7, 'Kaur Pembangunan'),
(8, 'Kaur Kesra'),
(9, 'Kadus Bak Buloh'),
(10, 'Kadus TGK Di Kulam'),
(11, 'Kadus Lampoh Kubu');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_mohon`
--

CREATE TABLE `jenis_mohon` (
  `id` int(60) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(70) NOT NULL,
  `pekerjaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `pekerjaan`) VALUES
(1, 'Petani/Pekebun'),
(2, 'PNS (Pegawai Negeri Sipil)'),
(3, 'Nelayan'),
(4, 'Dokter'),
(5, 'Wiraswasta'),
(6, 'Lainnya'),
(7, 'Mengurus Rumah Tangga'),
(8, 'Pelajar/Mahasiswa'),
(9, 'Belum/Tidak Bekerja');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` bigint(20) NOT NULL,
  `pendidikan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `pendidikan`) VALUES
(2, 'SD/Sederajat'),
(3, 'SLTA/Sederajat'),
(4, 'SLTP/Sederajat'),
(5, 'Diploma I'),
(6, 'Diploma II'),
(7, 'Diploma III'),
(8, 'Diploma IV/Strata I'),
(10, 'Strata II'),
(11, 'Strata III'),
(12, 'Lainnya'),
(13, 'Tidak/Belum Sekolah');

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
  `dusun` text NOT NULL,
  `desa` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` text NOT NULL,
  `kode_pos` text NOT NULL,
  `provinsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nama`, `nik`, `nomor_kk`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `pendidikan`, `pekerjaan`, `no_hp`, `status_nikah`, `status_hub_keluarga`, `status_warga_negara`, `nama_ayah`, `nama_ibu`, `gol_darah`, `dusun`, `desa`, `kecamatan`, `kabupaten`, `kode_pos`, `provinsi`) VALUES
(10, 'Abdullah', '1108071404690001', '1108071711060771', 'pria', 'Ulee Ceubrek', '1969-04-14', 'Islam', 'Diploma IV/Strata I', 'PNS (Pegawai Negeri Sipil)', '085275079661', 'menikah', 'kepala', 'wni', 'M. Jalil', 'Tihabibah', 'o', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(11, 'Nasrul Fadhil', '1108071012820003', '1108072108140002', 'pria', 'Kandang', '1982-12-10', 'Islam', 'Diploma IV/Strata I', 'Wiraswasta', '081360023061', 'menikah', 'kepala', 'wni', 'Umar Ahmad', 'Khadijah Umar', 'a', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(12, 'Yunita Fitriani', '1108075506910001', '1108072108140002', 'wanita', 'Ulee Ceubrek', '1982-12-10', 'Islam', 'Diploma IV/Strata I', 'Mengurus Rumah Tangga', '082369906468', 'menikah', 'istri', 'wni', 'M. Jafar', 'Hendon', 'b', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(13, 'Muhammad Rafa Azka Putra', '1108072406150001', '1108072108140002', 'pria', 'Lhokseumawe', '2015-06-24', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Nasrul Fadhil', 'Yunita Fitriani', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(14, 'Nurjannah', '1108074909780001', '1108071711060771', 'wanita', 'Gampong Nibong', '1978-09-09', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'Syamaun', 'Khadijah', 'o', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(15, 'Muhammad Ichsan', '1108071108980001', '1108071711060771', 'pria', 'Ulee Cibre', '1998-08-11', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '082279248267', 'belum_menikah', 'anak', 'wni', 'Abdullah', 'Nurjannah', 'o', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(16, 'Liza Rahmati', '1108076302010001', '1108071711060771', 'wanita', 'Ulee Cibrek', '2001-02-23', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Abdullah', 'Nurjannah', 'o', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(17, 'Diniati', '1108074906040001', '1108071711060771', 'wanita', 'Ulee Cibrek', '2004-06-09', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Abdullah', 'Nurjannah', 'o', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(18, 'Abdul Muttaleb', '1108070107540117', '1108071711060571', 'pria', 'Paloh Lada', '1954-07-01', 'Islam', 'SD/Sederajat', 'Petani/Pekebun', '', 'menikah', 'kepala', 'wni', 'M. Yusuf', 'Tihadanah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(19, 'Salbiah', '1108074107680162', '1108071711060571', 'wanita', 'Ulee Ceubrek', '1968-07-01', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', '', 'menikah', 'istri', 'wni', 'M.Jalil', 'Habibah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(20, 'Hasan Basri', '1108072606920001', '1108071711060571', 'pria', 'Ulee Ceubrek', '1992-06-26', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Abdul Muttaleb', 'Salbiah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(21, 'Halimaton Sakdiah', '1108074605940002', '1108071711060571', 'wanita', 'Ulee Ceubrek', '1994-05-06', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Abdul Muttaleb', 'Salbiah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(22, 'Muhibbudin', '1108071105970001', '1108071711060571', 'pria', 'Ulee Cibrek', '1997-11-23', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Abdul Muttaleb', 'Salbiah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(23, 'Nurlinawati', '1108074211990001', '1108071711060571', 'wanita', 'Ulee Ceubrek', '2000-01-03', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Abdul Muttaleb', 'Salbiah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(24, 'Zamzami', '1108070507030002', '1108071711060571', 'pria', 'Ulee Ceubrek', '2003-07-05', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Abdul Muttaleb', 'Salbiah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(25, 'Mauliana', '1108074903080001', '1108071711060571', 'wanita', 'Aceh Utara', '2008-03-09', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Abdul Muttaleb', 'Nurjannah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(26, 'Riska Khairuna', '1108074708100001', '1108071711060571', 'wanita', 'Aceh Utara', '2010-08-07', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Abdul Muttaleb', 'Salbiah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(27, 'Tarmizi B', '1108070107680152', '1108071711060516', 'pria', 'Ulee Ceubrek', '1968-07-01', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', '', 'belum_menikah', 'kepala', 'wni', 'Bainuddin', 'Umisalamah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(28, 'Basiah', '1108074107680152', '1108071711060516', 'wanita', 'Ulee Ceubrek', '1968-07-01', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', '', 'belum_menikah', 'istri', 'wni', 'Idris', 'Umisalamah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(29, 'Muhammad Salman', '1108070708960002', '1108071711060516', 'pria', 'Ulee Ceubrek', '1996-08-07', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Tarmizi B', 'Basiah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(30, 'Muh. Rasydy Hidayat', '1108071303070003', '1108071711060516', 'pria', 'Jakarta', '2007-03-13', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'cucu', 'wni', 'Muh. Arsyad', 'Daryani', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(31, 'ASDFGHJKL', '1111111111111111', '1112345678909876', '', 'AS', '2020-07-30', 'Katholik', '', '', '', '', 'pembantu', '', '', '', '', '', '', '', '', '', ''),
(32, 'CINTA', '0000000000000000', '1111111111111111', 'pria', 'UVB', '2020-11-11', 'Islam', 'SD/Sederajat', 'PNS (Pegawai Negeri Sipil)', '', 'menikah', 'famili', '', '', '', '', '', '', '', '', '', ''),
(33, 'tambah', '2222222222222222', '1108071711060771', 'pria', 'ucb', '1998-11-11', 'Kristen', 'SD/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'pembantu', '', '', '', '', '', '', '', '', '', '');

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

--
-- Dumping data for table `sr_akte_lahir`
--

INSERT INTO `sr_akte_lahir` (`id`, `nomor_surat`, `surat_mohon_id`, `tgl_lahir`, `tmp_lahir`, `nama_lahir`, `kelamin`, `nomor_anak`, `istri_id`, `suami_id`, `tgl_ajukan`, `tgl_disahkan`, `ket_gk`, `foto_kopi_ktp`, `foto_kopi_kk`, `surat_lahir`, `foto_kopi_nikah`, `foto_kopi_ijazah`, `status_surat`) VALUES
(1, '005', 'SKKL-2990', '2020-07-30 21:10:17', 'sd', 'sd', 'Laki-laki', '1', '33', '33', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '', '2096_tes.png', '658345_tes.png', '9576249_tes.png', '8426_tes.png', '', 'diterima');

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

--
-- Dumping data for table `sr_akte_mati`
--

INSERT INTO `sr_akte_mati` (`id`, `nomor_surat`, `surat_mohon_id`, `penduduk_id`, `pelapor_id`, `nama_mati`, `tgl_mati`, `sebab_mati`, `tempat_mati`, `hub_pelapor`, `tgl_diajukan`, `tgl_disahkan`, `ket_gk`, `sk_rs`, `foto_kopi_kk`, `foto_kopi_ktp`, `status_surat`) VALUES
(1, '006', 'SKM-6870', '10', '', '14', '2020-07-30 21:42:00', 'sakit', 'uik', 'istri', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '', '75054_tes.png', '85053_tes.png', '74843_tes.png', 'diterima');

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

--
-- Dumping data for table `sr_belum_nikah`
--

INSERT INTO `sr_belum_nikah` (`id`, `nomor_surat`, `surat_mohon_id`, `tgl_diajukan`, `tgl_disahkan`, `penduduk_id`, `foto_kopi_kk`, `foto_kopi_ktp`, `status_surat`) VALUES
(1, '010', 'SKBM-1450', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '10', '5171_tes.png', '', 'diterima');

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

--
-- Dumping data for table `sr_ket_cerai`
--

INSERT INTO `sr_ket_cerai` (`id`, `nomor_surat`, `surat_mohon_id`, `penduduk_id`, `pertama_id`, `kedua_id`, `tgl_diajukan`, `tgl_disahkan`, `foto_kopi_kk`, `ktp_suami`, `ktp_istri`, `status_surat`) VALUES
(1, '011', 'SKB-3250', '10', '10', '14', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '8981_tes.png', '70792_tes.png', '90562_tes.png', 'diterima');

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

--
-- Dumping data for table `sr_ket_miskin`
--

INSERT INTO `sr_ket_miskin` (`id`, `nomor_surat`, `surat_mohon_id`, `penduduk_id`, `nama_ayah`, `nama_ibu`, `tgl_diajukan`, `tgl_disahkan`, `foto_kopi_kk`, `foto_kopi_ktp`, `status_surat`) VALUES
(3, '008', 'SKKM-8374', '10', 'M. Jalil', 'Tihabibah', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '1686_tes.png', '10058_tes.png', 'diterima');

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

--
-- Dumping data for table `sr_ket_nikah`
--

INSERT INTO `sr_ket_nikah` (`id`, `nomor_surat`, `surat_mohon_id`, `penduduk_id`, `suami_id`, `istri_id`, `tgl_diajukan`, `tgl_disahkan`, `foto_kopi_kk`, `ktp_suami`, `ktp_istri`, `buku_nikah`, `status_surat`) VALUES
(1, '009', 'SKSM-1435', '10', '10', '14', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '8342_tes.png', '77120_tes.png', '16913_tes.png', '84815_tes.png', 'diterima');

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

--
-- Dumping data for table `sr_ket_pindah`
--

INSERT INTO `sr_ket_pindah` (`id`, `nomor_surat`, `surat_mohon_id`, `penduduk_id`, `tgl_diajukan`, `tgl_disahkan`, `desa`, `kecamatan`, `kabupaten`, `alasan_pindah`, `anggota`, `ket_gk`, `foto_kopi_kk`, `kk_asli`, `foto_kopi_ktp`, `status_surat`) VALUES
(1, '007', 'SKPP-1196', '10', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '', 's', 's', '                                                        ', '                                                        ', '', '8323_tes.png', '99152_tes.png', '29537_tes.png', 'diterima');

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
(7, '012', '10', '2020-07-31 00:00:00', '2020-07-31 00:00:00', '10', 'SK3B-80619', '8888888888888888', '1', '', '2076_tes.png', '63110_tes.png', '26987_tes.png', '82292_syrt.pdf', 'diterima', 'er', '<ol>\r\n	<li>Nama Nik</li>\r\n</ol>\r\n');

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

--
-- Dumping data for table `sr_kk_kurang`
--

INSERT INTO `sr_kk_kurang` (`id`, `nomor_surat`, `penduduk_id`, `tgl_diajukan`, `tgl_disahkan`, `surat_mohon_id`, `kpl_keluarga`, `anggota_id`, `no_kk`, `foto_kopi_kk`, `ket_meninggal`, `ket_pindah`, `status_surat`) VALUES
(1, '002', '10', '2020-07-30 00:00:00', '2020-07-30 00:00:00', 'SKPgAKK-9227', 'Abdullah', '33', '1108071711060771', '7049_tes.png', '49656_tes.png', '85757_tes.png', 'diterima');

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
(4, '001', '10', '2020-07-30 00:00:00', '2020-07-30 00:00:00', 'SKPnAKK-7902', 'Abdullah', '33', '1108071711060771', '', '5760_tes.png', '52534_tes.png', 'diterima');

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
(1, '003', 'SKKTPB-1678', '10', '2020-07-30 00:00:00', '2020-07-30 00:00:00', 'M. Jalil', 'Tihabibah', '8290_tes.png', '', '', '', '22973_tes1.jpg', 'diterima');

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
(1, '004', '10', '2020-07-30 00:00:00', '2020-07-30 00:00:00', 'SKK-6095', '5173_tes.png', '36388_tes1.jpg', 'diterima');

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
  `syarat` text NOT NULL,
  `ket_surat` text NOT NULL,
  `notif` text NOT NULL COMMENT '1=review, 2=terima,tolak, 3=sudah lihat',
  `status_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_mohon`
--

INSERT INTO `surat_mohon` (`id`, `surat_mohon_id`, `penduduk_id`, `jenis_surat`, `nomor_surat`, `tgl_diajukan`, `tgl_surat`, `syarat`, `ket_surat`, `notif`, `status_surat`) VALUES
(11, 'SKPnAKK-7902', '10', 'SKPnAKK', '001', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '', 'Pengajuan Penambahan Anggota Kartu Keluarga', '2', 'diterima'),
(12, 'SKKTPB-1678', '10', 'SKKTPB', '003', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '', 'Pengajuan Pembuatan KTP Baru', '2', 'diterima'),
(13, 'SKPgAKK-9227', '10', 'SKPgAKK', '002', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '', 'Pengajuan Pengurangan Anggota Kartu Keluarga', '2', 'diterima'),
(14, 'SKK-6095', '10', 'SKK', '004', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '', 'Pengajuan KTP Hilang', '2', 'diterima'),
(15, 'SKKL-2990', '10', 'SKKL', '005', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '', 'Pengajuan Pembuatan Akte Kelahiran', '2', 'diterima'),
(16, 'SKM-6870', '10', 'SKM', '006', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '', 'Pengajuan Pembuatan Akte Meninggal Dunia', '2', 'diterima'),
(17, 'SKPP-1196', '10', 'SKPP', '007', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '', 'Pengajuan Pembuatan Keterangan Pindah Penduduk', '2', 'diterima'),
(20, 'SKKM-8374', '10', 'SKKM', '008', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '', 'Pengajuan Pembuatan Keterangan Kurang Mampu', '2', 'diterima'),
(21, 'SKSM-1435', '10', 'SKSM', '009', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '', 'Pengajuan Pembuatan Keterangan Sudah Menikah', '2', 'diterima'),
(22, 'SKBM-1450', '10', 'SKBM', '010', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '', 'Pengajuan Pembuatan Keterangan Belum Menikah', '2', 'diterima'),
(23, 'SKB-3250', '10', 'SKB', '011', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '', 'Pengajuan Pembuatan Keterangan Bercerai', '2', 'diterima'),
(31, 'SK3B-80619', '10', 'SK3B', '012', '2020-07-31 00:00:00', '2020-07-31 00:00:00', '', 'Pengajuan Pembuatan Kartu Keluarga Baru', '2', 'diterima');

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
  `user_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `penduduk_id`, `user_lvl`, `jabatan`, `jabatan_status`, `user_status`, `user_login`, `user_name`, `user_pass`, `user_email`) VALUES
(11, '10', 'admin', '2', 1, '1', 'sekretaris', 'Abdullah', '21232f297a57a5a743894a0e4a801fc3', 'admin@admins.com'),
(12, '11', 'lurah', '1', 1, '1', '1234567890123456', 'Nasrul Fadhil', 'abeac07d3c28c1bef9e730002c753ed4', ''),
(13, '12', 'rakyat', '', 0, '1', '1234567890', 'Yunita Fitriani', 'e807f1fcf82d132f9bb018ca6738a19f', ''),
(14, '13', 'rakyat', '', 0, '1', '1108072406150001', 'Muhammad Rafa Azka Putra', '404be13c483edc4cd5961bcbeef84237', ''),
(15, '14', 'rakyat', '', 0, '1', '1108074909780001', 'Nurjannah', '05c98684dc30079618565d9738c3a00f', ''),
(16, '15', 'rakyat', '', 0, '1', '1108071108980001', 'Muhammad Ichsan', '8ccb7a3fa0b272ecfefe790fff129ce0', ''),
(17, '16', 'rakyat', '', 0, '1', '1108076302010001', 'Liza Rahmati', 'deee53665e41a4fa9016b9fdcfc47adc', ''),
(18, '17', 'rakyat', '', 0, '1', '1108074906040001', 'Diniati', '8913495f6df29f6212caa2104b8399b4', ''),
(19, '18', 'rakyat', '', 0, '1', '1108070107540117', 'Abdul Muttaleb', 'b697d1b23ca379e9aec28ee049402fcd', ''),
(20, '19', 'rakyat', '', 0, '1', '1108074107680162', 'Salbiah', '8b7290cfee290c5bdbab79f725b3d7aa', ''),
(21, '20', 'rakyat', '', 0, '1', '1108072606920001', 'Hasan Basri', '7980d0cb50f97b4efc45f41415762357', ''),
(22, '21', 'rakyat', '', 0, '1', '1108074605940002', 'Halimaton Sakdiah', 'df2d34cb0dbc7b7b9f4cf98760eb10c7', ''),
(23, '22', 'rakyat', '', 0, '1', '1108071105970001', 'Muhibbudin', '2eed4be1a82409f0846c39d2f4b488ed', ''),
(24, '23', 'rakyat', '', 0, '1', '1108074211990001', 'Nurlinawati', '1d6bcda5f8fbd8f23dec18fc792b93aa', ''),
(25, '24', 'rakyat', '', 0, '1', '1108070507030002', 'Zamzami', 'b40b5955fcdd3da125d366487903a30d', ''),
(26, '25', 'rakyat', '', 0, '1', '1108074903080001', 'Mauliana', 'c2d9dd2700cc2651b668889903f775c0', ''),
(27, '26', 'rakyat', '', 0, '1', '1108074708100001', 'Riska Khairuna', '5c93ea92a6aa8fb22240eb3bccdc3d31', ''),
(28, '27', 'rakyat', '', 0, '1', '1108070107680152', 'Tarmizi B', '46ae8eb6a59f09541eb261e4b662e706', ''),
(29, '28', 'rakyat', '', 0, '1', '1108074107680152', 'Basiah', '9f726d81133479db7b5d43f1366f2620', ''),
(30, '29', 'rakyat', '', 0, '1', '1108070708960002', 'Muhammad Salman', 'bd05322d3fc9cad910b90820a39fbdcf', ''),
(31, '30', 'rakyat', '', 0, '1', '1108071303070003', 'Muh. Rasydy Hidayat', '1d4f938059aef7444ff9dc0b58c35937', ''),
(32, '31', 'rakyat', '', 0, '1', '1111111111111111', 'ASDFGHJKL', 'fa1d3eb08a879de9a4cd9995a1aa91e1', ''),
(33, '32', 'rakyat', '', 0, '1', '0000000000000000', 'CINTA', '1e4a1b03d1b6cd8a174a826f76e009f4', ''),
(34, '33', 'rakyat', '', 0, '1', '2222222222222222', 'tambah', '0fff460dde6c581f25b95e01aa762be1', '');

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
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `jenis_mohon`
--
ALTER TABLE `jenis_mohon`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` bigint(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `sr_akte_lahir`
--
ALTER TABLE `sr_akte_lahir`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sr_akte_mati`
--
ALTER TABLE `sr_akte_mati`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sr_belum_nikah`
--
ALTER TABLE `sr_belum_nikah`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sr_ket_cerai`
--
ALTER TABLE `sr_ket_cerai`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sr_ket_miskin`
--
ALTER TABLE `sr_ket_miskin`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sr_ket_nikah`
--
ALTER TABLE `sr_ket_nikah`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sr_ket_pindah`
--
ALTER TABLE `sr_ket_pindah`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sr_kk_baru`
--
ALTER TABLE `sr_kk_baru`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sr_kk_kurang`
--
ALTER TABLE `sr_kk_kurang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sr_kk_tambah`
--
ALTER TABLE `sr_kk_tambah`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sr_ktp_baru`
--
ALTER TABLE `sr_ktp_baru`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sr_ktp_hilang`
--
ALTER TABLE `sr_ktp_hilang`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surat_mohon`
--
ALTER TABLE `surat_mohon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
