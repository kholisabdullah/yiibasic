-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2016 at 07:06 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2basic`
--
CREATE DATABASE IF NOT EXISTS `yii2basic` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `yii2basic`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alat`
--

DROP TABLE IF EXISTS `tbl_alat`;
CREATE TABLE IF NOT EXISTS `tbl_alat` (
  `id_alat` int(11) NOT NULL AUTO_INCREMENT,
  `id_pekerjaan` int(11) DEFAULT NULL COMMENT 'foreign key untuk tabel pekerjaan\n',
  `nama_alat` varchar(45) DEFAULT NULL,
  `merk` varchar(45) DEFAULT NULL,
  `model` varchar(45) DEFAULT NULL,
  `sn` varchar(45) DEFAULT NULL,
  `kode_lembarkerja` varchar(45) DEFAULT NULL,
  `suhu_awal` decimal(10,0) DEFAULT NULL,
  `suhu_akhir` decimal(10,0) DEFAULT NULL,
  `nisbi_awal` decimal(10,0) DEFAULT NULL,
  `nisbi_akhir` decimal(10,0) DEFAULT NULL,
  `no_label` varchar(45) DEFAULT NULL COMMENT 'nomor label',
  PRIMARY KEY (`id_alat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tbl_alat`
--

TRUNCATE TABLE `tbl_alat`;
--
-- Dumping data for table `tbl_alat`
--

INSERT INTO `tbl_alat` (`id_alat`, `id_pekerjaan`, `nama_alat`, `merk`, `model`, `sn`, `kode_lembarkerja`, `suhu_awal`, `suhu_akhir`, `nisbi_awal`, `nisbi_akhir`, `no_label`) VALUES
(1, 1, 'Bedise Monitor', 'AA', 'BB', '1234', 'PatMonitor', NULL, NULL, NULL, NULL, NULL),
(2, 1, 'Patient Monitor', 'AA', 'BB', '1234', 'PatMonitor', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alatpekerjaan`
--

DROP TABLE IF EXISTS `tbl_alatpekerjaan`;
CREATE TABLE IF NOT EXISTS `tbl_alatpekerjaan` (
  `id_alatpekerjaan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_alat` varchar(45) DEFAULT NULL,
  `kuota` int(11) DEFAULT NULL COMMENT 'kuota keseluruhan',
  `total` int(11) DEFAULT NULL COMMENT 'total yang sudah dikerjakan',
  PRIMARY KEY (`id_alatpekerjaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `tbl_alatpekerjaan`
--

TRUNCATE TABLE `tbl_alatpekerjaan`;
-- --------------------------------------------------------

--
-- Table structure for table `tbl_hitung_param`
--

DROP TABLE IF EXISTS `tbl_hitung_param`;
CREATE TABLE IF NOT EXISTS `tbl_hitung_param` (
  `id_hitung_param` int(11) NOT NULL AUTO_INCREMENT,
  `kode_param` varchar(4) DEFAULT NULL COMMENT 'kode param dari tabel parameter\n',
  `setting` decimal(10,0) DEFAULT NULL COMMENT 'settingan di alat',
  `baca` decimal(10,0) DEFAULT NULL COMMENT 'pembacaan di alat',
  `iterasi` int(11) DEFAULT NULL COMMENT 'pengulangan',
  `keterangan` varchar(50) DEFAULT NULL,
  `id_alat` int(11) DEFAULT NULL COMMENT 'foreign key untuk table alat',
  PRIMARY KEY (`id_hitung_param`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COMMENT='tabel berisi perhitungan tabel lembarkerja, dan ada tipe paramaternya';

--
-- Truncate table before insert `tbl_hitung_param`
--

TRUNCATE TABLE `tbl_hitung_param`;
--
-- Dumping data for table `tbl_hitung_param`
--

INSERT INTO `tbl_hitung_param` (`id_hitung_param`, `kode_param`, `setting`, `baca`, `iterasi`, `keterangan`, `id_alat`) VALUES
(1, 'SPO2', '85', '10', 1, NULL, 1),
(2, 'SPO2', '90', '20', 2, NULL, 1),
(3, 'ECG', '30', '11', 1, NULL, 1),
(4, 'ECG', '60', '21', 2, NULL, 1),
(5, 'ELEC', NULL, '2', 1, 'Tegangan Jala-jala Terukur', 1),
(6, 'ELEC', NULL, '11', 1, 'Tahanan Hubungan Pentanahan', 1),
(7, 'ELEC', NULL, '33', 1, 'Tahanan Isolasi Kabel Catu Daya dengan Chassis', 1),
(8, 'ELEC', NULL, '44', 1, 'Arus bocor pada chasis dengan pembumian', 1),
(9, 'ELEC', NULL, '55', 1, 'Arus bocor pada chasis tanpa pembumian', 1),
(10, 'ELEC', NULL, '66', 1, 'Patient Leakage Current RA - Earth  ', 1),
(11, 'ELEC', NULL, '12', 1, 'Patient Leakage Current RL - Earth  ', 1),
(12, 'ELEC', NULL, '33', 1, 'Patient Leakage Current LA - Earth  ', 1),
(13, 'ELEC', NULL, '44', 1, 'Patient Leakage Current LL - Earth  ', 1),
(14, 'ELEC', NULL, '12', 1, 'Patient Leakage Current V1 - V6 – Earth  ', 1),
(15, 'ELEC', NULL, '31', 1, 'Patient Leakage Current LA - Earth  ', 1),
(16, 'FISF', NULL, '1', 1, 'Kontrol/indikator', 1),
(17, 'FISF', NULL, '1', 1, 'Badan / Permukaan', 1),
(18, 'FISF', NULL, '1', 1, 'ECG Cable', 1),
(19, 'FISF', NULL, '1', 1, 'SPO2 Sensor', 1),
(20, 'FISF', NULL, '1', 1, 'Manset', 1),
(21, 'FISF', NULL, '1', 1, 'Aksesoris', 1),
(22, 'SPO2', '85', '123', 1, NULL, 2),
(23, 'ECG', '60', '413', 1, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lembarkerja`
--

DROP TABLE IF EXISTS `tbl_lembarkerja`;
CREATE TABLE IF NOT EXISTS `tbl_lembarkerja` (
  `id_lembarkerja` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lembarkerja` varchar(40) DEFAULT NULL,
  `kode_lembarkerja` varchar(10) DEFAULT NULL,
  `kode_param1` varchar(4) DEFAULT NULL COMMENT 'kolom kode paramater dari tbl_tipe_param',
  `kode_param2` varchar(4) DEFAULT NULL COMMENT 'kolom kode paramater dari tbl_tipe_param',
  `kode_param3` varchar(4) DEFAULT NULL COMMENT 'kolom kode paramater dari tbl_tipe_param',
  `kode_param4` varchar(4) DEFAULT NULL COMMENT 'kolom kode paramater dari tbl_tipe_param',
  `kode_param5` varchar(4) DEFAULT NULL COMMENT 'kolom kode paramater dari tbl_tipe_param',
  `kode_param6` varchar(4) DEFAULT NULL COMMENT 'kolom kode paramater dari tbl_tipe_param',
  `kode_param7` varchar(4) DEFAULT NULL COMMENT 'kolom kode paramater dari tbl_tipe_param',
  `kode_param8` varchar(4) DEFAULT NULL COMMENT 'kolom kode paramater dari tbl_tipe_param',
  `kode_param9` varchar(4) DEFAULT NULL COMMENT 'kolom kode paramater dari tbl_tipe_param',
  `id_kalibrator` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_lembarkerja`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1 COMMENT='tabel lembarkerja, berisi index dari tabel parameter';

--
-- Truncate table before insert `tbl_lembarkerja`
--

TRUNCATE TABLE `tbl_lembarkerja`;
--
-- Dumping data for table `tbl_lembarkerja`
--

INSERT INTO `tbl_lembarkerja` (`id_lembarkerja`, `nama_lembarkerja`, `kode_lembarkerja`, `kode_param1`, `kode_param2`, `kode_param3`, `kode_param4`, `kode_param5`, `kode_param6`, `kode_param7`, `kode_param8`, `kode_param9`, `id_kalibrator`) VALUES
(1, 'Bedside Monitor', 'PatMonitor', 'FISF', 'ELEC', 'SPO2', 'NIBP', 'ECG', NULL, NULL, NULL, NULL, NULL),
(2, 'Anaesthesi Ventilato', 'Ventilator', 'FISF', 'ELEC', 'KO2', 'TIDL', 'PRSS', 'FREK', 'INSP', 'PEEP', NULL, NULL),
(3, 'Anaesthesi Mesin', 'AnestMesin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'APF', 'APF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'ARK', 'ARK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Audiometer', 'Audiometer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Autoclave (mag) No Listrik', 'AutoclavTL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Autoclave (mag) Listrik', 'AutoclavL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Autoclave Sterilisator', 'AutoclavSt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Baby Incubator', 'BabyIncu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Biometri', 'Biometri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Blood Bank (Pengujian)', 'BloodBank', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Blood Pressure Monitor (baterai)', 'BlodPresMB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Blood Pressure Monitor (No Baterai)', 'BlodPresMo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Blood Warmer', 'BloodWarm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Centrifuge (Pengujian)', 'CentriUji', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Chart Projector', 'ChartProj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Corneal Tophography', 'CornealTop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'CPAP (No Listrik)', 'CPAPNL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'CPAP (Listrik)', 'CPAP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'CTG (Baterai)', 'CTGBat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'CTG (Listrik)', 'CTGL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Defilbrator', 'Defib', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Dental Unit', 'DentalUnit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'DentalXray', 'DentalXRay', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Diathermy MWD (Pengujian)', 'DiatMWD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Diathermy SWD (Pengujian)', 'DiatSWD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'ECG Monitor', 'ECGMonitor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'ECG Recorder', 'ECGRecord', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'ElectroStimulator, TENS, Audiotreater', 'TENS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Endoscopy', 'Endoscopy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'ESU', 'ESU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'ESU Uji', 'ESUU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Fetal Doppler (Baterai)', 'DopplerBat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'Fetal Doppler', 'Doppler', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'Flow Meter (NO LISTRIK)', 'FlowmetNL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Flow Meter', 'Flowmeter', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'General Purpose X-Ray(TIDAK ADA LISTRIK)', 'GenXrayNL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'General Purpose X-Ray', 'GenXray', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Indirect Opthalmoscope', 'IndOpthal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'Infant warmer Pengujian', 'InfWarmU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'Infant Warmer', 'InfWar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'Infra Red Lamp+FIX', 'IRLampFIX', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'Infrared Lamp WITH TIMER ', 'IRLampT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'Infusion Pump', 'InfusePump', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'Laboratory Incubator', 'LabIncu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'Laboratory Refrigerator', 'LabRefrig', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'Lampu Operasi (NO LISTRIK)', 'LampuOP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Lampu Tindakan_Examination Lamp ', 'LampTindak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'Lensmeter', 'Lensmeter', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Microscope Lab', 'Microscope', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'Mobile X Ray TIDAK ADA LISTRIK', 'MobXrayNL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'Mobile X-Ray', 'MobXray', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'Nebulizer (ADA TIMER)', 'NebulizTim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'Nebulizer (Low Medium High) NO TIMER', 'NebNoTime', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'Nebulizer NO TIMER (Pengujian', 'NebNoTimeU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'Operating Microscope', 'OPMikrosko', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'Parafinbath', 'ParafBath', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'Phototeraphy NO Timer', 'PhoTerapNT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'Phototherapy', 'PhoTeraph', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'Pulse Oxymeter (BATERAI)', 'PulsOxyBat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'Pulse Oxymeter ', 'PulsOxy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'Parafinbath', 'ParafBath', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'Phototeraphy NO Timer', 'PhoTerapNT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'Phototherapy', 'PhoTeraph', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'Pulse Oxymeter (BATERAI)', 'PulsOxyBat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'Pulse Oxymeter ', 'PulsOxy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'Slit Lamp', 'SlitLamp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'Sphygmomanometer', 'Spygmo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'Spirometri', 'Sprimoteri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'Suction Pump bar', 'Suctionbar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'Suction Pump cmHg', 'SuctioncmH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'Suction Pump kpa', 'Suctionkpa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'Suction Pump mmHg', 'SuctionmmH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'Suction Pump MPa', 'SuctionMPa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'Syringe Pump', 'Syringe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'Thermometer Badan', 'ThermoBdn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'Timbangan Analitik', 'TimAnaliti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'Timbangan Bayi', 'TimBayi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'Timbangan Dewasa', 'TimDewasa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'Tonometer', 'Tonometer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'Traksi', 'Traksi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'Treadmill - Stretch Test +Timer ', 'TreadSTT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'USG', 'USG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'UST KALIBRASI (MERAH IJO)', 'UST', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'UV Lamp (FIX DAN TIDAK ADA TIMER)', 'UVLamFNT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'UV Lamp (TIDAK ADA TIMER) ', 'UVLamNT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'UV Lamp', 'UVLamp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'Vaporizer', 'Vaporizer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'Ventilator', 'VentiRev', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'Waterbath', 'Waterbath', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pekerjaan`
--

DROP TABLE IF EXISTS `tbl_pekerjaan`;
CREATE TABLE IF NOT EXISTS `tbl_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` varchar(45) DEFAULT NULL COMMENT 'tuliskan nama pelanggan seperti dibawah ini:\nFatmawati, RSUD.',
  `jumlah alat` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_pekerjaan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='tabel pekerjaan untuk seluruh sistem';

--
-- Truncate table before insert `tbl_pekerjaan`
--

TRUNCATE TABLE `tbl_pekerjaan`;
--
-- Dumping data for table `tbl_pekerjaan`
--

INSERT INTO `tbl_pekerjaan` (`id_pekerjaan`, `nama_pelanggan`, `jumlah alat`) VALUES
(1, 'Project DKI', '100');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipe_param`
--

DROP TABLE IF EXISTS `tbl_tipe_param`;
CREATE TABLE IF NOT EXISTS `tbl_tipe_param` (
  `id_param` int(11) NOT NULL AUTO_INCREMENT,
  `kode_param` varchar(4) DEFAULT NULL COMMENT 'kode paramater max 4 digit. diusahakan beda tiap parameter',
  `nama_param` varchar(45) DEFAULT NULL COMMENT 'nama lengkap parameter, ditulis secara jelas',
  PRIMARY KEY (`id_param`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1 COMMENT='tipe parameter pengukuran kalibrasi, berdasar LK GPS 2016';

--
-- Truncate table before insert `tbl_tipe_param`
--

TRUNCATE TABLE `tbl_tipe_param`;
--
-- Dumping data for table `tbl_tipe_param`
--

INSERT INTO `tbl_tipe_param` (`id_param`, `kode_param`, `nama_param`) VALUES
(1, 'NIBP', 'NIBP (mmHg)'),
(2, 'SPO2', 'SPO2'),
(3, 'ECG', 'Heart Rate ECG (bpm)'),
(4, 'ELEC', 'Kelistrikan'),
(5, 'ROOM', 'Kondisi Ruangan'),
(6, 'FISF', 'Pemeriksaan Kondisi Fisik Dan Fungsi'),
(7, NULL, NULL),
(8, 'KO2', 'Konsentrasi O2 ( % )'),
(9, 'TIDL', 'Tidal Volume ( mlL )'),
(10, 'PRSS', 'Tekanan ( cmH2O )'),
(11, 'FREK', 'Frekwensi/Rate'),
(12, 'INSP', 'Waktu Inspirasi ( Detik )'),
(13, 'PEEP', 'PEEP( cm H2O )'),
(14, 'SHU1', 'Suhu T1  ( ºC)'),
(15, 'RFRK', 'Standar Refraktometer (D)'),
(16, 'KRAM', 'Standar Keratometer (mm)'),
(17, 'SHU3', 'Suhu T3  ( ºC)'),
(18, 'SHU4', 'Suhu T4  ( ºC)'),
(19, 'NOIS', 'Kebisingan (db) '),
(20, 'AIFL', 'Aliran Udara (m/s)'),
(21, 'HUMI', 'Kelembaban (%)'),
(22, 'TONO', 'Tonometer'),
(23, 'KONS', 'Konsentrasi'),
(24, 'UVMW', 'UV (mW/cm2)               '),
(25, 'TIME', 'Timer (Second)        '),
(26, 'POWE', 'Power (Watt/cm²)'),
(27, 'JARV', 'Jarak  Vertikal (mm)'),
(28, 'JARH', 'Jarak  Horizontal (mm)'),
(29, 'KECP', 'Kecepatan Putaran (km)          '),
(30, 'HRBT', 'Heart Beat'),
(31, 'MASS', 'Massa (Kg)          '),
(32, 'SCLV', 'Pemeriksaan Nilai Skala ( Scale Value )'),
(33, 'DUBC', 'Daya Ulang Pembacaan'),
(34, 'SIMJ', 'Penyimpangan Penunjukkan'),
(35, 'BBTT', 'Efek Pembebanan tidak Terpusat'),
(36, 'FLRT', 'Flow rate  (mL/H)'),
(37, 'ALOC', 'Alarm Occlusion ( mmHg )      '),
(38, 'PSR', 'Pulse Rate (BPM)'),
(39, 'CHAY', 'Intensitas Cahaya ( ?W/cm²/nm)'),
(40, 'CHAY', 'Intensitas Cahaya'),
(41, 'FLOL', 'Flow (LPM)'),
(42, 'TKV', 'Tegangan (KV)'),
(43, 'LAMI', 'Pengukuran 8 Buah Lampu Mi'),
(44, 'LAME', 'Pengukuran 8 Buah Lampu Med'),
(45, 'LAMA', 'Pengukuran 8 Buah Lampu Ma');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `tipe_user` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel user gps kalibrasi, teknisi, admin';

--
-- Truncate table before insert `tbl_user`
--

TRUNCATE TABLE `tbl_user`;
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_hitung`
--
DROP VIEW IF EXISTS `v_hitung`;
CREATE TABLE IF NOT EXISTS `v_hitung` (
`id_lembarkerja` int(11)
,`kode_lembarkerja` varchar(10)
,`param` varchar(4)
,`setting` decimal(10,0)
,`baca` decimal(10,0)
,`param_hitung` varchar(4)
,`keterangan` varchar(50)
,`iterasi` int(11)
,`id_alat` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `v_hitung`
--
DROP TABLE IF EXISTS `v_hitung`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_hitung`  AS  select `tbl_lembarkerja`.`id_lembarkerja` AS `id_lembarkerja`,`tbl_lembarkerja`.`kode_lembarkerja` AS `kode_lembarkerja`,`tbl_lembarkerja`.`kode_param1` AS `param`,`tbl_hitung_param`.`setting` AS `setting`,`tbl_hitung_param`.`baca` AS `baca`,`tbl_hitung_param`.`kode_param` AS `param_hitung`,`tbl_hitung_param`.`keterangan` AS `keterangan`,`tbl_hitung_param`.`iterasi` AS `iterasi`,`tbl_hitung_param`.`id_alat` AS `id_alat` from (`tbl_lembarkerja` join `tbl_hitung_param` on((`tbl_lembarkerja`.`kode_param1` = `tbl_hitung_param`.`kode_param`))) union select `tbl_lembarkerja`.`id_lembarkerja` AS `id_lembarkerja`,`tbl_lembarkerja`.`kode_lembarkerja` AS `kode_lembarkerja`,`tbl_lembarkerja`.`kode_param2` AS `param`,`tbl_hitung_param`.`setting` AS `setting`,`tbl_hitung_param`.`baca` AS `baca`,`tbl_hitung_param`.`kode_param` AS `param_hitung`,`tbl_hitung_param`.`keterangan` AS `keterangan`,`tbl_hitung_param`.`iterasi` AS `iterasi`,`tbl_hitung_param`.`id_alat` AS `id_alat` from (`tbl_lembarkerja` join `tbl_hitung_param` on((`tbl_lembarkerja`.`kode_param2` = `tbl_hitung_param`.`kode_param`))) union select `tbl_lembarkerja`.`id_lembarkerja` AS `id_lembarkerja`,`tbl_lembarkerja`.`kode_lembarkerja` AS `kode_lembarkerja`,`tbl_lembarkerja`.`kode_param3` AS `param`,`tbl_hitung_param`.`setting` AS `setting`,`tbl_hitung_param`.`baca` AS `baca`,`tbl_hitung_param`.`kode_param` AS `param_hitung`,`tbl_hitung_param`.`keterangan` AS `keterangan`,`tbl_hitung_param`.`iterasi` AS `iterasi`,`tbl_hitung_param`.`id_alat` AS `id_alat` from (`tbl_lembarkerja` join `tbl_hitung_param` on((`tbl_lembarkerja`.`kode_param3` = `tbl_hitung_param`.`kode_param`))) union select `tbl_lembarkerja`.`id_lembarkerja` AS `id_lembarkerja`,`tbl_lembarkerja`.`kode_lembarkerja` AS `kode_lembarkerja`,`tbl_lembarkerja`.`kode_param4` AS `param`,`tbl_hitung_param`.`setting` AS `setting`,`tbl_hitung_param`.`baca` AS `baca`,`tbl_hitung_param`.`kode_param` AS `param_hitung`,`tbl_hitung_param`.`keterangan` AS `keterangan`,`tbl_hitung_param`.`iterasi` AS `iterasi`,`tbl_hitung_param`.`id_alat` AS `id_alat` from (`tbl_lembarkerja` join `tbl_hitung_param` on((`tbl_lembarkerja`.`kode_param4` = `tbl_hitung_param`.`kode_param`))) union select `tbl_lembarkerja`.`id_lembarkerja` AS `id_lembarkerja`,`tbl_lembarkerja`.`kode_lembarkerja` AS `kode_lembarkerja`,`tbl_lembarkerja`.`kode_param5` AS `param`,`tbl_hitung_param`.`setting` AS `setting`,`tbl_hitung_param`.`baca` AS `baca`,`tbl_hitung_param`.`kode_param` AS `param_hitung`,`tbl_hitung_param`.`keterangan` AS `keterangan`,`tbl_hitung_param`.`iterasi` AS `iterasi`,`tbl_hitung_param`.`id_alat` AS `id_alat` from (`tbl_lembarkerja` join `tbl_hitung_param` on((`tbl_lembarkerja`.`kode_param5` = `tbl_hitung_param`.`kode_param`))) union select `tbl_lembarkerja`.`id_lembarkerja` AS `id_lembarkerja`,`tbl_lembarkerja`.`kode_lembarkerja` AS `kode_lembarkerja`,`tbl_lembarkerja`.`kode_param6` AS `param`,`tbl_hitung_param`.`setting` AS `setting`,`tbl_hitung_param`.`baca` AS `baca`,`tbl_hitung_param`.`kode_param` AS `param_hitung`,`tbl_hitung_param`.`keterangan` AS `keterangan`,`tbl_hitung_param`.`iterasi` AS `iterasi`,`tbl_hitung_param`.`id_alat` AS `id_alat` from (`tbl_lembarkerja` join `tbl_hitung_param` on((`tbl_lembarkerja`.`kode_param6` = `tbl_hitung_param`.`kode_param`))) union select `tbl_lembarkerja`.`id_lembarkerja` AS `id_lembarkerja`,`tbl_lembarkerja`.`kode_lembarkerja` AS `kode_lembarkerja`,`tbl_lembarkerja`.`kode_param7` AS `param`,`tbl_hitung_param`.`setting` AS `setting`,`tbl_hitung_param`.`baca` AS `baca`,`tbl_hitung_param`.`kode_param` AS `param_hitung`,`tbl_hitung_param`.`keterangan` AS `keterangan`,`tbl_hitung_param`.`iterasi` AS `iterasi`,`tbl_hitung_param`.`id_alat` AS `id_alat` from (`tbl_lembarkerja` join `tbl_hitung_param` on((`tbl_lembarkerja`.`kode_param7` = `tbl_hitung_param`.`kode_param`))) union select `tbl_lembarkerja`.`id_lembarkerja` AS `id_lembarkerja`,`tbl_lembarkerja`.`kode_lembarkerja` AS `kode_lembarkerja`,`tbl_lembarkerja`.`kode_param8` AS `param`,`tbl_hitung_param`.`setting` AS `setting`,`tbl_hitung_param`.`baca` AS `baca`,`tbl_hitung_param`.`kode_param` AS `param_hitung`,`tbl_hitung_param`.`keterangan` AS `keterangan`,`tbl_hitung_param`.`iterasi` AS `iterasi`,`tbl_hitung_param`.`id_alat` AS `id_alat` from (`tbl_lembarkerja` join `tbl_hitung_param` on((`tbl_lembarkerja`.`kode_param8` = `tbl_hitung_param`.`kode_param`))) union select `tbl_lembarkerja`.`id_lembarkerja` AS `id_lembarkerja`,`tbl_lembarkerja`.`kode_lembarkerja` AS `kode_lembarkerja`,`tbl_lembarkerja`.`kode_param9` AS `param`,`tbl_hitung_param`.`setting` AS `setting`,`tbl_hitung_param`.`baca` AS `baca`,`tbl_hitung_param`.`kode_param` AS `param_hitung`,`tbl_hitung_param`.`keterangan` AS `keterangan`,`tbl_hitung_param`.`iterasi` AS `iterasi`,`tbl_hitung_param`.`id_alat` AS `id_alat` from (`tbl_lembarkerja` join `tbl_hitung_param` on((`tbl_lembarkerja`.`kode_param9` = `tbl_hitung_param`.`kode_param`))) ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
