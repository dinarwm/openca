-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2015 at 11:19 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `openca`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE IF NOT EXISTS `certificate` (
  `ID_certificate` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Country` varchar(5) NOT NULL,
  `Province` varchar(100) NOT NULL,
  `Locality` varchar(100) NOT NULL,
  `Organization Name` varchar(100) NOT NULL,
  `Organizational Unit Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Certificate` varchar(100) NOT NULL,
  `RevokeC` int(11) NOT NULL DEFAULT '0',
  `PublicKey` varchar(1000) NOT NULL,
  `PrivateKey` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`ID_certificate`, `Username`, `Name`, `Country`, `Province`, `Locality`, `Organization Name`, `Organizational Unit Name`, `Email`, `Certificate`, `RevokeC`, `PublicKey`, `PrivateKey`) VALUES
(12, 'achmads23', 'Achmad Saiful', 'ID', 'Jawa Timur', 'Surabaya', 'ITS', 'Informatika', 'utakutikkayu@gmail.com', 'cert/Achmad Saiful_utakutikkayu@gmail.com.crt', 1, '-----BEGIN PUBLIC KEY-----\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxk0y9fc/xlTN+oyET0AM\npqNfmBByaZ4ScyJBNczQJT8hHjz4eCz0xRdNNV+bZPGNg7zyfrJFqMdA6unlEhZw\nDzcrbiP+w9eOG9la3dcKO4vjQSefZC6RWeztVErnUQbKPNuvp4pw3MUFrGRCAnPf\neov1dPRMk96Ko/1bxFeYPkBId04jZyDqjDMYNEddh/wlJVvMjPmQrbyz8HwWoZSR\nXW/to53sQ7mGdcN25OWWptNoL+u+Myxl4haGE5C2M3buoUImlUR9/DrkAq+Btjgd\nbPJ9gL2C1/o9nHd1Q/yltdHrU+z0ZgucAQpqd6mVTPQEGmPua5Y/IjY5IfdIar76\nfQIDAQAB\n-----END PUBLIC KEY-----\n', '-----BEGIN ENCRYPTED PRIVATE KEY-----\nMIIFDjBABgkqhkiG9w0BBQ0wMzAbBgkqhkiG9w0BBQwwDgQI7YnDU0Lqy0YCAggA\nMBQGCCqGSIb3DQMHBAjwQWw66WK3UwSCBMhvAWrRvCYUqRoP194exwh+Qs1Fa6gH\n9kwWmnW6qWZ7e/WC8e4c7SEaojRCYB6oBugjlcd1uRIWA5hwTyiKpEV7LfhjXANP\n2ld89CNuARk1qdT/akX5i0UI5OrW+yPUGXyx//W2uhPLZoWPCRuBUjc8ZyOFlKV+\nosQ6jXu//EpIyF6JGQS5AKYxRPr/EV9hyCxoWgjJOo1U+Ll8zRNBr9ZZzWRLEixX\nq7mdVo08v+E2IRLjTrZJN/AcSQqwvkXR0K6suebg9jofd2A18U/IZFmBKGjB+EnK\nPohUt9eRRk4xvWwuLIXcnztVI5g8oQEIaQsdDEvLUJQD5HzB3G8O9XBwYxJmpx3I\nlZNabuX'),
(14, 'dinar', 'dinar', 'ID', 'Jawa Timur', 'Surabaya', 'ITS', 'Informatika', 'dinaralay@gmail.com', 'cert/dinar_dinaralay@gmail.com.crt', 0, '-----BEGIN PUBLIC KEY-----\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqbLeoVu5bjhpppgTCirn\nGj/zYun74myYOtPmEeTGFSlxb1wjFdka7sVe1jyMn09ixH2NOAMM6/ao1oLEhUvo\nDt7IUsogLSdT4U3TvDgMbjm+F17m1ZGi+o5gXU+6UqISoDyNo3U0cANlp47p2b4Y\nmmeK4qjVvnk4XYbJXwgYzD9bzdNR2FmToNADsEeltJy2hWe7TP/oBrKhSxLMWYL8\nk4T1zze/0sx+bvu2y09+nYnPaUMCKw9pOk+VG9TbvjcBnC9gDGK0FgC8RwMKRRjB\n9rWjIKhccbnr1gFxoUXN4xiTPFsQZ80W/mOGkQFmCL6r5CNxm8JYE78FlwVaUDto\nKwIDAQAB\n-----END PUBLIC KEY-----\n', '-----BEGIN ENCRYPTED PRIVATE KEY-----\nMIIFDjBABgkqhkiG9w0BBQ0wMzAbBgkqhkiG9w0BBQwwDgQISONPmtsz/bcCAggA\nMBQGCCqGSIb3DQMHBAi23z4W94XclQSCBMgaTC4s/xSRO4t7lPmxdbckkTheBpHV\naZL0pOUZYNVK8Re1YWFxvAz6a9xMkZeUt/hUnJ97dzmHSUaVlhdUXswG7pUU0F7X\nIPLJUB8WyCY0RkNv9LteQde/clulaX1U5TctAGIzEAFnc4ByKLD/AhJ7BHjM0WoS\nR2NNBAN30wk+9tHW0MHR4+he4kJkQ8Qg9hziBoJXOpSIqgqfpXyasHde66K4bi0a\nrbctFrMkiW1MyAWuAc6NWPMqL95ByGs6sJveeZuEhvvr65E397zKU4jUQIIGsdWu\n1EHV79cGgFYR/j3wdM1CWIc72ld11l3eHDYYx/M/6T87T83sNEIZIW86nTKliHvs\n6MskNrE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`) VALUES
('achmads23', 'semangat'),
('admin', 'admin'),
('dinar', 'dinar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`ID_certificate`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `ID_certificate` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
