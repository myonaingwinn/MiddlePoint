-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 18, 2021 at 05:05 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `verified`, `token`, `role`, `created`, `modified`) VALUES
(1, 'Marilyn Manson', 'queen@q.com', '$2y$10$Zzc9nDIaFd8WXjtJrGrIEey.9CkvDR3HfgVwl6XcHN3XEfE2jzBRe', 1, '674313babeff0565d220ccbbd1c35ba159d14fb7', 0, '2021-01-06 07:31:12', '2021-01-11 06:51:34'),
(2, 'Jack Jack', 'jack@jack.org', '$2y$10$YC0871NxHFlyH/g6kuARNOQSqDTeg17VkX0P6KMfrj4H/Dnk5QwRy', 0, '8e3a0f3a302304ae7372c579a3c47c82901f204a', 0, '2021-01-06 07:31:22', '2021-01-12 05:02:01'),
(3, 'BEE', 'bee@k.com', '$2y$10$2QmlTqnJrwJ3BA6XYegCxeC6crI4Pceg2vDwLTt7L1Kmm0uXtF5iK', 0, 'ceed912afc9af163f2fc94da0ec25eecfc1d1ae9', 0, '2021-01-06 07:31:33', '2021-01-12 05:02:24'),
(4, 'Henikle', 'h@h.com', '$2y$10$GINwbfuwscHHaJMwyL1VWOn3D3/KD3le7wACMQqxTQJb692H7tNMW', 0, 'd6596800c4920ab9e689c8dd36bedf9da6d5c7bd', 0, '2021-01-06 07:31:42', '2021-01-12 05:02:40'),
(5, 'Jack B. Denials', 'jack@d.com', '$2y$10$mE1iIJ5ZRvxPTYqVmWYJGuA1Jx3J8XA5Xs92pomREEildwCZYNrG.', 0, 'c4a2e1d96aa923734a5559c358b558c0c90472bc', 1, '2021-01-06 07:31:53', '2021-01-12 05:03:09'),
(6, 'Ternary E', 'test@t.com', '$2y$10$/WfMTR2EASv7eX7I7xO01uJL6DOhd1U2hD4wcPEV1zraqdIMbe/Wi', 0, '381da0f02c76d09039a868e9733c87cb87501376', 0, '2021-01-07 04:26:27', '2021-01-12 05:04:56'),
(7, 'Lu MAW', 'lumaw@lm.org', '$2y$10$YzgeYIEA75CQD1wC26i5eeymUUt.Tn7DArWxq9iffpfMcpALNL3FO', 0, 'edd82c2875abee9589756ca12de11786c770fb94', 0, '2021-01-07 04:31:19', '2021-01-12 05:05:15'),
(8, 'Lu Hman', 'luhman@lh.com', '$2y$10$BjrFTGEVK/JRK89bOhBeV.cmrWIFMB0E8gQwF61Ok2AyTwW3emUM.', 0, '5b989c4bda7938a787a9299a5bd2b16b756e8153', 0, '2021-01-07 04:34:15', '2021-01-12 05:05:31'),
(9, 'Trainyl S.', 'test@d.com', '$2y$10$E2hLjqY.zmwsQKMWa7Z/5O/3mDKRVomgaIViOTWD6BJBqyCdnUsfm', 0, '57e338340d21ac2a22c721ee503fb7c31b271e4a', 0, '2021-01-07 04:42:11', '2021-01-12 05:05:55'),
(10, 'Ultra Doni', 'user@d.com', '$2y$10$99PDdI2UED7dKn7iyQOAo.qplCgwmfzW4t27ZbzdL0Pj7WN8YspdC', 0, 'e8031ab5923f959ea8acf837bfb4d0687b704dd6', 0, '2021-01-07 04:49:39', '2021-01-12 05:06:13'),
(11, 'Warners Bros 2', 'user2@d.com', '$2y$10$yP5VRBU0q3l2QpS89cW5iuPvwJ8QWWhxnIcTiZxJwGUTFka/fL7ym', 0, '414d7aef4ac3c4d0500ad94040ceeb4d2ee34a8f', 0, '2021-01-07 04:54:55', '2021-01-12 05:06:26'),
(12, 'Bad Days', 'b@d.com', '$2y$10$wQrJ5VxHnUSYJwhTdukFPOWu48nbfR9UNERHUg5bOO0mLQrlkkLOq', 0, '7a2ac8cb6b5f72a37feec2abb6155d3c022467cc', 0, '2021-01-07 04:55:47', '2021-01-12 05:06:38'),
(13, 'Three Thousand', 'user3@d.com', '$2y$10$nTC3zJGOU0S.CRG1LzgtkOXEVBt3g9Kp1zc/uCOEw/sr9gJpLwd3.', 0, '272aae2471466e0ed373bc01915b94a6915e1af3', 0, '2021-01-07 05:00:57', '2021-01-12 05:07:00'),
(14, 'Super 4', 'user4@d.com', '$2y$10$lUCc1L36P34jZClCwAS9Qej/eB8TI9rQ7ef6d/fSdBIbQolzw42PK', 0, '736a44c8ffa97014b27b06b63da2f1ade337b6f1', 0, '2021-01-07 05:03:22', '2021-01-12 05:07:11'),
(15, 'Five Elements', 'user5@d.com', '$2y$10$sJKNHYFXhzNeo0CwgGitpuVgGaaukD5kndy7k1U3wwNkEp037pQWe', 0, '7d04570ebf4127ce8cfa9750b15591b581ce24d6', 0, '2021-01-07 05:07:46', '2021-01-12 05:07:27'),
(16, '6 Planets', 'user6@d.com', '$2y$10$f3Oyo1bhgw.5rfh.EYbRTO./a4ckAoTWunNvlwv9xbFJBB0SuuFIy', 0, 'bda3c507a24b7e0a3611a43ba801ddeb02aac00b', 0, '2021-01-07 05:10:37', '2021-01-12 05:07:47'),
(17, '7th Sea', 'user7@d.com', '$2y$10$7dIhZJMV3/zukE.RQIn9AeXpZeaYvyYGyor2vrx5gpUwu9hvEvYG6', 0, '7b79e1ab9b07730b182504cd16aaf1abd83961b1', 0, '2021-01-07 05:13:07', '2021-01-12 05:08:02'),
(18, 'Dragon VIII', 'user8@d.com', '$2y$10$wGY.xBdRVl/1ZcaDQjdbEeFrRLj9CXa/5qqnpQ9SgE9V29277TZGK', 0, '312c4f80b7989d4ecad59f5bc8792788cf5ad48c', 0, '2021-01-07 05:20:23', '2021-01-12 05:08:17'),
(19, 'Alice Nine', 'user9@d.com', '$2y$10$k5oL3aF0dmXUonZwrIGX6OFDPBpOWCKvKPTXFVoSP0xSe.ymf4rgC', 0, 'bcb584ba1936be860373b830ff813a05cf978abd', 0, '2021-01-07 05:20:57', '2021-01-12 05:08:34'),
(20, 'Sweety Ten', 'user10@d.com', '$2y$10$eoK/UNThsL4h1EEqR2M7nOdb8pVJwPQTqQM8z1y5G2.KMDz0IzDhq', 0, '54fa54169840d68142d010fbffded58d909241a0', 0, '2021-01-07 05:29:05', '2021-01-12 05:08:49'),
(21, 'Eleven Journal', 'user11@d.com', '$2y$10$fOLY8THOU3NchumXPvcxR.7QeT7ikbYs6Sww6QX25DES0NH.BkCu2', 0, '59a66e26a3015c8fd436f9814569ac614b36e539', 0, '2021-01-07 05:32:56', '2021-01-12 05:09:09'),
(22, 'Twelvement Taro', 'user12@d.com', '$2y$10$eQwZxGP1adQMAiW1e0gQ4Oi3IkC47OpXiklLHhNGjLSDLpk6dGh6O', 1, 'a89796f3cf58494c6076f86c8d7ff07aa8a37320', 0, '2021-01-07 05:52:46', '2021-01-12 05:11:56'),
(23, 'Marilyn Manson', 'user13@d.com', '$2y$10$Q.4U5ZV01NPBX9Ak.FNQQeP3iTNYLC.NGXTAXYvXyrFGjqafm4xSu', 1, '', 0, '2021-01-07 06:42:57', '2021-01-07 06:42:57'),
(24, 'Marilyn Manson', 'user14@d.com', '$2y$10$WnlcKPKvLEwU2MqldxdB5ujhu8VaCcUoXnodmY9G2KOwopHiGRi4G', 1, '', 0, '2021-01-07 06:49:52', '2021-01-07 06:49:52'),
(25, 'Marilyn Manson', 'user15@d.com', '$2y$10$onkqiabjcKlUEXKIvIFZzuXfWh8fjgNsVuGTcSi3cYzVM3fSp/BBe', 1, '', 0, '2021-01-07 06:50:39', '2021-01-07 06:50:39'),
(26, 'Marilyn Manson', 'user16@d.com', '$2y$10$5UfASJHgGoB6TbBNpjO4Vuza5LJ0tCM7o2xfCSEI5qCG7iJPwAr8K', 1, '', 0, '2021-01-07 06:57:01', '2021-01-07 06:57:01'),
(27, 'Marilyn Manson', 'user17@d.com', '$2y$10$hkn48w1uLGgemD4IKbAJrOrEdCu2D72.vA3mvOHiP6MNYV7U/ykTK', 1, '9f8448e079186d5315a983bbe3bdb7b768d34e93', 0, '2021-01-07 07:07:54', '2021-01-11 07:46:43'),
(28, 'Marilyn Manson', 'user18@d.com', '$2y$10$hwVj6vjzUYvxhRTH471zyOKbiA.j3WVBA2bvP6yHseKHVJiM0gIcu', 1, '', 0, '2021-01-07 07:10:07', '2021-01-07 07:10:07'),
(29, 'Marilyn Manson', 'user19@d.com', '$2y$10$PFsAXhncp7TH9B7/LQumyucw5O93p84TmGM3cbKk1ZEEKszQy31dm', 1, '', 0, '2021-01-07 08:34:08', '2021-01-07 08:34:08'),
(30, 'Admin', 'admin@admin.com', '$2y$10$lvkbBBgivUUE8sX.8a0LDOUpp4kbDr5jdhtXETixTfjL0YKexDf2q', 1, '', 1, '2021-01-07 08:38:39', '2021-01-07 08:38:39'),
(31, 'Marilyn Manson', 'user21@d.com', '$2y$10$fT93zkAEDsF0mlYEKb12heNCnitu5NkiFTFvd9sDVGJllr89lLzZ6', 1, '', 0, '2021-01-07 08:40:35', '2021-01-07 08:40:35'),
(32, 'Marilyn Manson', 'user22@d.com', '$2y$10$Sgice.wn.s.Uv.KutEm7Zune1qP7rEzLhPIoE7dzwWH0vkHQjs6Vm', 1, '', 0, '2021-01-07 08:44:36', '2021-01-07 08:44:36'),
(33, 'Marilyn Manson', 'user23@d.com', '$2y$10$BwyvnzjAVa77wDZGXWDFc.BRy0Hd4k6cis.fFU2XpJ0Zgyq.OqtL.', 1, '', 0, '2021-01-07 08:47:04', '2021-01-07 08:47:04'),
(34, 'Marilyn Manson', 'user24@d.com', '$2y$10$2uzGnoYTxM5HaxfAZb.IfeHFh5etcV0wc1YbHUAtxh5/wChXsHRHm', 1, '', 0, '2021-01-07 08:49:34', '2021-01-07 08:49:34'),
(35, 'Marilyn Manson', 'user26@d.com', '$2y$10$zyTXFBGBv1yUchRZ8HbyJe4zD8cWb3wE8MZmpKXG9qJYepqgEUivi', 1, '', 0, '2021-01-07 09:08:03', '2021-01-07 09:08:03'),
(36, 'Marilyn Manson', 'user27@d.com', '$2y$10$J9DF0k/CqL8pWX4oJ84YEevdJo8HXP8gjUK76i3zatiDwcFzpu6zO', 1, '', 0, '2021-01-07 09:13:47', '2021-01-07 09:13:47'),
(37, 'Marilyn Manson', 'user28@d.com', '$2y$10$yG2E6acoCm8T7jZZd7xRPOQlnIhgrF1E4R2yNGIU4x7WOHTLy8gLu', 1, '', 0, '2021-01-07 09:15:18', '2021-01-07 09:15:18'),
(38, 'Marilyn Manson', 'user29@d.com', '$2y$10$AAH7mf8dbmtLpLI70AGg2.e8r.aY2z/ML7G6cVqk5m52n7ixY6Vby', 1, '', 0, '2021-01-07 09:16:45', '2021-01-07 09:16:45'),
(39, 'Marilyn Manson', 'user30@d.com', '$2y$10$MA4yYy5dOeoHkUP/JGsFnu.e.3EKmUJCE9Asm.PjR9EJS5TK9Z7h2', 1, '', 0, '2021-01-07 09:17:46', '2021-01-07 09:17:46'),
(40, 'Marilyn Manson', 'user31@d.com', '$2y$10$NnrehikASCEwV7rfHktU3uHX.xYNPoGaEkwGYUU4IdwGkWoBMWoZ2', 1, '', 0, '2021-01-07 09:21:46', '2021-01-07 09:21:46'),
(41, 'Marilyn Manson', 'user32@d.com', '$2y$10$3YHdh3/5jyJ7sURMvKXd6uUTE7PSowboBqfUOErHnigoMHPPI1.Nm', 1, '', 0, '2021-01-07 09:22:58', '2021-01-07 09:22:58'),
(42, 'Marilyn Manson', 'user33@d.com', '$2y$10$CbaQN4o7p73jvytc1X.0F.fTBdmivZJcWpyA5tiuSIc3AWbUVSLxm', 1, '', 0, '2021-01-08 03:28:33', '2021-01-08 03:28:33'),
(43, 'Marilyn Manson', 'user34@d.com', '$2y$10$pdJFHxMLf/gysctyaouYFews3qhhDyyFZzGnx3ovAfSeZAmjxLk/W', 1, '', 0, '2021-01-08 03:30:28', '2021-01-08 03:30:28'),
(44, 'Marilyn Manson', 'user35@d.com', '$2y$10$KTMmVvAtiwFopHati/FEeusUjXFjIEAZ4R1566EhUp4aFaB5yzG42', 1, '', 0, '2021-01-08 03:32:01', '2021-01-08 03:32:01'),
(48, 'Myo Naing Winn', 'myonaingwin.gic@gmail.com', '$2y$10$6ZHfCqLLWAlEAIiVvfgZcOq2RyngjyDuhGG3VUMBUUINp1mzUjEoC', 1, '262be005e2a899b8b29b5d6c13b90bd5f0282d51', 1, '2021-01-11 04:52:42', '2021-01-14 07:59:10'),
(49, 'Bee Kyal', 'beekyal@b.com', '$2y$10$K7iUY04JEUW8pXkva/wLTOirI.P8eQcpGiWOkHYMJobX76xIFNqyy', 0, '0e1de015d4d17d2ece56c3d5b01ef542b8172445', 0, '2021-01-11 05:02:20', '2021-01-11 07:13:50'),
(50, 'Hey', 'hey@h.com', '$2y$10$rbk/Kq.taupQiOgsFZijdO.W/OPhQ87tSYHvvGj9TYxkLdiLsL3Te', 0, '3d0dfa10b6574d4d53e9c9760dcf7c852c0a04bb', 0, '2021-01-11 07:22:36', '2021-01-12 03:46:01'),
(52, 'Maui', 'maui@tft.com', '$2y$10$R/bcZ44IZjLFPNkAZrTqtO8bzMTAozB2hF9MTVyUc9Asmj/4IE6ja', 1, 'e96cc38a9be103085fd63fae7efa0be0513bc158', 0, '2021-01-11 08:08:34', '2021-01-11 08:09:57'),
(53, 'Reg', 'reg@reg.com', '$2y$10$O6XKsFwZMhLk6J2j/FDQ9eIJApZqNSCGjxlLymy2OooCgXTOCUkwO', 1, '5b61d09b8a974a75cbd3bedce0cbdf497a4551c9', 0, '2021-01-11 08:59:46', '2021-01-11 09:03:36'),
(54, 'Reg2', 'reg2@reg.com', '$2y$10$J.1tXOuJzXZCrIjZYrOVfed/i2wR6PF9fQfXpaVG3fmShL/ROCpji', 1, 'd01f83edd09ce54b348cae5b73ece64bd6d09f23', 0, '2021-01-11 09:04:19', '2021-01-11 09:05:11'),
(55, 'AddUser', 'adduser@au', '$2y$10$nqzRcbmqd4oV.d8m8MX5eerVKiQlkClSK5uaaaEy/4QuB0XhID3OG', 1, '4eadd99563a4d4ee709b5c7350353dcac138e195', 0, '2021-01-11 09:10:57', '2021-01-11 09:12:23'),
(56, 'New12', 'new12@new12', '$2y$10$tpnsQEMUF2IgMzl/x8hw1.oHgTldA/B9WCI9PPTT9mxCa9CkHgN2u', 1, '9a3a5f07b94479a472338f5ef346a24b10866bf3', 0, '2021-01-12 07:31:52', '2021-01-12 07:32:54'),
(57, 'New13', 'New13@n.com', '$2y$10$FHTf3SSlCsG127/FLhoqyeMRj4clsSoYmQn4Gr0qt9WMAT5TajT5O', 1, '8867a9359a14fa7ae6d5027b1357de57e9380be4', 0, '2021-01-15 08:44:34', '2021-01-15 08:46:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
