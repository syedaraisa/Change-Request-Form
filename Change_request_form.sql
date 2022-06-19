-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 19, 2022 at 10:08 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `change_request_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `request_form`
--

DROP TABLE IF EXISTS `request_form`;
CREATE TABLE IF NOT EXISTS `request_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `projectName` varchar(50) DEFAULT NULL,
  `preparedBy` varchar(50) DEFAULT NULL,
  `cr_initiator` varchar(50) DEFAULT NULL,
  `typeOfChange` text,
  `impactedSBU` varchar(50) DEFAULT NULL,
  `requestPriority` text,
  `moduleImpacted` varchar(50) DEFAULT NULL,
  `deliveryDate` date DEFAULT NULL,
  `responsible` varchar(50) DEFAULT NULL,
  `accountable` varchar(50) DEFAULT NULL,
  `changeDetails` varchar(50) DEFAULT NULL,
  `processImpact` varchar(50) DEFAULT NULL,
  `userImpact` varchar(50) DEFAULT NULL,
  `financialImpact` varchar(50) DEFAULT NULL,
  `impactDetails` varchar(50) DEFAULT NULL,
  `stakeholderName` varchar(50) DEFAULT NULL,
  `signatureDate` varchar(50) DEFAULT NULL,
  `analysisHour` varchar(50) DEFAULT NULL,
  `analysisBDT` varchar(50) DEFAULT NULL,
  `developmentHour` varchar(50) DEFAULT NULL,
  `developmentBDT` varchar(50) DEFAULT NULL,
  `qcHour` varchar(50) DEFAULT NULL,
  `qcBDT` varchar(50) DEFAULT NULL,
  `totalHour` varchar(50) DEFAULT NULL,
  `totalBDT` varchar(50) DEFAULT NULL,
  `recommended` text,
  `acc` varchar(50) DEFAULT NULL,
  `pmo` varchar(50) DEFAULT NULL,
  `cio` varchar(50) DEFAULT NULL,
  `management` varchar(50) DEFAULT NULL,
  `theChange` text,
  `remarks` varchar(50) DEFAULT NULL,
  `keyStakeholder` varchar(50) DEFAULT NULL,
  `sigDate` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_form`
--

INSERT INTO `request_form` (`id`, `number`, `date`, `projectName`, `preparedBy`, `cr_initiator`, `typeOfChange`, `impactedSBU`, `requestPriority`, `moduleImpacted`, `deliveryDate`, `responsible`, `accountable`, `changeDetails`, `processImpact`, `userImpact`, `financialImpact`, `impactDetails`, `stakeholderName`, `signatureDate`, `analysisHour`, `analysisBDT`, `developmentHour`, `developmentBDT`, `qcHour`, `qcBDT`, `totalHour`, `totalBDT`, `recommended`, `acc`, `pmo`, `cio`, `management`, `theChange`, `remarks`, `keyStakeholder`, `sigDate`) VALUES
(2, 1234000, '2022-08-08', 'Mahbub', 'Syeda Raisa', 'Ashrafur Rahman', 'YToyOntpOjA7czo4OiJkYXRhYmFzZSI7aToxO3M6MTA6ImNvbnZlcnNpb24iO30=', 'Dipto', 'YToxOntpOjA7czozOiJsb3ciO30=', 'xyz', '2022-09-10', 'Mahir', 'pqr', 'ghhgjhgj', 'fghgf', 'fghfh', 'gfhgfh', 'fghgfhg', 'uytyutu', 'jhgjhgjh', '8', '500', '7', '450', '6', '300', '21', '1250', 'YToxOntpOjA7czoyOiJObyI7fQ==', 'ftuyyu', 'yuuyuy', 'tutfuf', 'fghghfg', 'YToxOntpOjA7czoxMToiaW1wbGVtZW50ZWQiO30=', 'fghgfhgh', 'fghghg', 'ghjhjh'),
(3, 1234676, '2022-08-08', 'Mahbub', 'Syeda Raisa', 'Ashrafur Rahman', 'YToxOntpOjA7czoxMDoiY29udmVyc2lvbiI7fQ==', 'Dipto', 'YToxOntpOjA7czo2OiJtZWRpdW0iO30=', 'xyz', '2022-09-10', 'Mahir', 'pqr', 'ghhgjhgj', 'fghgf', 'fghfh', 'gfhgfh', 'fghgfhg', 'uytyutu', 'jhgjhgjh', '8', '500', '7', '450', '6', '300', '21', '1250', 'YToxOntpOjA7czoyOiJObyI7fQ==', 'ftuyyu', 'yuuyuy', 'tutfuf', 'fghghfg', 'YToxOntpOjA7czoxNDoibm90SW1wbGVtZW50ZWQiO30=', 'fghgfhgh', 'fghghg', 'ghjhjh'),
(4, 2344, '2022-08-08', 'Mahbub', 'Syeda Raisa', 'Ashrafur Rahman', 'YToyOntpOjA7czo4OiJkYXRhYmFzZSI7aToxO3M6MTA6ImNvbnZlcnNpb24iO30=', 'Dipto', 'YToyOntpOjA7czo2OiJtZWRpdW0iO2k6MTtzOjQ6ImhpZ2giO30=', 'xyz', '2022-09-10', 'Mahir', 'pqr', 'ghhgjhgj', 'fghgf', 'fghfh', 'gfhgfh', 'fghgfhg', 'uytyutu', 'jhgjhgjh', '8', '500', '7', '450', '6', '300', '21', '1250', 'YToxOntpOjA7czozOiJZZXMiO30=', 'ftuyyu', 'yuuyuy', 'tutfuf', 'fghghfg', 'YToxOntpOjA7czoxMToiaW1wbGVtZW50ZWQiO30=', 'fghgfhgh', 'fghghg', 'ghjhjh'),
(5, 1234, '2022-08-08', 'Fahad', 'Syeda Raisa', 'Ashrafur Rahman', 'YToyOntpOjA7czo4OiJkYXRhYmFzZSI7aToxO3M6MTA6ImNvbnZlcnNpb24iO30=', 'Dipto', 'YToyOntpOjA7czo2OiJtZWRpdW0iO2k6MTtzOjQ6ImhpZ2giO30=', 'xyz', '2022-09-10', 'Mahir', 'pqr', 'ghhgjhgj', 'fghgf', 'fghfh', 'gfhgfh', 'fghgfhg', 'uytyutu', 'jhgjhgjh', '8', '500', '7', '450', '6', '300', '21', '1250', 'YToxOntpOjA7czozOiJZZXMiO30=', 'ftuyyu', 'yuuyuy', 'tutfuf', 'fghghfg', 'YToxOntpOjA7czoxMToiaW1wbGVtZW50ZWQiO30=', 'fghgfhgh', 'fghghg', 'ghjhjh'),
(20, 45454, '2022-09-09', 'Raisa', 'Syeda Raisa', 'Hassan', 'YToyOntpOjA7czo2OiJyZXBvcnQiO2k6MTtzOjg6ImRhdGFiYXNlIjt9', 'dfgjk', 'YToxOntpOjA7czozOiJsb3ciO30=', 'xyz', '2022-10-10', 'Mahir', 'asdffg', 'ghgh', 'ghgh', 'hhghg', 'jkjk', 'ghgh', 'ghgh', 'klklkl', '8', '500', '7', '450', '6', '300', '21', '1250', 'YToxOntpOjA7czozOiJZZXMiO30=', 'hghjj', 'ghgjj', 'hghjk', 'hjhgjj', 'YToxOntpOjA7czoxMToiaW1wbGVtZW50ZWQiO30=', 'hghgghg', 'ghhghg', 'ghhghg'),
(18, 111204, '2022-06-05', 'Mahbub', 'Syeda Raisa', 'Adnan', 'YToyOntpOjA7czo2OiJyZXBvcnQiO2k6MTtzOjg6ImRhdGFiYXNlIjt9', 'xyz', 'YToxOntpOjA7czo2OiJtZWRpdW0iO30=', 'abc', '2022-06-06', 'Mahir', 'pqr', 'ghggghj', 'ghjjh', 'ghjhgj', 'hjhjh', 'ghghjhj', 'tyyuuyt', 'hjkjhkh', '8', '500', '7', '450', '6', '300', '21', '1250', 'YToxOntpOjA7czozOiJZZXMiO30=', 'hgjhgjj', 'gjhgjgj', 'tyutiyytu', 'nbmnm', 'YToxOntpOjA7czoxMToiaW1wbGVtZW50ZWQiO30=', 'hgjhjh', 'ghjhjh', 'hjkjhkjh'),
(17, 50056, '2022-06-05', 'Mahbub', 'Syeda Raisa', 'Adnan', 'YToyOntpOjA7czo2OiJyZXBvcnQiO2k6MTtzOjg6ImRhdGFiYXNlIjt9', 'xyz', 'YToxOntpOjA7czo2OiJtZWRpdW0iO30=', 'abc', '2022-06-06', 'Mahir', 'pqr', 'ghggghj', 'ghjjh', 'ghjhgj', 'hjhjh', 'ghghjhj', 'tyyuuyt', 'hjkjhkh', '8', '500', '7', '450', '6', '300', '21', '1250', 'YToxOntpOjA7czozOiJZZXMiO30=', 'hgjhgjj', 'gjhgjgj', 'tyutiyytu', 'nbmnm', 'YToxOntpOjA7czoxMToiaW1wbGVtZW50ZWQiO30=', 'hgjhjh', 'ghjhjh', 'hjkjhkjh'),
(16, 776878, '2022-05-05', 'Mahbub', 'Syeda Raisa', 'Adnan', 'YToyOntpOjA7czo2OiJyZXBvcnQiO2k6MTtzOjg6ImRhdGFiYXNlIjt9', 'xyz', 'YToxOntpOjA7czo2OiJtZWRpdW0iO30=', 'abc', '2022-06-06', 'Mahir', 'pqr', 'ghggghj', 'ghjjh', 'ghjhgj', 'hjhjh', 'ghghjhj', 'tyyuuyt', 'hjkjhkh', '8', '500', '7', '450', '6', '300', '21', '1250', 'YToxOntpOjA7czozOiJZZXMiO30=', 'hgjhgjj', 'gjhgjgj', 'tyutiyytu', 'nbmnm', 'YToxOntpOjA7czoxMToiaW1wbGVtZW50ZWQiO30=', 'hgjhjh', 'ghjhjh', 'hjkjhkjh'),
(21, 9898, '2022-05-22', 'Syeda', 'Raisa', 'Akther', 'YToyOntpOjA7czo2OiJyZXBvcnQiO2k6MTtzOjg6ImRhdGFiYXNlIjt9', 'ghjh', 'YToxOntpOjA7czo2OiJtZWRpdW0iO30=', 'ghjhj', '2022-06-02', 'asdgh', 'asdffg', 'gjhgjh', 'fghgf', 'jhj', 'hkjh', 'ghhgf', 'hgghg', 'hghg', '8', '500', '7', '450', '6', '300', '21', '1250', 'YToxOntpOjA7czozOiJZZXMiO30=', 'ftuyyu', 'fghfg', 'rtytr', 'iuiy', 'YToxOntpOjA7czoxMToiaW1wbGVtZW50ZWQiO30=', 'gfhg', 'hgh', 'hgjh');
COMMIT;
