-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2021 at 06:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dnd`
--

-- --------------------------------------------------------

--
-- Table structure for table `charac`
--

CREATE TABLE `charac` (
  `char_id` int(11) NOT NULL,
  `char_uid` text NOT NULL,
  `users_users_id` int(11) NOT NULL,
  `char_name` varchar(200) DEFAULT NULL,
  `char_hp` int(11) DEFAULT NULL,
  `char_race` varchar(200) DEFAULT NULL,
  `char_bg` text DEFAULT NULL,
  `char_lvl` int(11) DEFAULT NULL,
  `char_str` int(11) DEFAULT NULL,
  `char_dex` int(11) DEFAULT NULL,
  `char_con` int(11) DEFAULT NULL,
  `char_backstory` text DEFAULT NULL,
  `char_alignment` text DEFAULT NULL,
  `char_ptrait` text DEFAULT NULL,
  `char_ideals` text DEFAULT NULL,
  `char_flaws` text DEFAULT NULL,
  `char_about` text DEFAULT NULL,
  `char_status` smallint(6) NOT NULL,
  `char_int` int(11) DEFAULT NULL,
  `char_wis` int(11) DEFAULT NULL,
  `char_cha` int(11) DEFAULT NULL,
  `char_class` text DEFAULT NULL,
  `char_subclass` text DEFAULT NULL,
  `char_notes` text DEFAULT NULL,
  `char_feats` text DEFAULT NULL,
  `char_language` text DEFAULT NULL,
  `char_equipment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charac`
--

INSERT INTO `charac` (`char_id`, `char_uid`, `users_users_id`, `char_name`, `char_hp`, `char_race`, `char_bg`, `char_lvl`, `char_str`, `char_dex`, `char_con`, `char_backstory`, `char_alignment`, `char_ptrait`, `char_ideals`, `char_flaws`, `char_about`, `char_status`, `char_int`, `char_wis`, `char_cha`, `char_class`, `char_subclass`, `char_notes`, `char_feats`, `char_language`, `char_equipment`) VALUES
(28, '6064886d45602', 9, 'Ethereal', 0, 'Tiefling', 'Knight', 6, 0, 0, 0, '', '', '', '', '', '', 1, 0, 0, 0, 'Fighter', 'Battle Master', '', '', '', ''),
(29, '6064892396e22', 10, 'uwu', 0, 'Tiefling', 'Knight', 6, 0, 0, 0, '', '', '', '', '', '', 1, 0, 0, 0, 'Fighter', 'Battle Master', '', '', '', ''),
(30, '60648cabe215f', 10, 'xX_Pu$$y_D3$tr0y3r_69_Xx', 0, 'Tiefling', 'Knight', 6, 0, 0, 0, '', '', '', '', '', '', 1, 0, 0, 0, 'Fighter', 'Battle Master', '', '', '', ''),
(31, '60648d51a6148', 10, 'xX_Z3d41ck_420_Xx', 0, 'Tiefling', 'Knight', 6, 0, 0, 0, '', '', '', '', '', '', 1, 0, 0, 0, 'Fighter', 'Battle Master', '', '', '', ''),
(32, '60648e0739338', 10, 'xX_Kv4T_69420_Xx', 0, 'Tiefling', 'Knight', 6, 0, 0, 0, '', '', '', '', '', '', 1, 0, 0, 0, 'Fighter', 'Battle Master', '', '', '', ''),
(33, '60649c325d262', 11, '3w123', 0, 'Tiefling', 'Knight', 6, 0, 0, 0, '', '', '', '', '', '', 1, 0, 0, 0, 'Fighter', 'Battle Master', '', '', '', ''),
(34, '60655fa91cb02', 10, 'Gemini', 0, 'Tiefling', 'Knight', 1, 0, 0, 0, 'i am Gemini uwu', 'tn', 'funny', 'none', 'a lot', 'secret', 1, 0, 0, 0, 'Fighter', 'Battle Master', '', '', '', ''),
(35, '6065763b34117', 9, 'UWU', 0, 'Tiefling', 'Knight', 1, 0, 0, 0, 'q2eqw', 'ng', 'eqww', 'qwe', 'qwe', 'qwe', 1, 0, 0, 0, 'Fighter', 'Battle Master', '', '', '', 'Antitoxin, Bell, Sealing, Warship, '),
(36, '6065767056523', 9, 'Kurt', 0, 'Tiefling', 'Knight', 1, 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 'Fighter', 'Battle Master', '', '', '', ''),
(37, '60657ed69fdd1', 9, 'Abe', 0, 'Tiefling', 'Knight', 1, 0, 0, 0, '1231', '', '123', 'asd', 'asdz', 'xczxc', 0, 0, 0, 0, 'Fighter', 'Battle Master', '', '', '', ''),
(38, '606588adc9d4d', 9, 'Vince', 26, 'Tortle', 'Hermit', 4, 12, 11, 14, 'Once upon a time there as a Tortle named Vince, he was so big and slow and had cannons on his back, two cannons. He had blue skin and a brown shell.', 'ce', 'is a turtle', 'turtle', 'none', 'turtle', 0, 20, 10, 9, 'Mystic', 'Soul knife', 'AM A TORTLE', 'Polearm Master\r\nSkill Expert\r\n', 'Common\r\nAquan\r\n', 'Hunting Trap, Healer, Pouch, Bagpipes, '),
(39, '60658bae0184a', 9, '123333', 0, 'Tortle', 'Hermit', 4, 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 'Mystic', 'Soul knife', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `proficiencies`
--

CREATE TABLE `proficiencies` (
  `prof_id` int(11) NOT NULL,
  `characters_char_id` int(11) DEFAULT NULL,
  `prof_athletics` smallint(1) DEFAULT NULL,
  `prof_acrobatics` smallint(1) DEFAULT NULL,
  `prof_sleith` smallint(1) DEFAULT NULL,
  `prof_stealth` smallint(1) DEFAULT NULL,
  `prof_arcana` smallint(1) DEFAULT NULL,
  `prof_history` smallint(1) DEFAULT NULL,
  `prof_investigation` smallint(1) DEFAULT NULL,
  `prof_nature` smallint(1) DEFAULT NULL,
  `prof_religion` smallint(1) DEFAULT NULL,
  `prof_animal_handling` smallint(1) DEFAULT NULL,
  `prof_insight` smallint(1) DEFAULT NULL,
  `prof_medicine` smallint(1) DEFAULT NULL,
  `prof_perception` smallint(1) DEFAULT NULL,
  `prof_survival` smallint(1) DEFAULT NULL,
  `prof_deception` smallint(1) DEFAULT NULL,
  `prof_intimidation` smallint(1) DEFAULT NULL,
  `prof_performance` smallint(1) DEFAULT NULL,
  `prof_persuasion` smallint(1) DEFAULT NULL,
  `prof_endurance` smallint(1) DEFAULT NULL,
  `prof_streetwise` smallint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proficiencies`
