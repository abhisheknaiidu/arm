{\rtf1\ansi\ansicpg1252\cocoartf2509
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs24 \cf0 -- phpMyAdmin SQL Dump\
-- version 4.9.0.1\
-- https://www.phpmyadmin.net/\
--\
-- Host: localhost:8889\
-- Generation Time: Nov 26, 2019 at 06:35 AM\
-- Server version: 5.7.26\
-- PHP Version: 7.3.8\
\
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";\
SET time_zone = "+00:00";\
\
--\
-- Database: `arm`\
--\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `uploads`\
--\
\
CREATE TABLE `uploads` (\
  `file_id` int(11) NOT NULL,\
  `file_name` varchar(225) NOT NULL,\
  `file_description` text NOT NULL,\
  `file_type` varchar(225) NOT NULL,\
  `file_uploader` varchar(225) NOT NULL,\
  `file_uploaded_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,\
  `file_uploaded_to` varchar(225) NOT NULL,\
  `file` varchar(225) NOT NULL,\
  `status` varchar(225) NOT NULL DEFAULT 'not approved yet'\
) ENGINE=MyISAM DEFAULT CHARSET=latin1;\
\
--\
-- Dumping data for table `uploads`\
--\
\
INSERT INTO `uploads` (`file_id`, `file_name`, `file_description`, `file_type`, `file_uploader`, `file_uploaded_on`, `file_uploaded_to`, `file`, `status`) VALUES\
(59, 'sql', 'sqlite', 'pdf', 'abhi', '2019-11-25 18:13:43', 'Computer Science', '984141.pdf', 'approved'),\
(62, 'Summer Intern', 'MAXAR is hiring summer Interns!  Apply today!', 'jpeg', 'abhi', '2019-11-25 20:51:34', 'Computer Science', '509576.jpeg', 'approved'),\
(61, 'DML Queries', 'Lecture Slide', 'pdf', 'ritik', '2019-11-25 18:13:00', 'Computer Science', '237817.pdf', 'approved'),\
(63, 'Dbms', 'Normalization Slides', 'pdf', 'ritik', '2019-11-25 20:45:50', 'Computer Science', '291840.pdf', 'not approved yet'),\
(64, 'CS202', 'OOPs With Java Result', 'pdf', 'mudit', '2019-11-25 20:51:46', 'Computer Science', '693685.pdf', 'approved'),\
(65, 'HS Notes', 'Before MidSem', 'pdf', 'mudit', '2019-11-25 20:51:58', 'Computer Science', '1285.pdf', 'approved'),\
(66, 'EC202', 'Ultrasonic Slide', 'pdf', 'harshit', '2019-11-26 03:29:09', 'Electronics And Communication', '616836.pdf', 'approved'),\
(67, 'EC202', 'Solution of Assignment 2', 'pdf', 'ishaan', '2019-11-26 03:29:23', 'Electronics And Communication', '572460.pdf', 'approved'),\
(68, 'SWAYAM', 'Mail regarding R Software Course', 'jpeg', 'ishaan', '2019-11-26 03:29:16', 'Electronics And Communication', '650435.jpeg', 'approved'),\
(69, 'sads', 'ffdfgdfg', 'pdf', 'abhi', '2019-11-26 05:11:25', 'Computer Science', '963887.pdf', 'approved');\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `users`\
--\
\
CREATE TABLE `users` (\
  `id` int(11) NOT NULL,\
  `username` varchar(225) NOT NULL,\
  `name` varchar(225) NOT NULL,\
  `about` varchar(300) NOT NULL DEFAULT 'N/A',\
  `role` varchar(225) NOT NULL,\
  `email` varchar(225) NOT NULL,\
  `token` varchar(225) NOT NULL,\
  `gender` varchar(225) NOT NULL,\
  `password` varchar(225) NOT NULL,\
  `course` varchar(225) NOT NULL,\
  `image` varchar(225) NOT NULL DEFAULT 'profile.jpeg',\
  `joindate` varchar(225) NOT NULL\
) ENGINE=MyISAM DEFAULT CHARSET=latin1;\
\
--\
-- Dumping data for table `users`\
--\
\
INSERT INTO `users` (`id`, `username`, `name`, `about`, `role`, `email`, `token`, `gender`, `password`, `course`, `image`, `joindate`) VALUES\
(12, 'arm', 'ARM', 'N/A', 'ARM', 'root@gmail.com', '', 'N/A', '$2y$10$UExd.f8vQXogrZELXF8KGulQJKUn32p8x4B5SVQ7V/D6.mrSAkAjW', 'Computer Science', '275180.jpeg', '2000-01-01'),\
(29, 'harshit', 'Harshit', 'N/A', 'student', 'harshit@gmail.com', '', 'Male', '$2y$10$JMomRsBKSESnusIh4YLf5.rV2CyueBJbFqi7KAnlEw9jvATA7a6Ge', 'Electronics And Communication', '729347.jpg', 'November 13, 2019'),\
(30, 'ritik', 'Ritik Nagdeve', 'N/A', 'student', '2018361@iiitdmj.ac.in', '', 'Male', '$2y$10$iRD9CGbl1ZugJTLm7TRtq.8yZADAcnmir7iJwFNbEzT.hpYMsFS8C', 'Computer Science', '165286.jpg', 'November 25, 2019'),\
(31, 'mudit', 'Mudit Tripathi', 'N/A', 'student', '2018153@iiitdmj.ac.in', '', 'Male', '$2y$10$iRzxRLwtsXaK91fA6J91ZOBhVDOTzDMvIxK3gpCTGyf3KsnbhRpza', 'Computer Science', 'profile.jpeg', 'November 25, 2019'),\
(32, 'raja', 'Raja Diwakar', 'N/A', 'student', '2018202@iiitdmj.ac.in', '', 'Male', '$2y$10$PDqxZSOOf4/gz1XdfPNYFOhHowpOyJ2.O2CBRlbRu66OZuF5AHdHW', 'Mechanical', 'profile.jpeg', 'November 25, 2019'),\
(33, 'ishaan', 'Ishaan Dhanotia', 'N/A', 'student', 'ishaan@gmail.com', '', 'Male', '$2y$10$XR.LLjBfNrcXUrUJjbjSlOmBW3MXS7rOKOqJBlNVJ2s9Al/mOJvla', 'Electronics And Communication', 'profile.jpeg', 'November 25, 2019'),\
(34, 'harsh', 'Harsh Chaurasia', 'N/A', 'student', 'harsh@yahoo.com', '', 'Male', '$2y$10$VZqAN5E3QyQpkugKxy3fdud5LmxJHRMmqzI1GNUSAXVjm2VaLvSU6', 'Computer Science', 'profile.jpeg', 'November 25, 2019'),\
(35, 'nitin', 'Nitin', 'N/A', 'student', 'Nitin@yahoo.com', '', 'Male', '$2y$10$59pGXF9B57mhkF2oJ.d40uMO/TPrJQw4.KVlI0LXu/WW6bu9ZjCqO', 'Mechanical', 'profile.jpeg', 'November 26, 2019'),\
(36, 'abhishek', 'abhishek', 'N/A', 'student', 'abhi12@gmail.com', '', 'Male', '$2y$10$6MJJsw1rdlTyM/bzHn3XVuRrrysToDU/d9VXMhIoY.uRMJucsqc2O', 'Computer Science', 'profile.jpeg', 'November 26, 2019');\
\
--\
-- Indexes for dumped tables\
--\
\
--\
-- Indexes for table `uploads`\
--\
ALTER TABLE `uploads`\
  ADD PRIMARY KEY (`file_id`);\
\
--\
-- Indexes for table `users`\
--\
ALTER TABLE `users`\
  ADD PRIMARY KEY (`id`);\
\
--\
-- AUTO_INCREMENT for dumped tables\
--\
\
--\
-- AUTO_INCREMENT for table `uploads`\
--\
ALTER TABLE `uploads`\
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;\
\
--\
-- AUTO_INCREMENT for table `users`\
--\
ALTER TABLE `users`\
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;\
}