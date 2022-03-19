-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 08:35 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appraisal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `middleName` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `userName` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `school_id`, `firstName`, `lastName`, `middleName`, `gender`, `userName`, `email`, `mobile`, `password`) VALUES
(2, 3, 'Bayo', 'Ayanlola', 'Timileyin', 'Male', 'admin', 'michaelgabriel5968@yahoo.com', '08137950284', '1996'),
(3, 1, 'Princess', 'Michael', 'Timileyin', 'Female', 'admin', 'kadunastateuni@yahoo.com', '07062198753', 'kasu'),
(4, 1, 'MIchael', 'Gabriel', 'Hishen', 'Male', 'gadmin', 'kadunastateuni@yahoo.com', '07062198753', '1997');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstName`, `lastName`, `email`, `mobile`, `message`) VALUES
(1, 'Eugene', 'Bulus', 'michaelgabriel4968@yahoo.com', '08137950284', 'i want to suggest a site'),
(2, 'James', 'Mgbalamm', 'michaelgabriel449688@gmail.com', '0815598267', 'We appreciate your service to us'),
(3, 'Mibert', 'Hishen', 'mike@gmail.com', '08194484998', 'we have successfully finished the meeting with the board, which end up with a conclusion that we are paying you the sum of N150,000');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `courses` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `courses`) VALUES
(1, 'Computer Science'),
(2, 'Mathematics'),
(3, 'Economics'),
(4, 'Sociology'),
(5, 'Geography');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `departments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `departments`) VALUES
(1, 'Computer Science'),
(2, 'Mathematical Science'),
(3, 'Physics'),
(4, 'Economics'),
(5, 'Political Science'),
(6, 'Geography'),
(7, 'Biochemistry'),
(8, 'Biological Science'),
(9, 'Micro Biology'),
(10, 'Industrial Chemistry'),
(11, 'Mass Communication'),
(12, 'Engish'),
(13, 'Accounting');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(11) NOT NULL,
  `faculties` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `faculties`) VALUES
(1, 'Science'),
(2, 'Social Science'),
(3, 'Medicine'),
(4, 'Art');

-- --------------------------------------------------------

--
-- Table structure for table `final_result`
--