--

INSERT INTO `proficiencies` (`prof_id`, `characters_char_id`, `prof_athletics`, `prof_acrobatics`, `prof_sleith`, `prof_stealth`, `prof_arcana`, `prof_history`, `prof_investigation`, `prof_nature`, `prof_religion`, `prof_animal_handling`, `prof_insight`, `prof_medicine`, `prof_perception`, `prof_survival`, `prof_deception`, `prof_intimidation`, `prof_performance`, `prof_persuasion`, `prof_endurance`, `prof_streetwise`) VALUES
(28, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 35, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 37, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(38, 38, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `spells`
--

CREATE TABLE `spells` (
  `spells_id` int(11) NOT NULL,
  `character_char_id` int(11) DEFAULT NULL,
  `spells_sp_class` int(11) DEFAULT NULL,
  `spells_sp_ability` int(11) DEFAULT NULL,
  `spells_atk_bonus` int(11) DEFAULT NULL,
  `spells_sdc_rec_period` int(11) DEFAULT NULL,
  `spells_sp_focus` int(11) DEFAULT NULL,
  `spells_cantrips` text DEFAULT NULL,
  `spells_max` int(11) DEFAULT NULL,
  `spell_feature` text DEFAULT NULL,
  `spell_component` text DEFAULT NULL,
  `spells_lvl_1` text DEFAULT NULL,
  `spells_lvl1_mslots` int(11) DEFAULT NULL,
  `spells_lvl1_slots_used` int(11) DEFAULT NULL,
  `spells_lvl_2` text DEFAULT NULL,
  `spells_lvl2_mslots` int(11) DEFAULT NULL,
  `spells_lvl2_slots_used` int(11) DEFAULT NULL,
  `spells_lvl_3` text DEFAULT NULL,
  `spells_lvl3_mslots` int(11) DEFAULT NULL,
  `spells_lvl3_slots_used` int(11) DEFAULT NULL,
  `spells_lvl_4` text DEFAULT NULL,
  `spells_lvl4_mslots` int(11) DEFAULT NULL,
  `spells_lvl4_slots_used` int(11) DEFAULT NULL,
  `spells_lvl_5` text DEFAULT NULL,
  `spells_lvl5_mslots` int(11) DEFAULT NULL,
  `spells_lvl5_slots_used` int(11) DEFAULT NULL,
  `spells_lvl_6` text DEFAULT NULL,
  `spells_lvl6_mslots` int(11) DEFAULT NULL,
  `spells_lvl6_slots_used` int(11) DEFAULT NULL,
  `spells_lvl_7` text DEFAULT NULL,
  `spells_lvl7_mslots` int(11) DEFAULT NULL,
  `spells_lvl7_slots_used` int(11) DEFAULT NULL,
  `spells_lvl_8` text DEFAULT NULL,
  `spells_lvl8_mslots` int(11) DEFAULT NULL,
  `spells_lvl8_slots_used` int(11) DEFAULT NULL,
  `spells_lvl_9` text DEFAULT NULL,
  `spells_lvl9_mslots` int(11) DEFAULT NULL,
  `spells_lvl9_slots_used` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spells`
--

INSERT INTO `spells` (`spells_id`, `character_char_id`, `spells_sp_class`, `spells_sp_ability`, `spells_atk_bonus`, `spells_sdc_rec_period`, `spells_sp_focus`, `spells_cantrips`, `spells_max`, `spell_feature`, `spell_component`, `spells_lvl_1`, `spells_lvl1_mslots`, `spells_lvl1_slots_used`, `spells_lvl_2`, `spells_lvl2_mslots`, `spells_lvl2_slots_used`, `spells_lvl_3`, `spells_lvl3_mslots`, `spells_lvl3_slots_used`, `spells_lvl_4`, `spells_lvl4_mslots`, `spells_lvl4_slots_used`, `spells_lvl_5`, `spells_lvl5_mslots`, `spells_lvl5_slots_used`, `spells_lvl_6`, `spells_lvl6_mslots`, `spells_lvl6_slots_used`, `spells_lvl_7`, `spells_lvl7_mslots`, `spells_lvl7_slots_used`, `spells_lvl_8`, `spells_lvl8_mslots`, `spells_lvl8_slots_used`, `spells_lvl_9`, `spells_lvl9_mslots`, `spells_lvl9_slots_used`) VALUES
(14, 28, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0),
(15, 29, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0),
(16, 30, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0),
(17, 31, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0),
(18, 32, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0),
(19, 33, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0),
(20, 34, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0),
(21, 35, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0),
(22, 36, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0),
(23, 37, 0, 0, 0, 0, 0, '', 0, '', '', 'UWU', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0),
(24, 38, 3, 3, 8, 6, 4, 'Acid Splash', 0, '', '', 'Animal Friendship\r\nColor Spray', 5, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 'WATER GUN', 1, 0),
(25, 39, 0, 0, 0, 0, 0, '', 0, '', '', '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_uid` varchar(50) NOT NULL,
  `users_pwd` varchar(50) NOT NULL,
  `users_email` varchar(100) NOT NULL,
  `users_char` int(2) NOT NULL,
  `users_status` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_uid`, `users_pwd`, `users_email`, `users_char`, `users_status`) VALUES
(9, 'VinceGanda', '123', 'vince.co@gmail.com', 6, 1),
(10, 'UWU', '123', 'uwu@gmail.com', 5, 1),
(11, 'KuRtLuCaS', '123', 'kurt.lucas@gmail.com', 1, 1),
(12, 'SuckerSucking', '123', 'sucks2beU@gmail.com', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charac`
--
ALTER TABLE `charac`
  ADD PRIMARY KEY (`char_id`),
  ADD KEY `characters_users_fk` (`users_users_id`);

--
-- Indexes for table `proficiencies`
--
ALTER TABLE `proficiencies`
  ADD PRIMARY KEY (`prof_id`),
  ADD KEY `proficiencies_characters_fk` (`characters_char_id`);

--
-- Indexes for table `spells`
--
ALTER TABLE `spells`
  ADD PRIMARY KEY (`spells_id`),
  ADD KEY `spells_character_fk` (`character_char_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charac`
--
ALTER TABLE `charac`
  MODIFY `char_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `proficiencies`
--
ALTER TABLE `proficiencies`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `spells`
--
ALTER TABLE `spells`
  MODIFY `spells_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `charac`
--
ALTER TABLE `charac`
  ADD CONSTRAINT `characters_users_fk` FOREIGN KEY (`users_users_id`) REFERENCES `users` (`users_id`);

--
-- Constraints for table `proficiencies`
--
ALTER TABLE `proficiencies`
  ADD CONSTRAINT `proficiencies_characters_fk` FOREIGN KEY (`characters_char_id`) REFERENCES `charac` (`char_id`);

--
-- Constraints for table `spells`
--
ALTER TABLE `spells`
  ADD CONSTRAINT `spells_characters_fk` FOREIGN KEY (`character_char_id`) REFERENCES `charac` (`char_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
