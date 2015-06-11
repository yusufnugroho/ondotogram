-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jun 2015 pada 04.41
-- Versi Server: 5.6.24-log
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_fkg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_restorasi`
--

CREATE TABLE IF NOT EXISTS `bahan_restorasi` (
  `id_bahan` int(11) NOT NULL,
  `singkatan_bahan` varchar(512) NOT NULL,
  `arti_bahan` varchar(512) NOT NULL,
  `keterangan_bahan` varchar(512) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahan_restorasi`
--

INSERT INTO `bahan_restorasi` (`id_bahan`, `singkatan_bahan`, `arti_bahan`, `keterangan_bahan`) VALUES
(1, 'amf', 'Amalgam Filling', 'Harus diikuti permukaan gigi(MODVL) misal O amf'),
(2, 'gif', 'GIX/ Silika', 'Misal: O gif'),
(3, 'cof', 'Compose Filling', 'Misal: MO cof'),
(4, 'fis', 'Fissure Sealant', 'Misal: O fis'),
(5, 'inl', 'Inlay', '-'),
(6, 'amf', 'Amalgam Filling', 'Harus diikuti permukaan gigi(MODVL) misal O amf'),
(7, 'gif', 'GIX/ Silika', 'Misal: O gif'),
(8, 'cof', 'Compose Filling', 'Misal: MO cof'),
(9, 'fis', 'Fissure Sealant', 'Misal: O fis'),
(10, 'inl', 'Inlay', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id_dokter` int(11) NOT NULL,
  `user_dokter` varchar(100) NOT NULL,
  `password_dokter` varchar(100) NOT NULL,
  `nama_lengkap_dokter` varchar(512) NOT NULL,
  `identitas_dokter` varchar(512) NOT NULL,
  `tempat_lahir_dokter` varchar(512) NOT NULL,
  `tanggal_lahir_dokter` date DEFAULT NULL,
  `jenis_kelamin_dokter` varchar(512) NOT NULL,
  `alamat_dokter` text NOT NULL,
  `provinsi_dokter` varchar(512) NOT NULL,
  `kota_dokter` varchar(512) NOT NULL,
  `kecamatan_dokter` varchar(512) NOT NULL,
  `kode_pos_dokter` varchar(512) NOT NULL,
  `telepon_rumah_dokter` varchar(512) NOT NULL,
  `fax_dokter` varchar(512) NOT NULL,
  `hp_dokter` varchar(512) NOT NULL,
  `foto_dokter` varchar(512) NOT NULL,
  `email_dokter` varchar(512) NOT NULL,
  `status_dokter` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `user_dokter`, `password_dokter`, `nama_lengkap_dokter`, `identitas_dokter`, `tempat_lahir_dokter`, `tanggal_lahir_dokter`, `jenis_kelamin_dokter`, `alamat_dokter`, `provinsi_dokter`, `kota_dokter`, `kecamatan_dokter`, `kode_pos_dokter`, `telepon_rumah_dokter`, `fax_dokter`, `hp_dokter`, `foto_dokter`, `email_dokter`, `status_dokter`) VALUES
(1, 'test', 'tetst', 'test test', '111', '', '0000-00-00', 'L', 'jakarta', '', '', '', '', '', '', '0819', '', '', 'Tidak Aktif'),
(2, 'admin', 'admin', 'admin', 'admin', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gigi`
--

CREATE TABLE IF NOT EXISTS `gigi` (
  `id_rekam` int(11) NOT NULL,
  `G11` varchar(512) DEFAULT NULL,
  `G12` varchar(512) DEFAULT NULL,
  `G13` varchar(512) DEFAULT NULL,
  `G14` varchar(512) DEFAULT NULL,
  `G15` varchar(512) DEFAULT NULL,
  `G16` varchar(512) DEFAULT NULL,
  `G17` varchar(512) DEFAULT NULL,
  `G18` varchar(512) DEFAULT NULL,
  `G21` varchar(512) DEFAULT NULL,
  `G22` varchar(512) DEFAULT NULL,
  `G23` varchar(512) DEFAULT NULL,
  `G24` varchar(512) DEFAULT NULL,
  `G25` varchar(512) DEFAULT NULL,
  `G26` varchar(512) DEFAULT NULL,
  `G27` varchar(512) DEFAULT NULL,
  `G28` varchar(512) DEFAULT NULL,
  `G31` varchar(512) DEFAULT NULL,
  `G32` varchar(512) DEFAULT NULL,
  `G33` varchar(512) DEFAULT NULL,
  `G34` varchar(512) DEFAULT NULL,
  `G35` varchar(512) DEFAULT NULL,
  `G36` varchar(512) DEFAULT NULL,
  `G37` varchar(512) DEFAULT NULL,
  `G38` varchar(512) DEFAULT NULL,
  `G41` varchar(512) DEFAULT NULL,
  `G42` varchar(512) DEFAULT NULL,
  `G43` varchar(512) DEFAULT NULL,
  `G44` varchar(512) DEFAULT NULL,
  `G45` varchar(512) DEFAULT NULL,
  `G46` varchar(512) DEFAULT NULL,
  `G47` varchar(512) DEFAULT NULL,
  `G48` varchar(512) DEFAULT NULL,
  `G51` varchar(512) DEFAULT NULL,
  `G52` varchar(512) DEFAULT NULL,
  `G53` varchar(512) DEFAULT NULL,
  `G54` varchar(512) DEFAULT NULL,
  `G55` varchar(512) DEFAULT NULL,
  `G61` varchar(512) DEFAULT NULL,
  `G62` varchar(512) DEFAULT NULL,
  `G63` varchar(512) DEFAULT NULL,
  `G64` varchar(512) DEFAULT NULL,
  `G65` varchar(512) DEFAULT NULL,
  `G71` varchar(512) DEFAULT NULL,
  `G72` varchar(512) DEFAULT NULL,
  `G73` varchar(512) DEFAULT NULL,
  `G74` varchar(512) DEFAULT NULL,
  `G75` varchar(512) DEFAULT NULL,
  `G81` varchar(512) DEFAULT NULL,
  `G82` varchar(512) DEFAULT NULL,
  `G83` varchar(512) DEFAULT NULL,
  `G84` varchar(512) DEFAULT NULL,
  `G85` varchar(512) DEFAULT NULL,
  `occlusi` varchar(512) DEFAULT NULL,
  `torus_palatinus` varchar(512) DEFAULT NULL,
  `torus_mandibularis` varchar(512) DEFAULT NULL,
  `palatum` varchar(512) DEFAULT NULL,
  `diastema` varchar(512) DEFAULT NULL,
  `gigi_anomali` varchar(512) DEFAULT NULL,
  `lain_lain` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gigi`
--

INSERT INTO `gigi` (`id_rekam`, `G11`, `G12`, `G13`, `G14`, `G15`, `G16`, `G17`, `G18`, `G21`, `G22`, `G23`, `G24`, `G25`, `G26`, `G27`, `G28`, `G31`, `G32`, `G33`, `G34`, `G35`, `G36`, `G37`, `G38`, `G41`, `G42`, `G43`, `G44`, `G45`, `G46`, `G47`, `G48`, `G51`, `G52`, `G53`, `G54`, `G55`, `G61`, `G62`, `G63`, `G64`, `G65`, `G71`, `G72`, `G73`, `G74`, `G75`, `G81`, `G82`, `G83`, `G84`, `G85`, `occlusi`, `torus_palatinus`, `torus_mandibularis`, `palatum`, `diastema`, `gigi_anomali`, `lain_lain`) VALUES
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' -  - inl -  - ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', '0'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' -  - inl -  - acr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Steep Bite', 'Tidak Ada', 'Sisi Kiri', 'Dalam', 'Ada', 'Tidak Ada', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keadaan_gigi`
--

CREATE TABLE IF NOT EXISTS `keadaan_gigi` (
  `id_keadaan` int(11) NOT NULL,
  `singkatan_keadaan` varchar(512) NOT NULL,
  `arti_keadaan` varchar(512) NOT NULL,
  `keterangan_keadaan` varchar(512) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keadaan_gigi`
--

INSERT INTO `keadaan_gigi` (`id_keadaan`, `singkatan_keadaan`, `arti_keadaan`, `keterangan_keadaan`) VALUES
(1, 'sou', 'Gigi sehat, normal, tanpa kelainan', '-'),
(2, 'non', 'Gigi tidak ada/tidak diketahui', '-'),
(3, 'une', 'Un-erupted', 'Perlu dukungan Ro photo (usia dewasa'),
(4, 'pre', 'Partial erupted', '-'),
(5, 'imv', 'Impacted visible', 'impaksi'),
(6, 'ano', 'Anomali', 'Peg shape, rudimeter, supernumerary, DLL'),
(7, 'dia', 'Diastema', 'Ada jarak antar gigi'),
(8, 'att', 'Atrisi', '-'),
(9, 'abr', 'Abrasi', '-'),
(10, 'car', 'Caries/ Karies', 'Harus diikuti permukaan giginya (MODVL), misal O Car, OM car'),
(11, 'cfr', 'Crown Fracture/ Fraktura Mahkota', 'Bisa ditambahkan informasi frakturnya, misal = cfr "1/2 insisal"'),
(12, 'nvt', 'Gigi Non Vital', 'Biasanya diikuti kondisi karies/tumpatan, misal: O Car-nvt'),
(13, 'rrx', 'Sisa Akar', '-'),
(14, 'mis', 'Gigi Hilang', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id_pasien` int(11) NOT NULL,
  `user_pasien` varchar(100) NOT NULL,
  `password_pasien` varchar(100) NOT NULL,
  `nama_lengkap_pasien` varchar(512) NOT NULL,
  `identitas_pasien` varchar(512) NOT NULL,
  `tempat_lahir_pasien` varchar(512) NOT NULL,
  `jenis_kelamin_pasien` varchar(512) NOT NULL,
  `tanggal_lahir_pasien` date NOT NULL,
  `suku_pasien` varchar(512) NOT NULL,
  `pekerjaan_pasien` varchar(512) NOT NULL,
  `alamat_rumah_pasien` text NOT NULL,
  `telepon_rumah_pasien` varchar(512) NOT NULL,
  `alamat_kantor_pasien` text NOT NULL,
  `hp_pasien` varchar(512) NOT NULL,
  `foto_pasien` varchar(512) NOT NULL,
  `status_pasien` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `user_pasien`, `password_pasien`, `nama_lengkap_pasien`, `identitas_pasien`, `tempat_lahir_pasien`, `jenis_kelamin_pasien`, `tanggal_lahir_pasien`, `suku_pasien`, `pekerjaan_pasien`, `alamat_rumah_pasien`, `telepon_rumah_pasien`, `alamat_kantor_pasien`, `hp_pasien`, `foto_pasien`, `status_pasien`) VALUES
(2, 'ehm', 'ehm', 'ehm ehm', '222', '', 'L', '0000-00-00', '', '', 'bandung', '', '', '0819', '', 'Tidak Aktif'),
(4, 'zeri', 'zeri', 'zeri munawar ultraman', '1', '', 'L', '0000-00-00', '', '', 'Bandung', '', '', '1000', '', 'Tidak Aktif'),
(5, 'ripas', 'ripas', 'ripas filqadar', '2', '', 'L', '1994-06-10', '', '', 'riau', '', '', '111', '', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permukaan_gigi`
--

CREATE TABLE IF NOT EXISTS `permukaan_gigi` (
  `id_permukaan` int(11) NOT NULL,
  `singkatan_permukaan` varchar(512) NOT NULL,
  `arti_permukaan` varchar(512) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permukaan_gigi`
--

INSERT INTO `permukaan_gigi` (`id_permukaan`, `singkatan_permukaan`, `arti_permukaan`) VALUES
(1, 'M', 'MESIAL'),
(2, 'O', 'OCCLUSAL'),
(3, 'D', 'DISTAL'),
(4, 'V', 'VESTIBULAR/BUKAL/LABIAL'),
(5, 'L', 'LINGUAL/PALATAL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `protesa`
--

CREATE TABLE IF NOT EXISTS `protesa` (
  `id_protesa` int(11) NOT NULL,
  `singkatan_protesa` varchar(512) NOT NULL,
  `arti_protesa` varchar(512) NOT NULL,
  `keterangan_protesa` varchar(512) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `protesa`
--

INSERT INTO `protesa` (`id_protesa`, `singkatan_protesa`, `arti_protesa`, `keterangan_protesa`) VALUES
(1, 'prd', 'Partial Denture', 'Gigi Tiruan Sebagian'),
(2, 'fld', 'Full Denture', 'Gigi Tiruan Lengkap'),
(3, 'acr', 'Acrilic', 'Misal: prd-acr {Gigi tiruan sebagian akrilik}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam`
--

CREATE TABLE IF NOT EXISTS `rekam` (
  `id_rekam` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `golongan_darah` varchar(512) NOT NULL,
  `penyakit_jantung` varchar(512) NOT NULL,
  `diabetes` varchar(512) NOT NULL,
  `haemopilia` varchar(512) NOT NULL,
  `hepatitis` varchar(512) NOT NULL,
  `gastring` varchar(512) NOT NULL,
  `lain` varchar(512) NOT NULL,
  `alergi_obat` varchar(512) NOT NULL,
  `alergi_makanan` varchar(512) NOT NULL,
  `tanggal_rekam` date NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_permukaan` int(11) NOT NULL,
  `id_keadaan` int(11) NOT NULL,
  `id_bahan` int(11) NOT NULL,
  `id_restorasi` int(11) NOT NULL,
  `id_protesa` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekam`
--

INSERT INTO `rekam` (`id_rekam`, `id_pasien`, `golongan_darah`, `penyakit_jantung`, `diabetes`, `haemopilia`, `hepatitis`, `gastring`, `lain`, `alergi_obat`, `alergi_makanan`, `tanggal_rekam`, `id_dokter`, `id_permukaan`, `id_keadaan`, `id_bahan`, `id_restorasi`, `id_protesa`) VALUES
(3, 2, '0', '0', '0', '0', '0', '0', '0', '0', '0', '2015-06-03', 1, 2, 3, 7, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `restorasi`
--

CREATE TABLE IF NOT EXISTS `restorasi` (
  `id_restorasi` int(11) NOT NULL,
  `singkatan_restorasi` varchar(512) NOT NULL,
  `arti_restorasi` varchar(512) NOT NULL,
  `keterangan_restorasi` varchar(512) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `restorasi`
--

INSERT INTO `restorasi` (`id_restorasi`, `singkatan_restorasi`, `arti_restorasi`, `keterangan_restorasi`) VALUES
(1, 'fmc', 'Full Metal Crown', 'Mahktoa Logam'),
(2, 'poc', 'Porcelain Crown', 'Mahkota Porcelain'),
(3, 'mpc', 'Metal Porcelain Crown', '-'),
(4, 'gmc', 'Good Metal Crown', '-'),
(5, 'rct', 'Root Canal Treatment/ Perawatan Saluran Akar', 'Biasanya diikuti kondisi tumpatan/ restorasi, misal:O amf-rct; poc-rct'),
(6, 'ipx', 'Implan', '-'),
(7, 'meb', 'Metal Bridge', 'Jembatan Logam'),
(8, 'pob', 'Porcelain Bridge', 'Jembatan Porcelain'),
(9, 'pon', 'Pontic', 'Bisa ditambah kondisi missing, misal: mis-pon'),
(10, 'abu', 'Gigi abutment', 'Gigi Penyangga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_restorasi`
--
ALTER TABLE `bahan_restorasi`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `keadaan_gigi`
--
ALTER TABLE `keadaan_gigi`
  ADD PRIMARY KEY (`id_keadaan`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `permukaan_gigi`
--
ALTER TABLE `permukaan_gigi`
  ADD PRIMARY KEY (`id_permukaan`);

--
-- Indexes for table `protesa`
--
ALTER TABLE `protesa`
  ADD PRIMARY KEY (`id_protesa`);

--
-- Indexes for table `rekam`
--
ALTER TABLE `rekam`
  ADD PRIMARY KEY (`id_rekam`), ADD KEY `id_pasien` (`id_pasien`), ADD KEY `id_dokter` (`id_dokter`), ADD KEY `id_permukaan` (`id_permukaan`), ADD KEY `id_keadaan` (`id_keadaan`), ADD KEY `id_bahan` (`id_bahan`), ADD KEY `id_protesa` (`id_protesa`), ADD KEY `id_restorasi` (`id_restorasi`);

--
-- Indexes for table `restorasi`
--
ALTER TABLE `restorasi`
  ADD PRIMARY KEY (`id_restorasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan_restorasi`
--
ALTER TABLE `bahan_restorasi`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `keadaan_gigi`
--
ALTER TABLE `keadaan_gigi`
  MODIFY `id_keadaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `permukaan_gigi`
--
ALTER TABLE `permukaan_gigi`
  MODIFY `id_permukaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `protesa`
--
ALTER TABLE `protesa`
  MODIFY `id_protesa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rekam`
--
ALTER TABLE `rekam`
  MODIFY `id_rekam` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `restorasi`
--
ALTER TABLE `restorasi`
  MODIFY `id_restorasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rekam`
--
ALTER TABLE `rekam`
ADD CONSTRAINT `rekam_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`),
ADD CONSTRAINT `rekam_ibfk_10` FOREIGN KEY (`id_permukaan`) REFERENCES `permukaan_gigi` (`id_permukaan`),
ADD CONSTRAINT `rekam_ibfk_11` FOREIGN KEY (`id_keadaan`) REFERENCES `keadaan_gigi` (`id_keadaan`),
ADD CONSTRAINT `rekam_ibfk_12` FOREIGN KEY (`id_permukaan`) REFERENCES `permukaan_gigi` (`id_permukaan`),
ADD CONSTRAINT `rekam_ibfk_13` FOREIGN KEY (`id_keadaan`) REFERENCES `keadaan_gigi` (`id_keadaan`),
ADD CONSTRAINT `rekam_ibfk_14` FOREIGN KEY (`id_bahan`) REFERENCES `bahan_restorasi` (`id_bahan`),
ADD CONSTRAINT `rekam_ibfk_15` FOREIGN KEY (`id_protesa`) REFERENCES `protesa` (`id_protesa`),
ADD CONSTRAINT `rekam_ibfk_16` FOREIGN KEY (`id_restorasi`) REFERENCES `restorasi` (`id_restorasi`),
ADD CONSTRAINT `rekam_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
ADD CONSTRAINT `rekam_ibfk_3` FOREIGN KEY (`id_permukaan`) REFERENCES `permukaan_gigi` (`id_permukaan`),
ADD CONSTRAINT `rekam_ibfk_4` FOREIGN KEY (`id_permukaan`) REFERENCES `permukaan_gigi` (`id_permukaan`),
ADD CONSTRAINT `rekam_ibfk_5` FOREIGN KEY (`id_permukaan`) REFERENCES `permukaan_gigi` (`id_permukaan`),
ADD CONSTRAINT `rekam_ibfk_6` FOREIGN KEY (`id_permukaan`) REFERENCES `permukaan_gigi` (`id_permukaan`),
ADD CONSTRAINT `rekam_ibfk_7` FOREIGN KEY (`id_permukaan`) REFERENCES `permukaan_gigi` (`id_permukaan`),
ADD CONSTRAINT `rekam_ibfk_8` FOREIGN KEY (`id_permukaan`) REFERENCES `permukaan_gigi` (`id_permukaan`),
ADD CONSTRAINT `rekam_ibfk_9` FOREIGN KEY (`id_permukaan`) REFERENCES `permukaan_gigi` (`id_permukaan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
