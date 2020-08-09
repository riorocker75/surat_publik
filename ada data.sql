-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 12:31 PM
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
(12, 'blog_welcome', '<p><span style=\"font-size:18px\"><span style=\"color:#c0392b\"><strong>Prosedur Pemesanan Surat : </strong></span></span></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Login sebagai penduduk di desa Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara.</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Masukkan username Nomor Induk Kependudukan (NIK) dan password NIK (default) anda.</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Jika berhasil masuk, silahkan pilih surat yang ingin diajukan.</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Untuk mengetahui syarat yang harus dipenuhi maka anda menuju&nbsp;menu ajukan surat dengan memilih surat yang ingin diajukan.</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Lengkapi syarat dan isi data anda dengan benar sesuai surat yang anda ajukan.</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Jenis surat yang dapat diajukan yaitu buat kartu keluarga (baru, penambahan dan pengurangan anggota), buat kartu tanda penduduk (baru dan kehilangan), surat keterangan kelahiran, surat keterangan meninggal, surat keterangan kurang mampu, surat keterangan belum menikah, surat keterangan sudah menikah dan surat keterangan bercerai.&nbsp;</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Setelah berhasil diajukan maka sekretaris desa memeriksa kelengkapan syarat yang diupload dan kebenaran isian data serta mencetak surat ajuan jikalau disetujui.</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Penduduk harus mengunjungi sistem kembali agar mengetahui pemberitahuan surat dengan status review, selesai dan ditolak serta keterangan untuk pengambilan surat yang dilakukan oleh sekretaris desa.</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Jika selesai/ditolak maka segera&nbsp;kunjungi kantor kepala desa.</span></span></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\"><u><span style=\"color:#c0392b\"><span style=\"font-family:Comic Sans MS,cursive\">Petunjuk bagi penduduk :</span></span></u></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:12px\"><span style=\"font-family:Comic Sans MS,cursive\">Jika&nbsp;sudah berhasil login maka disarankan untuk mengganti username dan password di Menu</span><span style=\"color:#c0392b\"><span style=\"font-family:Comic Sans MS,cursive\"><strong> Profil Saya</strong></span></span></span></li>\r\n	<li><span style=\"font-size:12px\"><span style=\"font-family:Comic Sans MS,cursive\">Jika mau lihat dan ubah data pribadi anda maka klik di Menu <span style=\"color:#c0392b\">Data Pribadi</span></span></span></li>\r\n	<li><span style=\"font-size:12px\"><span style=\"font-family:Comic Sans MS,cursive\">Jika mau ajukan surat maka klik&nbsp;Menu <span style=\"color:#c0392b\">Ajukan Surat&nbsp;</span>lalu pilih surat yang diinginkan serta upload syarat dan isi data dengan lengkap dan benar</span></span></li>\r\n	<li><span style=\"font-size:12px\"><span style=\"font-family:Comic Sans MS,cursive\">Jika mau lihat surat yang sudah berhasil diajukan dengan status review, selesai dan ditolak di Menu <span style=\"color:#c0392b\">Jejak Pengajuan Surat</span></span></span></li>\r\n	<li><span style=\"font-size:12px\"><span style=\"font-family:Comic Sans MS,cursive\">Jika mau lihat tentang informasi desa maka klik <span style=\"color:#c0392b\">Menu Tentang (Umum, Struktur, Pelayanan Surat dan Pengembang)</span></span></span></li>\r\n	<li><span style=\"font-size:12px\"><span style=\"font-family:Comic Sans MS,cursive\">Jika anda mau keluar maka klik Menu <span style=\"color:#c0392b\">Logout</span></span></span></li>\r\n</ul>\r\n'),
(13, 'struktur', '<table border=\"0\" cellpadding=\"4\" cellspacing=\"2\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Kepala Desa&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n			<td>Nasrul Fadhil, ST</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sekretaris&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n			<td>Abdullah, SE</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tuha 8&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>Tgk Halim, S.Pd</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bendahara&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n			<td>Abdullah, S.Sos</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tuha 4&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>1. Tarmizi,&nbsp; S.Pd</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>2. Syarifuddin&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>3. Fakri</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>4. Khalil</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>5. Iskandar</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>6. Idris</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>7. Zainabon</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kaur Pemerintahan&nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>Abdul Bahri</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kaur Pembangunan&nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>Saifunnur</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kaur Kesra&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n			<td>Tgk Rasyidi.Y</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kadus Bak Buloh&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>Muhammad</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kadus Tgk Di kulam&nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>Tarmizi.B</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kadus Lampoh Kubu&nbsp; &nbsp; &nbsp;&nbsp;</td>\r\n			<td>Muhammad Rizal, S.Pd</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(14, 'pengembang', '<table border=\"0\" cellpadding=\"4\" cellspacing=\"2\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></td>\r\n			<td>: Muhammad Ichsan</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>NIM</strong></td>\r\n			<td>: 1657301062</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Tempat Lahir</strong></td>\r\n			<td>: Ulee Cibrek</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Tanggal Lahir</strong></td>\r\n			<td>: 11 Agustus 1998</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Alamat</strong></td>\r\n			<td>: Desa Ulee Ceubrek</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Nomor HP</strong></td>\r\n			<td>: 0822-7924-8267</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Email</strong></td>\r\n			<td>: ichsanaifaichravaro1998@gmail.com</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Prodi</strong></td>\r\n			<td>: Teknik Informatika</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Jurusan</strong></td>\r\n			<td>: Teknologi Informasi dan Komputer</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Kampus</strong></td>\r\n			<td>: Politeknik Negeri Lhokseumawe</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Judul TGA</strong></td>\r\n			<td>: Sistem Informasi Pelayanan Administrasi Kependudukan Berbasis Web</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp; ( Studi Kasus : Desa Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp; Aceh Utara )</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(15, 'umum', '<table border=\"0\" cellpadding=\"6\" cellspacing=\"4\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Luas Wilayah&nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n			<td>60 Ha</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jumlah Dusun</td>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>1. Dusun Bak Buloh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>2. Dusun Tgk Di Kulam</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>3. Dusun Lampoh Kubu</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n'),
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

--
-- Dumping data for table `jenis_surat`
--

INSERT INTO `jenis_surat` (`id`, `nama_surat`, `kode_surat`, `syarat_surat`, `format_surat`) VALUES
(1, 'a', 'a', '<p>a</p>\r\n', '');

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
(9, 'Belum/Tidak Bekerja'),
(10, 'Perawat'),
(11, 'Bidan'),
(12, 'Guru'),
(13, 'Pedagang'),
(14, 'Sopir');

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
(15, 'Muhammad Ichsan', '1108071108980001', '1108071711060771', 'pria', 'Ulee Cibrek', '1998-08-11', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '082279248267', 'belum_menikah', 'anak', 'wni', 'Abdullah', 'Nurjannah', 'o', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
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
(34, 'Sekdes', '1108071404690002', '1108071711060771', 'pria', 'Ulee Ceubrek', '1998-04-14', 'Islam', '', '', '', '', 'kepala', 'wni', '', '', '', '', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(35, 'Muhammad Rafa', '1108071111980001', '1108071711060771', 'pria', 'Lhokseumawe', '2018-08-11', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'famili', '', '', '', '', '', '', '', '', '', ''),
(36, 'Muchtar Abubakar', '1108070107570113', '1108071405200004', 'pria', 'Ulee Ceubrek', '1957-07-01', 'Islam', 'SD/Sederajat', 'Petani/Pekebun', '', 'belum_menikah', 'kepala', 'wni', 'Abu Bakar', 'Nyak Fak', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(37, 'Hasbi Arifin', '1108021604580002', '1108021411060535', 'pria', 'Rayeuk Matang', '1958-04-16', 'Islam', 'SLTA/Sederajat', 'PNS (Pegawai Negeri Sipil)', '', 'menikah', 'kepala', 'wni', 'Arifin', 'Maimunah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(38, 'Salbiah', '1108025510620001', '1108021411060535', 'wanita', 'Lancok', '1962-10-15', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'Abdullah', 'Raliah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(39, 'Roslidia', '1108026509820003', '1108021411060535', 'wanita', 'Lancok', '1982-09-26', 'Islam', 'SLTA/Sederajat', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Hasbi Arifin', 'Salbiah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(40, 'Rosalin', '1108026802840002', '1108021411060535', 'wanita', 'Desa Lancok', '1984-02-28', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Hasbi Arifin', 'Salbiah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(41, 'Ruslan Mauliady', '1108021112850002', '1108021411060535', 'pria', 'Lancok', '1985-12-11', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Hasbi Arifin', 'Salbiah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(42, 'Fika Fitria', '1108025504910004', '1108021411060535', 'wanita', 'Paloh Lada', '1991-04-15', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Hasbi Arifin', 'Salbiah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(43, 'Yulia Elisa Putri', '1108025307950002', '1108021411060535', 'wanita', 'Paloh Lada', '1995-07-13', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'menikah', 'anak', 'wni', 'Hasbi Arifin', 'Salbiah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(44, 'Raisya Syakira', '1108074805110001', '1108021411060535', 'wanita', 'Aceh Utara', '2011-05-08', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'famili', 'wni', 'Jamaluddin', 'Nila', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(45, 'Meliana', '1108026303900003', '1108071203190001', 'wanita', 'Lhokseumawe', '1990-03-23', 'Islam', 'Diploma IV/Strata I', 'Wiraswasta', '', 'cerai_hidup', 'kepala', '', 'Hasbi Arifin', 'Salbiah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(46, 'Rasyidin M.Yacob', '1108071202710002', '1108071811060033', 'pria', 'Lhoong Aceh Besar', '1971-02-12', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', '', 'menikah', 'kepala', 'wni', 'M.Yacob', 'Sumiyati', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(47, 'Marjaniah', '1108074107750225', '1108071811060033', 'wanita', 'Pri Keutapang', '1975-07-01', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'H.M Nurdin', 'Saaudah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(48, 'M. Khalis', '1108072704990001', '1108071811060033', 'pria', 'Prie Keutapang', '1999-04-27', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Rasyidin M.Yacob', 'Marjaniah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(49, 'M. Ridha', '1108072808010002', '1108071811060033', 'pria', 'Prie Keutapang', '2001-08-28', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Rasyidin M.Yacob', 'Marjaniah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(50, 'M. Fauzi', '1108071306040002', '1108071811060033', 'pria', 'Pri Keutapang', '2004-06-13', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Rasyidin M.Yacob', 'Marjaniah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(51, 'M. Farhan', '1108072703070003', '1108071811060033', 'pria', 'Pri Keutapang', '2007-03-27', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Rasyidin M.Yacob', 'Marjaniah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(52, 'Luthfia Amalia', '1108074101150002', '1108071811060033', 'wanita', 'Aceh Utara', '2015-01-01', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Rasyidin M.Yacob', 'Marjaniah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(54, 'Hasanah', '1108077112420001', '1108071001110055', 'wanita', 'Ulee Ceubrek', '1942-12-31', 'Islam', 'SD/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'kepala', 'wni', '', '', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(55, 'Yusmiati', '1108077107740001', '1108071811060186', 'wanita', 'Ulee Ceubrek', '1974-07-31', 'Islam', 'SLTA/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'kepala', 'wni', 'A. Gafar', 'Hasanah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(56, 'Razali A.Gafar', '1108070107810166', '1108070310070003', 'pria', 'Ulee Ceubrek', '1981-07-01', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'A. Gafar', 'Hasanah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(57, 'Nurmiati', '1108076602830002', '1108070310070003', 'wanita', 'Langsa', '1983-02-15', 'Islam', 'Diploma IV/Strata I', 'Wiraswasta', '', 'menikah', 'istri', 'wni', 'Nurdin Yusuf', 'Umi Kalsum', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(58, 'Saiful Mardi', '1174052811760001', '1174052110090002', 'pria', 'Ulee Cibrek', '1976-11-28', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'A. Gafar', 'Hasanah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(59, 'Rita Indriani', '1174055707890001', '1174052110090002', 'wanita', 'Paya Biren', '1989-07-17', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'Suhaimi', 'Mariani', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(60, 'Laisya Alvia Nora', '1174057006070001', '1174052110090002', 'wanita', 'Ulee Cibrek', '2007-06-30', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Saiful Mardi', 'Rita Indriani', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(61, 'Zawil Qiran', '1174051407120001', '1174052110090002', 'pria', 'Langsa', '2012-07-14', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Saiful Mardi', 'Rita Indriani', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(62, 'Muhammad', '1108070107750178', '1108072506070012', 'pria', 'Ulee Ceubrek', '1975-07-01', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'Tgk Aji', 'Ainol Marziah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(63, 'Yusnidar', '1108076303860001', '1108072506070012', 'wanita', 'Suka Ramee', '1986-03-23', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'M. Yusuf', 'Syamsiah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(64, 'Maulida', '1108074304070003', '1108072506070012', 'wanita', 'Aceh Utara', '2007-04-03', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Muhammad', 'Yusnidar', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(65, 'Shadrina Hanifa', '1108075510110001', '1108072506070012', 'wanita', 'Lhokseumawe', '2011-10-15', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Muhammad', 'Yusnidar', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(66, 'Ulfa Khaira', '1108076508170001', '1108072506070012', 'wanita', 'Lhokseumawe', '2020-08-07', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Muhammad', 'Yusnidar', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(67, 'Ainol Marziah', '1108074107540096', '1108071711060651', 'wanita', 'Ulee Ceubrek', '1954-07-01', 'Islam', 'SD/Sederajat', 'Petani/Pekebun', '', 'menikah', 'kepala', 'wni', 'Hasyem', 'Nurhayati', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(68, 'Khadijah', '1108074107520124', '1108071711060689', 'wanita', 'Ulee Ceubrek', '1952-07-01', 'Islam', 'SD/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'kepala', 'wni', 'Hasyem', 'Habsah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(69, 'Khairul Nisa', '1108074201740001', '1108071711060689', 'wanita', 'Ulee Ceubrek', '1974-01-02', 'Islam', 'SLTA/Sederajat', 'Petani/Pekebun', '', 'belum_menikah', 'anak', 'wni', 'Abdul Adib A.Gani', 'Khadijah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(70, 'Salmun', '1106086802870001', '1108071703200003', 'wanita', 'Lhokseumawe', '1987-02-28', 'Islam', 'SLTA/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'kepala', 'wni', 'Abd Adib', 'Khatijah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(71, 'Muhammad Furqhan', '1106080206080001', '1108071703200003', 'pria', 'Lhokseumawe', '2008-02-06', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Rizal Khairi', 'Salmun', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(72, 'Rizal Mahdi', '1108071602880001', '1108072712170002', 'pria', 'Ulee Cibrek', '1988-02-18', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'M. Aziz', 'Khadijah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(73, 'Asmaul Husna', '1108036503960002', '1108072712170002', 'wanita', 'Keureusek', '1996-03-25', 'Islam', 'SLTA/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'Usman', 'Basyariah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(74, 'Muhammad Rafsanjani', '1108071605180001', '1108072712170002', 'pria', 'Lhokseumawe', '2018-05-16', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Rizal Mahdi', 'Asmaul Husna', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(75, 'Syarbaini', '1108073012660001', '1108071010070001', 'pria', 'Sigli', '1966-12-30', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', '', 'menikah', 'kepala', 'wni', 'Muhammad Yahya', 'Fatimah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(76, 'Musniah', '1108074107690093', '1108071010070001', 'wanita', 'Ulee Ceubrek', '1969-07-01', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'Abdul Adib A.Gani', 'Khadijah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(77, 'Fazlur Rahmi', '1108075505980001', '1108071010070001', 'wanita', 'Geudong', '1998-05-15', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Syarbaini', 'Musniah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(78, 'Husnan Maulana', '1108072904040001', '1108071010070001', 'pria', 'Aceh Utara', '2004-04-29', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Syarbaini', 'Musniah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(79, 'Muslim', '1173010303660003', '1108072905170001', 'pria', 'Ulee Cibrek', '1966-03-03', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'Adib Abdul Gani', 'Khatijah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(80, 'Apridayani', '1173037004730002', '1108072905170001', 'wanita', 'Pulau Tiga', '1973-04-30', 'Islam', 'SLTA/Sederajat', 'PNS (Pegawai Negeri Sipil)', '', 'menikah', 'istri', 'wni', 'Razali', 'Rosna', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(81, 'Zahra Fonna', '1173014202970004', '1108072905170001', 'wanita', 'Geudong', '1997-02-02', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Muslim', 'Apridayani', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(82, 'Muhammad Habib Al Fasya', '1173012604080002', '1108072905170001', 'pria', 'Lhokseumawe', '2008-04-26', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Muslim', 'Apridayani', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(83, 'Siti Humairah', '1173015806110001', '1108072905170001', 'wanita', 'Lhokseumawe', '2011-06-18', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Muslim', 'Apridayani', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(84, 'Syarifuddin', '1108070909690001', '1108072812100004', 'pria', 'Lhokseumawe', '1969-09-09', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'M. Nur', 'Rukiah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(85, 'Suryati', '1108076404690001', '1108072812100004', 'wanita', 'Ulee Ceubrek', '1969-04-24', 'Islam', 'Diploma IV/Strata I', 'PNS (Pegawai Negeri Sipil)', '', 'menikah', 'istri', 'wni', 'M. Aji', 'Ainol Marziah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(86, 'Eka Maya Sari', '1108076105960001', '1108072812100004', 'wanita', 'Geudong', '1996-05-21', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Syarifuddin', 'Suryati', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(87, 'Febry Kesrian', '1108076102980001', '1108072812100004', 'wanita', 'Geudong', '1998-02-21', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Syarifuddin', 'Suryati', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(88, 'Ratu Riza Fanesha', '1108076602060001', '1108072812100004', 'wanita', 'Lhokseumawe', '2006-02-26', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Syarifuddin', 'Suryati', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(89, 'Mailindawati', '1108074609860001', '1108071607180003', 'wanita', 'Ulee Ceubrek', '1986-09-06', 'Islam', 'SLTA/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'kepala', 'wni', 'M. Jamil', 'Hamidah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(90, 'Muhammad Azzam Khalif', '1108071407180001', '1108071607180003', 'pria', 'Lhokseumawe', '2018-07-14', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Markini', 'Mailindawati', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(91, 'Abdul Bahri', '1108071509790001', '1108071001110001', 'pria', 'Ulee Ceubrek', '1979-09-15', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'M. Jamil', 'Hamidah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(92, 'Nurbahri', '1108084107880243', '1108071001110001', 'wanita', 'Desa Pie', '1988-07-01', 'Islam', 'SLTA/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'Abubakar', 'Tarmisyah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(93, 'Rahmat Asyura', '1108070601090001', '1108071001110001', 'pria', 'Aceh Utara', '2009-01-08', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Abdul Bahri', 'Nurbahri', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(94, 'Zakiatul Asyifa', '1108076602150001', '1108071001110001', 'wanita', 'Lhokseumawe', '2015-02-26', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Abdul Bahri', 'Nurbahri', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(95, 'Tarmizi', '1108070107630113', '1108071711060732', 'pria', 'Ulee Ceubrek', '1963-12-31', 'Islam', 'Diploma IV/Strata I', 'PNS (Pegawai Negeri Sipil)', '', 'menikah', 'kepala', 'wni', 'Abu Bakar', 'Rubiah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(96, 'Darmiati', '1108075302710001', '1108071711060732', 'pria', 'Ulee Ceubrek', '1970-02-13', 'Islam', 'SLTA/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'Reubi', 'Fatimah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(97, 'Arif Munandar', '1108070909940003', '1108071711060732', 'pria', 'Ulee Ceubrek', '1994-09-09', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Tarmizi', 'Darmiati', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(98, 'Aidil Fahmi', '1108070802980001', '1108071711060732', 'pria', 'Lhokseumawe', '1998-02-08', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'istri', 'wni', 'Tarmizi', 'Darmiati', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(99, 'Fuadi', '1108071704000001', '1108071711060732', 'pria', 'Lhokseumawe', '2000-04-08', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Tarmizi', 'Darmiati', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(100, 'Faza Aqila', '1108075510070001', '1108071711060732', 'pria', 'Lhokseumawe', '2007-10-15', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Tarmizi', 'Darmiati', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(101, 'Fhatimah R', '1108074107290009', '1108071711060767', 'wanita', 'Rayeuk Matang', '1929-07-01', 'Islam', 'SD/Sederajat', 'Petani/Pekebun', '', 'menikah', 'kepala', 'wni', 'Hasyem', 'Habsyah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(102, 'Zulkarnaini', '1108070603880002', '1108073101180001', 'pria', 'Gampong Mns Mee', '1988-03-06', 'Islam', 'Diploma IV/Strata I', 'Perawat', '', 'menikah', 'kepala', 'wni', 'M. Yacob', 'Sapiah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(103, 'Mutia Rauza Nova', '1108075011920001', '1108073101180001', 'wanita', 'Ulee Ceubrek', '1992-11-10', 'Islam', 'Diploma IV/Strata I', 'Bidan', '', 'menikah', 'istri', 'wni', 'Tarmizi', 'Darmiati', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(104, 'Muhammad Zayyan Shakeel', '1108071702170003', '1108073101180001', 'pria', 'Lhokseumawe', '2017-02-17', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Zulkarnaini', 'Mutia Rauza Nova', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(105, 'Darwis Setiawan', '1108072911870001', '1108071612160001', 'pria', 'Desa Teumpok Teungku', '1987-11-29', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'M. Jamil Diah', 'Basyariah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(106, 'Maulina', '1108076510960001', '1108071612160001', 'wanita', 'Ujong Reuba', '1996-10-25', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'Abdussamad', 'Nurfasah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(107, 'Muhammad Abrar Alfatih', '1108071512160001', '1108071612160001', 'pria', 'Lhokseumawe', '2016-12-15', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Darwis Setiawan', 'Maulina', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(108, 'Rubayah', '1108074107680165', '1108071811060001', 'wanita', 'Blang Mee', '1968-07-01', 'Islam', 'SD/Sederajat', 'Petani/Pekebun', '', 'belum_menikah', 'kepala', 'wni', 'Fiah', 'Khadijah', '', 'buloh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(109, 'Syarbaini', '1108140107840421', '1108112404140004', 'pria', 'Desa Ujung Blang', '1984-07-01', 'Islam', 'SLTP/Sederajat', 'Lainnya', '', 'menikah', 'kepala', 'wni', 'Mahmud', 'Jummiati', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(110, 'Safriani', '1108116901890002', '1108112404140004', 'wanita', 'Bayu', '1989-01-29', 'Islam', 'Diploma III', 'Bidan', '', 'menikah', 'istri', 'wni', 'M. jafar', 'Rosmiati', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(111, 'Haura Nazifa Cindenia', '1108115404140001', '1108112404140004', 'wanita', 'Aceh Utara', '2014-04-14', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Syarbaini', 'Safriani', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(112, 'Umisalamah', '1108074107530109', '1108071711060527', 'wanita', 'Ulee Ceubrek', '1953-07-01', 'Islam', 'SD/Sederajat', 'Petani/Pekebun', '', 'menikah', 'kepala', 'wni', 'Abu Bakar', 'Rahmah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(113, 'M. Yusuf', '1108073112710001', '1108071909080005', 'pria', 'Ulee Ceubrek', '1971-12-31', 'Islam', 'SD/Sederajat', 'Petani/Pekebun', '', 'menikah', 'kepala', 'wni', 'Idris', 'Umisalamah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(114, 'Nuraini', '1108077112750003', '1108071909080005', 'wanita', 'Rantou', '1975-12-31', 'Islam', 'SD/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'M. Ali', 'Akidah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(115, 'Muhammad Boini', '1108070806070002', '1108071909080005', 'pria', 'Ulee Cibrek', '2007-06-08', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'M. Yusuf', 'Nuraini', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(116, 'Hamidiah', '1108076602100002', '1108071909080005', 'wanita', 'Ulee Cibrek', '2010-02-26', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'M. Yusuf', 'Nuraini', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(117, 'Husna Mulia', '1108075411110001', '1108071909080005', 'wanita', 'Aceh Utara', '2011-11-14', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'M. Yusuf', 'Nuraini', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(118, 'Abdullah', '1108071412130001', '1108071909080005', 'pria', 'Aceh Utara', '2013-12-14', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'M. Yusuf', 'Nuraini', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(119, 'Marzuki R', '1108070105501122', '1108071811060176', 'pria', 'Ulee Ceubrek', '1955-07-01', 'Islam', 'SLTA/Sederajat', 'Petani/Pekebun', '', 'menikah', 'kepala', 'wni', 'Tgk Raden', 'Khatijah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(120, 'Karimah', '1108074107530143', '1108071811060176', 'wanita', 'Pidie', '1963-07-01', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'Tgk Mahmud', 'Kamariyah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(121, 'Sri Handayani', '1108074709910001', '1108071811060176', 'wanita', 'Ulee Ceubrek', '1991-09-07', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Marzuki', 'Karimah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(122, 'Kauriati', '1108074403940004', '1108071811060176', 'wanita', 'Ulee Ceubrek', '1994-03-04', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Marzuki', 'Karimah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(123, 'Maulidar', '1108076008960001', '1108071811060176', 'wanita', 'Ulee Ceubrek', '1996-08-20', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Marzuki', 'Karimah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(124, 'Fani Anita', '1108074811990001', '1108071811060176', 'wanita', 'Ulee Ceubrek', '1999-11-08', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Marzuki', 'Karimah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(125, 'M. Arfan Farasyi', '1108071906040001', '1108071811060176', 'pria', 'Ulee Ceubrek', '2004-06-19', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Marzuki', 'Karimah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(126, 'Muhammad Diah', '1108070510740002', '1108071006140001', 'pria', 'Rangkileh', '1974-10-05', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'Ismail', 'Hanijah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(127, 'Rosmawar', '1108075102870003', '1108071006140001', 'wanita', 'Kulam Baro', '1987-02-11', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'Marzuki', 'Karimah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(128, 'Nuralya Sofea', '1108076111070001', '1108071006140001', 'wanita', 'Aceh Utara', '2007-11-12', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Muhammad Diah', 'Rosmawar', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(129, 'Muhammad Denis Adam', '1108072111080004', '1108071006140001', 'pria', 'Aceh Utara', '2008-11-12', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Muhammad Diah', 'Rosmawar', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(130, 'Dania Qaisarah', '1108075008130001', '1108071006140001', 'wanita', 'Aceh Utara', '2013-08-10', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Muhammad Diah', 'Rosmawar', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(131, 'Walidin', '1108120107750244', '1108072602130001', 'pria', 'Gp. Teungoh B', '1975-07-01', 'Islam', 'SD/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'Syammah', 'Dalikha', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(132, 'Nurlela', '1108074107770184', '1108072602130001', 'wanita', 'Ulee Ceubrek', '1977-07-01', 'Islam', 'SD/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'M. Husen', 'Adnan', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(133, 'Hayatul Nupus', '1108076411110001', '1108072602130001', 'wanita', 'Lhokseumawe', '2011-11-24', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Walidin', 'Nurlela', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(134, 'Muhammad Egy', '1108072606140002', '1108072602130001', 'pria', 'Aceh Utara', '2014-06-26', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Walidin', 'Nurlela', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(135, 'Umar Ahmad', '1108073112570002', '1108072506070011', 'pria', 'Ulee Ceubrek', '1957-12-31', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'Ahmad', 'Hamidah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(136, 'Khadijah Umar', '1108074107600243', '1108072506070011', 'wanita', 'Kandang', '1960-07-01', 'Islam', 'SD/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'Muhammad', 'Hamimah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(137, 'Khairanita', '1108076810900001', '1108072506070011', 'wanita', 'Ulee Ceubrek', '1990-10-28', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Umar Ahmad', 'Khadijah Umar', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(138, 'Idris Ismail', '1207230506720002', '1108070104190001', 'pria', 'Cet Merak Baroh', '1972-06-05', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'Ismail', 'Hafsah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(139, 'Marwati', '1207234707760016', '1108070104190001', 'wanita', 'Ulee Cibrek', '1976-07-07', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'M. Jamil', 'Hamidah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(140, 'Muhammad Khatami', '1207231910000010', '1108070104190001', 'pria', 'Lhokseumawe', '2000-10-19', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Idris Ismail', 'Marwati', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(141, 'Niswatul Khaira', '1207234104090077', '1108070104190001', 'wanita', 'Ulee Cibrek', '2009-04-01', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Idris Ismail', 'Marwati', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(142, 'M. Jafar', '1108070107600174', '1108071711060536', 'pria', 'Ulee Ceubrek', '1960-07-01', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', '', 'menikah', 'kepala', 'wni', 'Abdullah', 'Faridat', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(143, 'Faridah', '1108074107670121', '1108071711060536', 'wanita', 'Blang Jruen', '1967-07-01', 'Islam', 'Diploma IV/Strata I', 'PNS (Pegawai Negeri Sipil)', '', 'menikah', 'istri', 'wni', 'Usman Ali', 'Habibah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(144, 'M. Zulkarnaini', '1108072904010002', '1108071711060536', 'pria', 'Lhokseumawe', '2001-04-29', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'M. Jafar', 'Faridah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(145, 'Zainabon', '1108074107700205', '1108071711060540', 'wanita', 'Ulee Ceubrek', '1970-07-01', 'Islam', 'SD/Sederajat', 'Petani/Pekebun', '', 'belum_menikah', 'anak', 'wni', '', 'Hanian', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(146, 'Hanian', '1108074107350073', '1108071711060540', 'wanita', 'Ulee Ceubrek', '1935-07-01', 'Islam', 'SD/Sederajat', 'Mengurus Rumah Tangga', '', 'cerai_mati', 'kepala', 'wni', 'Tgk Bee', '', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(147, 'Fhatimah', '1108074107660099', '1108071711060549', 'wanita', 'Ulee Ceubrek', '1966-07-01', 'Islam', 'SD/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'kepala', 'wni', 'Ahmad', 'Aisyah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(148, 'Safrizal', '1108070107890244', '1108071711060549', 'pria', 'Ulee Ceubrek', '1989-07-01', 'Islam', 'Diploma III', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Ibnu Khatab', 'Fhatimah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(149, 'Ismail Yahya', '1108070107620149', '1108071711060559', 'pria', 'Kandang', '1962-07-01', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', '', 'menikah', 'kepala', 'wni', 'M. Yahya', 'Hamidah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(150, 'Nurhasni', '1108074107700208', '1108071711060559', 'wanita', 'Ulee Ceubrek', '1970-07-01', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', '', 'menikah', 'istri', 'wni', 'Ahmad', 'Hamidah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(151, 'Muhammad Jalzuli', '1108071103030001', '1108071711060559', 'pria', 'Ulee Ceubrek', '2003-03-11', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Ismail Yahya', 'Nurhasni', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(152, 'Isya Asyura', '1108074606060001', '1108071711060559', 'wanita', 'Ulee Ceubrek', '2006-05-06', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Ismail Yahya', 'Nurhasni', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(153, 'Nailis Sakdah', '1108076311100001', '1108071711060559', 'wanita', 'Aceh Utara', '2010-11-23', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Ismail Yahya', 'Nurhasni', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(154, 'Sofiana Djamaluddin', '1108076507760001', '1108071711060559', 'wanita', 'Cut Mamplam', '1976-07-25', 'Islam', 'Diploma III', 'Wiraswasta', '', 'belum_menikah', 'famili', 'wni', 'Djamaluddin Hamzah', 'Mariani', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(155, 'A. Gani', '1108070107660091', '1108070402190001', 'pria', 'Ulee Ceubrek', '1966-07-01', 'Islam', 'SD/Sederajat', 'Lainnya', '', 'menikah', 'kepala', 'wni', 'Reji', 'Salami', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(156, 'Marwiyati', '1108074107780205', '1108070402190001', 'wanita', 'Ulee Ceubrek', '1978-07-01', 'Islam', 'SD/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'Ibrahim', 'Rukaiyah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(157, 'Muhammad Suriadi', '1108040407960008', '1108070402190001', 'pria', 'Lhoksukon', '1996-07-04', 'Islam', 'SLTA/Sederajat', 'Belum/Tidak Bekerja', '', 'menikah', 'anak', 'wni', 'A. Gani', 'Marwiyati', 'a', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(158, 'M. Rozy', '1108040808000005', '1108070402190001', 'pria', 'Lhoksukon', '2000-08-08', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'A. Gani', 'Marwiyati', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(159, 'Alfia Turrahmi', '1108076111030001', '1108070402190001', 'wanita', 'Lhokseumawe', '2003-11-21', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'A. Gani', 'Marwiyati', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(160, 'Zulkhairi', '1108040205140002', '1108070402190001', 'pria', 'Lhokseumawe', '2014-05-02', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'A. Gani', 'Marwiyati', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(161, 'Sulaiman Agung', '1108072003720001', '1108072206070051', 'pria', 'Bate Bala', '1972-03-20', 'Islam', 'SD/Sederajat', 'Petani/Pekebun', '', 'menikah', 'kepala', 'wni', 'Hasan', 'Ainon', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(162, 'Rosnaini', '1108074107800241', '1108072206070051', 'wanita', 'Ulee Ceubrek', '1980-07-01', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', '', 'menikah', 'istri', 'wni', 'M. Jalil', 'Habibah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(163, 'Anzalar Rahman', '1108071706080003', '1108072206070051', 'pria', 'Aceh Utara', '2008-06-17', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Sulaiman Agung', 'Rosnaini', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(164, 'Nuril Anwar', '1108070701120001', '1108072206070051', 'pria', 'Aceh Utara', '2012-01-07', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Sulaiman Agung', 'Rosnaini', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(165, 'M. Taeb', '1108070107620143', '1108071711060602', 'pria', 'Ulee Ceubrek', '1962-07-01', 'Islam', 'SD/Sederajat', 'Petani/Pekebun', '', 'menikah', 'kepala', 'wni', 'Abu Bakar', 'Tirahmah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(166, 'Nilawati', '1108074107720142', '1108071711060602', 'wanita', 'Pulo Drien Beukah', '1972-07-01', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', '', 'menikah', 'istri', 'wni', 'Ibrahim', 'Tihajar', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(167, 'Murzani', '1108070609910001', '1108071711060602', 'pria', 'Ulee Ceubrek', '1991-09-06', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'M. Taeb', 'Nilawati', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(168, 'Baizawi', '1108071109950001', '1108071711060602', 'pria', 'Ulee Ceubrek', '1995-09-11', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'M. Taeb', 'Nilawati', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(169, 'M. Munawir', '1108072710010001', '1108071711060602', 'pria', 'Ulee Ceubrek', '2001-10-27', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'M. Taeb', 'Nilawati', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(170, 'M. Rizki', '1108072710010002', '1108071711060602', 'pria', 'Ulee Ceubrek', '2001-10-27', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'M. Taeb', 'Nilawati', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(171, 'Muhammad Alfakis', '1108070612110001', '1108071711060602', 'pria', 'Aceh Utara', '2011-12-06', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'M. Taeb', 'Nilawati', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(172, 'M. Jamil Diah', '1108070107560082', '1108071711060617', 'pria', 'Ulee Ceubrek', '1956-07-01', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', '', 'menikah', 'kepala', 'wni', 'M. Diah', 'Halimah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(173, 'Basyariah', '1108074107600228', '1108071711060617', 'wanita', 'Teumpok Teungku', '1960-07-01', 'Islam', 'SD/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'M. Jafar', 'Hafasah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(174, 'Rudi Putra', '1108071001930001', '1108071711060617', 'pria', 'Ulee Ceubrek', '1993-01-10', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'M. Jamil Diah', 'Basyariah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(175, 'Aura Elvana Zilvi', '1108074801000001', '1108071711060617', 'wanita', 'Ulee Ceubrek', '2000-01-08', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'M. Jamil Diah', 'Basyariah', '', 'dikulam', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(176, 'Abdul Muthalib', '1108070404640001', '1108071811060179', 'pria', 'Lhokseumawe', '1964-04-04', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'Ibrahim', 'Syarifah Zainah Alatas', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(177, 'Isnainiah', '1108075108730001', '1108071811060179', 'wanita', 'Lhokseumawe', '1973-08-11', 'Islam', 'Diploma II', 'PNS (Pegawai Negeri Sipil)', '', 'menikah', 'istri', 'wni', 'Razali', 'Idarwati', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(178, 'Sofya Uzma', '1108074708020001', '1108071811060179', 'wanita', 'Lhokseumawe', '2002-08-07', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Abdul Muthalib', 'Isnainiah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(179, 'Nadya Jasmine', '1108076209030001', '1108071811060179', 'wanita', 'Lhokseumawe', '2003-09-22', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Abdul Muthalib', 'Isnainiah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(180, 'Muhammad Rizky', '1108072505070001', '1108071811060179', 'pria', 'Lhokseumawe', '2007-05-25', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Abdul Muthalib', 'Isnainiah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(181, 'Syarifah Zainah Alatas', '1108077112300001', '1108071811060179', 'wanita', 'Medan', '1930-12-31', 'Islam', 'SD/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'orangtua', 'wni', 'Sayet Umar Alatas', 'Syarifah Aheyah Al Habsyi', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(182, 'M. Iqbal', '1108071606890001', '1108071811060179', 'pria', 'Lhokseumawe', '1989-06-16', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'belum_menikah', 'famili', 'wni', 'Awaluddin', 'Siti Zalecha', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(183, 'Khalil', '1108073112600001', '1108071811060148', 'pria', 'Samalanga', '1960-12-31', 'Islam', 'SLTA/Sederajat', 'PNS (Pegawai Negeri Sipil)', '', 'menikah', 'kepala', 'wni', 'Muhammad', 'Aisyah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(184, 'Rafasah', '1108076103650001', '1108071811060148', 'wanita', 'Tanjong Minjee', '1965-03-21', 'Islam', 'Diploma IV/Strata I', 'PNS (Pegawai Negeri Sipil)', '', 'menikah', 'istri', 'wni', 'Tgk Raden', 'Aminah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(185, 'Riza Irhami', '1108072005960001', '1108071811060148', 'pria', 'Tanjong Minjee', '1996-05-20', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Khalil', 'Rafasah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(186, 'Niswatul Khaira', '1108074709990001', '1108071811060148', 'wanita', 'Blang Peuria', '1999-09-07', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Khalil', 'Rafasah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(187, 'Raudhatul Jannah', '1108074711030001', '1108071811060148', 'wanita', 'Blang Peuria', '2003-11-07', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Khalil', 'Rafasah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(188, 'Zulhanif', '1112052908730001', '1108071202160003', 'pria', 'Geudong', '1973-08-29', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'M. Hanafiah', 'Zubaidah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh');
INSERT INTO `penduduk` (`id`, `nama`, `nik`, `nomor_kk`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `pendidikan`, `pekerjaan`, `no_hp`, `status_nikah`, `status_hub_keluarga`, `status_warga_negara`, `nama_ayah`, `nama_ibu`, `gol_darah`, `dusun`, `desa`, `kecamatan`, `kabupaten`, `kode_pos`, `provinsi`) VALUES
(189, 'Ratna Dewi Susanti', '1112054310790001', '1108071202160003', 'wanita', 'Meuse', '1979-10-03', 'Islam', 'Diploma IV/Strata I', 'PNS (Pegawai Negeri Sipil)', '', 'menikah', 'istri', 'wni', 'Ismail Usman', 'Arfan', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(190, 'Ahlul Syaiqhi Hanif', '1112050407090001', '1108071202160003', 'pria', 'Lhokseumawe', '2009-07-04', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Zulhanif', 'Ratna Dewi Susanti', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(191, 'Qurfy Alhafizd Hanif', '1112010406150001', '1108071202160003', 'pria', 'Lhokseumawe', '2015-06-04', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Zulhanif', 'Ratna Dewi Susanti', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(192, 'Supriady', '1108081011730001', '1108081011060026', 'pria', 'Nibong', '1973-11-10', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'Ismail', 'Mariam', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(193, 'Sofia Wirda', '1108086510750001', '1108081011060026', 'wanita', 'Blang Peuria', '1975-10-25', 'Islam', 'Diploma II', 'Bidan', '', 'menikah', 'istri', 'wni', 'M. Hanafiah', 'Zubaidah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(194, 'Putri Savara Chairani', '1108085203060001', '1108081011060026', 'wanita', 'Lhokseumawe', '2006-03-12', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Supriady', 'Sofia Wirda', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(195, 'Syahrul Ashraf', '1108072305090002', '1108081011060026', 'pria', 'Aceh Utara', '2009-05-23', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Supriady', 'Sofia Wirda', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(196, 'Ibrahim H', '1108070908740002', '1108110812110008', 'pria', 'Ulee Ceubrek', '1974-06-09', 'Islam', 'SD/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'M. Husen', 'Aisyah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(197, 'Mardiana', '1108075408800001', '1108110812110008', 'wanita', 'Ulee Ceubrek', '1980-08-14', 'Islam', 'SD/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'M. Saleh', 'Hamimah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(198, 'Achiyar', '1108072303980001', '1108110812110008', 'pria', 'Ulee Ceubrek', '1998-03-23', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Ibrahim H', 'Mardiana', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(199, 'Aris Munawar', '1108070706020002', '1108110812110008', 'pria', 'Ulee Ceubrek', '2002-06-07', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Ibrahim H', 'Mardiana', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(200, 'Nisa Marsanda', '1108076610040001', '1108110812110008', 'wanita', 'Ulee Ceubrek', '2004-10-26', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Ibrahim H', 'Mardiana', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(201, 'Muammar Irfan', '1108111108110001', '1108110812110008', 'pria', 'Aceh Utara', '2011-08-11', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Ibrahim H', 'Mardiana', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(202, 'Syifa Nazira', '1108117011150001', '1108110812110008', 'wanita', 'Aceh Utara', '2015-11-30', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Ibrahim H', 'Mardiana', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(203, 'Tgk Halim, S.Pd', '1108070604760001', '1108072810110002', 'pria', 'Ulee Cibrek', '1976-04-06', 'Islam', 'Diploma IV/Strata I', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'Abdullah', 'Nurhayati', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(204, 'Nurhafni', '1108075011840004', '1108072810110002', 'wanita', 'Desa Manyang Tunong', '1984-11-10', 'Islam', 'Diploma IV/Strata I', 'Guru', '', 'menikah', 'istri', 'wni', 'Abdul Wahab', 'Juharen', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(205, 'Muhammad Hasmir Rizki', '1108070412000001', '1108072810110002', 'pria', 'Banda Aceh', '2000-12-04', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Halim', 'Nurhafni', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(206, 'Muhammad Hafizal Al-Haitami', '1108070403060001', '1108072810110002', 'pria', 'Lhokseumawe', '2006-03-04', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Halim', 'Nurhafni', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(207, 'Naila Annaura', '1108075504110002', '1108072810110002', 'wanita', 'Aceh Utara', '2011-04-15', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Halim', 'Nurhafni', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(208, 'Saifunnur', '1108070107800199', '1108072707120002', 'pria', 'Ulee Ceubrek', '1980-07-01', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'M. Yacob B', 'Hamidah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(209, 'Dahliana D', '1108114707760003', '1108072707120002', 'wanita', 'Peureulak', '1976-07-07', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'menikah', 'istri', 'wni', 'Dahlan', 'Hasnah Ali', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(210, 'Naufal Dinur Althaf', '1108071810080003', '1108072707120002', 'pria', 'Langsa', '2008-10-18', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Saifunnur', 'Dahliana D', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(211, 'Fakri', '1108071906690001', '1108071811060047', 'pria', 'Tanjong', '1969-06-19', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'Ibrahim', 'Ramlah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(212, 'Bayati', '1108076811790001', '1108071811060047', 'wanita', 'Gampong Kumbang', '1979-11-29', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'menikah', 'istri', 'wni', 'Rusli', 'Dahniah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(213, 'Arif Maulana', '1108071912970001', '1108071811060047', 'pria', 'Gampong Kumbang', '1997-12-19', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Fakri', 'Bayati', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(214, 'Ainun Mastura', '1108074903990001', '1108071811060047', 'wanita', 'Ulee Ceubrek', '1999-03-09', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'menikah', 'anak', 'wni', 'Fakri', 'Bayati', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(215, 'Aura Nazila', '1108075606010003', '1108071811060047', 'wanita', 'Ulee Ceubrek', '2001-08-18', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Fakri', 'Bayati', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(216, 'Alya Farzia', '1108074210040002', '1108071811060047', 'wanita', 'Ulee Ceubrek', '2004-10-02', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Fakri', 'Bayati', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(217, 'Mulyadi Nawawi', '1108070605790001', '1108072911110002', 'wanita', 'Desa Keeh', '1979-05-06', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'Nawawi Ismail', 'Saraniah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(218, 'Marjaniah', '1108074610800001', '1108072911110002', 'wanita', 'Paya Itek', '1980-10-06', 'Islam', 'Diploma IV/Strata I', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'Hanafiah', 'Kamariah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(219, 'Rizka Mulya Fadilla', '1108075109080002', '1108072911110002', 'wanita', 'Geudong', '2008-09-11', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Mulyadi Nawawi', 'Marjaniah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(220, 'Ratu Mulya Adilla', '1108071802110001', '1108072911110002', 'wanita', 'Geudong', '2011-02-18', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Mulyadi Nawawi', 'Marjaniah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(221, 'M. Yusuf Suib', '1108071708620001', '1108071811060069', 'pria', 'Desa Mamplam', '1962-08-17', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', '', 'menikah', 'kepala', 'wni', 'Tgk Suib', 'Aisyah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(222, 'Azizah Hanum', '1108074504760001', '1108071811060069', 'wanita', 'Ulee Ceubrek', '1976-04-05', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', '', 'menikah', 'istri', 'wni', 'T. Bainuddin', 'Umisalamah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(223, 'Muhammad Rusdi', '1108070607000001', '1108071811060069', 'pria', 'Ulee Cibrek', '1999-03-10', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'M. Yusuf', 'Azizah Hanum', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(224, 'Rahmani', '1108074910030001', '1108071811060069', 'wanita', 'Ulee Ceubrek', '2003-10-09', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'M. Yusuf', 'Azizah Hanum', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(225, 'Nur Risyikka', '1108075710070001', '1108071811060069', 'wanita', 'Aceh Utara', '2007-11-17', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'M. Yusuf', 'Azizah Hanum', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(226, 'Cut Mutia', '1108075608130001', '1108071811060069', 'wanita', 'Aceh Utara', '2013-08-15', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'M. Yusuf', 'Azizah Hanum', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(227, 'Umisalamah', '1108074107530118', '1108071001110003', 'wanita', 'Gampong Tanjong', '1953-07-01', 'Islam', 'SD/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'kepala', 'wni', 'T. Usman BP', 'Habsah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(228, 'Faridahnur', '1108074107720140', '1108072707120003', 'wanita', 'Ulee Ceubrek', '1972-07-01', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', '', 'belum_menikah', 'kepala', 'wni', 'M. Yacob B', 'Hamidah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(229, 'Bustami', '1108070107660089', '1108072707120003', 'pria', 'Ulee Ceubrek', '1966-07-01', 'Islam', 'SLTP/Sederajat', 'Petani/Pekebun', '', 'belum_menikah', 'famili', 'wni', 'M. Yacob B', 'Hamidah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(230, 'Juariah', '1108074107740179', '1108072707120003', 'wanita', 'Ulee Ceubrek', '1974-07-01', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', '', 'belum_menikah', 'famili', 'wni', 'M. Yacob B', 'Hamidah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(231, 'Basri', '1108072005770001', '1108072707120003', 'pria', 'Ulee Ceubrek', '1977-05-20', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', '', 'belum_menikah', 'famili', 'wni', 'A. Taleb', 'Mariani', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(232, 'Saiful, A.Mk', '1108072109830001', '1108070901110105', 'pria', 'Ulee Ceubrek', '1983-09-21', 'Islam', 'Diploma III', 'Perawat', '', 'menikah', 'kepala', 'wni', 'T. Bainuddin', 'Umisalamah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(233, 'Sufiani, S.Sos', '1108075104810001', '1108070901110105', 'wanita', 'Lhokseumawe', '1981-04-11', 'Islam', 'Diploma IV/Strata I', 'Wiraswasta', '', 'menikah', 'istri', 'wni', 'M. Sufi', 'Safiah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(234, 'Syakila Ananda Rizky', '1108076104130001', '1108070901110105', 'wanita', 'Aceh Utara', '2013-04-21', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wna', 'Saiful', 'Sufiani', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(235, 'Fuadi Usman', '1108070707690001', '1108072506070001', 'pria', 'Blang Peuria', '1969-07-07', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'Usman', 'Sawyan', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(236, 'Nurjamaliah', '1108076505660001', '1108072506070001', 'wanita', 'Paya Itek', '1980-05-25', 'Islam', 'SLTA/Sederajat', 'PNS (Pegawai Negeri Sipil)', '', 'menikah', 'istri', 'wni', 'Hanafiah', 'Kamariah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(237, 'Fharidat', '1108074107450119', '1108071811060095', 'wanita', 'Ulee Ceubrek', '1945-07-01', 'Islam', 'SD/Sederajat', 'Petani/Pekebun', '', 'menikah', 'kepala', 'wni', 'Iskandar', 'Syamsiah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(238, 'Hamdani Hasbi', '1108070401730001', '1108071811060163', 'pria', 'Ulee Ceubrek', '1973-01-04', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'Faridat', 'Aisyah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(239, 'Suryani', '1108074508760001', '1108071811060163', 'wanita', 'Ulee Ceubrek', '1976-08-05', 'Islam', 'SLTA/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'Abdullah', 'Faridat', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(240, 'Halmiyati', '1108075206020001', '1108071811060163', 'wanita', 'Ulee Ceubrek', '2002-06-12', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Hamdani Hasbi', 'Suryani', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(241, 'Rohatul Jannah', '1108074609030001', '1108071811060163', 'wanita', 'Ulee Ceubrek', '2003-09-06', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Hamdani Hasbi', 'Suryani', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(242, 'Zainal', '1173010107810410', '1108072302150003', 'pria', 'Ulee Ceubrek', '1981-07-01', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'Abdullah', 'Fharidat', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(243, 'Rika Rahmayani', '1173015711860002', '1108072302150003', 'wanita', 'Lhokseumawe', '1986-11-17', 'Islam', 'SLTA/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'Ruslan', 'Mahmudiah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(244, 'Muhammad Azkar', '1173012305120003', '1108072302150003', 'pria', 'Lhokseumawe', '2012-05-23', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Zainal', 'Rika Rahmayani', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(245, 'Jouhari', '1108074403600001', '1108071811060100', 'wanita', 'Ulee Ceubrek', '1960-03-04', 'Islam', 'SD/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'kepala', 'wni', 'M. Hasan', 'Hanian', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(246, 'Abdullah', '1108071201920001', '1108071811060100', 'pria', 'Ulee Ceubrek', '1992-01-12', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Abdul Hamid', 'Jouhari', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(247, 'Muhammad Azhari', '1108072606980001', '1108071811060100', 'pria', 'Ulee Cibrek', '1998-06-26', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Tgk Abdul Hamid', 'Jouhari', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(248, 'Abdul Halim', '1173030301890001', '1108070312150001', 'pria', 'Jambo Mesjid', '1989-01-03', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'Bustami Yusuf', 'Nurhamamah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(249, 'Nurhayati', '1108076004890001', '1108070312150001', 'wanita', 'Ulee Cibrek', '1989-04-20', 'Islam', 'Diploma IV/Strata I', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'Tgk Hamid', 'Jouhari', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(250, 'Ahmed Syouqi Alqudri', '1108072812160001', '1108070312150001', 'pria', 'Lhokseumawe', '2016-12-28', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Abdul Halim', 'Jouhari', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(251, 'Aiza Qanita', '1108075909180001', '1108070312150001', 'wanita', 'Lhokseumawe', '2018-09-19', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Abdul Halim', 'Nurhayati', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(252, 'Nurmalawati', '1108074107650254', '1108071001110088', 'wanita', 'Blang Jruen', '1965-07-01', 'Islam', 'SD/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'kepala', 'wni', 'Abdul Latif', 'Salbiah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(253, 'Sari Yulis', '1108072510900001', '1108071001110088', 'pria', 'Ulee Ceubrek', '1990-10-25', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Hasan Basri', 'Nurmalawati', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(254, 'Misrawati', '1108075502970001', '1108071001110088', 'wanita', 'Ulee Ceubrek', '1997-02-15', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'istri', 'wni', 'Hasan Basri', 'Nurmalawati', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(255, 'Nasrul', '1108070107790161', '1108072711060015', 'pria', 'Rayeuk Matang', '1979-07-01', 'Islam', 'SLTA/Sederajat', 'Sopir', '', 'menikah', 'kepala', 'wni', 'Ismail', '', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(256, 'Husnawati', '1108074107750241', '1108072711060015', 'wanita', 'Rayeuk Matang', '1975-07-01', 'Islam', 'SLTA/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'istri', 'wni', 'M. Hasan', 'Nur Syamsiah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(257, 'Lutfia Putri', '1108074308020001', '1108072711060015', 'wanita', 'Rayeuk Matang', '2002-03-03', 'Islam', 'SLTA/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Nasrul', 'Husnawati', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(258, 'Nasya Nabila', '1108074902060001', '1108072711060015', 'wanita', 'Rayeuk Matang', '2005-02-09', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Nasrul', 'Husnawati', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(259, 'Ria Putri', '1108074202070002', '1108072711060015', 'wanita', 'Trieng Gadeng', '2007-02-02', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Nasrul', 'Husnawati', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(260, 'Alia Syifa', '1108075203080001', '1108072711060015', 'wanita', 'Rayeuk Matang', '2008-03-12', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Nasrul', 'Husnawati', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(261, 'Zahid Syurkani', '1108071010970001', '1108070509070007', 'pria', 'Kumbang', '1977-10-10', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'Rusli', 'Asma', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(262, 'Nurhayati, A.Mk', '1108074106840002', '1108070509070007', 'wanita', 'Ujong Kuta Batee', '1984-06-01', 'Islam', 'Diploma III', 'PNS (Pegawai Negeri Sipil)', '', 'menikah', 'istri', 'wni', 'Abdul Manaf', 'Nuriah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(263, 'Zahwa Azkiya', '1108075310100001', '1108070509070007', 'wanita', 'Lhokseumawe', '2010-10-13', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Zahid Syurkani', 'Nurhayati', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(264, 'Najwan Al Mubarak', '1108071201130001', '1108070509070007', 'pria', 'Lhokseumawe', '2013-01-12', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Zahid Syurkani', 'Nurhayati', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(265, 'Hartina', '1108085109790001', '1108072102140004', 'wanita', 'Jawa Barat', '1979-09-11', 'Islam', 'SLTP/Sederajat', 'Mengurus Rumah Tangga', '', 'cerai_mati', 'kepala', 'wni', 'Suarna', 'Tarni', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(266, 'Nur Aisyah', '1108075102030001', '1108072102140004', 'wanita', 'Aceh Utara', '2003-02-11', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Anuar', 'Hartina', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(267, 'Nur Aliya Maisara', '1108075902090001', '1108072102140004', 'wanita', 'Lhokseumawe', '2009-02-19', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Heriansyah', 'Hartina', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(268, 'Muhammad Rizal Firmansyah', '1108070907100002', '1108072102140004', 'pria', 'Aceh Utara', '2010-07-09', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Heriansyah', 'Hartina', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(269, 'Iskandar', '1108070107710089', '1108071305150001', 'pria', 'Ulee Ceubrek', '1973-07-01', 'Islam', 'SLTA/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'Abu Bakar', 'Aminah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(270, 'Cut Raliah', '1108074303720001', '1108071305150001', 'wanita', 'Ulee Ceubrek', '1972-03-03', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', '', 'menikah', 'istri', 'wni', 'T. A Rahman', 'Cut Kasmiati', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(271, 'Zahra Fonna', '1108074202970001', '1108071305150001', 'wanita', 'Ulee Cibrek', '1997-02-02', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'Muslem', 'Cut Raliah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(272, 'Yuna Zelvia', '1108075606130001', '1108071305150001', 'wanita', 'Lhokseumawe', '2013-06-16', 'Islam', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja', '', 'belum_menikah', 'anak', 'wni', 'Iskandar', 'Cut Raliah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(273, 'Cut Kasmiati', '1108074107550121', '1108071811060011', 'wanita', 'Mon Geudong', '1955-07-01', 'Islam', 'SD/Sederajat', 'Mengurus Rumah Tangga', '', 'menikah', 'kepala', 'wni', 'T Manyak', 'Hamidah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(274, 'Zulkifli', '1108070107770177', '1108071811060011', 'pria', 'Ulee Ceubrek', '1977-07-01', 'Islam', 'SLTP/Sederajat', 'Wiraswasta', '', 'belum_menikah', 'anak', 'wni', 'T Arrahman', 'Cut Kasmiati', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(275, 'Akmal', '1108070308960001', '1108071811060021', 'pria', 'Ulee Ceubrek', '1996-08-03', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'kepala', 'wni', 'Saidan', 'Nuraini', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(276, 'T Ismail T Ramli', '1108072008670001', '1108071811060131', 'pria', 'Paya Itek', '1967-08-20', 'Islam', 'SD/Sederajat', 'Wiraswasta', '', 'menikah', 'kepala', 'wni', 'T Ramli', 'Aminah', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(277, 'T Haris Pratama', '1108072008960001', '1108071811060131', 'pria', 'Ulee Ceubrek', '1996-08-20', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'T Ismail R', 'Dahniar', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(278, 'T Romi Juanda', '1108070105980002', '1108071811060131', 'pria', 'Ulee Ceubrek', '1998-05-01', 'Islam', 'SLTP/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'kepala', 'wni', 'T Ismail R', 'Dahniar', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(279, 'Cut Putri Nayla', '1108074402020001', '1108071811060131', 'wanita', 'Ulee Cibrek', '2002-02-04', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'T Ismail R', 'Dahniar', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh'),
(280, 'Cut Ola Nazyra', '1108076512050001', '1108071811060131', 'wanita', 'Ulee Cibrek', '2005-12-25', 'Islam', 'SD/Sederajat', 'Pelajar/Mahasiswa', '', 'belum_menikah', 'anak', 'wni', 'T Ismail R', 'Dahniar', '', 'lampoh', 'Ulee Ceubrek', 'Meurah Mulia', 'Aceh Utara', '24372', 'Aceh');

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

INSERT INTO `sr_akte_lahir` (`id`, `nomor_surat`, `surat_mohon_id`, `tgl_lahir`, `tmp_lahir`, `nama_lahir`, `kelamin`, `nomor_anak`, `istri_id`, `suami_id`, `tgl_ajukan`, `tgl_disahkan`, `foto_kopi_ktp`, `foto_kopi_kk`, `surat_lahir`, `foto_kopi_nikah`, `foto_kopi_ijazah`, `status_surat`) VALUES
(1, '006', 'SKKL-2859', '2001-02-23 19:18:51', 'Lhokseumawe', 'Liza Rahmati', 'Perempuan', '2', '14', '10', '2020-07-31 00:00:00', '2020-07-31 00:00:00', '4070_ktp_ayah.jpg', '790071_fc_kk_a.jpg', '1585573_IMG20200731191209.jpg', '5748_buku_nikah_a.jpg', '66070865_ijazah_l.jpg', 'diterima');

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
  `sk_rs` text NOT NULL,
  `foto_kopi_kk` text NOT NULL,
  `foto_kopi_ktp` text NOT NULL,
  `status_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sr_akte_mati`
--

INSERT INTO `sr_akte_mati` (`id`, `nomor_surat`, `surat_mohon_id`, `penduduk_id`, `pelapor_id`, `nama_mati`, `tgl_mati`, `sebab_mati`, `tempat_mati`, `hub_pelapor`, `tgl_diajukan`, `tgl_disahkan`, `sk_rs`, `foto_kopi_kk`, `foto_kopi_ktp`, `status_surat`) VALUES
(3, '009', 'SKM-1532', '10', '', '14', '2019-01-15 22:15:00', 'Sakit', 'RSU Cut Meutia', 'Istri', '2020-07-31 00:00:00', '2020-07-31 00:00:00', '30606_surat_rs.jpg', '68229_fc_kk_a.jpg', '96444_ktp_M.jpg', 'diterima');

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
(5, '001', 'SKBM-5841', '2020-07-31 00:00:00', '2020-07-31 00:00:00', '24', '9946_kk_zamzami.jpg', '47875_ktp_ichsan.jpg', 'diterima');

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
(1, '008', 'SKB-7748', '10', '10', '14', '2020-07-31 00:00:00', '2020-07-31 00:00:00', '4989_kk_asli.jpg', '81668_ktp_ayah.jpg', '14151_ktp_M.jpg', 'diterima');

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
(7, '', 'SKKM-7456', '15', 'Abdullah', 'Nurjannah', '2020-07-31 00:00:00', '0000-00-00 00:00:00', '9899_fc_kk_a.jpg', '81783_ktp_ichsan.jpg', 'ditolak'),
(8, '002', 'SKKM-9763', '24', 'Abdul Muttaleb', 'Salbiah', '2020-07-31 00:00:00', '2020-07-31 00:00:00', '5738_kk_zamzami.jpg', '', 'diterima');

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
(3, '007', 'SKSM-3238', '10', '10', '14', '2020-07-31 00:00:00', '2020-07-31 00:00:00', '2114_fc_kk_a.jpg', '20401_ktp_ayah.jpg', '97729_ktp_M.jpg', '57826_buku_nikah_a.jpg', 'diterima');

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
  `foto_kopi_kk` text NOT NULL,
  `kk_asli` text NOT NULL,
  `foto_kopi_ktp` text NOT NULL,
  `status_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sr_ket_pindah`
--

INSERT INTO `sr_ket_pindah` (`id`, `nomor_surat`, `surat_mohon_id`, `penduduk_id`, `tgl_diajukan`, `tgl_disahkan`, `desa`, `kecamatan`, `kabupaten`, `alasan_pindah`, `anggota`, `foto_kopi_kk`, `kk_asli`, `foto_kopi_ktp`, `status_surat`) VALUES
(1, '012', 'SKPP-1226', '15', '2020-07-31 00:00:00', '2020-07-31 00:00:00', 'Blang Peuria', 'Samudera', 'Aceh Utara', '                                  Kerja                      ', '                   -                                     ', '4332_fc_kk_a.jpg', '', '24818_ktp_asli.jpg', 'diterima');

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
(1, '011', '15', '2020-07-31 00:00:00', '2020-07-31 00:00:00', '15', 'SK3B-76735', '1108071711060771', '2', '', '3205_kk_asli.jpg', '88464_ktp_ichsan.jpg', '', '72079_akte.pdf', 'diterima', 'Liza Rahmati 1108076302010001, Diniati 1108074906040001', '<ol>\r\n	<li>Liza Rahmati 1108076302010001</li>\r\n	<li>Diniati 1108074906040001</li>\r\n</ol>\r\n'),
(2, '', '34', '2020-08-06 00:00:00', '0000-00-00 00:00:00', '34', 'SK3B-72181', '1111111111111111', '1', '', '5453_tes.png', '92229_tes.png', '', '44761_tes.png', 'review', '1', '');

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
(1, '005', '10', '2020-07-31 00:00:00', '2020-07-31 00:00:00', 'SKPgAKK-5757', 'Abdullah', '14', '1108071711060771', '2048_kk_asli.jpg', '87994_IMG20200731191209.jpg', '', 'diterima');

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
(1, '010', '15', '2020-07-31 00:00:00', '2020-07-31 00:00:00', 'SKPnAKK-1560', 'Muhammad Ichsan', '35', '1108071711060771', '', '2238_kk_asli.jpg', '15564_ijazah_l.jpg', 'diterima'),
(2, '', '34', '2020-08-07 00:00:00', '0000-00-00 00:00:00', 'SKPnAKK-4474', 'Sekdes', '53', '1108071711060771', '', '9288_tes.png', '58533_tes.png', 'review');

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
  `foto_kopi_nikah` text NOT NULL,
  `foto_kopi_akta` text NOT NULL,
  `status_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sr_ktp_baru`
--

INSERT INTO `sr_ktp_baru` (`id`, `nomor_surat`, `surat_mohon_id`, `penduduk_id`, `tgl_diajukan`, `tgl_disahkan`, `nama_ayah`, `nama_ibu`, `foto_kopi_kk`, `ket_umur`, `foto_kopi_nikah`, `foto_kopi_akta`, `status_surat`) VALUES
(1, '004', 'SKKTPB-7092', '16', '2020-07-31 00:00:00', '2020-07-31 00:00:00', 'Abdullah', 'Nurjannah', '7932_fc_kk_a.jpg', '', '', '84581_ijazah_l.jpg', 'diterima');

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
(1, '003', '15', '2020-07-31 00:00:00', '2020-07-31 00:00:00', 'SKK-8920', '5055_fc_kk_a.jpg', '78683_IMG20200731191209.jpg', 'diterima');

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
(43, 'SK3B-76735', '15', 'SK3B', '011', '2020-07-31 00:00:00', '2020-07-31 00:00:00', 'Ambil Jam 08.00 Pagi tgl 03 agustus 2020', 'Pengajuan Pembuatan Kartu Keluarga Baru', '3', 'diterima'),
(44, 'SKPnAKK-1560', '15', 'SKPnAKK', '010', '2020-07-31 00:00:00', '2020-07-31 00:00:00', '', 'Pengajuan Penambahan Anggota Kartu Keluarga', '3', 'diterima'),
(45, 'SKM-1532', '10', 'SKM', '009', '2020-07-31 00:00:00', '2020-07-31 00:00:00', '', 'Pengajuan Pembuatan Akte Meninggal Dunia', '2', 'diterima'),
(46, 'SKPgAKK-5757', '10', 'SKPgAKK', '005', '2020-07-31 00:00:00', '2020-07-31 00:00:00', 'Ambil Jam 14.00 thl 01 agustus 2020', 'Pengajuan Pengurangan Anggota Kartu Keluarga', '2', 'diterima'),
(47, 'SKB-7748', '10', 'SKB', '008', '2020-07-31 00:00:00', '2020-07-31 00:00:00', '', 'Pengajuan Pembuatan Keterangan Bercerai', '2', 'diterima'),
(48, 'SKSM-3238', '10', 'SKSM', '007', '2020-07-31 00:00:00', '2020-07-31 00:00:00', '', 'Pengajuan Pembuatan Keterangan Sudah Menikah', '2', 'diterima'),
(49, 'SKKL-2859', '16', 'SKKL', '006', '2020-07-31 00:00:00', '2020-07-31 00:00:00', '', 'Pengajuan Pembuatan Akte Kelahiran', '2', 'diterima'),
(50, 'SKKTPB-7092', '16', 'SKKTPB', '004', '2020-07-31 00:00:00', '2020-07-31 00:00:00', 'Ambil Jam 08 malam Tgl 12 Agustus 2020 ', 'Pengajuan Pembuatan KTP Baru', '2', 'diterima'),
(51, 'SKPP-1226', '15', 'SKPP', '012', '2020-07-31 00:00:00', '2020-07-31 00:00:00', '', 'Pengajuan Pembuatan Keterangan Pindah Penduduk', '3', 'diterima'),
(52, 'SKK-8920', '15', 'SKK', '003', '2020-07-31 00:00:00', '2020-07-31 00:00:00', 'Ambil Jam 10 Siang Tanggal 1 Agustus 2020', 'Pengajuan KTP Hilang', '3', 'diterima'),
(53, 'SKKM-7456', '15', 'SKKM', '', '2020-07-31 00:00:00', '0000-00-00 00:00:00', 'Ditolak dikarenakan orang tua PNS', 'Pengajuan Pembuatan Keterangan Kurang Mampu', '3', 'ditolak'),
(54, 'SKKM-9763', '24', 'SKKM', '002', '2020-07-31 00:00:00', '2020-07-31 00:00:00', '', 'Pengajuan Pembuatan Keterangan Kurang Mampu', '2', 'diterima'),
(55, 'SKBM-5841', '24', 'SKBM', '001', '2020-07-31 00:00:00', '2020-07-31 00:00:00', '', 'Pengajuan Pembuatan Keterangan Belum Menikah', '2', 'diterima'),
(56, 'SK3B-72181', '34', 'SK3B', '', '2020-08-06 00:00:00', '0000-00-00 00:00:00', '', 'Pengajuan Pembuatan Kartu Keluarga Baru', '1', 'review'),
(57, 'SKPnAKK-4474', '34', 'SKPnAKK', '', '2020-08-07 00:00:00', '0000-00-00 00:00:00', '', 'Pengajuan Penambahan Anggota Kartu Keluarga', '1', 'review');

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
(11, '10', 'rakyat', '0', 0, '1', '1108071404690001', 'Abdullah', 'ac167c93801b23d32d3f6ed9752378ec', ''),
(12, '11', 'lurah', '1', 1, '1', 'kades', 'Nasrul Fadhil', 'a9744487660c9a0b4c931b3609d712e2', ''),
(13, '12', 'rakyat', '', 0, '1', '1234567890', 'Yunita Fitriani', 'e807f1fcf82d132f9bb018ca6738a19f', ''),
(14, '13', 'rakyat', '', 0, '1', '1108072406150001', 'Muhammad Rafa Azka Putra', '404be13c483edc4cd5961bcbeef84237', ''),
(15, '14', 'rakyat', '', 0, '1', '1108074909780001', 'Nurjannah', '05c98684dc30079618565d9738c3a00f', ''),
(16, '15', 'rakyat', '', 0, '1', 'pendes', 'Muhammad Ichsan', '348dcfe88c7700bc1c42eb13d488248e', ''),
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
(35, '34', 'admin', '2', 1, '1', 'sekdes', 'Sekdes', 'ed079dcf9fdf130f672dd4a361fed369', ''),
(36, '35', 'rakyat', '', 0, '1', '1108071111980001', 'Muhammad Rafa', 'ec970899deb6c1f3eb47481e10269f81', ''),
(37, '36', 'rakyat', '', 0, '1', '1108070107570113', 'Muchtar Abubakar', '91dc9f2ab398ed06afc80a7f9072c0af', ''),
(38, '37', 'rakyat', '', 0, '1', '1108021604580002', 'Hasbi Arifin', '3b2b2483aad4f4af6f18a944e86bd9aa', ''),
(39, '38', 'rakyat', '', 0, '1', '1108025510620001', 'Salbiah', '4643103f701c07cd5e283b2df71f10cf', ''),
(40, '39', 'rakyat', '', 0, '1', '1108026509820003', 'Roslidia', '3fad60113af0d1a7d2dc56ed1618fd07', ''),
(41, '40', 'rakyat', '', 0, '1', '1108026802840002', 'Rosalin', '779637e8bded4a30b2d4d2aac3ad6129', ''),
(42, '41', 'rakyat', '', 0, '1', '1108021112850002', 'Ruslan Mauliady', 'c94078efd65234c2b5faa0de2a3734f3', ''),
(43, '42', 'rakyat', '', 0, '1', '1108025504910004', 'Fika Fitria', '9fe52227b0013e9c13149e69fb4ec4db', ''),
(44, '43', 'rakyat', '', 0, '1', '1108025307950002', 'Yulia Elisa Putri', 'f1c2d999fb6fbec41420e8bf98cf5ce3', ''),
(45, '44', 'rakyat', '', 0, '1', '1108074805110001', 'Raisya Syakira', 'e845876970f30231b423f5f998a6e650', ''),
(46, '45', 'rakyat', '', 0, '1', '1108026303900003', 'Meliana', '993946d6b5b190e3847c9874d762d04f', ''),
(47, '46', 'rakyat', '', 0, '1', '1108071202710002', 'Rasyidin M.Yacob', '549485217c59bfee70fb101e82b26b66', ''),
(48, '47', 'rakyat', '', 0, '1', '1108074107750225', 'Marjaniah', '9ef2d320f174ba6f2e4b84d17520b721', ''),
(49, '48', 'rakyat', '', 0, '1', '1108072704990001', 'M. Khalis', 'a341adda2868628bbb2f9202c1edcd33', ''),
(50, '49', 'rakyat', '', 0, '1', '1108072808010002', 'M. Ridha', 'bdf2ed6d48cffe1d717ffedb39002dd7', ''),
(51, '50', 'rakyat', '', 0, '1', '1108071306040002', 'M. Fauzi', 'ff1082e427d9ce277f080887b227c668', ''),
(52, '51', 'rakyat', '', 0, '1', '1108072703070003', 'M. Farhan', 'f4c81ec718c998977a2f004c513b44a2', ''),
(53, '52', 'rakyat', '', 0, '1', '1108074101150002', 'Luthfia Amalia', 'b3e6f3665a34d6597de638c89da1333d', ''),
(55, '54', 'rakyat', '', 0, '1', '1108077112420001', 'Hasanah', '054401804b6e3fa1f24031281f9c274c', ''),
(56, '55', 'rakyat', '', 0, '1', '1108077107740001', 'Yusmiati', 'bb9118528ced74822d710ac83e0441dd', ''),
(57, '56', 'rakyat', '', 0, '1', '1108070107810166', 'Razali A.Gafar', 'c991afaa2b75a94fb2cba496315da1c3', ''),
(58, '57', 'rakyat', '', 0, '1', '1108076602830002', 'Nurmiati', 'ef240776cab13b9fe10146e899b274cb', ''),
(59, '58', 'rakyat', '', 0, '1', '1174052811760001', 'Saiful Mardi', '61cd5dd55886086f7d6138656ebd6c90', ''),
(60, '59', 'rakyat', '', 0, '1', '1174055707890001', 'Rita Indriani', 'c5511741c21e8ab809126a136a0a47f2', ''),
(61, '60', 'rakyat', '', 0, '1', '1174057006070001', 'Laisya Alvia Nora', '4730b03db654f2793221fcf7c07b6329', ''),
(62, '61', 'rakyat', '', 0, '1', '1174051407120001', 'Zawil Qiran', '9cdb2b7aa41f1d0a7eb5a1f38ff6cce8', ''),
(63, '62', 'rakyat', '', 0, '1', '1108070107750178', 'Muhammad', 'cb6f404ea6c78f443dd26f2994b2d092', ''),
(64, '63', 'rakyat', '', 0, '1', '1108076303860001', 'Yusnidar', '854cfa87efe82c40cf0301b93507e0e4', ''),
(65, '64', 'rakyat', '', 0, '1', '1108074304070003', 'Maulida', 'fbb0d0990ba5309bbff57a8241fa9281', ''),
(66, '65', 'rakyat', '', 0, '1', '1108075510110001', 'Shadrina Hanifa', '2ea85ea705eac1d66b34e4835883eedf', ''),
(67, '66', 'rakyat', '', 0, '1', '1108076508170001', 'Ulfa Khaira', '063f89af41d050b2a5663c73d9b1a501', ''),
(68, '67', 'rakyat', '', 0, '1', '1108074107540096', 'Ainol Marziah', '561fb90ec583e6898ad89107f7362a0f', ''),
(69, '68', 'rakyat', '', 0, '1', '1108074107520124', 'Khadijah', 'd21bc85881ef3b5bdcf3a404682038c1', ''),
(70, '69', 'rakyat', '', 0, '1', '1108074201740001', 'Khairul Nisa', '8011dfec86cbb9dafe516fa26b1887e4', ''),
(71, '70', 'rakyat', '', 0, '1', '1106086802870001', 'Salmun', 'df8836f33f03e1811b22f12ff80566e8', ''),
(72, '71', 'rakyat', '', 0, '1', '1106080206080001', 'Muhammad Furqhan', '2f602882839a09e8c3cc4dd5846b5e85', ''),
(73, '72', 'rakyat', '', 0, '1', '1108071602880001', 'Rizal Mahdi', 'd5f5f03f1e8fd4d6e9b4c76d60b85ebc', ''),
(74, '73', 'rakyat', '', 0, '1', '1108036503960002', 'Asmaul Husna', '46c82ae3cc0c09a703f15a2a91037556', ''),
(75, '74', 'rakyat', '', 0, '1', '1108071605180001', 'Muhammad Rafsanjani', '67feea70c6d45e5e3c0d4f6742d5e6f0', ''),
(76, '75', 'rakyat', '', 0, '1', '1108073012660001', 'Syarbaini', '49cb07d7dfd08d6b8b662fbe4b7e6221', ''),
(77, '76', 'rakyat', '', 0, '1', '1108074107690093', 'Musniah', '00f327bb82ffae1d7d9a22867f4181c1', ''),
(78, '77', 'rakyat', '', 0, '1', '1108075505980001', 'Fazlur Rahmi', '1608232401c7777810e443fb0080dd2f', ''),
(79, '78', 'rakyat', '', 0, '1', '1108072904040001', 'Husnan Maulana', '5a5ca0b2943fc74379486d13f286fa03', ''),
(80, '79', 'rakyat', '', 0, '1', '1173010303660003', 'Muslim', '58c3e496fdc4e466eb5d29885f8b1fc2', ''),
(81, '80', 'rakyat', '', 0, '1', '1173037004730002', 'Apridayani', 'f300fd80d7838949f9acdaa2ae7c4be3', ''),
(82, '81', 'rakyat', '', 0, '1', '1173014202970004', 'Zahra Fonna', '7099412072271ce2707618aba8ea0d6c', ''),
(83, '82', 'rakyat', '', 0, '1', '1173012604080002', 'Muhammad Habib Al Fasya', 'b3a231e6784cf73f475d5a9934f513a2', ''),
(84, '83', 'rakyat', '', 0, '1', '1173015806110001', 'Siti Humairah', '5fb5c40d3e218bc7ae20d0f9de6683a7', ''),
(85, '84', 'rakyat', '', 0, '1', '1108070909690001', 'Syarifuddin', '92194839e431c3f6ffbf08635ab3c85d', ''),
(86, '85', 'rakyat', '', 0, '1', '1108076404690001', 'Suryati', '94dfe3fda9e246fbfcce162326d7205c', ''),
(87, '86', 'rakyat', '', 0, '1', '1108076105960001', 'Eka Maya Sari', '8a48bc88cfcbf82092a9c304a71e0371', ''),
(88, '87', 'rakyat', '', 0, '1', '1108076102980001', 'Febry Kesrian', 'b9dd2b19f0714490e6bf10ce000a7fa7', ''),
(89, '88', 'rakyat', '', 0, '1', '1108076602060001', 'Ratu Riza Fanesha', 'e69f79fe276902ee5156e832e7d4ec00', ''),
(90, '89', 'rakyat', '', 0, '1', '1108074609860001', 'Mailindawati', '72fcdbf801e6c1698042522cd2320fd4', ''),
(91, '90', 'rakyat', '', 0, '1', '1108071407180001', 'Muhammad Azzam Khalif', 'd3ba726aff91e52772f7ba22599cde13', ''),
(92, '91', 'rakyat', '', 0, '1', '1108071509790001', 'Abdul Bahri', '790898625ad408f5756ed06228d0434c', ''),
(93, '92', 'rakyat', '', 0, '1', '1108084107880243', 'Nurbahri', '84258bf883e3a131e2f21b21c0039fea', ''),
(94, '93', 'rakyat', '', 0, '1', '1108070601090001', 'Rahmat Asyura', '49ee717af47ed051a4b734276510e34b', ''),
(95, '94', 'rakyat', '', 0, '1', '1108076602150001', 'Zakiatul Asyifa', '3b21c0e5f7accba19ab541d48d10fccd', ''),
(96, '95', 'rakyat', '', 0, '1', '1108070107630113', 'Tarmizi', '376ba4f55b64f5daf79dacde12205b1a', ''),
(97, '96', 'rakyat', '', 0, '1', '1108075302710001', 'Darmiati', '66dbb454f97270d0afdf40dffabe91db', ''),
(98, '97', 'rakyat', '', 0, '1', '1108070909940003', 'Arif Munandar', '2d03cdc4ba1b0d83a5007898f9886f1e', ''),
(99, '98', 'rakyat', '', 0, '1', '1108070802980001', 'Aidil Fahmi', '722686986d72edb42afaebcbae314b6f', ''),
(100, '99', 'rakyat', '', 0, '1', '1108071704000001', 'Fuadi', 'c8f82d2a93b6fc033e0c462e08b8a824', ''),
(101, '100', 'rakyat', '', 0, '1', '1108075510070001', 'Faza Aqila', 'c83d3427be3cb47bf3182a40f50fdcb3', ''),
(102, '101', 'rakyat', '', 0, '1', '1108074107290009', 'Fhatimah R', '34d35c71bfcc9123c0e1d56590bc1484', ''),
(103, '102', 'rakyat', '', 0, '1', '1108070603880002', 'Zulkarnaini', '2e707569b22cae14718e41c2d2d50a97', ''),
(104, '103', 'rakyat', '', 0, '1', '1108075011920001', 'Mutia Rauza Nova', '650aeedd3197f2044d1045ce0e712d68', ''),
(105, '104', 'rakyat', '', 0, '1', '1108071702170003', 'Muhammad Zayyan Shakeel', 'a9a6cf3fe2946d4d2506027b32208cdf', ''),
(106, '105', 'rakyat', '', 0, '1', '1108072911870001', 'Darwis Setiawan', 'fc4a2f17bcf39a6d33d85325d6c49988', ''),
(107, '106', 'rakyat', '', 0, '1', '1108076510960001', 'Maulina', '649760fc6243dc9525fe397577d2805b', ''),
(108, '107', 'rakyat', '', 0, '1', '1108071512160001', 'Muhammad Abrar Alfatih', '86dbdfd5c269b347e2d78eddde2425e2', ''),
(109, '108', 'rakyat', '', 0, '1', '1108074107680165', 'Rubayah', '5bed62eacff9314b375a48de4ad615b8', ''),
(110, '109', 'rakyat', '', 0, '1', '1108140107840421', 'Syarbaini', 'd18a18c432af39aeedb950fab717ebe8', ''),
(111, '110', 'rakyat', '', 0, '1', '1108116901890002', 'Safriani', '57608d8c8c87419550465b3ba5352408', ''),
(112, '111', 'rakyat', '', 0, '1', '1108115404140001', 'Haura Nazifa Cindenia', '3313dcf8a550c08bb07e9c1ca90aa1d6', ''),
(113, '112', 'rakyat', '', 0, '1', '1108074107530109', 'Umisalamah', '8566ac54b3566cfc36bfb77ccb2fa24e', ''),
(114, '113', 'rakyat', '', 0, '1', '1108073112710001', 'M. Yusuf', 'dc6f6ba7bc815f3e1654b438bcf4b333', ''),
(115, '114', 'rakyat', '', 0, '1', '1108077112750003', 'Nuraini', 'a44dedcfbfaee3d26d98d94bd3158e0d', ''),
(116, '115', 'rakyat', '', 0, '1', '1108070806070002', 'Muhammad Boini', '3dadb99bc58729b2a745d995e1eaad1b', ''),
(117, '116', 'rakyat', '', 0, '1', '1108076602100002', 'Hamidiah', '4823c689088c62d9ab1f2fd5e1c158ce', ''),
(118, '117', 'rakyat', '', 0, '1', '1108075411110001', 'Husna Mulia', 'a487de8a61a59faa47d675e5bac0f271', ''),
(119, '118', 'rakyat', '', 0, '1', '1108071412130001', 'Abdullah', '30e318045054400077cf172939997d18', ''),
(120, '119', 'rakyat', '', 0, '1', '1108070105501122', 'Marzuki R', '6c0ccdc039c7d83fb0363b63a0ece12c', ''),
(121, '120', 'rakyat', '', 0, '1', '1108074107530143', 'Karimah', '33661e4644c42fd0d5f6f328b5f0628f', ''),
(122, '121', 'rakyat', '', 0, '1', '1108074709910001', 'Sri Handayani', '8e84c161882c829c4154f9e04eef4e0b', ''),
(123, '122', 'rakyat', '', 0, '1', '1108074403940004', 'Kauriati', 'c8200037e26692a9e95db395bda41b92', ''),
(124, '123', 'rakyat', '', 0, '1', '1108076008960001', 'Maulidar', 'c57b295636d6486a2e880631eecc865e', ''),
(125, '124', 'rakyat', '', 0, '1', '1108074811990001', 'Fani Anita', '587bf8c2a669f081337107f8fc10546a', ''),
(126, '125', 'rakyat', '', 0, '1', '1108071906040001', 'M. Arfan Farasyi', '0a0259002b9877823092b69989ddb791', ''),
(127, '126', 'rakyat', '', 0, '1', '1108070510740002', 'Muhammad Diah', '84c38ed5084e8cf64c0ee2139e32d911', ''),
(128, '127', 'rakyat', '', 0, '1', '1108075102870003', 'Rosmawar', 'ad859d49764049a1a31996a831195eb4', ''),
(129, '128', 'rakyat', '', 0, '1', '1108076111070001', 'Nuralya Sofea', '57b82019899dbe418bd676eba49cef4c', ''),
(130, '129', 'rakyat', '', 0, '1', '1108072111080004', 'Muhammad Denis Adam', 'ce34948e74d7d175d4492872fc86d443', ''),
(131, '130', 'rakyat', '', 0, '1', '1108075008130001', 'Dania Qaisarah', '6a3b70650895534975d6e062b5d41c8b', ''),
(132, '131', 'rakyat', '', 0, '1', '1108120107750244', 'Walidin', 'fffa53a1c30c2faf9ccf0be5a1caa0b7', ''),
(133, '132', 'rakyat', '', 0, '1', '1108074107770184', 'Nurlela', '06a0f49b181b6642be7816ff6f501f51', ''),
(134, '133', 'rakyat', '', 0, '1', '1108076411110001', 'Hayatul Nupus', '0d522f7be144f09ef51b55c41e3ec68d', ''),
(135, '134', 'rakyat', '', 0, '1', '1108072606140002', 'Muhammad Egy', 'a4362afe6388f798dea70ea9f4cefee9', ''),
(136, '135', 'rakyat', '', 0, '1', '1108073112570002', 'Umar Ahmad', 'e5de80daa39e43a4680d17d42c18c272', ''),
(137, '136', 'rakyat', '', 0, '1', '1108074107600243', 'Khadijah Umar', '1d9a3bbf4b9b04630c9d21daffa4cfc9', ''),
(138, '137', 'rakyat', '', 0, '1', '1108076810900001', 'Khairanita', 'b0fc92d202812cac2c9fb2841889f4a7', ''),
(139, '138', 'rakyat', '', 0, '1', '1207230506720002', 'Idris Ismail', 'e3f861a6c565e41e11d4b563dd4b4b74', ''),
(140, '139', 'rakyat', '', 0, '1', '1207234707760016', 'Marwati', '2d660b3bb3d03a91318784996422b410', ''),
(141, '140', 'rakyat', '', 0, '1', '1207231910000010', 'Muhammad Khatami', 'eecf039c4925d431c5acd1065fbc4c89', ''),
(142, '141', 'rakyat', '', 0, '1', '1207234104090077', 'Niswatul Khaira', '76a173e1c6ad3de28aa64332416a7633', ''),
(143, '142', 'rakyat', '', 0, '1', '1108070107600174', 'M. Jafar', '3ef65536797ad600f61903d084cc4283', ''),
(144, '143', 'rakyat', '', 0, '1', '1108074107670121', 'Faridah', '0414704e5ddeda03b1c31010ae780ed7', ''),
(145, '144', 'rakyat', '', 0, '1', '1108072904010002', 'M. Zulkarnaini', '4099f9ba39bc01ca3b5373ddf1fd4c69', ''),
(146, '145', 'rakyat', '', 0, '1', '1108074107700205', 'Zainabon', '602ced1c92ccfc985cda3ab641921319', ''),
(147, '146', 'rakyat', '', 0, '1', '1108074107350073', 'Hanian', '01660d4acc89a9dcc6685b42dd5d7d32', ''),
(148, '147', 'rakyat', '', 0, '1', '1108074107660099', 'Fhatimah', '31122eae67ef2f1b00e88e4568e14d08', ''),
(149, '148', 'rakyat', '', 0, '1', '1108070107890244', 'Safrizal', 'ad0fe7f64607ad032e19a25f7dfddf17', ''),
(150, '149', 'rakyat', '', 0, '1', '1108070107620149', 'Ismail Yahya', '01cd5a1f7849e59bb2b543a736054caa', ''),
(151, '150', 'rakyat', '', 0, '1', '1108074107700208', 'Nurhasni', 'e9bdd5447ae7116c84b2a70923fd4bb4', ''),
(152, '151', 'rakyat', '', 0, '1', '1108071103030001', 'Muhammad Jalzuli', 'e57fd163098acac8b37ec2971b3f1e02', ''),
(153, '152', 'rakyat', '', 0, '1', '1108074606060001', 'Isya Asyura', '713461139e50e7b80bf9c42b62f91550', ''),
(154, '153', 'rakyat', '', 0, '1', '1108076311100001', 'Nailis Sakdah', '84251d0d8fdffc61eae655b80be837b7', ''),
(155, '154', 'rakyat', '', 0, '1', '1108076507760001', 'Sofiana Djamaluddin', '3d135eba70c217be22748521faf24231', ''),
(156, '155', 'rakyat', '', 0, '1', '1108070107660091', 'A. Gani', '49dbcbc52dcdf5d0ef90ae3489736d29', ''),
(157, '156', 'rakyat', '', 0, '1', '1108074107780205', 'Marwiyati', '4c44d4ea6e99bf4ea671a5c7d18c0b3b', ''),
(158, '157', 'rakyat', '', 0, '1', '1108040407960008', 'Muhammad Suriadi', '0aa4a9968b46df7c30569a26de0c6fd2', ''),
(159, '158', 'rakyat', '', 0, '1', '1108040808000005', 'M. Rozy', '57f2ce26ef242579afeb8e43bd9b9df5', ''),
(160, '159', 'rakyat', '', 0, '1', '1108076111030001', 'Alfia Turrahmi', '99e1638a8b3be2d1cdfc864402de8911', ''),
(161, '160', 'rakyat', '', 0, '1', '1108040205140002', 'Zulkhairi', 'b70e10ab4962b28a0c9cec6f4e7b05d2', ''),
(162, '161', 'rakyat', '', 0, '1', '1108072003720001', 'Sulaiman Agung', '47f6ece1a6c88d09c0d46a1f2b87c583', ''),
(163, '162', 'rakyat', '', 0, '1', '1108074107800241', 'Rosnaini', 'e90e52b1699c6386c8206cce2469829f', ''),
(164, '163', 'rakyat', '', 0, '1', '1108071706080003', 'Anzalar Rahman', '09f411b95609e4d924100a952b5d1822', ''),
(165, '164', 'rakyat', '', 0, '1', '1108070701120001', 'Nuril Anwar', 'd9f146fb9892863049bf1fc5d9ba16bc', ''),
(166, '165', 'rakyat', '', 0, '1', '1108070107620143', 'M. Taeb', 'a13a7fd6079f57a65bebf6d4c440f848', ''),
(167, '166', 'rakyat', '', 0, '1', '1108074107720142', 'Nilawati', 'd36a6858a17ecb1b75eee5528d19313a', ''),
(168, '167', 'rakyat', '', 0, '1', '1108070609910001', 'Murzani', '58e538690755578802b1b3b53b02d525', ''),
(169, '168', 'rakyat', '', 0, '1', '1108071109950001', 'Baizawi', '53cef61debbf59346aaf8f10b50af548', ''),
(170, '169', 'rakyat', '', 0, '1', '1108072710010001', 'M. Munawir', 'c141f583c694f700c96f13ccbbc8649f', ''),
(171, '170', 'rakyat', '', 0, '1', '1108072710010002', 'M. Rizki', 'fd411b541430a4057355a4cd6f7721f8', ''),
(172, '171', 'rakyat', '', 0, '1', '1108070612110001', 'Muhammad Alfakis', '011f77e61bca6217d4aa06d0113e6cab', ''),
(173, '172', 'rakyat', '', 0, '1', '1108070107560082', 'M. Jamil Diah', '2ac3b7820655865ca1110218202acce8', ''),
(174, '173', 'rakyat', '', 0, '1', '1108074107600228', 'Basyariah', 'dc322316ec32ca682d266ed69fb1cd1b', ''),
(175, '174', 'rakyat', '', 0, '1', '1108071001930001', 'Rudi Putra', '18bc682d213eb8f1912905d61ed7bf4a', ''),
(176, '175', 'rakyat', '', 0, '1', '1108074801000001', 'Aura Elvana Zilvi', '7ea5edc8e6a0eaf012cbd8aba74659c6', ''),
(177, '176', 'rakyat', '', 0, '1', '1108070404640001', 'Abdul Muthalib', 'd5eed3eb68ae265e2d4ae32767756cbe', ''),
(178, '177', 'rakyat', '', 0, '1', '1108075108730001', 'Isnainiah', 'f2a0bb3917136ff9837ce8cb1da17eca', ''),
(179, '178', 'rakyat', '', 0, '1', '1108074708020001', 'Sofya Uzma', 'e47c4dde56e8b3e04f5421996b3fb396', ''),
(180, '179', 'rakyat', '', 0, '1', '1108076209030001', 'Nadya Jasmine', '0d22a6163b8bf8e93d6362d5c5db9414', ''),
(181, '180', 'rakyat', '', 0, '1', '1108072505070001', 'Muhammad Rizky', 'a4fc06abb502104cf5ec3445f663a9d1', ''),
(182, '181', 'rakyat', '', 0, '1', '1108077112300001', 'Syarifah Zainah Alatas', '799b6f63a152c1a5b4eb6343700bbdd9', ''),
(183, '182', 'rakyat', '', 0, '1', '1108071606890001', 'M. Iqbal', '9851be557ecc5ea351c8936fec05fdca', ''),
(184, '183', 'rakyat', '', 0, '1', '1108073112600001', 'Khalil', '5e97e5698e80f58c567fb79b83ce9359', ''),
(185, '184', 'rakyat', '', 0, '1', '1108076103650001', 'Rafasah', 'f5523e0f6fdf82a77c00ce3f0e5aeb88', ''),
(186, '185', 'rakyat', '', 0, '1', '1108072005960001', 'Riza Irhami', 'ffd327fe8b42c05501abb8239f784725', ''),
(187, '186', 'rakyat', '', 0, '1', '1108074709990001', 'Niswatul Khaira', '16419e92baff6687c3b17ffbdea76c55', ''),
(188, '187', 'rakyat', '', 0, '1', '1108074711030001', 'Raudhatul Jannah', 'a8873c90ca8420a9e8984fb532620b5a', ''),
(189, '188', 'rakyat', '', 0, '1', '1112052908730001', 'Zulhanif', '7d8fbec3063ec4e142199b39da9d1586', ''),
(190, '189', 'rakyat', '', 0, '1', '1112054310790001', 'Ratna Dewi Susanti', '76264e50eddf775b18a1e5f83d8c7539', ''),
(191, '190', 'rakyat', '', 0, '1', '1112050407090001', 'Ahlul Syaiqhi Hanif', '1c4d80595883151253c4f7a160b6e3bd', ''),
(192, '191', 'rakyat', '', 0, '1', '1112010406150001', 'Qurfy Alhafizd Hanif', 'c786961d8248cc8450e02cdfd0f51bd0', ''),
(193, '192', 'rakyat', '', 0, '1', '1108081011730001', 'Supriady', '5455bf882fb47b24d90dcb54d0ffeb02', ''),
(194, '193', 'rakyat', '', 0, '1', '1108086510750001', 'Sofia Wirda', 'd38649f822833d108995a7c3390d11bd', ''),
(195, '194', 'rakyat', '', 0, '1', '1108085203060001', 'Putri Savara Chairani', '9f7160801c2b11f032ab94b5f33fd49c', ''),
(196, '195', 'rakyat', '', 0, '1', '1108072305090002', 'Syahrul Ashraf', '81b89f15fb4a61f75500c8eada39da71', ''),
(197, '196', 'rakyat', '', 0, '1', '1108070908740002', 'Ibrahim H', 'f3bdf71d1d59d9815675eb9477c047bf', ''),
(198, '197', 'rakyat', '', 0, '1', '1108075408800001', 'Mardiana', '2f6095947009e27af19957ee61e9c9ea', ''),
(199, '198', 'rakyat', '', 0, '1', '1108072303980001', 'Achiyar', '469b88a9f54ed991fd0f9faf6379ccfd', ''),
(200, '199', 'rakyat', '', 0, '1', '1108070706020002', 'Aris Munawar', '30bb919acbf85758544be293892c815b', ''),
(201, '200', 'rakyat', '', 0, '1', '1108076610040001', 'Nisa Marsanda', '0316706f671ddcb25e7ed68a9d691052', ''),
(202, '201', 'rakyat', '', 0, '1', '1108111108110001', 'Muammar Irfan', '7829c0091cbe6df6d76df213e26b3199', ''),
(203, '202', 'rakyat', '', 0, '1', '1108117011150001', 'Syifa Nazira', '16cb7a3129a29407d3996f05d129423d', ''),
(204, '203', 'rakyat', '', 0, '1', '1108070604760001', 'Tgk Halim, S.Pd', 'b80db93359350b9730ee5004c1865c40', ''),
(205, '204', 'rakyat', '', 0, '1', '1108075011840004', 'Nurhafni', '0569fab431c8505aa3ab695a2d12f1c8', ''),
(206, '205', 'rakyat', '', 0, '1', '1108070412000001', 'Muhammad Hasmir Rizki', '642bb89f65d3f44c17c228ac98b8e0fa', ''),
(207, '206', 'rakyat', '', 0, '1', '1108070403060001', 'Muhammad Hafizal Al-Haitami', '620c6cf37b66cdca8a1d075af2cfd748', ''),
(208, '207', 'rakyat', '', 0, '1', '1108075504110002', 'Naila Annaura', 'c4985cf29601e2d10daa8dea5de655a4', ''),
(209, '208', 'rakyat', '', 0, '1', '1108070107800199', 'Saifunnur', '0beb7eeec72791de99ee139288239234', ''),
(210, '209', 'rakyat', '', 0, '1', '1108114707760003', 'Dahliana D', 'abefd8d99e23cebd03cb203dc61079a4', ''),
(211, '210', 'rakyat', '', 0, '1', '1108071810080003', 'Naufal Dinur Althaf', '579e6cc2466eb8b8e234aad671559a1e', ''),
(212, '211', 'rakyat', '', 0, '1', '1108071906690001', 'Fakri', '2e3544ea2b367811c843a0a3cd532e2f', ''),
(213, '212', 'rakyat', '', 0, '1', '1108076811790001', 'Bayati', 'fd860b44418ea0fd895e81a4f8c61d75', ''),
(214, '213', 'rakyat', '', 0, '1', '1108071912970001', 'Arif Maulana', 'a6cee2d49fa534a8c7ce882e1d8a00e6', ''),
(215, '214', 'rakyat', '', 0, '1', '1108074903990001', 'Ainun Mastura', 'bded6538981c10830143377b1f3581e1', ''),
(216, '215', 'rakyat', '', 0, '1', '1108075606010003', 'Aura Nazila', '3539e51f10e1667e4e7acf9038718412', ''),
(217, '216', 'rakyat', '', 0, '1', '1108074210040002', 'Alya Farzia', '462e9b8317a038a8de5b90eda3eed982', ''),
(218, '217', 'rakyat', '', 0, '1', '1108070605790001', 'Mulyadi Nawawi', '868f3d6f5ff9fbf87030986057dd83ed', ''),
(219, '218', 'rakyat', '', 0, '1', '1108074610800001', 'Marjaniah', '7e04c41bf640b309806e2f3279d1c111', ''),
(220, '219', 'rakyat', '', 0, '1', '1108075109080002', 'Rizka Mulya Fadilla', 'f9d207f1f2f3b8551e3753b4bab1c690', ''),
(221, '220', 'rakyat', '', 0, '1', '1108071802110001', 'Ratu Mulya Adilla', '578ba5219fda2ca9569d668f84d0383a', ''),
(222, '221', 'rakyat', '', 0, '1', '1108071708620001', 'M. Yusuf Suib', 'e40c4a75a6b2ed818ef78d7ed2748c5d', ''),
(223, '222', 'rakyat', '', 0, '1', '1108074504760001', 'Azizah Hanum', 'b91a9f010f13c8be8bd0dbdb7f40d4e8', ''),
(224, '223', 'rakyat', '', 0, '1', '1108070607000001', 'Muhammad Rusdi', '2b57d202e51efe7499b9a468cb5e6a0c', ''),
(225, '224', 'rakyat', '', 0, '1', '1108074910030001', 'Rahmani', '0f6197d6d5cbb9c6bc1d004d84115c4e', ''),
(226, '225', 'rakyat', '', 0, '1', '1108075710070001', 'Nur Risyikka', '4e65ae2788bc82e2aa16d68effc883ed', ''),
(227, '226', 'rakyat', '', 0, '1', '1108075608130001', 'Cut Mutia', '192e34a2c43a83768ca3f40bb2cef7da', ''),
(228, '227', 'rakyat', '', 0, '1', '1108074107530118', 'Umisalamah', 'dd9716a69d8a8d1aba4163c3e25fe52d', ''),
(229, '228', 'rakyat', '', 0, '1', '1108074107720140', 'Faridahnur', 'e7cd1e133e4205e23aba04ff64640e42', ''),
(230, '229', 'rakyat', '', 0, '1', '1108070107660089', 'Bustami', 'e4b225dec7982b9bf187fbc8410b3ccc', ''),
(231, '230', 'rakyat', '', 0, '1', '1108074107740179', 'Juariah', '22c978511553ff06169f65e527318801', ''),
(232, '231', 'rakyat', '', 0, '1', '1108072005770001', 'Basri', '35e02ccad57e02160a251f77efba2e2b', ''),
(233, '232', 'rakyat', '', 0, '1', '1108072109830001', 'Saiful, A.Mk', '2a3af55a4904a6fe44601b932165fd58', ''),
(234, '233', 'rakyat', '', 0, '1', '1108075104810001', 'Sufiani, S.Sos', '664ca472cf250add2d17f5462f7f0ebc', ''),
(235, '234', 'rakyat', '', 0, '1', '1108076104130001', 'Syakila Ananda Rizky', 'bceebd8f227990667bc57b31f031877d', ''),
(236, '235', 'rakyat', '', 0, '1', '1108070707690001', 'Fuadi Usman', 'c8d4c45cca0f01efc1e7d6c67c7b3b6b', ''),
(237, '236', 'rakyat', '', 0, '1', '1108076505660001', 'Nurjamaliah', 'a6b97e80535399afe66391480e4b51a4', ''),
(238, '237', 'rakyat', '', 0, '1', '1108074107450119', 'Fharidat', 'b8d0a864a21829366a3323785e42a920', ''),
(239, '238', 'rakyat', '', 0, '1', '1108070401730001', 'Hamdani Hasbi', '44253e871f2d7691199661874ba33fb2', ''),
(240, '239', 'rakyat', '', 0, '1', '1108074508760001', 'Suryani', '98472a0afe31d06413581373dde79cf3', ''),
(241, '240', 'rakyat', '', 0, '1', '1108075206020001', 'Halmiyati', 'feb2e63761f808fd2a4dd8e0f8a4a527', ''),
(242, '241', 'rakyat', '', 0, '1', '1108074609030001', 'Rohatul Jannah', 'dee010b2d45de2343dd43ebae313263a', ''),
(243, '242', 'rakyat', '', 0, '1', '1173010107810410', 'Zainal', '04d40dd4a3355136f53294f69a149977', ''),
(244, '243', 'rakyat', '', 0, '1', '1173015711860002', 'Rika Rahmayani', '1c67680bd33e86385553ec26547fb38b', ''),
(245, '244', 'rakyat', '', 0, '1', '1173012305120003', 'Muhammad Azkar', '8bbdaf54bc1a1c85511f2541aaaea0bb', ''),
(246, '245', 'rakyat', '', 0, '1', '1108074403600001', 'Jouhari', 'bab0cfd1d80352ffc2e4dbbd20ca2c58', ''),
(247, '246', 'rakyat', '', 0, '1', '1108071201920001', 'Abdullah', 'c4b296f80d08174edb837124145ac89c', ''),
(248, '247', 'rakyat', '', 0, '1', '1108072606980001', 'Muhammad Azhari', 'edbdf0ec78bb9fa130936ff6be7f7fa5', ''),
(249, '248', 'rakyat', '', 0, '1', '1173030301890001', 'Abdul Halim', '53af09813ee1640c45187db2e4dee164', ''),
(250, '249', 'rakyat', '', 0, '1', '1108076004890001', 'Nurhayati', 'aadd0fcfe508ce085c9920e68b052135', ''),
(251, '250', 'rakyat', '', 0, '1', '1108072812160001', 'Ahmed Syouqi Alqudri', 'e1ff2ef7e4c13ac222007a2a0a2335d2', ''),
(252, '251', 'rakyat', '', 0, '1', '1108075909180001', 'Aiza Qanita', 'ac42b5160644fea6417fb14a9787236e', ''),
(253, '252', 'rakyat', '', 0, '1', '1108074107650254', 'Nurmalawati', '49c90e4b64a9eaa6bd52b1114a8c9c63', ''),
(254, '253', 'rakyat', '', 0, '1', '1108072510900001', 'Sari Yulis', '92594481f9d194bdd24deaa0ae864fa1', ''),
(255, '254', 'rakyat', '', 0, '1', '1108075502970001', 'Misrawati', 'de1bfe63dc91a817145757ce78d77b5d', ''),
(256, '255', 'rakyat', '', 0, '1', '1108070107790161', 'Nasrul', '4642082bcabb577346f59a8f3c29ea5b', ''),
(257, '256', 'rakyat', '', 0, '1', '1108074107750241', 'Husnawati', 'f3f2b8a3c0f3febfcf3de59f53d49e49', ''),
(258, '257', 'rakyat', '', 0, '1', '1108074308020001', 'Lutfia Putri', 'f0ff3c0c1b9d690ed963d2dd80e0302a', ''),
(259, '258', 'rakyat', '', 0, '1', '1108074902060001', 'Nasya Nabila', 'e00da9b5afa092545e8cf2d7edbdb10a', ''),
(260, '259', 'rakyat', '', 0, '1', '1108074202070002', 'Ria Putri', 'c31ff0d6921f7520dec76b4143504082', ''),
(261, '260', 'rakyat', '', 0, '1', '1108075203080001', 'Alia Syifa', '323b519cef56b3c578a21d16f9500154', ''),
(262, '261', 'rakyat', '', 0, '1', '1108071010970001', 'Zahid Syurkani', '69d3637c1c553d00b55b4891fc5a9f50', ''),
(263, '262', 'rakyat', '', 0, '1', '1108074106840002', 'Nurhayati, A.Mk', '0642d3053be429eb42486503e3d202fb', ''),
(264, '263', 'rakyat', '', 0, '1', '1108075310100001', 'Zahwa Azkiya', 'eb98f8a6235e5091a5ffa90bbf8aa15e', ''),
(265, '264', 'rakyat', '', 0, '1', '1108071201130001', 'Najwan Al Mubarak', '8a5aa13ed8a0fbf57fd159ea010b9177', ''),
(266, '265', 'rakyat', '', 0, '1', '1108085109790001', 'Hartina', 'b139d54b5c1d287bd1d26ecee6650138', ''),
(267, '266', 'rakyat', '', 0, '1', '1108075102030001', 'Nur Aisyah', '95656572dd8901e81382868b86bd930e', ''),
(268, '267', 'rakyat', '', 0, '1', '1108075902090001', 'Nur Aliya Maisara', '687c9bfa536bb77f2e1b1157a3831b87', ''),
(269, '268', 'rakyat', '', 0, '1', '1108070907100002', 'Muhammad Rizal Firmansyah', '8ce0d61a38eda3a37a9acfef5b298b3d', ''),
(270, '269', 'rakyat', '', 0, '1', '1108070107710089', 'Iskandar', 'fec7c2c12f1cd8bc1b28a81e7e86a040', ''),
(271, '270', 'rakyat', '', 0, '1', '1108074303720001', 'Cut Raliah', 'd2ae75e5d83e72ff62c867ff8f9b4d40', ''),
(272, '271', 'rakyat', '', 0, '1', '1108074202970001', 'Zahra Fonna', 'e2a882e79c1f099c3783e20292603b96', ''),
(273, '272', 'rakyat', '', 0, '1', '1108075606130001', 'Yuna Zelvia', 'a6e9fd4ba48f90dc49f75a70bc36a01d', ''),
(274, '273', 'rakyat', '', 0, '1', '1108074107550121', 'Cut Kasmiati', '8474c8473c8726dcc20fb91ab398d4e4', ''),
(275, '274', 'rakyat', '', 0, '1', '1108070107770177', 'Zulkifli', '74634b68c28fe40aa376680e36d5efbf', ''),
(276, '275', 'rakyat', '', 0, '1', '1108070308960001', 'Akmal', 'cc9842849f66dea943b0aaac44cd842f', ''),
(277, '276', 'rakyat', '', 0, '1', '1108072008670001', 'T Ismail T Ramli', 'd1a8110554f866c75d23848cfa439196', ''),
(278, '277', 'rakyat', '', 0, '1', '1108072008960001', 'T Haris Pratama', '4f78369a8581d4652cf31cd194b967d7', ''),
(279, '278', 'rakyat', '', 0, '1', '1108070105980002', 'T Romi Juanda', '643f9be9881d14064f35e25f78b2381c', ''),
(280, '279', 'rakyat', '', 0, '1', '1108074402020001', 'Cut Putri Nayla', 'a2cbd2f26754a19436c607dbfc7369c3', ''),
(281, '280', 'rakyat', '', 0, '1', '1108076512050001', 'Cut Ola Nazyra', '361cc89c92a8f0c1ef04fae8328a3f69', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` bigint(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;
--
-- AUTO_INCREMENT for table `sr_akte_lahir`
--
ALTER TABLE `sr_akte_lahir`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sr_akte_mati`
--
ALTER TABLE `sr_akte_mati`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sr_belum_nikah`
--
ALTER TABLE `sr_belum_nikah`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sr_ket_cerai`
--
ALTER TABLE `sr_ket_cerai`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sr_ket_miskin`
--
ALTER TABLE `sr_ket_miskin`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sr_ket_nikah`
--
ALTER TABLE `sr_ket_nikah`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sr_ket_pindah`
--
ALTER TABLE `sr_ket_pindah`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surat_mohon`
--
ALTER TABLE `surat_mohon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
