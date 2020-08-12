-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 11:08 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `name`) VALUES
(1, 'khan', '$2y$10$yNhyQL1IAbTrAxlmTfiMve27zFQ5L7VUA8ZrNy4j.giEkrdIUKlE.', 'Md. Ahmed Khan'),
(2, 'naz', '$2y$10$WZ3TbOTLHQCjPKKoIG13Zu9WqqpAjHWgQWcDcYCmBMeGEJ5.satU6', 'Nazmul');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `message` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `name`, `message`, `date`, `admin`) VALUES
(0, 'tushar', 'aw', '2020-07-28 19:52:58', NULL),
(1, 'aw', 'ttw', '2020-07-28 19:53:06', NULL),
(1, 'ppp', 'ppp', '2020-07-28 19:58:57', NULL),
(1, 'ppp', 'hwllo', '2020-07-28 20:02:19', NULL),
(1, 'ppp', 'how are you', '2020-07-28 20:02:30', NULL),
(1, 'ppp', 'ok ', '2020-07-28 20:04:52', 'Super'),
(1, 'aw', 'awawawawawaw', '2020-07-28 20:16:15', 'admin'),
(0, 'ppp', 'আমার\r\n', '2020-07-29 16:07:07', NULL),
(0, 'ppp', 'drearawrw', '2020-07-29 18:40:20', NULL),
(1, '', 'asd', '2020-08-12 20:21:48', ''),
(1, '', 'dwdwd', '2020-08-12 20:21:52', ''),
(1, '', 'awd', '2020-08-12 20:22:54', ''),
(1, '', 'awd', '2020-08-12 20:23:45', ''),
(1, '', '', '2020-08-12 20:32:00', 'naz'),
(1, '', '', '2020-08-12 20:32:37', 'naz'),
(1, '', 'dwwwwww', '2020-08-12 20:32:55', 'naz');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `subject` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `subject`, `message`, `date`) VALUES
('awd', 'awd', 'awd', '', '2020-08-06 20:15:36'),
('awd', 'awd', 'awd', '', '2020-08-06 20:18:39'),
('awd', 'awd', 'awd', '', '2020-08-06 20:19:12'),
('ad', 'wwwwwww', 'wwwwwwwwwwwwwwwww', 'wwwwwwwww', '2020-08-06 20:19:17'),
('ad', 'wwwwwww', 'wwwwwwwwwwwwwwwww', 'wwwwwwwww', '2020-08-06 20:19:35'),
('ad', 'wwwwwww', 'wwwwwwwwwwwwwwwww', 'wwwwwwwww', '2020-08-06 20:31:02'),
('ad', 'wwwwwww', 'wwwwwwwwwwwwwwwww', 'wwwwwwwww', '2020-08-06 20:31:36'),
('asd', '', 'asd', '', '2020-08-06 20:32:15'),
('asd', '', 'asd', '', '2020-08-06 20:33:03'),
('ad', 'wwwwwww', 'wwwwwwwwwwwwwwwww', 'wwwwwwwww', '2020-08-06 20:33:34'),
('tushar', 'awsd@gmail.com', 'OK', 'msg', '2020-08-10 20:34:17'),
('awdawd', 'awdawd', 'awdawd', 'awdaw2111111', '2020-08-11 19:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `village` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `division` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `district` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `thana` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `post` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `jomi` double DEFAULT NULL,
  `item` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `eamil` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `name`, `village`, `division`, `district`, `thana`, `post`, `phone`, `jomi`, `item`, `eamil`) VALUES
('0', '0', '0', '0', '0', '0', '0', '0', 0, '0', '0'),
('123', '', '', '', '', '', '', '', 0, '', ''),
('345', '', '', '', '', '', '', '', 0, '', ''),
('444', '', '', '', '', '', '', '', 0, '', ''),
('ad', 'tushar', '', '', 'ঢাকা', '', '', '', 0, '', ''),
('aw', 'aw', 'aw', 'aw', 'aw', 'aw', 'aw', '0', 5, 'aw', 'aw'),
('bis12', '', '', '', '', '', '', '', 0, '', ''),
('hhh', '', '', '', '', '', '', '', 0, '', ''),
('master', 'tushar', '', '', 'ঢাকা', '', '', '', 0, '', ''),
('mmm', 'mmm', 'mmm', 'mmm', 'mmm', 'mmm', 'mmm', 'mmm', 0, 'mmm', 'mmm'),
('rrrr', '', '', '', '', '', '', '', 0, '', ''),
('tushar1212', '09', '', '', '', '', '', '', 0, '', ''),
('ui', '', '', '', 'ui', '', '', '', 0, '', NULL),
('wad', '', '', '', '', '', '', '', 0, '', NULL),
('you', 'tushar', '', '', 'ঢাকা', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `village` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `division` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `district` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `thana` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `post` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `jomi` double DEFAULT NULL,
  `item` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `eamil` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `village`, `division`, `district`, `thana`, `post`, `phone`, `jomi`, `item`, `eamil`, `created_at`) VALUES
