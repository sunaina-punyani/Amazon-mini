-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 12, 2017 at 09:51 PM
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
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(150) NOT NULL,
  `author_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `author_description`) VALUES
(1, 'Jude Hardin', 'Jude Hardin publishes thrillers in several different subgenres. He graduated from the University of Louisville in 1983 with an English degree, and currently lives and works in northeast Florida. When he\'s not pounding away at the computer keyboard, Jude can be found pounding away on his drums, playing tennis, reading, or juggling. You can learn more about Jude and his books at http: //judehardinbooks.com/ For periodic updates and special offers, please sign up for Jude\'s newsletter at http: //eepurl.com/zn1XD'),
(2, 'Amish Tripathi\r\n', 'Described as \'India\'s first literary popstar\' by world-renowned film director Shekhar Kapur, Amish\'s unique combination of crackling story-telling, religious symbolism and profound philosophies have made him an overnight publishing phenomenon, with spiritual guru Deepak Chopra hailing Amish\'s books as \'archetypal and stirring\'.\r\n\r\nAmish\'s books include the Shiva Trilogy (The Immortals of Meluha (2010); The Secret of the Nagas (2011); The Oath of the Vayuputras (2013)) and the Ram Chandra Series (Scion of Ikshvaku (2015)). His books have sold over 3.5 million copies with gross retail sales of over Rupees 100 crores. The Shiva Trilogy is the fastest selling book series in Indian publishing history. Scion of Ikshvaku was the highest selling book of 2015. His books have been translated into 19 Indian and International languages.\r\n\r\nAmish won various awards, including the Raymond Crossword Book Award 2015 for ‘Scion Of Ikshvaku’.\r\n\r\nForbes Magazine has listed Amish amongst the 100 most influential celebrities in India, four years in a row. He has also received the Society Young Achievers Award for literature in 2013, Man of the Year by Radio City, Communicator of the Year by PR Council of India, Dainak Bhaskar Reader’s Choice Awards and Pride of India award (Literature). Amish was also selected as an Eisenhower Fellow, a prestigious American programme for outstanding leaders from around the world.'),
(3, 'James Patterson\r\n', 'Detective Bree Stone received the anonymous call advising of the IED set to explode at a certain time and the race was on. Special Agent with the FBI, Ned Mahoney, Bree and Alex Cross co-ordinated the search for the bomber, with the dog squad joining in. But the calls continued and the bomber was as elusive as in the beginning.\r\n\r\nWhat was the motive for the attacks in Washington DC? And though no one had been hurt as yet, were the bomber’s irrational moves escalating? Would they locate the perpetrator before a tragedy of the worst kind occurred?\r\n\r\nDetective Cross is #24.5 in the Alex Cross series by James Patterson, and although it’s a novella, it’s an excellent, fully fledged and gritty thriller from start to finish. Another in his BookShots series, I thoroughly enjoyed this one and recommend it highly.\r\n'),
(4, 'John Grisham\r\n', 'John Grisham as a child dreamed of being a professional baseball player. After graduating from law school at Ole Miss in 1981, he went on to practice law for nearly a decade, specialising in criminal defense and personal injury litigation. One day, Grisham overheard the harrowing testimony of a twelve-year-old rape victim and was inspired to start a novel exploring what would have happened if the girl\'s father had murdered her assailants. Getting up at 5 a. m. every day to get in several hours of writing time before heading off to work, Grisham spent three years on A Time to Kill and finished it in 1987. His next novel, The Firm, spent 47 weeks on The New York Times bestseller list and became the bestselling novel of 1991. Since then, he has written one novel a year, including The Client, The Pelican Brief, The Rainmaker and The Runaway Jury. Today, Grisham has written a collection of stories, a work of non-fiction, three sports novels, five kids\' books and many legal thrillers. His work has been translated into 42 languages. He lives near Charlottesville, Virginia'),
(5, 'Savi Sharma', 'Savi Sharma is a simple girl from Surat who left her CA studies to become a Storyteller. She self-published her inspirational novel, \'Everyone has a Story\' which was acquired later by Westland Publishers. More than 100,000 copies of her debut novel were sold in less than four months, making it India\'s fastest selling debut novel. ‘This is Not Your Story’ is her second step on her mission to inspire and touch millions of lives.\r\nShe is also co-founder of motivational media blog \'Life and People\' where she writes about law of attraction, positivity, spirituality, traveling and storytelling.\r\nShe loves observing people in cafe where she often searches her stories. She has a secret list of 100 wishes which she wants to fulfil in this one life time. '),
(6, 'Arpit Vageria', 'Arpit Vageria is a bestselling author of two romance novels – I Still Think About You and Chockolate Sauce-Smooth. Dark. Sinful. Arpit also writes for the Indian television industry and has written stories and dialogues for many fiction and non-fiction television series and award functions. Hailing from Indore, he currently lives in Mumbai. He enjoys road trips, singing, playing pranks and adventurous sports.'),
(7, 'Vineet Bajpai', 'Vineet is a first-generation entrepreneur. At age 22 he started his company Magnon from a small shed. Today Magnon is among the largest digital agencies in the subcontinent and part of the Fortune 500 Omnicom Group.\r\n\r\nHe has led the global top-ten advertising agency TBWA as its India CEO. This made him perhaps the youngest ever CEO of a multinational advertising network in the country. He has won several entrepreneurship and corporate excellence awards, including the Entrepreneur of the Year 2016. He was recently listed among the 100 Most Influential People in India’s Digital Ecosystem. \r\nVineet’s second company talentrack is disrupting the media, entertainment and creative industry in India. It is the fastest-growing online hiring and networking platform for the sector. \r\nHe has written three bestselling management and inspirational books – Build From Scratch, The Street to the Highway and The 30 Something CEO. \r\nHe is an avid swimmer, a gaming enthusiast, a bonfire guitarist and a road-trip junkie. He is 39.'),
(8, 'Jane Austen', 'Jane Austen was born on December 16, 1775 at Steventon near Basingstoke, the seventh child of the rector of the parish. She lived with her family at Steventon until they moved to Bath when her father retired in 1801. After his death in 1805, she moved around with her mother; in 1809, they settled in Chawton, near Alton, Hampshire. Here she remained, except for a few visits to London, until in May 1817 she moved to Winchester to be near her doctor. There she died on July 18, 1817. As a girl Jane Austen wrote stories, including burlesques of popular romances. Her works were only published after much revision, four novels being published in her lifetime. These are Sense and Sensibility (1811), Pride and Prejudice (1813), Mansfield Park (1814) and Emma(1816). Two other novels, Northanger Abbey and Persuasion, were published posthumously in 1818 with a biographical notice by her brother, Henry Austen, the first formal announcement of her authorship. Persuasion was written in a race against failing health in 1815-16. She also left two earlier compositions, a short epistolary novel, Lady Susan, and an unfinished novel, The Watsons. At the time of her death, she was working on a new novel, Sanditon, a fragmentary draft of which survives.\r\n'),
(9, 'Dale Carneige', 'Dale Carnegie was an American pioneer of the development of personal business skills, self-confidence and motivational techniques. His work has touched the lives of millions of readers around the world.\r\n\r\n'),
(10, 'Robert Kiyosaki', 'Robert Toru Kiyosaki is an American Businessman, investor and author who shot to fame for his Rich Dad Poor Dad series. Originally from Hawaii, he served as a Marine corps pilot in the Vietnam War and later started a company that first marketed Velcro surfer wallets. After going bankrupt with his first two companies, he started Cashflow Technologies, Inc. He is also a motivational and financial speaker and advisor.\r\n\r\nISBN-10: 1612680062'),
(11, 'Stephen King\r\n', '\r\nOne of the greatest storytellers of our time\r\n\r\nA writer of excellence . . . King is one of the most fertile storytellers of the modern novel.\r\n\r\n'),
(12, 'NCERT', 'A must buy for upsc aspirants...these people are asking direct questions from ncert...i recommend ncert for history and geography( class 6-12) as well as science (class 6,7,8)...found it in a very good condition');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
