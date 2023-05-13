-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 13, 2023 lúc 07:07 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quiz_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` bigint(10) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(100) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`, `date_of_birth`, `email`, `phone_number`, `create_date`, `update_date`) VALUES
(1, 'ad', 'ad', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answer`
--

CREATE TABLE `answer` (
  `id` bigint(10) NOT NULL,
  `question_id` bigint(10) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `is_correct` bigint(2) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `answer`
--

INSERT INTO `answer` (`id`, `question_id`, `content`, `is_correct`, `create_date`, `update_date`) VALUES
(1, 3, '24 hours', 1, NULL, NULL),
(2, 3, '12 hours', 0, NULL, NULL),
(3, 3, '33 hours', 0, NULL, NULL),
(4, 3, '1 hour', 0, NULL, NULL),
(5, 4, 'Yes', 1, NULL, NULL),
(6, 4, 'No', 0, NULL, NULL),
(7, 7, 'Javascript', 0, NULL, NULL),
(8, 7, 'PHP', 1, NULL, NULL),
(9, 7, 'HTML', 0, NULL, NULL),
(10, 7, 'CSS', 0, NULL, NULL),
(11, 8, 'Theory', 0, NULL, NULL),
(12, 8, 'Practice', 0, NULL, NULL),
(13, 8, 'Mid-term', 0, NULL, NULL),
(14, 8, 'end of term', 1, NULL, NULL),
(15, 9, 'v5.3.0-alpha4', 0, NULL, NULL),
(16, 9, 'v5.3.0-alpha3', 1, NULL, NULL),
(17, 9, 'v6.0.0-alpha1', 0, NULL, NULL),
(18, 9, 'v5.1.0-alpha2', 0, NULL, NULL),
(19, 10, '1', 0, NULL, NULL),
(20, 10, '2', 0, NULL, NULL),
(21, 10, '3', 1, NULL, NULL),
(22, 10, '4', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class`
--

CREATE TABLE `class` (
  `id` bigint(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `class`
--

INSERT INTO `class` (`id`, `name`) VALUES
(1, 'KTPM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `major`
--

CREATE TABLE `major` (
  `id` bigint(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `major`
--

INSERT INTO `major` (`id`, `name`) VALUES
(2, 'Web');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question`
--

CREATE TABLE `question` (
  `id` bigint(10) NOT NULL,
  `content` varchar(100) DEFAULT NULL,
  `test_id` bigint(10) DEFAULT NULL,
  `is_multiple` bigint(2) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `question`
--

INSERT INTO `question` (`id`, `content`, `test_id`, `is_multiple`, `create_date`, `update_date`) VALUES
(3, 'how many hours in a day', 1, 1, NULL, NULL),
(4, 'Is the weather good today?', 2, 0, NULL, NULL),
(7, 'What is the hardest part of the web?', 1, NULL, NULL, NULL),
(8, 'Which column of the website has the highest score?', 1, NULL, NULL, NULL),
(9, 'What is latest bootstrap version?', 1, NULL, NULL, NULL),
(10, 'How many methods of including css in an HTML document?', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` bigint(10) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `student_id` bigint(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `gender` bigint(2) DEFAULT NULL,
  `phone_number` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `class_id` bigint(10) DEFAULT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `major_id` bigint(10) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `user_name`, `password`, `student_id`, `email`, `first_name`, `last_name`, `full_name`, `gender`, `phone_number`, `address`, `class_id`, `date_of_birth`, `major_id`, `create_date`, `update_date`) VALUES
(14, 'aaa', 'aaa', 52100834, 'An@gmail.com', 'aaa', 'aaa', NULL, 0, '0123456789', '21', 1, '0000-00-00 00:00:00', 2, NULL, NULL),
(15, 'aaa', 'aaa', 52100834, 'An@gmail.com', 'aaa', 'aaa', NULL, 0, '0123456789', '21', 1, '0000-00-00 00:00:00', 2, NULL, NULL),
(16, 'aa', 'aa', 52100834, 'An@gmail.com', 'Tr?n', 'An', NULL, 0, '0123456789', '24-Nguy?n ?ình Chi?u-Nha Trang', 1, '0000-00-00 00:00:00', 2, NULL, NULL),
(17, 'aaa', 'ád', 52100834, 'An@gmail.com', 'Ta', 'An', NULL, 0, '0123456789', '24', 1, '0000-00-00 00:00:00', 2, NULL, NULL),
(18, 'aaa', 'ssss', 52100834, 'An@gmail.com', 'Tr?n', 'An', NULL, 0, '0123456789', '24', 1, '0000-00-00 00:00:00', 2, NULL, NULL),
(19, 'aa', '', 52100834, 'An@gmail.com', 'Tr?n', 'An', NULL, 0, '0123456789', '24-Nguy?n ?ình Chi?u-Nha Trang', 1, '0000-00-00 00:00:00', 2, NULL, NULL),
(20, 'aa', '', 52100834, 'An@gmail.com', 'Tr?n', 'An', NULL, 0, '0123456789', '24-Nguy?n ?ình Chi?u-Nha Trang', 1, '0000-00-00 00:00:00', 2, NULL, NULL),
(21, 'aa', '', 52100834, 'An@gmail.com', 'Tr?n', 'An', NULL, 0, '0123456789', '24-Nguy?n ?ình Chi?u-Nha Trang', 1, '0000-00-00 00:00:00', 2, NULL, NULL),
(22, 'aa', '', 52100834, 'An@gmail.com', 'Tr?n', 'An', NULL, 1, '0123456789', '24-Nguy?n ?ình Chi?u-Nha Trang', 1, '0000-00-00 00:00:00', 2, NULL, NULL),
(23, '', '', 52100834, 'An@gmail.com', 'Tr?n', 'An', NULL, 1, '0123456789', '24-Nguy?n ?ình Chi?u-Nha Trang', 1, '0000-00-00 00:00:00', 2, NULL, NULL),
(24, '', '', 52100834, 'An@gmail.com', 'Tr?n', 'An', NULL, 1, '0123456789', '', 1, '0000-00-00 00:00:00', 2, NULL, NULL),
(25, '', '', 52100834, 'An@gmail.com', 'Tr?n', 'An', NULL, 0, '0123456789', '', 1, '0000-00-00 00:00:00', 2, NULL, NULL),
(26, '123', '123', 52100111, 'An@gmail.com', '123', 'An', NULL, 1, '0123456789', '123', 1, '0000-00-00 00:00:00', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student_answer`
--

CREATE TABLE `student_answer` (
  `id` bigint(10) NOT NULL,
  `student_id` bigint(10) DEFAULT NULL,
  `test_id` bigint(10) DEFAULT NULL,
  `number_correct_answer` bigint(2) DEFAULT NULL,
  `finish_timed` datetime DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `student_answer`
--

INSERT INTO `student_answer` (`id`, `student_id`, `test_id`, `number_correct_answer`, `finish_timed`, `create_date`, `update_date`) VALUES
(5, 26, 1, 3, '2023-05-13 22:20:19', NULL, NULL),
(6, 26, 1, 3, '2023-05-13 22:23:30', NULL, NULL),
(7, 26, 1, 2, '2023-05-13 22:23:40', NULL, NULL),
(8, 26, 1, 2, '2023-05-13 22:26:33', NULL, NULL),
(9, 26, 1, 0, '2023-05-13 22:26:41', NULL, NULL),
(10, 26, 1, 0, '2023-05-13 22:30:18', NULL, NULL),
(11, 26, 1, 1, '2023-05-13 22:30:24', NULL, NULL),
(12, 26, 1, 1, '2023-05-13 22:30:45', NULL, NULL),
(13, 26, 1, 1, '2023-05-13 22:31:00', NULL, NULL),
(14, 26, 1, 1, '2023-05-13 22:31:08', NULL, NULL),
(15, 26, 1, 1, '2023-05-13 22:32:00', NULL, NULL),
(16, 26, 1, 1, '2023-05-13 22:32:05', NULL, NULL),
(17, 26, 1, 1, '2023-05-13 22:34:55', NULL, NULL),
(18, 26, 1, 1, '2023-05-13 22:35:01', NULL, NULL),
(19, 26, 1, 1, '2023-05-13 22:36:09', NULL, NULL),
(20, 26, 1, 1, '2023-05-13 22:36:58', NULL, NULL),
(21, 26, 1, 2, '2023-05-13 22:37:06', NULL, NULL),
(22, 26, 1, 2, '2023-05-13 22:37:39', NULL, NULL),
(23, 26, 1, 0, '2023-05-13 22:37:44', NULL, NULL),
(24, 26, 1, 0, '2023-05-13 22:38:22', NULL, NULL),
(25, 26, 1, 3, '2023-05-13 22:38:25', NULL, NULL),
(40, 26, 1, 5, '2023-05-14 00:01:51', NULL, NULL),
(41, 26, 1, 5, '2023-05-14 00:02:03', NULL, NULL),
(42, 26, 1, 4, '2023-05-14 00:03:29', NULL, NULL),
(43, 26, 1, 4, '2023-05-14 00:05:24', NULL, NULL),
(44, 26, 1, 4, '2023-05-14 00:05:58', NULL, NULL),
(45, 26, 1, 4, '2023-05-14 00:06:03', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subject`
--

CREATE TABLE `subject` (
  `id` bigint(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(1, 'GK2-Web'),
(2, 'CK2-Web'),
(3, 'CK2-CNPM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `test`
--

CREATE TABLE `test` (
  `id` bigint(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `subject_id` bigint(10) DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `test`
--

INSERT INTO `test` (`id`, `name`, `code`, `subject_id`, `start_time`, `end_time`, `create_date`, `update_date`) VALUES
(1, 'Test1', '1111', 2, '2023-05-13 14:15:15', '2023-05-13 14:45:15', NULL, NULL),
(2, 'Test2', '1122', 3, '2023-05-13 14:31:09', '2023-05-13 14:59:09', NULL, NULL),
(3, '12', '20230513144512', 2, '2023-05-13 14:43:00', '2023-05-13 15:43:00', '2023-05-13 14:45:10', '2023-05-13 14:45:10'),
(4, '12', '20230513151241', 2, '2023-05-13 14:45:00', '2023-05-13 15:45:00', '2023-05-13 15:12:39', '2023-05-13 15:12:39');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answer_FK` (`question_id`);

--
-- Chỉ mục cho bảng `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_FK` (`test_id`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_FK` (`major_id`),
  ADD KEY `student_FK_1` (`class_id`);

--
-- Chỉ mục cho bảng `student_answer`
--
ALTER TABLE `student_answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_answer_FK` (`student_id`),
  ADD KEY `student_answer_FK_1` (`test_id`);

--
-- Chỉ mục cho bảng `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_FK` (`subject_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `answer`
--
ALTER TABLE `answer`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `class`
--
ALTER TABLE `class`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `major`
--
ALTER TABLE `major`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `question`
--
ALTER TABLE `question`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `student_answer`
--
ALTER TABLE `student_answer`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `subject`
--
ALTER TABLE `subject`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `test`
--
ALTER TABLE `test`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_FK` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`);

--
-- Các ràng buộc cho bảng `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_FK` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`);

--
-- Các ràng buộc cho bảng `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_FK` FOREIGN KEY (`major_id`) REFERENCES `major` (`id`),
  ADD CONSTRAINT `student_FK_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`);

--
-- Các ràng buộc cho bảng `student_answer`
--
ALTER TABLE `student_answer`
  ADD CONSTRAINT `student_answer_FK` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `student_answer_FK_1` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`);

--
-- Các ràng buộc cho bảng `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_FK` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
