-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 25, 2017 at 12:18 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amazon_mini`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `book_name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `price_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `pages` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `fulfilled` tinyint(1) NOT NULL,
  `available` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `ratings` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `sub_id`, `book_name`, `description`, `price`, `price_id`, `author_id`, `lang_id`, `pages`, `company_id`, `fulfilled`, `available`, `sold`, `ratings`) VALUES
(2, 0, 'Sycamore Bluff', 'Somewhere west of Kokomo, Indiana, in a contained and isolated area, NASA is conducting a secret study on human behavior...\r\n\r\n\r\nGiven a set of rules and the promise of a generous compensation package at the end, can several hundred people govern themselves and live in relative harmony for six years?\r\n\r\nThe experiment, designed to mimic future colonization on a distant planet, appears to be a huge success.\r\n\r\nUntil something goes terribly wrong…\r\n\r\nTwo undercover operatives from an ultra-clandestine government agency called The Circle are sent to investigate. When Diana Dawkins and Nicholas Colt discover the shocking truth, it’s clear the experiment must be stopped.\r\n\r\nWhat isn’t clear is if they’ll make it out alive.\r\n', 867, 4, 1, 1, 300, 1, 0, 20, 0, 0),
(3, 0, 'Sita - Warrior of Mithila', 'Immerse yourself in book 2 of the Ram Chandra series, based on the Ramayana, the story of Lady Sita, written by the multi-million bestselling Indian Author Amish; the author who has transformed Indian Fiction with his unique combination of mystery, mythology, religious symbolism and philosophy. In this book, you will follow Lady Sita\'s journey from an Adopted Child to the Prime Minister to finding her true calling. You will find all the familiar characters you have heard of, like Lord Ram and Lord Lakshman and see more of Lord Hanuman and many others from Mithila. You will also start discovering the true purpose of the Vayuputras and Malayaputras and their conflicting idealogies that leads to plot twists, politics and intrigue as they try to influence outcomes from behind the scenes.\r\n\r\nShe is the warrior we need. The Goddess we await.\r\nShe will defend Dharma. She will protect us.', 223, 3, 2, 1, 350, 1, 1, 14, 0, 0),
(4, 0, 'The Hostage (A Jon Roscoe Thriller)', 'James Patterson’s BookShots. Short, fast-paced, high-impact entertainment. \r\n\r\nThe grand opening of the world\'s most exclusive hotel: forty floors of breath-taking luxury. \r\n\r\nVIPs gather in London for the ultimate preview. But one uninvited guest plans to make this a day the city will never forget. \r\n\r\nGlobal Head of Security, Jon Roscoe, confronts a killer with a deadly timetable.', 103, 2, 3, 1, 144, 2, 1, 22, 0, 0),
(5, 0, 'The Tumor: A Non-Legal Thriller', 'John Grisham says THE TUMOR is the most important book he has ever written. In this short book, he provides readers with a fictional account of how a real, new medical technology could revolutionize the future of medicine by curing with sound.\r\n\r\nTHE TUMOR follows the present day experience of the fictional patient Paul, an otherwise healthy 35-year-old father who is diagnosed with a malignant brain tumor. Grisham takes readers through a detailed account of Paul’s treatment and his family’s experience that doesn’t end as we would hope. Grisham then explores an alternate future, where Paul is diagnosed with the same brain tumor at the same age, but in the year 2025, when a treatment called focused ultrasound is able to extend his life expectancy. \r\n\r\nFocused ultrasound has the potential to treat not just brain tumors, but many other disorders, including Parkinson’s, Alzheimer’s, hypertension, and prostate, breast and pancreatic cancer. \r\n\r\nFor more information or to order a free hard copy of the book, you can visit The Focused Ultrasound Foundation’s website. Here you will find a video of Grisham on the TEDx stage with the Foundation’s chairman and a Parkinson’s patient who brings the audience to its feet sharing her incredible story of a focused ultrasound “miracle.” \r\n\r\nReaders will get a taste of the narrative they expect from Grisham, but this short book will also educate and inspire people to be hopeful about the future of medical innovation. ', 200, 3, 4, 1, 380, 1, 0, 2, 0, 0),
(7, 0, 'Scion of Ikshvaku: An Epic adventure story book on the Ramayana', 'Ram Rajya. The Perfect Land.But perfection has a price. He paid that price.\r\n\r\n3400 BCE. INDIA\r\nAyodhya is weakened by divisions. A terrible war has taken its toll. The damage runs deep. The demon King of Lanka, Raavan, does not impose his rule on the defeated. He, instead, imposes his trade. Money is sucked out of the empire. The Sapt Sindhu people descend into poverty, despondency and corruption. They cry for a leader to lead them out of the morass. Little do they appreciate that the leader is among them. One whom they know. A tortured and ostracised prince. A prince they tried to break. A prince called Ram.\r\n\r\nHe loves his country, even when his countrymen torment him. He stands alone for the law. His band of brothers, his Sita, and he, against the darkness of chaos.\r\n\r\nWill Ram rise above the taint that others heap on him? Will his love for Sita sustain him through his struggle? Will he defeat the demon Lord Raavan who destroyed his childhood? Will he fulfil the destiny of the Vishnu?\r\n\r\nBegin an epic journey with Amish’s latest: the Ram Chandra Series.', 170, 2, 2, 1, 376, 2, 1, 23, 0, 0),
(9, 0, 'The Immortals of Meluha (Shiva Trilogy)', 'An intense story \'The Immortals of Meluha\' draws heavily from stories and legends of Hindu mythology that have been passed on from generation to generation.\r\n\r\nFirst book of the trilogy, the Immortals tale unfolds in Meluha, a land that is ruled by the Suryavanshi tribe that firmly believes in the prophecy of \'Neelkanth\' Shiva being their saviour. The Suryavanshi’s (Sun worshipers) are of the firm belief that it would be Shiva who would save them from the wrath of Chandravanshi’s (Moon worshipers).\r\n\r\nBlending mythology and philosophy drawn from Hindu traditions, the gripping narrative moves with speed to have Shiva step up to take it upon himself about banishing evil from society.\r\n\r\nAs the tribal leader of Meluha, somewhere in Tibet, Shiva decides to help the Suryavanshi\'s in their fight against the Chandravanshi, who have allied with the Nagas, a cursed tribe.\r\n\r\nAs the drama unfolds, Shiva, the tribal leader from Tibet, gets caught up between the two warring groups, where a realization dawns upon him of how his choice was affecting the war outcome as well as of aspirations of rising above the conflict and its actors begins to dominate the narrative.\r\n\r\nThe author has creatively woven the legend of Lord Shiva; His marriage to King Daksha\'s daughter Sati is this first part of the trilogy.\r\n\r\n\'Secret of Nagas\' and \'Oath of the Vayuputras\' the second and third part of the same narrative take the story forward as the first part ends with Shiva charging to save Sati from being taken captive by the Naga\'s.\r\n\r\nSpread out in 415 pages, \'The Immortals of Meluha\' was first published in 2011. After a slow start, the book soon turned a bestseller and more than two million copies have been sold. Till date it has been translated in fourteen languages.\r\n\r\n', 182, 2, 2, 1, 415, 1, 1, 23, 0, 0),
(10, 0, 'The Secret Of The Nagas (Shiva Trilogy-2) ', 'The Plot and The Characterisations\r\nIn this book, Amish describes how Shiva sets forth on a quest to destroy the Naga clan in order to avenge the death of his brother; since the common belief he has been presented with is that the Nagas are the root of all evil. The author takes us through a virtual tour of India as Shiva travels different lands and gathers a vast number of generic and non-generic experiences, all in the quest of saving a plagued kingdom. As he travels, he garners more friends and family and leaves a mark. Slowly, events start unfolding in such a manner that whatever beliefs the readers and Shiva too held in the previous book are tarnished. Revelations occur as the evil-doers have been showcased in a new light and the grey shades of the positive protagonists in the earlier book are exposed. The book is filled with nuanced wisdom and Shiva leaves the readers with the message that good and evil are two sides of the same coin; which is why we shouldn\'t judge people. As suspense builds, the climax ends with Shiva finally entering the Naga territory making for a nail-biting finish.\r\n\r\n', 191, 2, 2, 1, 394, 1, 1, 23, 0, 0),
(11, 0, 'Meluha Ke Mritunjay (Immortals of Meluha)', 'The Hindi translation of the popular Indian bestseller \'Immortals of Meluha’, \'Meluha Ke Mritunjay’ is set in 1900 BC, during the time of Indus Valley Civilization and revolves around the lives of the men who inhabited the land of Meluha back then—the \'Suryavanshi’.\r\n\r\nThe first part of the Shiva Trilogy, this book is about the legend of Lord Shiva and the Hindu concept of Karma. The story starts with the Suryavanshis being petrified of an impending disaster—their only source of water, River Saraswati, running dry. In addition to this, their neighbours Chandravanshis are also preparing an attack with the help of Nagas. The sole hope that sustains them is that of an age-old legend that promises their safety with the help of an unknown warrior.\r\n\r\nIs Shiva the warrior they had been waiting for since ages? Will he able to save him? Published in 2011, the novel provides an intriguing answer to all these and many more.', 142, 2, 2, 2, 472, 2, 0, 6, 0, 0),
(12, 0, 'The Whistler ', 'John Grisham is the master of the legal thriller and over 300 million copies of his books have been sold worldwide.\r\n• John Grisham was awarded the Harper Lee Prize for Legal Fiction, an accolade given annually to a published work of fiction that best exemplifies the positive role of lawyers in society and their power to effect change.\r\n• \'The best thriller writer alive\' -Ken Follett\r\n• \'John Grisham has perfected the art of cooking up convincing, fast-paced thrillers\' - Telegraph\r\n• \'Leaves one eager for more\' - Spectator\r\n• \'No one does it better than Grisham\' - Daily Telegraph\r\n• \'A master storyteller\' - Huffington Post\r\n\r\n\r\nThe most corrupt judge in US history. A young investigator with a secret informant. The electrifying new thriller. On the heels of the runaway success of Rogue Lawyer, John Grisham delivers the high-octane suspense that readers have come to expect from the master of the legal thriller. With his latest novel, John Grisham takes his irresistible blend of legal savvy and page-turning storytelling to a whole new level. Filled with an unforgettable cast of characters and Grisham\'s trademark twists and turns, readers will be kept guessing until the very last page. \'The best thriller writer alive\' Ken Follett\r\n.', 238, 3, 4, 1, 567, 2, 0, 4, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `fk1` (`sub_id`),
  ADD KEY `fk2` (`price_id`),
  ADD KEY `fk3` (`author_id`),
  ADD KEY `fk4` (`lang_id`),
  ADD KEY `fk5` (`company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`sub_id`) REFERENCES `sub_category` (`sub_id`),
  ADD CONSTRAINT `fk2` FOREIGN KEY (`price_id`) REFERENCES `price_range` (`price_id`),
  ADD CONSTRAINT `fk3` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `fk4` FOREIGN KEY (`lang_id`) REFERENCES `Language` (`lang_id`),
  ADD CONSTRAINT `fk5` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