(1, 'tushar', '$2y$10$mbga7KmDFDkoNVCcEJTNU.uGB.ISK71IPAUPG8DkQER7p99vIgElC', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-05 00:21:22'),
(2, 'www', '$2y$10$y.xR6cXR4pLRnb7tm0/0.OHxOllE50Vu29G4gtlDT6oN1SS7/mWFu', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-05 00:24:36'),
(3, 'name', '$2y$10$2SgzwkmrEMxvG9lkUuPxZOyWDevwUv.FbwSDsVqUyCXIpoBPfXzjW', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-05 00:31:27'),
(4, 'rock', '$2y$10$Hfx5KUvqhu06MKaRd3jgGutXIfSgGW8BshjVBV.15Qt1vBK6wVnXq', 'হেল্ল', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-05 00:53:29'),
(5, 'qw', '$2y$10$0AiniZb6Cvw9GXiH.sLTC.oZttQ0.xcXfkV01uJt5iQeIyVn5oaA2', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-05 01:11:39'),
(6, 'qe', '$2y$10$/Z6b5SXB8.TJljxc.Y9feOBvd4FG5Exdh8SN2ICPx8TxgygAIoTba', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-05 01:53:10'),
(8, 'uu', '$2y$10$2371MzS5QW6RvqZjfBXbV.mkNwspHgDU1mS39vy9rk2HqDmakvlXq', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-05 02:10:28'),
(10, 'roku', '$2y$10$gtHFDAU8NdEahNy/4KMV7u9.d49ub/qcUWgT0piF.awMUnLhAdysO', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-05 02:28:01'),
(11, 'à¦¤à§à¦·à¦¾à¦°', '$2y$10$8aD5549tbTIlBwZDogSZWuGnOly0k/HqsSbg9SELPZQvUHFzFpfmu', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-16 01:14:38'),
(12, 'wa', '$2y$10$Y51R0QYhTCLakgbOYK1Ut.k/tiO7ij9.Qt2w8iNa1iovWV8MfZJ8y', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-22 00:18:25'),
(13, 'myname', '$2y$10$CGVJPU44SwiiGMENFHtmyule4/5JujR33hyBCgvKZ7Keoda2fm7ai', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-22 03:35:20'),
(14, 'opop', '$2y$10$GnOOtTH/KQEjM2WcxCcE7.xNx6HhuNdrlEF1.QL9QrFy9htnL.pNO', 'tushar', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-22 03:36:00'),
(15, 'okthisis', '$2y$10$.v5ISzTrzMTiucpYGnPC6.ESys8JGy91UtRxUucDBKUkFX2iLUmAO', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-23 23:50:22'),
(16, '15163103047', '$2y$10$rfoxrH.SMwcjDxdKdt6Dyupn5jMvLTfgHRp1GJhiDftx7.yyHRHgC', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-23 23:55:54'),
(17, 'okitis', '$2y$10$Y3in4S6q/sKnbl4eWk0Uuee11omx932kHQs7/xzh1gyngw8hZjvb.', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-23 23:57:52'),
(18, 'bo', '$2y$10$rInkvTuENyhcZ44jguAzu.Q1mJ3Gp5y9fEYNqRp7KF9TW170s0AOC', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 00:00:10'),
(19, 'qwqwqw', '$2y$10$tuerLn6D8VSj0QkRwqbvZ.LZgKPhWE5d2SJGm3EBuURMmpflZAb8i', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 00:03:18'),
(20, 'bis', '$2y$10$mYt.CfZZUb99H1v8OSh44uVSInYQZBo3b4p.o.qaev9ueIHA9AcnO', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 00:09:52'),
(21, 'bis1', '$2y$10$OHa5hUBiC2o1jIdW.K/wS.1YbUag396xjtdEhYZ6LoyEkHNNrMi.y', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 00:11:01'),
(22, 'bis12', '$2y$10$dIL0dd41/3X76sMOxaFEbeHSKaTDo5qvD.n3qtTM4vl4i0YN0lp.a', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 00:14:33'),
(23, 'tushar1212', '$2y$10$qTWeG7JRV3ocQIquqacEFuet2MsfMBBLAeehUIy5XqR2.JVJpgG9G', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 00:22:38'),
(24, 'aw', '$2y$10$g7kxyJYuxngdXtjWcIOju.985b0msSH7GZ5Dc6zDYpEnggLAvjlCS', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 00:35:04'),
(25, '123', '$2y$10$og70fA6Bnhk2OOjlMwK.8uG.s28G1ApY2NeFPk161A6JBRrLbTy6u', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 00:37:42'),
(26, 'ui', '$2y$10$ztj9qx82aJTjNv1sPihpcO74BotgaYIdJbFnrbOkR4bz./P4OB.4e', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 00:41:28'),
(27, 'wad', '$2y$10$3SLUVSy6OYp4bzNfYWJD7uCaFoG9b4JFcjV5kUCD67bhfIsTp/Fc.', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 00:48:04'),
(28, '444', '$2y$10$NxW9F5ULWjg/HCcKJD.pAu4Qxyp6h2Ja1MExk2J9nOcdjmy4beXge', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 00:52:22'),
(29, '345', '$2y$10$CkzsVd4FDTChUr6BFnDWdOak2BEPIAYYuIGex3Q2dBmd.n9TeLcDa', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 00:55:34'),
(30, 'hhh', '$2y$10$auzd9JjPEHoXtDvBnSkESegNJb7ZtkQqQkJlRlKhoNN7iWRSqVEmG', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 01:02:26'),
(31, 'rrrr', '$2y$10$OA.apRo3A4zjipXPZeBqJeQjbCy/d88Hi7.REp/zlPQ9doM6WLLK6', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 01:07:36'),
(32, 'mmm', '$2y$10$noXSX.j.Fio.FXU3cpF9yOA3ZyrHnjcqaOsfRtxx3LwwwQgZdiBDW', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 01:45:03'),
(33, 'master', '$2y$10$v9Ivd.mcln4l7hpOTZGVv.4dL39e1pBW4gHdyYPbO0MpCW7SpIMtm', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 01:55:45'),
(34, 'you', '$2y$10$eCTD1wnWRaiqURn3zWqMPOs/OjIQXjq5554bfs3Wk/d6nM7MArKLW', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 02:13:08'),
(35, 'ad', '$2y$10$chH3D2.ro/mxPKgxfzs9xui0as1dKkyRd89tnGmqRFtGfE57Mb782', '', '', '', '', '', '', '', NULL, NULL, NULL, '2020-07-24 02:26:25'),
(36, 'po', '$2y$10$cyvHEV5KEvSGgDhf8/X5MendIIDw.oAvWrhIvLbn/rkEhbmHfVl4O', '', '', '', '', '', '', '', 0, '', '', '2020-07-24 02:42:56'),
(37, '?????', '$2y$10$WERUMNU29m.ap4HD/MIIdeTdx/6z9xhx5pmRwZWbqXpA/JiQ8DC/m', '', '', '', '', '', '', '', 0, '', '', '2020-07-24 02:52:44'),
(44, 'rrr', '$2y$10$OnVRHBbXhCmwYYL/1ZMe9uun06p0aSm7hefjC5kpsTNnFwC9do31O', 'রোকাইয়া', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 123, 'asd', 'asd', '2020-07-25 21:13:47'),
(45, 'jkl', '$2y$10$nnsvQS.wEgjP4Jt1yWW7aO8aa8BWmPXa3nwRC9bLhkWwQ.s2/ztS6', 'তুষার', 'াসদ্বাদাওদ', '্বাদাওদ', 'াওদাওদ', '্রাওর্ব', '্বারাও', '্বাএদাও', 0, 'ঈফ্র', 'াওদ', '2020-07-26 00:26:33'),
(46, 'ppp', '$2y$10$XfgOiizocoj6w/1ZIfgqoO3sx4tcpa3NBQ1s7o2SARv2Iq4Cc9x06', 'ppp', '', '', '', '', '', 'ppp', 0, '', '', '2020-07-27 21:44:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;