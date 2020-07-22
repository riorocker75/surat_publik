-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 09:28 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
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
-- Table structure for table `anggota_kk_baru`
--

CREATE TABLE `anggota_kk_baru` (
  `id` int(90) NOT NULL,
  `penduduk_id` text NOT NULL,
  `nama` text NOT NULL,
  `nik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dah_menu`
--

CREATE TABLE `dah_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_mother` varchar(100) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `menu_url` text NOT NULL,
  `menu_parent` int(11) NOT NULL,
  `menu_sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dah_menu`
--

INSERT INTO `dah_menu` (`menu_id`, `menu_mother`, `menu_name`, `menu_url`, `menu_parent`, `menu_sort`) VALUES
(1, 'menu-satu', '0', '0', 0, 0),
(12, 'menu-dua', '0', '0', 0, 0),
(33, 'menu-satu', 'Home', 'http://shop.malasngoding.com/', 0, 0),
(35, 'menu-satu', 'Privacy Policy', '#', 0, 4),
(36, 'undefined', 'Home', 'HOme', 0, 0),
(44, 'menu-dua', 'Tutorial Pemrograman', 'http://www.malasngoding.com/', 0, 0),
(50, 'menu-dua', 'Tracking Resi', 'http://shop.malasngoding.com/index/tracking', 0, 1),
(53, 'menu-satu', 'Testimonial', '#', 0, 4),
(54, 'menu-dua', 'Testimonial', '#', 0, 3);

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
(4, 'show_post_image', '1'),
(5, 'show_menu_satu', '1'),
(6, 'show_menu_dua', '1'),
(7, 'widget_social_facebook', 'https://www.facebook.com/malasngodingpage'),
(8, 'widget_social_twitter', 'https://twitter.com/malasngoding'),
(9, 'widget_social_google_plus', 'https://plus.google.com/+MalasNgoding'),
(10, 'widget_social_instagram', 'https://www.instagram.com/malasngoding/'),
(11, 'widget_social_youtube', 'https://www.youtube.com/channel/UCry0-mTjkfyPBR-u6XNR4gw'),
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
  `kode_surat` text NOT NULL,
  `tgl_ajukan` datetime NOT NULL,
  `tgl_disahkan` datetime NOT NULL,
  `ns_preview` text NOT NULL,
  `nomor_surat` text NOT NULL,
  `format_surat` longtext NOT NULL,
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
-- Table structure for table `jenis_syarat`
--

CREATE TABLE `jenis_syarat` (
  `id` int(11) NOT NULL,
  `kode_surat` text NOT NULL,
  `isi_syarat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(8, 'sindoro', '1234567890288', '', 'pria', '', '2020-06-27', 'Islam', '', '', '', '', 'anak', 'wni', '', '', '', '', '', '', '', '', '', '', '');

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

--
-- Dumping data for table `sr_ket_miskin`
--

INSERT INTO `sr_ket_miskin` (`id`, `nomor_surat`, `surat_mohon_id`, `penduduk_id`, `nama_ayah`, `nama_ibu`, `tgl_diajukan`, `tgl_disahkan`, `foto_kopi_kk`, `foto_kopi_ktp`, `status_surat`) VALUES
(1, '', 'SKKM-9288', '4', 'Umam', 'Balqis', '2020-06-06 00:00:00', '0000-00-00 00:00:00', '9121_Screenshot_(8).png', '39591_Screenshot_(2).png', 'ditolak');

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
(1, '003', '4', '2020-06-10 00:00:00', '2020-06-10 00:00:00', '4', 'SK3B-77298', '8929910019', '4', '', '5116_Screenshot_(10).png', '27527_Screenshot_(9).png', '22026_Screenshot_(8).png', '31242_Screenshot_(5).png', 'diterima', 'Budi 320019927, Rudi 23901279, Sumail 98290109, Miracle 23919200', '<ol>\r\n	<li>Budi 320019927</li>\r\n	<li>Rudi 23901279</li>\r\n	<li>Sumail 98290109</li>\r\n	<li>Miracle 23919200</li>\r\n</ol>\r\n'),
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

--
-- Dumping data for table `sr_kk_kurang`
--

INSERT INTO `sr_kk_kurang` (`id`, `nomor_surat`, `penduduk_id`, `tgl_diajukan`, `tgl_disahkan`, `surat_mohon_id`, `kpl_keluarga`, `anggota_id`, `no_kk`, `foto_kopi_kk`, `ket_meninggal`, `ket_pindah`, `status_surat`) VALUES
(1, '002', '4', '2020-06-07 00:00:00', '2020-06-08 00:00:00', 'SKPgAKK-5082', 'Umam', '1', '3341515131', '4405_Screenshot_(8).png', '41888_Screenshot_(2).png', '', 'diterima');

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
(1, '001', '4', '2020-06-07 00:00:00', '2020-06-08 00:00:00', 'SKPnAKK-3618', 'umam', '1', '9992992001', '6175_Screenshot_(8).png', '28025_Screenshot_(1).png', '54900_Screenshot_(4).png', 'diterima'),
(2, '004', '4', '2020-06-13 00:00:00', '2020-06-13 00:00:00', 'SKPnAKK-5226', 'Sumantri', '7', '0982772635', '', '7312_Screenshot_(10).png', '49167_Screenshot_(9).png', 'diterima');

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
(15, 'SKKM-9288', '4', 'SKKM', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Maaf ada yang kurang dari surat anda', 'Pengajuan Pembuatan Keterangan Kurang Mampu', '3', 'ditolak'),
(20, 'SKKTPB-6845', '4', 'SKKTPB', '', '0000-00-00 00:00:00', '2020-06-07 00:00:00', '0000-00-00 00:00:00', '', 'Pengajuan Pembuatan KTP Baru', '3', 'review'),
(21, 'SKPgAKK-5082', '4', 'SKPgAKK', '002', '0000-00-00 00:00:00', '2020-06-08 00:00:00', '0000-00-00 00:00:00', '', 'Pengajuan Pengurangan Anggota Kartu Kelu...', '3', 'diterima'),
(22, 'SKPnAKK-3618', '4', 'SKPnAKK', '001', '0000-00-00 00:00:00', '2020-06-08 00:00:00', '0000-00-00 00:00:00', '', 'Pengajuan Penambahan Anggota Kartu Keluarga', '3', 'diterima'),
(25, 'SK3B-77298', '4', 'SK3B', '003', '2020-06-10 00:00:00', '2020-06-10 00:00:00', '0000-00-00 00:00:00', '', 'Pengajuan Pembuatan Kartu Keluarga Baru', '3', 'diterima'),
(26, 'SKPnAKK-5226', '4', 'SKPnAKK', '004', '2020-06-13 00:00:00', '2020-06-13 00:00:00', '0000-00-00 00:00:00', '', 'Pengajuan Penambahan Anggota Kartu Keluarga', '3', 'diterima'),
(27, 'SK3B-99758', '1', 'SK3B', '', '2020-07-09 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'Pengajuan Pembuatan Kartu Keluarga Baru', '1', 'review');

-- --------------------------------------------------------

--
-- Table structure for table `surat_syarat`
--

CREATE TABLE `surat_syarat` (
  `id` int(11) NOT NULL,
  `kode_surat` text NOT NULL,
  `syarat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tes_in`
--

CREATE TABLE `tes_in` (
  `id` int(55) NOT NULL,
  `nomor` text NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tes_in`
--

INSERT INTO `tes_in` (`id`, `nomor`, `tgl`) VALUES
(1, '', '0000-00-00 00:00:00'),
(2, '', '2020-06-01 19:38:55'),
(3, '', '2020-06-01 19:39:28');

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
(9, '8', 'rakyat', '', 0, '1', '1234567890289', 'sindoro', 'c81c773c2a38ceccaf842dff80f8fa25', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota_kk_baru`
--
ALTER TABLE `anggota_kk_baru`
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
-- Indexes for table `jenis_syarat`
--
ALTER TABLE `jenis_syarat`
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
-- Indexes for table `surat_syarat`
--
ALTER TABLE `surat_syarat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tes_in`
--
ALTER TABLE `tes_in`
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
-- AUTO_INCREMENT for table `anggota_kk_baru`
--
ALTER TABLE `anggota_kk_baru`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jenis_mohon`
--
ALTER TABLE `jenis_mohon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_syarat`
--
ALTER TABLE `jenis_syarat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `surat_syarat`
--
ALTER TABLE `surat_syarat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tes_in`
--
ALTER TABLE `tes_in`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
