-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2020 pada 10.34
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalvsm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_exim`
--

CREATE TABLE `data_exim` (
  `id_exim` int(11) NOT NULL,
  `id_main` int(11) NOT NULL,
  `id_rule` int(11) NOT NULL,
  `sea1` float NOT NULL,
  `sea2` float NOT NULL,
  `sea3` float NOT NULL,
  `sea4` int(11) NOT NULL,
  `air1` float NOT NULL,
  `air2` float NOT NULL,
  `air3` float NOT NULL,
  `air4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_exim`
--

INSERT INTO `data_exim` (`id_exim`, `id_main`, `id_rule`, `sea1`, `sea2`, `sea3`, `sea4`, `air1`, `air2`, `air3`, `air4`) VALUES
(3, 3, 27, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 3, 6, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_inventory`
--

CREATE TABLE `data_inventory` (
  `id` int(11) NOT NULL,
  `id_main` int(11) NOT NULL,
  `id_rule` int(11) NOT NULL,
  `input1` float NOT NULL,
  `input2` float NOT NULL,
  `input3` float NOT NULL,
  `input4` float NOT NULL,
  `input5` float NOT NULL,
  `input6` float NOT NULL,
  `input7` float NOT NULL,
  `input8` float NOT NULL,
  `input9` float NOT NULL,
  `unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_inventory`
--

INSERT INTO `data_inventory` (`id`, `id_main`, `id_rule`, `input1`, `input2`, `input3`, `input4`, `input5`, `input6`, `input7`, `input8`, `input9`, `unit`) VALUES
(3, 3, 3, 3681.45, 70, 2577.01, 0.08, 32212.6, 1, 32212.6, 36206, 0.89, 'meters'),
(4, 3, 4, 3681.45, 70, 2577.01, 0.08, 32212.6, 1, 32212.6, 36206, 0.89, 'meters'),
(5, 3, 7, 138693, 27.24, 37779.9, 0.08, 472249, 1, 472249, 36206, 13.04, 'Meters'),
(6, 3, 8, 3800, 70, 2660, 1, 2660, 1, 2660, 36206, 0.07, 'pcs'),
(7, 3, 12, 6072, 70, 4250.4, 1, 4250.4, 1, 4250.4, 36206, 0.12, 'pcs'),
(8, 3, 14, 16384, 70, 11468.8, 1, 11468.8, 1, 11468.8, 36206, 0.32, 'pcs'),
(9, 3, 16, 1183, 70, 828.1, 1, 828.1, 1, 828.1, 36206, 0.02, 'pcs'),
(10, 3, 18, 9741, 70, 6818.7, 1, 6818.7, 1, 6818.7, 36206, 0.19, 'pcs'),
(11, 3, 19, 11346, 100, 11346, 1, 11346, 1, 11346, 36206, 0.31, 'pcs'),
(13, 3, 22, 3577, 100, 3577, 1, 3577, 1, 3577, 36206, 0.1, 'pcs'),
(14, 3, 24, 6986, 100, 6986, 1, 6986, 1, 6986, 36206, 0.19, 'pcs'),
(30, 3, 26, 750296, 76, 570225, 1, 570225, 1, 570225, 36206, 15.75, 'pcs'),
(31, 3, 11, 52775, 70, 36942.5, 1, 36942.5, 1, 36942.5, 36206, 1.02, 'pcs'),
(32, 3, 29, 3552, 70, 2486.4, 1, 2486.4, 1, 2486.4, 36206, 0.07, 'pcs'),
(41, 3, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(42, 3, 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_process`
--

CREATE TABLE `data_process` (
  `id_process` int(11) NOT NULL,
  `id_main` int(11) NOT NULL,
  `id_rule` int(11) NOT NULL,
  `input1` varchar(20) NOT NULL,
  `input2` float NOT NULL,
  `input3` float NOT NULL,
  `input4` float NOT NULL,
  `input5` float NOT NULL,
  `input6` float NOT NULL,
  `input7` float NOT NULL,
  `input8` float NOT NULL,
  `input9` float NOT NULL,
  `input10` float NOT NULL,
  `input11` float NOT NULL,
  `input12` float NOT NULL,
  `result` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_process`
--

INSERT INTO `data_process` (`id_process`, `id_main`, `id_rule`, `input1`, `input2`, `input3`, `input4`, `input5`, `input6`, `input7`, `input8`, `input9`, `input10`, `input11`, `input12`, `result`) VALUES
(11, 3, 2, 'Batch', 1, 2836, 2836, 137675, 0.02, 0.7, 0.03, 0, 100, 0, 4, 0.000000527426),
(12, 3, 21, 'Single', 1, 41.61, 41.6, 1, 41.61, 41, 1.01, 0, 0, 0, 14, 0.0000177567),
(13, 3, 5, 'Batch', 5, 1654, 330.8, 5772, 0.29, 1, 0.29, 0, 100, 9.94, 2, 0.00000509845),
(14, 3, 9, 'Batch', 1, 2726, 2726, 1116, 2.44, 2.1, 1.16, 2.8, 0, 8, 2, 0.0000203938),
(15, 3, 28, 'Batch', 1, 2958, 2958, 2650, 1.12, 1.4, 0.8, 1.87, 0, 6.4, 2, 0.0000140647),
(17, 3, 13, 'Single', 240, 3630, 15.1, 240, 15.13, 44, 0.34, 9.6, 97.64, 0.77, 22, 0.0000059775),
(18, 3, 15, 'Single', 3, 1573, 524.3, 547, 2.88, 4, 0.72, 0, 0, 0, 4, 0.0000126582),
(19, 3, 17, 'Batch', 3, 539, 179.7, 187, 2.88, 2, 1.44, 0, 97.8, 0, 2, 0.0000253165),
(20, 3, 23, 'Single', 2, 27.74, 13.9, 2, 13.87, 12, 1.16, 0, 97.81, 0, 6, 0.0000203938),
(26, 3, 31, 'Batch', 1, 2100, 2100, 1120, 1.88, 0, 0, 8.3, 96.84, 0.11, 1, 0),
(27, 3, 32, 'Single', 3, 2487, 829, 1320, 1.88, 4.2, 0.45, 8.56, 95.23, 0, 1, 0.00000791139);

-- --------------------------------------------------------

--
-- Struktur dari tabel `default_embed`
--

CREATE TABLE `default_embed` (
  `id_embed` int(11) NOT NULL,
  `embed` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `default_embed`
--

INSERT INTO `default_embed` (`id_embed`, `embed`) VALUES
(1, '<div class=\"mxgraph\" style=\"max-width:100%;border:1px solid transparent;\" data-mxgraph=\"{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;toolbar&quot;:&quot;layers lightbox&quot;,&quot;edit&quot;:&quot;_blank&quot;,&quot;xml&quot;:&quot;&lt;mxfile host=\\&quot;app.diagrams.net\\&quot; modified=\\&quot;2020-11-30T08:49:08.850Z\\&quot; agent=\\&quot;5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.66 Safari/537.36\\&quot; etag=\\&quot;W2Zt1CWOTWlSiz_mj64c\\&quot; version=\\&quot;13.10.4\\&quot; type=\\&quot;device\\&quot;&gt;&lt;diagram id=\\&quot;LnZpxKDXIsWJwKRbdBZa\\&quot; name=\\&quot;Page-1\\&quot;&gt;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&lt;/diagram&gt;&lt;/mxfile&gt;&quot;}\"></div>\r\n<script type=\"text/javascript\" src=\"https://viewer.diagrams.net/js/viewer-static.min.js\"></script>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `have_item`
--

CREATE TABLE `have_item` (
  `id` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `item` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `have_item`
--

INSERT INTO `have_item` (`id`, `department`, `item`) VALUES
(7, 'PCU', 'SUPPLIER'),
(11, 'LOGISTIC', 'LOCAL FORWARDER'),
(12, 'LOGISTIC', 'IMPORT FORWARDER'),
(13, 'LOGISTIC', 'EXPORT FORWARDER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `id_main` int(11) NOT NULL,
  `information` text NOT NULL,
  `from_who` varchar(50) NOT NULL,
  `to_who` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `lead_time` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `information`
--

INSERT INTO `information` (`id`, `id_main`, `information`, `from_who`, `to_who`, `type`, `lead_time`) VALUES
(3, 3, 'Booking', 'SUPPLIER', 'IMPORT FORWARDER', 'Manual', 0),
(4, 3, 'Custom Documents', 'LOGISTIC', 'LOCAL FORWARDER', 'Manual', 0),
(5, 3, 'Shipping Documents', 'IMPORT FORWARDER', 'LOCAL FORWARDER', 'Manual', 0),
(6, 3, 'Booking from Supplier', 'IMPORT FORWARDER', 'LOGISTIC', 'Manual', 0),
(7, 3, 'Shipping Documents', 'IMPORT FORWARDER', 'LOGISTIC', 'Manual', 0),
(8, 3, 'Confirmation', 'LOGISTIC', 'IMPORT FORWARDER', 'Manual', 0),
(10, 3, 'Demand', 'PCU', 'SUPPLIER', 'Manual', 0),
(11, 3, 'PO Number', 'MDS', 'SUPPLIER', 'Manual', 0),
(12, 3, 'Invoice, packing list, airwaybill', 'PCU', 'LOGISTIC', 'Manual', 0),
(13, 3, 'PCU Confirm', 'PCU', 'LOGISTIC', 'Manual', 0),
(14, 3, 'Request Information', 'LOGISTIC', 'PCU', 'Manual', 0),
(15, 3, 'Demand Confirmation', 'SUPPLIER', 'PCU', 'Manual', 0),
(16, 3, 'Initial Detail Plan Order', 'PLANNING', 'PCU', 'Manual', 0),
(17, 3, 'Weekly Detail Plan', 'PLANNING', 'PCU', 'Manual', 0),
(18, 3, 'Confirm', 'SUPPLIER', 'MDS', 'Manual', 0),
(19, 3, 'Order Sheet', 'MDS', 'PLANNING', 'Manual', 0),
(20, 3, 'Confirm Order', 'PLANNING', 'MDS', 'Manual', 0),
(21, 3, 'PP Schedule', 'PLANNING', 'TECHNICAL', 'Manual', 0),
(22, 3, 'PP Schedule', 'PLANNING', 'IE-WS', 'Manual', 0),
(23, 3, 'Request Information, Sample Cut Kit, Techpack', 'TECHNICAL', 'MDS', 'Manual', 0),
(24, 3, 'Information, Sample Cut Kit, Techpack', 'MDS', 'TECHNICAL', 'Manual', 0),
(25, 3, 'Order Confirmation', 'MDS', 'CUSTOMER', 'Manual', 0),
(26, 3, 'Order Placement', 'CUSTOMER', 'MDS', 'Manual', 0),
(27, 3, 'GSD', 'MDS', 'IE-WS', 'Manual', 0),
(28, 3, 'Request GSD', 'IE-WS', 'MDS', 'Manual', 0),
(29, 3, 'M/C Requirement ', 'IE-WS', 'MECHANIC', 'Manual', 0),
(30, 3, 'Booking', 'LOGISTIC', 'EXPORT FORWARDER', 'Manual', 0),
(31, 3, 'Shipping Documents', 'LOGISTIC', 'EXPORT FORWARDER', 'Manual', 0),
(32, 3, 'Custom Declaration', 'LOGISTIC', 'CUSTOM', 'Manual', 0),
(33, 3, 'Approval', 'CUSTOM', 'LOGISTIC', 'Manual', 0),
(34, 3, 'Booking Form', 'LOGISTIC', 'FG', 'Manual', 0),
(35, 3, 'Techpack and Pattern', 'TECHNICAL', 'CAD', 'Manual', 0),
(36, 3, 'Shipping Documents', 'LOGISTIC', 'UNLOADING', 'Manual', 0),
(37, 3, 'Fabric Width Allocation', 'FABRIC STORE', 'CAD', 'Manual', 0),
(38, 3, 'Weekly Detail Plan', 'PLANNING', 'LAYING', 'Manual', 0),
(39, 3, 'Planning Tool', 'PLANNING', 'DARWIN SAP', 'System', 0),
(40, 3, 'SO Detail', 'DARWIN SAP', 'PLANNING', 'System', 0),
(41, 3, 'GRN Details', 'PCU', 'DARWIN SAP', 'System', 0),
(42, 3, 'Check PO Details', 'PCU', 'DARWIN SAP', 'System', 0),
(43, 3, 'Line, qty, color', 'DARWIN SAP', 'PCU', 'System', 0),
(44, 3, 'Create Invoice', 'LOGISTIC', 'DARWIN SAP', 'System', 0),
(45, 3, 'GRN', 'UNLOADING', 'DARWIN SAP', 'System', 0),
(46, 3, 'Docket Creation', 'CAD', 'DARWIN SAP', 'System', 0),
(47, 3, '261', 'FABRIC STORE', 'DARWIN SAP', 'System', 0),
(48, 3, 'Daily GRN, movement (BI Portal)', 'DARWIN SAP', 'CUSTOM', 'System', 0),
(49, 3, 'Barcode Creation', 'DARWIN SAP', 'ASSORTING', 'System', 0),
(50, 3, 'Line In', 'SPM CUTTING', 'DARWIN SAP', 'System', 0),
(51, 3, 'Barcode Line Out', 'DARWIN SAP', 'SEWING', 'System', 0),
(52, 3, 'Barcode Form Authorization', 'DARWIN SAP', 'SEWING', 'System', 0),
(53, 3, 'PGI Process', 'FG', 'DARWIN SAP', 'System', 0),
(54, 3, 'Booking Form Release', 'FG', 'DARWIN SAP', 'System', 0),
(55, 3, 'Line Out Shipping', 'FG', 'DARWIN SAP', 'System', 0),
(56, 3, 'PL and EDI Creation', 'FG', 'DARWIN SAP', 'System', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ins_exim`
--

CREATE TABLE `ins_exim` (
  `id` int(11) NOT NULL,
  `id_rule` int(11) NOT NULL,
  `sea1` text NOT NULL,
  `sea2` text NOT NULL,
  `sea3` text NOT NULL,
  `air1` text NOT NULL,
  `air2` text NOT NULL,
  `air3` text NOT NULL,
  `sea4` text NOT NULL,
  `air4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ins_exim`
--

INSERT INTO `ins_exim` (`id`, `id_rule`, `sea1`, `sea2`, `sea3`, `air1`, `air2`, `air3`, `sea4`, `air4`) VALUES
(1, 27, 'tes', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ins_inventory`
--

CREATE TABLE `ins_inventory` (
  `id` int(11) NOT NULL,
  `id_rule` int(11) NOT NULL,
  `input1` text NOT NULL,
  `input2` text NOT NULL,
  `input3` text NOT NULL,
  `input4` text NOT NULL,
  `input5` text NOT NULL,
  `input6` text NOT NULL,
  `input7` text NOT NULL,
  `input8` text NOT NULL,
  `input9` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ins_inventory`
--

INSERT INTO `ins_inventory` (`id`, `id_rule`, `input1`, `input2`, `input3`, `input4`, `input5`, `input6`, `input7`, `input8`, `input9`) VALUES
(1, 3, 'How much of inventory stagnated - Rolls/ Panels/Pcs', '', '', '', '', '', '', '', ''),
(2, 20, '', '', '', '', '', '', '', '', ''),
(3, 4, '', '', '', '', '', '', '', '', ''),
(4, 8, '', '', '', '', '', '', '', '', ''),
(5, 11, '', '', '', '', '', '', '', '', ''),
(6, 12, '', '', '', '', '', '', '', '', ''),
(7, 14, '', '', '', '', '', '', '', '', ''),
(8, 16, '', '', '', '', '', '', '', '', ''),
(9, 18, '', '', '', '', '', '', '', '', ''),
(10, 29, '', '', '', '', '', '', '', '', ''),
(11, 30, '', '', '', '', '', '', '', '', ''),
(12, 33, '', '', '', '', '', '', '', '', ''),
(13, 26, '', '', '', '', '', '', '', '', ''),
(14, 24, '', '', '', '', '', '', '', '', ''),
(15, 19, '', '', '', '', '', '', '', '', ''),
(16, 22, '', '', '', '', '', '', '', '', ''),
(17, 7, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ins_process`
--

CREATE TABLE `ins_process` (
  `id` int(11) NOT NULL,
  `id_rule` int(11) NOT NULL,
  `input1` text NOT NULL,
  `input2` text NOT NULL,
  `input3` text NOT NULL,
  `input4` text NOT NULL,
  `input5` text NOT NULL,
  `input6` text NOT NULL,
  `input7` text NOT NULL,
  `input8` text NOT NULL,
  `input9` text NOT NULL,
  `input10` text NOT NULL,
  `input11` text NOT NULL,
  `input12` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ins_process`
--

INSERT INTO `ins_process` (`id`, `id_rule`, `input1`, `input2`, `input3`, `input4`, `input5`, `input6`, `input7`, `input8`, `input9`, `input10`, `input11`, `input12`) VALUES
(2, 17, 'Bin (Batch)', 'Number of observation everytime AQL finished inspect one bin (start and end : one garment lays on the tray)', 'Duration when you are doing observation (in seconds)', 'Average time for one cycle time (in second)', 'How many garments produced based on your full observation', 'Time needed to complete one piece (in second)', 'Number of lines that are doing the same style', '', '', 'AQL FTT on the day you observed. Average AQL FTT for the style', '', 'For one shift'),
(3, 2, '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 5, '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 13, '1 pair that consist right cup and left cup', 'Observe everytime 1 pair of cup produced (start and end : one pair put on the cooler)', 'Duration when you are doing observation (in seconds)', 'Average time for one cycle time (in second)', 'How many garment produced', 'Time needed to complete one piece', 'Number of heads that are doing the same style', '', 'Downtime on the day you observed. Average downtime for the molding machine that are doing the same style', 'Average molding FTT for the style on the day you observed', 'QCO downtime for the machines that have been changed to the style. Formula : avg QCO downtime per day in seconds/56880*100%', 'Average number of TM that are working on the style on one shift'),
(6, 21, 'One full garment', 'Observe everytime one garment put on the tray (start and end : one garment lays on the tray)', 'Duration when you are doing observation (in seconds)', 'Average time for one cycle time (in second)', 'How many garment produced', 'Time needed to complete one piece', 'Number of lines that are doing the same style', '', 'Downtime on the day you observed. Average downtime for the lines that are doing the same style. Formula : avg downtime per day in seconds/56880*100%', 'Endline FTT on the day you observed. Average endline FTT for the lines that are doing the same style', 'QCO downtime for the lines that have been changed to the style. Formula : avg QCO downtime per day in seconds/56880*100%', 'Average number of TM for 1 line, one shift'),
(7, 9, '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 15, '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 28, '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 23, '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 31, '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 32, '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item`
--

CREATE TABLE `item` (
  `id_item` int(11) NOT NULL,
  `item` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `item`
--

INSERT INTO `item` (`id_item`, `item`) VALUES
(16, 'SUPPLIER'),
(17, 'UNLOADING'),
(18, 'TO BE C-TEX'),
(19, 'C-TEX'),
(20, 'FABRIC STORE'),
(21, 'TO BE LAYED'),
(22, 'LAYING'),
(23, 'TO BE HAND CUT'),
(24, 'TO BE AUTOCUT'),
(25, 'AUTOCUTTER'),
(26, 'HAND CUT'),
(27, 'TO BE MOLD'),
(28, 'TO BE BAND KNIFE'),
(29, 'MOLDING'),
(30, 'BAND KNIFE'),
(31, 'MARKET'),
(32, 'TO BE ASSORT'),
(33, 'ASSORTING'),
(34, 'TO BE AQL'),
(35, 'AQL'),
(36, 'SPM CUTTING'),
(37, 'LINE INPUT'),
(38, 'SEWING'),
(39, 'READY TO AQL'),
(40, 'AQL'),
(41, 'READY TO FG'),
(42, 'FG'),
(43, 'CUSTOMER'),
(45, 'LOCAL FORWARDER'),
(46, 'PCU'),
(47, 'LOGISTIC'),
(48, 'CAD'),
(49, 'CUSTOM'),
(50, 'DARWIN SAP'),
(51, 'PLANNING'),
(52, 'MDS'),
(53, 'TECHNICAL'),
(54, 'IE-WS'),
(55, 'MECHANIC'),
(56, 'IMPORT FORWARDER'),
(57, 'EXPORT FORWARDER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_info`
--

CREATE TABLE `main_info` (
  `id` int(11) NOT NULL,
  `style_no` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `product` varchar(20) NOT NULL,
  `cons` float NOT NULL,
  `takttime` float NOT NULL,
  `cust_demand` int(11) NOT NULL,
  `psd` date NOT NULL,
  `ped` date NOT NULL,
  `image` text NOT NULL,
  `embed` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `main_info`
--

INSERT INTO `main_info` (`id`, `style_no`, `customer`, `product`, `cons`, `takttime`, `cust_demand`, `psd`, `ped`, `image`, `embed`) VALUES
(3, 'Family 1', 'VSD', 'Bra', 0.08, 1.57, 36206, '2020-09-01', '2020-09-30', '941f0be92b7efbe6ff64678bac769775.jpg', '<div class=\"mxgraph\" style=\"max-width:100%;border:1px solid transparent;\" data-mxgraph=\"{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;toolbar&quot;:&quot;layers lightbox&quot;,&quot;edit&quot;:&quot;_blank&quot;,&quot;xml&quot;:&quot;&lt;mxfile host=\\&quot;app.diagrams.net\\&quot; modified=\\&quot;2020-11-30T08:49:08.850Z\\&quot; agent=\\&quot;5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.66 Safari/537.36\\&quot; etag=\\&quot;W2Zt1CWOTWlSiz_mj64c\\&quot; version=\\&quot;13.10.4\\&quot; type=\\&quot;device\\&quot;&gt;&lt;diagram id=\\&quot;LnZpxKDXIsWJwKRbdBZa\\&quot; name=\\&quot;Page-1\\&quot;&gt;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&lt;/diagram&gt;&lt;/mxfile&gt;&quot;}\"></div>\r\n<script type=\"text/javascript\" src=\"https://viewer.diagrams.net/js/viewer-static.min.js\"></script>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_aql`
--

CREATE TABLE `q_aql` (
  `id` int(11) NOT NULL,
  `id_style` int(11) NOT NULL,
  `input1` varchar(255) NOT NULL,
  `input2` varchar(255) NOT NULL,
  `input3` varchar(255) NOT NULL,
  `risk_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `q_aql`
--

INSERT INTO `q_aql` (`id`, `id_style`, `input1`, `input2`, `input3`, `risk_level`) VALUES
(1, 3, '2', '<ol><li>Onodf</li><li>doajsod</li></ol>', 'Okosdf', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_aqlcut`
--

CREATE TABLE `q_aqlcut` (
  `id` int(11) NOT NULL,
  `id_style` int(11) NOT NULL,
  `input1` text NOT NULL,
  `input2` varchar(255) NOT NULL,
  `input3` varchar(255) NOT NULL,
  `risk_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `q_aqlcut`
--

INSERT INTO `q_aqlcut` (`id`, `id_style`, `input1`, `input2`, `input3`, `risk_level`) VALUES
(1, 3, '78', '<p>1. asds<br>2. asdad</p>', 'Oke', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_assorting`
--

CREATE TABLE `q_assorting` (
  `id` int(11) NOT NULL,
  `id_style` int(11) NOT NULL,
  `input1` varchar(255) NOT NULL,
  `input2` varchar(255) NOT NULL,
  `input3` varchar(255) NOT NULL,
  `input4` varchar(255) NOT NULL,
  `risk_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `q_assorting`
--

INSERT INTO `q_assorting` (`id`, `id_style`, `input1`, `input2`, `input3`, `input4`, `risk_level`) VALUES
(1, 3, 'Bundle', '4', 'on', 'No Comment', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_autocutter`
--

CREATE TABLE `q_autocutter` (
  `id` int(11) NOT NULL,
  `id_style` int(11) NOT NULL,
  `input1` varchar(255) NOT NULL,
  `input2` varchar(255) NOT NULL,
  `input3` varchar(255) NOT NULL,
  `input4` varchar(255) NOT NULL,
  `risk_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `q_autocutter`
--

INSERT INTO `q_autocutter` (`id`, `id_style`, `input1`, `input2`, `input3`, `input4`, `risk_level`) VALUES
(1, 3, '2', 'on', '2', 'Comments', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_bandknife`
--

CREATE TABLE `q_bandknife` (
  `id` int(11) NOT NULL,
  `id_style` int(11) NOT NULL,
  `input1` varchar(255) NOT NULL,
  `input2` varchar(255) NOT NULL,
  `input3` varchar(255) NOT NULL,
  `input4` varchar(255) NOT NULL,
  `risk_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `q_bandknife`
--

INSERT INTO `q_bandknife` (`id`, `id_style`, `input1`, `input2`, `input3`, `input4`, `risk_level`) VALUES
(1, 3, 'critical', 'fabric', '5', 'Comments', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_ctex`
--

CREATE TABLE `q_ctex` (
  `id` int(11) NOT NULL,
  `id_style` int(11) NOT NULL,
  `input1` varchar(255) NOT NULL,
  `input2` varchar(255) NOT NULL,
  `input3` varchar(255) NOT NULL,
  `input4` text NOT NULL,
  `input5` text NOT NULL,
  `input6` text NOT NULL,
  `input7` varchar(255) NOT NULL,
  `input8` varchar(255) NOT NULL,
  `input9` varchar(255) NOT NULL,
  `input10` varchar(255) NOT NULL,
  `input11` varchar(255) NOT NULL,
  `input12` varchar(255) NOT NULL,
  `risk_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `q_ctex`
--

INSERT INTO `q_ctex` (`id`, `id_style`, `input1`, `input2`, `input3`, `input4`, `input5`, `input6`, `input7`, `input8`, `input9`, `input10`, `input11`, `input12`, `risk_level`) VALUES
(1, 3, 'Bundle', '20', '20', '', '<ol><li>werwer</li></ol>', '<ol><li>werwer</li></ol>', 'wer', 'wer', 'on', '2', 'on', 'wer', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_fabricstorage`
--

CREATE TABLE `q_fabricstorage` (
  `id` int(11) NOT NULL,
  `id_style` int(11) NOT NULL,
  `input1` varchar(255) NOT NULL,
  `input2` varchar(255) NOT NULL,
  `input3` varchar(255) NOT NULL,
  `input4` varchar(255) NOT NULL,
  `input5` varchar(255) NOT NULL,
  `input6` varchar(255) NOT NULL,
  `input7` varchar(255) NOT NULL,
  `input8` varchar(255) NOT NULL,
  `input9` varchar(255) NOT NULL,
  `risk_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `q_fabricstorage`
--

INSERT INTO `q_fabricstorage` (`id`, `id_style`, `input1`, `input2`, `input3`, `input4`, `input5`, `input6`, `input7`, `input8`, `input9`, `risk_level`) VALUES
(1, 3, 'on', '2', '', 'on', '', 'on', '2', 'on', 'Comments', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_fg`
--

CREATE TABLE `q_fg` (
  `id` int(11) NOT NULL,
  `id_style` int(11) NOT NULL,
  `input1` varchar(255) NOT NULL,
  `input2` varchar(255) NOT NULL,
  `input3` varchar(255) NOT NULL,
  `input4` varchar(255) NOT NULL,
  `input5` varchar(255) NOT NULL,
  `input6` varchar(255) NOT NULL,
  `input7` varchar(255) NOT NULL,
  `input8` varchar(255) NOT NULL,
  `input9` varchar(255) NOT NULL,
  `risk_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `q_fg`
--

INSERT INTO `q_fg` (`id`, `id_style`, `input1`, `input2`, `input3`, `input4`, `input5`, `input6`, `input7`, `input8`, `input9`, `risk_level`) VALUES
(1, 3, 'on', 'Comment', '1', '1', 'on', 'Ok', '1', '3', 'Ok', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_handcut`
--

CREATE TABLE `q_handcut` (
  `id` int(11) NOT NULL,
  `id_style` int(11) NOT NULL,
  `input1` varchar(255) NOT NULL,
  `input2` varchar(255) NOT NULL,
  `input3` varchar(255) NOT NULL,
  `input4` varchar(255) NOT NULL,
  `risk_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `q_handcut`
--

INSERT INTO `q_handcut` (`id`, `id_style`, `input1`, `input2`, `input3`, `input4`, `risk_level`) VALUES
(1, 3, 'critical point', 'behavior', 'on', 'Oke', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_laying`
--

CREATE TABLE `q_laying` (
  `id` int(11) NOT NULL,
  `id_style` int(11) NOT NULL,
  `input1` varchar(255) NOT NULL,
  `input2` varchar(255) NOT NULL,
  `input3` varchar(255) NOT NULL,
  `input4` varchar(255) NOT NULL,
  `input5` varchar(255) NOT NULL,
  `input6` varchar(255) NOT NULL,
  `risk_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `q_laying`
--

INSERT INTO `q_laying` (`id`, `id_style`, `input1`, `input2`, `input3`, `input4`, `input5`, `input6`, `risk_level`) VALUES
(1, 3, '2', '5', '', 'on', '1', 'We are strugle on the A side', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_molding`
--

CREATE TABLE `q_molding` (
  `id` int(11) NOT NULL,
  `id_style` int(11) NOT NULL,
  `input1` varchar(255) NOT NULL,
  `input2` varchar(255) NOT NULL,
  `input3` varchar(255) NOT NULL,
  `input4` varchar(255) NOT NULL,
  `input5` varchar(255) NOT NULL,
  `input6` varchar(255) NOT NULL,
  `input7` varchar(255) NOT NULL,
  `input8` varchar(255) NOT NULL,
  `input9` varchar(255) NOT NULL,
  `risk_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `q_molding`
--

INSERT INTO `q_molding` (`id`, `id_style`, `input1`, `input2`, `input3`, `input4`, `input5`, `input6`, `input7`, `input8`, `input9`, `risk_level`) VALUES
(1, 3, '2', '20', '20', '20', '20', '4', '1', 'on', 'ssfsf', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_sewing`
--

CREATE TABLE `q_sewing` (
  `id` int(11) NOT NULL,
  `id_style` int(11) NOT NULL,
  `input1` varchar(255) NOT NULL,
  `input2` varchar(255) NOT NULL,
  `input3` varchar(255) NOT NULL,
  `input4` varchar(255) NOT NULL,
  `input5` varchar(255) NOT NULL,
  `input6` varchar(255) NOT NULL,
  `input7` varchar(255) NOT NULL,
  `input8` varchar(255) NOT NULL,
  `input9` varchar(255) NOT NULL,
  `input10` varchar(255) NOT NULL,
  `input11` varchar(255) NOT NULL,
  `input12` varchar(255) NOT NULL,
  `input13` varchar(255) NOT NULL,
  `input14` varchar(255) NOT NULL,
  `input15` varchar(255) NOT NULL,
  `risk_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `q_sewing`
--

INSERT INTO `q_sewing` (`id`, `id_style`, `input1`, `input2`, `input3`, `input4`, `input5`, `input6`, `input7`, `input8`, `input9`, `input10`, `input11`, `input12`, `input13`, `input14`, `input15`, `risk_level`) VALUES
(1, 3, 'on', '1', '1', '<p>4</p>', '<p>5</p>', '<p>6</p>', '<p>7</p>', '8', '<p>9</p>', '<p>10</p>', '<p>11</p>', 'on', 'on', '<p>14</p>', '15', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `q_unloading`
--

CREATE TABLE `q_unloading` (
  `id` int(11) NOT NULL,
  `id_style` int(11) NOT NULL,
  `input1` varchar(255) NOT NULL,
  `input2` varchar(255) NOT NULL,
  `input3` varchar(255) NOT NULL,
  `input4` varchar(255) NOT NULL,
  `input5` varchar(255) NOT NULL,
  `input6` varchar(255) NOT NULL,
  `input7` varchar(255) NOT NULL,
  `input8` varchar(255) NOT NULL,
  `input9` varchar(255) NOT NULL,
  `risk_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `q_unloading`
--

INSERT INTO `q_unloading` (`id`, `id_style`, `input1`, `input2`, `input3`, `input4`, `input5`, `input6`, `input7`, `input8`, `input9`, `risk_level`) VALUES
(1, 3, '1', '50', '50', '50', '50', '50', '50', 'on', 'Comments', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rules`
--

CREATE TABLE `rules` (
  `id` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `point_name` varchar(50) NOT NULL,
  `seq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rules`
--

INSERT INTO `rules` (`id`, `department`, `type`, `point_name`, `seq`) VALUES
(2, 'RECEIVING', 'PROCESS', 'Unloading', 2),
(4, 'LAB', 'INVENTORY', 'To be C-Tex', 3),
(5, 'LAB', 'PROCESS', 'C-Tex', 4),
(6, 'COMMERCIAL', 'EXIM', 'Export', 25),
(7, 'RAW MATERIAL', 'INVENTORY', 'Fabric Storage', 5),
(8, 'CUTTING', 'INVENTORY', 'To be Layed', 6),
(9, 'CUTTING', 'PROCESS', 'Laying', 7),
(11, 'CUTTING', 'INVENTORY', 'To be Mold', 12),
(12, 'CUTTING', 'INVENTORY', 'To be Band Knife', 10),
(13, 'CUTTING', 'PROCESS', 'Molding', 13),
(14, 'CUTTING', 'INVENTORY', 'To be Assort', 14),
(15, 'CUTTING', 'PROCESS', 'Assorting', 15),
(16, 'CUTTING', 'INVENTORY', 'To be AQL', 16),
(17, 'QUALITY', 'PROCESS', 'AQL Cutting', 17),
(18, 'CUTTING', 'INVENTORY', 'Supermarket Cutting', 18),
(19, 'PRODUCTION', 'INVENTORY', 'Line Input', 19),
(21, 'PRODUCTION', 'PROCESS', 'Sewing', 20),
(22, 'PRODUCTION', 'INVENTORY', 'Ready to AQL', 21),
(23, 'QUALITY', 'PROCESS', 'AQL', 22),
(24, 'PRODUCTION', 'INVENTORY', 'Ready to FG', 23),
(26, 'FINISHED GOOD', 'INVENTORY', 'FG', 24),
(27, 'COMMERCIAL', 'EXIM', 'Import', 1),
(28, 'CUTTING', 'PROCESS', 'Hand Cut', 9),
(29, 'CUTTING', 'INVENTORY', 'To be Hand Cut', 8),
(30, 'CUTTING', 'INVENTORY', 'To be Autocut', 8),
(31, 'CUTTING', 'PROCESS', 'Auto Cutter', 9),
(32, 'CUTTING', 'PROCESS', 'Band Knife', 11),
(33, 'CUTTING', 'INVENTORY', 'Market', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `epf` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `epf`, `name`, `department`, `password`) VALUES
(5, '8497', 'Prionaka Luthfi Mahendra', 'MOS', '4ef42b32bccc9485b10b8183507e5d82'),
(6, '1234', 'Receiving', 'RECEIVING', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, '1278', 'Lab', 'LAB', 'ab1a4d0dd4d48a2ba1077c4494791306'),
(9, '5247', 'Dyah', 'CUTTING', 'c90070e1f03e982448983975a0f52d57'),
(10, '1002', 'FG Team', 'FINISHED GOOD', 'fba9d88164f3e2d9109ee770223212a0'),
(12, '1004', 'RM Team', 'RAW MATERIAL', 'fed33392d3a48aa149a87a38b875ba4a'),
(13, '1003', 'Prod Team', 'PRODUCTION', 'aa68c75c4a77c87f97fb686b2f068676'),
(14, '7240', 'Laurencia Sherly  Renika', 'MOS', 'f0d7053396e765bf52de12133cf1afe8'),
(15, '1005', 'Logistic', 'LOGISTIC', '2387337ba1e0b0249ba90f55b2ba2521'),
(16, '1006', 'BIQ', 'QUALITY', '9246444d94f081e3549803b928260f56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_exim`
--
ALTER TABLE `data_exim`
  ADD PRIMARY KEY (`id_exim`);

--
-- Indeks untuk tabel `data_inventory`
--
ALTER TABLE `data_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_process`
--
ALTER TABLE `data_process`
  ADD PRIMARY KEY (`id_process`);

--
-- Indeks untuk tabel `default_embed`
--
ALTER TABLE `default_embed`
  ADD PRIMARY KEY (`id_embed`);

--
-- Indeks untuk tabel `have_item`
--
ALTER TABLE `have_item`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ins_exim`
--
ALTER TABLE `ins_exim`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ins_inventory`
--
ALTER TABLE `ins_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ins_process`
--
ALTER TABLE `ins_process`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`);

--
-- Indeks untuk tabel `main_info`
--
ALTER TABLE `main_info`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `q_aql`
--
ALTER TABLE `q_aql`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `q_aqlcut`
--
ALTER TABLE `q_aqlcut`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `q_assorting`
--
ALTER TABLE `q_assorting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `q_autocutter`
--
ALTER TABLE `q_autocutter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `q_bandknife`
--
ALTER TABLE `q_bandknife`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `q_ctex`
--
ALTER TABLE `q_ctex`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `q_fabricstorage`
--
ALTER TABLE `q_fabricstorage`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `q_fg`
--
ALTER TABLE `q_fg`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `q_handcut`
--
ALTER TABLE `q_handcut`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `q_laying`
--
ALTER TABLE `q_laying`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `q_molding`
--
ALTER TABLE `q_molding`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `q_sewing`
--
ALTER TABLE `q_sewing`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `q_unloading`
--
ALTER TABLE `q_unloading`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_exim`
--
ALTER TABLE `data_exim`
  MODIFY `id_exim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_inventory`
--
ALTER TABLE `data_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `data_process`
--
ALTER TABLE `data_process`
  MODIFY `id_process` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `default_embed`
--
ALTER TABLE `default_embed`
  MODIFY `id_embed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `have_item`
--
ALTER TABLE `have_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `ins_exim`
--
ALTER TABLE `ins_exim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ins_inventory`
--
ALTER TABLE `ins_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `ins_process`
--
ALTER TABLE `ins_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `main_info`
--
ALTER TABLE `main_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `q_aql`
--
ALTER TABLE `q_aql`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `q_aqlcut`
--
ALTER TABLE `q_aqlcut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `q_assorting`
--
ALTER TABLE `q_assorting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `q_autocutter`
--
ALTER TABLE `q_autocutter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `q_bandknife`
--
ALTER TABLE `q_bandknife`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `q_ctex`
--
ALTER TABLE `q_ctex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `q_fabricstorage`
--
ALTER TABLE `q_fabricstorage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `q_fg`
--
ALTER TABLE `q_fg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `q_handcut`
--
ALTER TABLE `q_handcut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `q_laying`
--
ALTER TABLE `q_laying`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `q_molding`
--
ALTER TABLE `q_molding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `q_sewing`
--
ALTER TABLE `q_sewing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `q_unloading`
--
ALTER TABLE `q_unloading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
