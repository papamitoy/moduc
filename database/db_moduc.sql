-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2021 at 01:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_moduc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enroll`
--

CREATE TABLE `tbl_enroll` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `enrolled_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_enroll`
--

INSERT INTO `tbl_enroll` (`id`, `subject_id`, `student_id`, `enrolled_on`) VALUES
(6, 19, 9, '2021-10-17 10:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_modules`
--

CREATE TABLE `tbl_modules` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `module_discription` text NOT NULL,
  `module_file` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deadline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_module_assesments`
--

CREATE TABLE `tbl_module_assesments` (
  `id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `assesment_file` text NOT NULL,
  `submitted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_module_assesments_scores`
--

CREATE TABLE `tbl_module_assesments_scores` (
  `id` int(11) NOT NULL,
  `module_assesment_id` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz`
--

CREATE TABLE `tbl_quiz` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `auto_check` int(11) NOT NULL DEFAULT 0,
  `correct_answer` text NOT NULL,
  `score` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `deadline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_answers`
--

CREATE TABLE `tbl_quiz_answers` (
  `id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `score` int(11) NOT NULL,
  `submitted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subjects`
--

CREATE TABLE `tbl_subjects` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `class_name` varchar(200) NOT NULL,
  `section_name` varchar(200) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `room` varchar(200) NOT NULL,
  `subject_code` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subjects`
--

INSERT INTO `tbl_subjects` (`id`, `user_id`, `class_name`, `section_name`, `subject_name`, `room`, `subject_code`, `description`, `created_at`) VALUES
(4, 0, 'awdawd', 'awdawda', 'wdawdawd', 'awdawdawdaw', '', 'dawdawd', '2021-10-17 09:14:13'),
(5, 0, 'awdawd', 'awdadaw', 'wdawd', 'awdawdaw', '', 'dawdawd', '2021-10-17 09:16:48'),
(6, 0, 'awdawd1', 'awdadaw', 'wdawd', 'awdawdaw', '', 'dawdawd', '2021-10-17 09:17:19'),
(7, 0, 'awdawd13', 'awdadaw', 'wdawd', 'awdawdaw', '', 'dawdawd', '2021-10-17 09:17:57'),
(8, 0, 'awd', 'wadaw', 'dawdawdaw', 'dawdawd', '', 'awdawdw', '2021-10-17 09:20:29'),
(9, 2, 'awdaw', 'dawdawd', 'awdawdaw', 'dawdawdaw', '', 'dawdawdawd', '2021-10-17 09:22:39'),
(10, 2, 'awdawd', 'awdawd', 'awdawdaw', 'dawdawdawd', '', 'awdawdawd', '2021-10-17 09:28:27'),
(11, 2, 'awdaw', 'dawdawd', 'awdawdawd', 'awdaw', '', 'dawdawd', '2021-10-17 09:33:04'),
(12, 2, 'awda', 'wdwadaw', 'dawdawda', 'awdawd', '', 'adawd', '2021-10-17 09:34:33'),
(13, 5, 'awd', 'awd', 'awd', 'awd', '', 'awdawd', '2021-10-17 09:50:57'),
(14, 8, 'awdawd', 'awd', 'awdawd', 'awdawdawd', '', 'wadawd', '2021-10-17 10:10:06'),
(15, 8, 'CC 101', 'awdawd', 'awda', 'wdawda', '', 'wdawdaw', '2021-10-17 10:13:07'),
(16, 8, 'awdawd', 'awdawd', 'CC 101', 'awda', '', 'dwadawd', '2021-10-17 10:13:33'),
(17, 8, 'awdawd', 'awdawd', 'Math 1', 'awdawdaw', '', 'd', '2021-10-17 10:13:46'),
(18, 8, 'awdaw', 'dawdaw', 'dawdawdaw', 'awdwd', '82a199ec4b88abd15ba62a12afb6013d', 'awdawd', '2021-10-17 10:22:45'),
(19, 8, 'awdaw232', 'dawdawd', 'IM 101', 'dawdawdawd', '3490506', 'awdawdawd', '2021-10-17 11:02:33'),
(20, 8, 'awd', 'awdawd', 'awdwad', 'awdawdawd', '6509247', 'awdawdawd', '2021-10-17 10:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject_post`
--

CREATE TABLE `tbl_subject_post` (
  `id` int(11) NOT NULL,
  `post_content` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject_post_comment`
--

CREATE TABLE `tbl_subject_post_comment` (
  `id` int(11) NOT NULL,
  `subject_post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `banned_until` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `type`, `fullname`, `email`, `username`, `password`, `banned_until`, `created_at`) VALUES
(1, 'John', '', 'Doe@Doe', 'john@example.com', '123', '0000-00-00 00:00:00', '2021-10-13 15:40:52'),
(2, 'adviser', '', '122@123', '123', '123', '0000-00-00 00:00:00', '2021-10-17 09:27:43'),
(3, 'user', '', '1@1', '1', '1', '0000-00-00 00:00:00', '2021-10-13 15:22:47'),
(4, 'user', '', '', '', '', '0000-00-00 00:00:00', '2021-10-13 15:28:22'),
(5, 'user', '', 'awdawd@gmail.com', '123123', '123123', '0000-00-00 00:00:00', '2021-10-17 09:57:48'),
(6, 'user', 'aaaasdasdas', 'ssssdsdsd@gmail.com', 'wwwewew', 'qweqwe', '0000-00-00 00:00:00', '2021-10-17 10:04:33'),
(7, 'user', 'qweqwe', 'awdawdawd@gmail.com', 'awdadawdawdawd', 'awdawd', '0000-00-00 00:00:00', '2021-10-17 10:09:14'),
(8, 'adviser', 'awdadawd', 'awdawd123@gmail.com', 'qweqwe', 'qweqwe', '0000-00-00 00:00:00', '2021-10-17 10:09:41'),
(9, 'user', 'qweqwe111111111', 'reymondsiarot@gmail.com', 'qweqwe', 'qweqwe', '0000-00-00 00:00:00', '2021-10-17 10:40:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_enroll`
--
ALTER TABLE `tbl_enroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_module_assesments`
--
ALTER TABLE `tbl_module_assesments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_module_assesments_scores`
--
ALTER TABLE `tbl_module_assesments_scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quiz_answers`
--
ALTER TABLE `tbl_quiz_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subjects`
--
ALTER TABLE `tbl_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subject_post`
--
ALTER TABLE `tbl_subject_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subject_post_comment`
--
ALTER TABLE `tbl_subject_post_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_enroll`
--
ALTER TABLE `tbl_enroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_module_assesments`
--
ALTER TABLE `tbl_module_assesments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_module_assesments_scores`
--
ALTER TABLE `tbl_module_assesments_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_quiz_answers`
--
ALTER TABLE `tbl_quiz_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subjects`
--
ALTER TABLE `tbl_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_subject_post`
--
ALTER TABLE `tbl_subject_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subject_post_comment`
--
ALTER TABLE `tbl_subject_post_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