CREATE TABLE `final_result` (
  `staff_sid` int(11) NOT NULL,
  `motivation` int(11) DEFAULT NULL,
  `puntuality` int(11) DEFAULT NULL,
  `instruction_curriculum` int(11) DEFAULT NULL,
  `management` int(11) DEFAULT NULL,
  `remark` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_result`
--

INSERT INTO `final_result` (`staff_sid`, `motivation`, `puntuality`, `instruction_curriculum`, `management`, `remark`) VALUES
(4, 74, 45, 66, 85, 'you are good at your job'),
(3, 60, 70, 46, 85, 'you are doing good in all ramification, please keep it up.'),
(1, 0, 100, 73, 85, 'Your performance is an excellent remark, please keep it up and be consistent'),
(5, 70, 70, 53, 78, 'you did well ');

-- --------------------------------------------------------

--
-- Table structure for table `instruction_curriculum_answer`
--

CREATE TABLE `instruction_curriculum_answer` (
  `student_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `question1_choice` int(11) DEFAULT NULL,
  `question2_choice` int(11) DEFAULT NULL,
  `question3_choice` int(11) DEFAULT NULL,
  `question4_choice` int(11) DEFAULT NULL,
  `question5_choice` int(11) DEFAULT NULL,
  `question6_choice` int(11) DEFAULT NULL,
  `question7_choice` int(11) DEFAULT NULL,
  `question8_choice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instruction_curriculum_answer`
--

INSERT INTO `instruction_curriculum_answer` (`student_id`, `staff_id`, `question1_choice`, `question2_choice`, `question3_choice`, `question4_choice`, `question5_choice`, `question6_choice`, `question7_choice`, `question8_choice`) VALUES
(3, 4, 100, 45, 70, 70, 70, 100, 70, 70),
(3, 3, 70, 45, 45, 70, 45, 45, 45, 70),
(3, 1, 100, 70, 70, 100, 70, 70, 100, 100),
(3, 5, 100, 70, 60, 60, 45, 45, 45, 100),
(1, 3, 45, 45, 70, 45, 70, 45, 70, 100);

-- --------------------------------------------------------

--
-- Table structure for table `instruction_curriculum_questions`
--

CREATE TABLE `instruction_curriculum_questions` (
  `id` int(11) NOT NULL,
  `questions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instruction_curriculum_questions`
--

INSERT INTO `instruction_curriculum_questions` (`id`, `questions`) VALUES
(1, 'What we do in this class (homework and classwork) helps me learn the subject matter'),
(2, 'The lecturer explains the material clearly and in ways that are easy to understand, offers alternative explanations or additional examples, and clears up confusion'),
(3, 'The lecturer explains the material clearly and in ways that are easy to understand, offers alternative explanations or additional examples, and clears up confusion'),
(4, 'The lecturer gives the right amount of graded assignments, tests, and quizzes in order to fairly evaluate my  performance'),
(5, 'The grading system is fair and reasonable, and I am consistently graded according to this system'),
(6, 'The teacher uses a variety of activities (discussion, group work, lecture, labs, technology, etc.) during class time'),
(7, 'The lecturer knows the course area very well'),
(8, 'The lecturer encourages the students to think for themselves');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers_data`
--

CREATE TABLE `lecturers_data` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `middleName` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `staff_id` varchar(100) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturers_data`
--

INSERT INTO `lecturers_data` (`id`, `title`, `school_id`, `faculty_id`, `department_id`, `firstName`, `lastName`, `middleName`, `gender`, `staff_id`, `mobile`, `password`, `email`) VALUES
(1, 'Dr.', 1, 1, 1, 'Hishen', 'Lois', 'James', 'Male', 'kasu/staff/csc/1100', '081559826711', 'kasu', 'lecturer1@gmail.com'),
(3, 'Miss', 1, 1, 1, 'Susan', 'Mgbalamm', 'Mary', 'Female', 'KASU/Staff/190', '0813795028411', 'kasu', 'lecturer2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mgt_answer`
--

CREATE TABLE `mgt_answer` (
  `student_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `question1_choice` int(11) DEFAULT NULL,
  `question2_choice` int(11) DEFAULT NULL,
  `question3_choice` int(11) DEFAULT NULL,
  `question4_choice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mgt_answer`
--

INSERT INTO `mgt_answer` (`student_id`, `staff_id`, `question1_choice`, `question2_choice`, `question3_choice`, `question4_choice`) VALUES
(3, 4, 70, 100, 100, 70),
(3, 3, 100, 70, 100, 70),
(3, 1, 100, 70, 70, 100),
(3, 5, 100, 70, 70, 70),
(1, 3, 100, 70, 45, 70);

-- --------------------------------------------------------

--
-- Table structure for table `mgt_questions`
--

CREATE TABLE `mgt_questions` (
  `id` int(11) NOT NULL,
  `questions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mgt_questions`
--

INSERT INTO `mgt_questions` (`id`, `questions`) VALUES
(1, 'The lecturer is generally well-organized and prepared for class'),
(2, 'The lecturer maintains enough classroom discipline so the class and I can learn'),
(3, 'Class time is used in an efficient and productive manner'),
(4, 'Tests and assignments are corrected and returned to me, and I know where I stand in this class in terms of my grade.');

-- --------------------------------------------------------

--
-- Table structure for table `motivation_answer`
--

CREATE TABLE `motivation_answer` (
  `student_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `question1_choice` int(11) DEFAULT NULL,
  `question2_choice` int(11) DEFAULT NULL,
  `question3_choice` int(11) DEFAULT NULL,
  `question4_choice` int(11) DEFAULT NULL,
  `question5_choice` int(11) DEFAULT NULL,
  `question6_choice` int(11) DEFAULT NULL,
  `question7_choice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motivation_answer`
--

INSERT INTO `motivation_answer` (`student_id`, `staff_id`, `question1_choice`, `question2_choice`, `question3_choice`, `question4_choice`, `question5_choice`, `question6_choice`, `question7_choice`) VALUES
(3, 4, 100, 70, 70, 70, 70, 70, 70),
(3, 3, 100, 70, 45, 45, 70, 45, 45),
(3, 1, 100, 70, 45, 100, 70, 100, 70),
(3, 5, 100, 70, 70, 100, 70, 45, 70),
(1, 3, 60, 45, 45, 60, 70, 45, 60);

-- --------------------------------------------------------

--
-- Table structure for table `motivation_questions`
--

CREATE TABLE `motivation_questions` (
  `id` int(11) NOT NULL,
  `questions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motivation_questions`
--

INSERT INTO `motivation_questions` (`id`, `questions`) VALUES
(1, 'The lecturer challenges my abilities as a student, and this class requires consistent time, study, and preparation'),
(2, 'In this class, I feel free to ask questions and participate in discussions and activities'),
(3, 'The lecturer offers encouragement and positive reinforcement, as well as constructive criticism'),
(4, 'The lecturer is available to students outside class time for tutoring, review work, or to answer questions'),
(5, 'The lecturer is interested in and enthusiastic about teaching this class'),
(6, 'The lecturer is approachable; she/he demonstrates interest in and concern for the students'),
(7, 'This class/lecturer encourages me to become a person for others');

-- --------------------------------------------------------

--
-- Table structure for table `puntuality_answer`
--

CREATE TABLE `puntuality_answer` (
  `student_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `question1_choice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puntuality_answer`
--

INSERT INTO `puntuality_answer` (`student_id`, `staff_id`, `question1_choice`) VALUES
(3, 4, 45),
(3, 1, 100),
(3, 3, 70),
(3, 5, 70),
(1, 3, 100);

-- --------------------------------------------------------

--
-- Table structure for table `puntuality_questions`
--

CREATE TABLE `puntuality_questions` (
  `id` int(11) NOT NULL,
  `questions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puntuality_questions`
--

INSERT INTO `puntuality_questions` (`id`, `questions`) VALUES
(1, 'The lecturer is always puntual to class');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `schoolNames` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `schoolNames`, `email`, `mobile`) VALUES
(1, 'Kaduna State University (KASU)', 'kadunastateuni@yahoo.com', '07062198753'),
(2, 'Ahmadu Bello University Zaria (ABU)', 'abu@yahoo.com', '07062198756'),
(3, 'Cross River State University of Technology (CRUTECH)', 'crutech@yahoo.com', '07062198759');

-- --------------------------------------------------------

--
-- Table structure for table `student_complain`
--

CREATE TABLE `student_complain` (
  `student_sid` int(11) NOT NULL,
  `lecturer_department` varchar(100) DEFAULT NULL,
  `lecturer_Name` varchar(100) DEFAULT NULL,
  `complain_type` varchar(100) DEFAULT NULL,
  `course_title` varchar(100) DEFAULT NULL,
  `course_code` varchar(100) DEFAULT NULL,
  `complain_details` varchar(350) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_complain`
--

INSERT INTO `student_complain` (`student_sid`, `lecturer_department`, `lecturer_Name`, `complain_type`, `course_title`, `course_code`, `complain_details`) VALUES
(1, '1', 'GABRIEL MICHAEL HISHEN', 'Lecturer Complain', 'Human Computer Interface', 'CSC 412', 'i got A in his course');

-- --------------------------------------------------------

--
-- Table structure for table `student_complain_reply`
--

CREATE TABLE `student_complain_reply` (
  `id` int(11) NOT NULL,
  `student_sid` int(11) NOT NULL,
  `course_title` varchar(100) DEFAULT NULL,
  `course_code` varchar(100) DEFAULT NULL,
  `complain_details` varchar(350) NOT NULL,
  `reply_complain` varchar(350) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_complain_reply`
--

INSERT INTO `student_complain_reply` (`id`, `student_sid`, `course_title`, `course_code`, `complain_details`, `reply_complain`) VALUES
(1, 0, '\".$course_title.\"', '\".$course_code.\"', '\".$complain_details.\"', '\".$reply_complain.\"');

-- --------------------------------------------------------

--
-- Table structure for table `student_signup`
--

CREATE TABLE `student_signup` (
  `id` int(11) NOT NULL,
  `school_id` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `middleName` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `matric_Number` varchar(100) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `password_confirm` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_signup`
--

INSERT INTO `student_signup` (`id`, `school_id`, `faculty_id`, `department_id`, `course_id`, `firstName`, `lastName`, `middleName`, `gender`, `matric_Number`, `mobile`, `password`, `password_confirm`, `email`) VALUES
(1, 1, 1, 1, 3, 'Gabriel', 'Michael', 'Hishen', 'Male', 'kasu/15/csc/1004', '08137950284', '12345', '12345', 'michaelgabriel4968@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(1, 'mike35@yahoo.com'),
(2, 'mike@gmail.com'),
(3, 'suleiman@yahoo.com'),
(4, 'michaelgabriel49688@yahoo.com'),
(5, 'michaelgabriel5968@yahoo.com'),
(6, 'beyngermyn@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_ibfk_1` (`school_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final_result`
--
ALTER TABLE `final_result`
  ADD KEY `final_result_ibfk_1` (`staff_sid`);

--
-- Indexes for table `instruction_curriculum_answer`
--
ALTER TABLE `instruction_curriculum_answer`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `instruction_curriculum_questions`
--
ALTER TABLE `instruction_curriculum_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturers_data`
--
ALTER TABLE `lecturers_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `mgt_answer`
--
ALTER TABLE `mgt_answer`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `mgt_questions`
--
ALTER TABLE `mgt_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motivation_answer`
--
ALTER TABLE `motivation_answer`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `motivation_questions`
--
ALTER TABLE `motivation_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puntuality_answer`
--
ALTER TABLE `puntuality_answer`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `puntuality_questions`
--
ALTER TABLE `puntuality_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_complain`
--
ALTER TABLE `student_complain`
  ADD KEY `student_sid` (`student_sid`);

--
-- Indexes for table `student_complain_reply`
--
ALTER TABLE `student_complain_reply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_sid` (`student_sid`);

--
-- Indexes for table `student_signup`
--
ALTER TABLE `student_signup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `instruction_curriculum_questions`
--
ALTER TABLE `instruction_curriculum_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `lecturers_data`
--
ALTER TABLE `lecturers_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mgt_questions`
--
ALTER TABLE `mgt_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `motivation_questions`
--
ALTER TABLE `motivation_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `puntuality_questions`
--
ALTER TABLE `puntuality_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student_complain_reply`
--
ALTER TABLE `student_complain_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_signup`
--
ALTER TABLE `student_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `final_result`
--
ALTER TABLE `final_result`
  ADD CONSTRAINT `final_result_ibfk_1` FOREIGN KEY (`staff_sid`) REFERENCES `lecturers_data` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `instruction_curriculum_answer`
--
ALTER TABLE `instruction_curriculum_answer`
  ADD CONSTRAINT `instruction_curriculum_answer_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_signup` (`id`),
  ADD CONSTRAINT `instruction_curriculum_answer_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `lecturers_data` (`id`);

--
-- Constraints for table `lecturers_data`
--
ALTER TABLE `lecturers_data`
  ADD CONSTRAINT `lecturers_data_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lecturers_data_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lecturers_data_ibfk_3` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mgt_answer`
--
ALTER TABLE `mgt_answer`
  ADD CONSTRAINT `mgt_answer_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_signup` (`id`),
  ADD CONSTRAINT `mgt_answer_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `lecturers_data` (`id`);

--
-- Constraints for table `motivation_answer`
--
ALTER TABLE `motivation_answer`
  ADD CONSTRAINT `motivation_answer_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_signup` (`id`),
  ADD CONSTRAINT `motivation_answer_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `lecturers_data` (`id`);

--
-- Constraints for table `puntuality_answer`
--
ALTER TABLE `puntuality_answer`
  ADD CONSTRAINT `puntuality_answer_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_signup` (`id`),
  ADD CONSTRAINT `puntuality_answer_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `lecturers_data` (`id`);

--
-- Constraints for table `student_complain`
--
ALTER TABLE `student_complain`
  ADD CONSTRAINT `student_complain_ibfk_1` FOREIGN KEY (`student_sid`) REFERENCES `student_signup` (`id`);

--
-- Constraints for table `student_complain_reply`
--
ALTER TABLE `student_complain_reply`
  ADD CONSTRAINT `student_complain_reply_ibfk_1` FOREIGN KEY (`student_sid`) REFERENCES `student_signup` (`id`);

--
-- Constraints for table `student_signup`
--
ALTER TABLE `student_signup`
  ADD CONSTRAINT `student_signup_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_signup_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_signup_ibfk_3` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_signup_ibfk_4` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
