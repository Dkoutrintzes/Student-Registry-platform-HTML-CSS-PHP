-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 22 Ιουν 2019 στις 15:54:18
-- Έκδοση διακομιστή: 10.1.37-MariaDB
-- Έκδοση PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `login`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int(11) NOT NULL,
  `myhobbies` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `hobbies`
--

INSERT INTO `hobbies` (`id`, `myhobbies`) VALUES
(1, 'im the admin'),
(2, 'My hobbies is all around the computers.I like play games , espacialy those tha have a competative nature in them and i can compete with other people .Also i like to observe the development of new technologies of the coptuter industry.'),
(3, 'i dont have'),
(4, 'i dont have'),
(5, 'a'),
(6, 'dgh');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `mylanguages` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `languages`
--

INSERT INTO `languages` (`id`, `mylanguages`) VALUES
(1, 'im the admin'),
(2, 'I havent take any certificate in any languege but i had done leassons for english for 5 years and i can speak the languege very well but not in a level that i confortably speak for profasional reasons but i am good enough to communicate with others.'),
(3, 'greek '),
(4, 'greek '),
(5, 'a'),
(6, 'dghd');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `personal_informations`
--

CREATE TABLE `personal_informations` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `addres` varchar(200) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `personal_informations`
--

INSERT INTO `personal_informations` (`id`, `firstname`, `lastname`, `fathername`, `addres`, `phonenumber`, `email`, `birthday`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', '2019-06-08'),
(2, 'Dimitris', 'Koutrintzes', 'Leonidas', 'Xairwneias 4 Lamia', '6982078685', 'koutris123', '1998-10-01'),
(3, 'giannis ', 'koutris', 'leonidas', 'kapou calkida', '6935356987', 'trela@yahoo.gr', '1980-12-03'),
(4, 'giannis ', 'koutris', 'leonidas', 'kapou calkida', '6935356987', 'trela@yahoo.gr', '1980-12-03'),
(5, 'a', 'a', 'a', 'a', 'a', 'a', '0002-02-02'),
(6, 'ert', 'ert', 'rt', 'ert', 'ert', 'ert', '0543-05-31');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `profational_experience`
--

CREATE TABLE `profational_experience` (
  `id` int(11) NOT NULL,
  `proexperience` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `profational_experience`
--

INSERT INTO `profational_experience` (`id`, `proexperience`) VALUES
(1, 'admin'),
(2, 'I havent work in any job in my life'),
(3, 'hahahahaha'),
(4, 'hahahahaha'),
(5, 'a'),
(6, 'gdfh');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `studies`
--

CREATE TABLE `studies` (
  `id` int(11) NOT NULL,
  `yourstudies` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `studies`
--

INSERT INTO `studies` (`id`, `yourstudies`) VALUES
(1, 'admin'),
(2, 'I am currently studying in TEI of central greece,I am in the third year of my studies and if everything go well i will have ended my studies in less than two years.I have also finised first grade and second grade school. '),
(3, 'i never pass a class'),
(4, 'i never pass a class'),
(5, 'a'),
(6, 'gdh');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'koutris', '12345'),
(3, '123', '123'),
(4, '1234', '1234'),
(5, '12333', '12333'),
(6, '123333', '123333');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `personal_informations`
--
ALTER TABLE `personal_informations`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `profational_experience`
--
ALTER TABLE `profational_experience`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `studies`
--
ALTER TABLE `studies`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT για πίνακα `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT για πίνακα `personal_informations`
--
ALTER TABLE `personal_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT για πίνακα `profational_experience`
--
ALTER TABLE `profational_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT για πίνακα `studies`
--
ALTER TABLE `studies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
