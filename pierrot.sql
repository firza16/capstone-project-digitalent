-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 05:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pierrot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'firza', '123');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `author`, `deskripsi`, `gambar`) VALUES
(1, 'Naruto Shippuden', '2007', 'It has been two and a half years since Naruto Uzumaki left Konohagakure, the Hidden Leaf Village, for intense training following events which fueled his desire to be stronger. Now Akatsuki, the mysterious organization of elite rogue ninja, is closing in on their grand plan which may threaten the safety of the entire shinobi world.\r\n\r\nAlthough Naruto is older and sinister events loom on the horizon, he has changed little in personality—still rambunctious and childish—though he is now far more confident and possesses an even greater determination to protect his friends and home. Come whatever may, Naruto will carry on with the fight for what is important to him, even at the expense of his own body, in the continuation of the saga about the boy who wishes to become Hokage.', 'naruto.jpg'),
(5, 'Kingdom', '2012', 'China’s Warring States period, a raging dragon that would raze the land for 500 years, saw many kingdoms rise and fall, making way for the next generation of kings and generals to fight for supremacy. Eventually, seven powerful states emerged from the endless cycle of warfare.\r\n\r\nIn the kingdom of Qin, Xin, a war-orphaned slave, trains vigorously with fellow slave and best friend, Piao, who shares his proud dream of one day becoming a Great General of the Heavens. However, the two are suddenly forced to part ways when Piao is recruited to work in the royal palace by a retainer of the King.\r\n\r\nAfter a fierce coup d\'état unfolds, Piao returns to Xin, half dead, with a mission that will lead him to a meeting with China\'s young King, Ying Zheng, who bears a striking resemblance to Piao. Kingdom follows Xin as he takes his first steps into the great blood-soaked pages of China\'s history. He must carve his own path to glory on his long quest to become a Great General of the historic Seven Warring States.', 'kingdom.jpg'),
(6, 'Divine Gate', '2016', 'The legend of the Divine Gate is a story told to young children that depicts the merging of the living world, the heavens, and the underworld. \"Adapters\"—people born with unique elemental abilities gifted to them from the union of these worlds—formed the World Council, an organization which controls the chaos of the Gate by portraying its legend as nothing more than a myth. These Adapters train in a special academy owned by the World Council that allows the students to hone their skills.\r\n\r\nAoto, a teenage boy with exceptional water powers and a tragic past, rejects the offer to join the academy numerous times—until he is successfully pressured by the energetic wind user Midori and stubborn fire user Akane. Together, with the World Council and their mysterious leader Arthur, they seek out the Gate in the hopes of uncovering the truth. But in order to reach their goals, they must unite and overcome their own despair while dealing with behind the scene mischief.', 'gate.jpg'),
(13, 'Tokyo Ghoul', '2014', 'A sinister threat is invading Tokyo: flesh-eating \"ghouls\" who appear identical to humans and blend into their population. Reserved college student Ken Kaneki buries his nose in books and avoids the news of the growing crisis. However, the appearance of an attractive woman named Rize Kamishiro shatters his solitude when she forwardly asks him on a date.\r\n\r\nWhile walking Rize home, Kaneki discovers she isn\'t as kind as she first appeared, and she has led him on with sinister intent. After a tragic struggle, he later awakens in a hospital to learn his life was saved by transplanting the now deceased Rize\'s organs into his own body.\r\n\r\nKaneki\'s body begins to change in horrifying ways, and he transforms into a human-ghoul hybrid. As he embarks on his new dreadful journey, Kaneki clings to his humanity in the evolving bloody conflict between society\'s new monsters and the government agents who hunt them.', 'tg2.jpg'),
(14, 'Boruto', '2017', 'Following the successful end of the Fourth Shinobi World War, Konohagakure has been enjoying a period of peace, prosperity, and extraordinary technological advancement. This is all due to the efforts of the Allied Shinobi Forces and the village\'s Seventh Hokage, Naruto Uzumaki. Now resembling a modern metropolis, Konohagakure has changed, particularly the life of a shinobi. Under the watchful eye of Naruto and his old comrades, a new generation of shinobi has stepped up to learn the ways of the ninja.\r\n\r\nBoruto Uzumaki is often the center of attention as the son of the Seventh Hokage. Despite having inherited Naruto\'s boisterous and stubborn demeanor, Boruto is considered a prodigy and is able to unleash his potential with the help of supportive friends and family. Unfortunately, this has only worsened his arrogance and his desire to surpass Naruto which, along with his father\'s busy lifestyle, has strained their relationship. However, a sinister force brewing within the village may threaten Boruto\'s carefree life.\r\n\r\nNew friends and familiar faces join Boruto as a new story begins.', 'boruto2.jpg'),
(15, 'Black Clover', '2017', 'Asta and Yuno were abandoned at the same church on the same day. Raised together as children, they came to know of the \"Wizard King\"—a title given to the strongest mage in the kingdom—and promised that they would compete against each other for the position of the next Wizard King. However, as they grew up, the stark difference between them became evident. While Yuno is able to wield magic with amazing power and control, Asta cannot use magic at all and desperately tries to awaken his powers by training physically.\r\n\r\nWhen they reach the age of 15, Yuno is bestowed a spectacular Grimoire with a four-leaf clover, while Asta receives nothing. However, soon after, Yuno is attacked by a person named Lebuty, whose main purpose is to obtain Yuno\'s Grimoire. Asta tries to fight Lebuty, but he is outmatched. Though without hope and on the brink of defeat, he finds the strength to continue when he hears Yuno\'s voice. Unleashing his inner emotions in a rage, Asta receives a five-leaf clover Grimoire, a \"Black Clover\" giving him enough power to defeat Lebuty. A few days later, the two friends head out into the world, both seeking the same goal—to become the Wizard King!', 'bc2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `tanggal`, `deskripsi`, `gambar`) VALUES
(1, 'Regarding the Decline of the Memorial Visit on July 18', '2024-07-10', 'We would like to express our deepest gratitude for your ongoing kindness and support.\r\n\r\nAlthough it has been four years since the tragic incident at our 1st Studio, our grief has not yet healed. However, the unwavering support from our fans has propelled us forward, enabling us to continue producing animation works. We sincerely thank each and every one of you for this support, as without it, we would not be where we are today.\r\n\r\nWe had originally considered gathering for a memorial on July 18th, but once again, we have made the decision to stream the memorial video on our official Youtube channel, just as we did last year. This choice was made with everyone\'s safety in mind and to prevent any confusion regarding the premises of the 1st Studio and our Company. We kindly request your understanding.\r\n\r\nDate: Tuesday, July 18, 2023\r\nTime: 10:30AM-10:40AM(JST)\r\nA moment of silence will be observed at 10:35AM(JST)\r\nStreamed on KyoaniChannel\r\nhttps://youtu.be/xnpxzYGeOLg\r\nWe respectfully request that you refrain from visiting the premises.\r\nFlowers and monetary condolence gifts are appreciated but respectfully declined.\r\nThe memorial video will be available for replay throughout July 18.\r\nThe stream will be in Japanese only.\r\nAdditional request:\r\nWe kindly and sincerely request your cooperation in refraining from visiting the premises of the 1st Studio and its surrounding areas, regardless of the date.\r\n\r\nWe deeply appreciate your understanding and cooperation.', 'pierrot.jpg'),
(2, 'Notice on The Closure of [Kyoani&DoShop!] Physical Store', '2024-07-11', 'We have been temporarily closed the physical merch shop [Kyoani&DoShop!] in Kyoto; however, we have determined to close the business on the physical store on the 14th of March 2022.\r\n\r\nIt was a tough decision for us to close the space where many fans and friends had given us sincere, warm thoughts and sympathy. We now have more staffs joined, shared with the same vision. Therefore, we determined to reconstruct the store space into a workplace to provide more sufficient work and meet the fans\' requests. We truly appreciate your kind understanding.\r\n\r\nBesides this, the [Kyoani Shop! Online] will remain open as usual. We continue to look forward to your access to the online shop.\r\n\r\nThank you always for your continued support and courteous attention for [Kyoto Animation] and [Kyoani Shop!].', 'pierrot.jpg'),
(4, 'Requests regarding the premises of Kyoto Animation 1st Studio and the surrounding area', '2024-07-11', 'Any entry into the premises of Kyoto Animation 1st Studio is prohibited without permission.\r\nSince the vicinity is a residential area, we ask for your cooperation in not disturbing the residents.\r\n\r\nIn particular, visitors with no relation to the community are asked to refrain from the following acts on or around the premises:\r\n\r\n-Leaving flowers, food, flammable items, trash, etc.\r\n-Parking and stopping of cars and motorcycles\r\n-Stopping and sitting for prolonged periods of time (or in front of the site)\r\n-Shooting of videos and photos\r\n-Any other activities that violate daily manners.\r\nWe deeply thank you for your cooperation and understanding.', 'pierrot.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
