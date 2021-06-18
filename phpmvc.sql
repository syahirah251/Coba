-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2021 pada 12.07
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `nama_admin` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `nama_admin`, `email`) VALUES
(1, 'Dhia Hayyu Syahirah', 'syahirahirah251@gmail.com'),
(2, 'Candra Wulan A', 'candracandra2009@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `admin_id` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `contain` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`post_id`, `admin_id`, `title`, `contain`) VALUES
(1, 2, '\"EDUCATION WILL HELP US BUILD A FUTURE.\"', 'The young Afghan women on the plane that touched down at Almaty airport in Kazakhstan were all eager to start an exciting new chapter in their lives.\r\n\r\nThey had come from all over Afghanistan, including the remote and rural areas, to take part in a study abroad scholarship programme.\r\nThey began their stay in Kazakhstan with an eight-month English course, which will prepare them to go on next year to further study in Kazakhstan universities. Some are attending university for the first time, others are pursuing advanced degrees.\r\n“This is the most beautiful moment of my life, an excellent opportunity to fulfill my dream of becoming an economist,” said Jamila.\r\n\r\nWith the support of the European Union, UNDP has begun an initiative to allow Afghan women to study in neighbouring Kazakhstan and Uzbekistan. Most Afghanis are under the age of 24 and good jobs are rare because job creation has been overtaken by population growth.\r\nThe initiative aims to provide educational opportunities for Afghan women, who face far greater barriers than men to education and employment.\r\n\r\n“Making sure girls and women get quality education is a key priority for the EU and at the core of the new EU Central Asia Strategy and the EU Afghanistan Strategy. We should recognize now and always, that gender equality and empowerment of women and girls are not only fundamental human rights but also smart policy,” said Raffaella Iodice, Head of Unit, Middle East, Central Asia, South Asia, European Commission. These young women are determined to make the most of their new chances. “This scholarship is a rebirth to take my life into my own hands and achieve the ambitious goals I set for myself. I’m sure that if I graduate from this university or any other university in Kazahkstan I will become someone who will have an ability to work anywhere,” said Freshta.'),
(2, 1, 'The Women Who Want To Be Free', 'The young Afghan women on the plane that touched down at Almaty airport in Kazakhstan were all eager to start an exciting new chapter in their lives.\r\n\r\nThey had come from all over Afghanistan, including the remote and rural areas, to take part in a study abroad scholarship programme.\r\nThey began their stay in Kazakhstan with an eight-month English course, which will prepare them to go on next year to further study in Kazakhstan universities. Some are attending university for the first time, others are pursuing advanced degrees.\r\n“This is the most beautiful moment of my life, an excellent opportunity to fulfill my dream of becoming an economist,” said Jamila.\r\n\r\nWith the support of the European Union, UNDP has begun an initiative to allow Afghan women to study in neighbouring Kazakhstan and Uzbekistan. Most Afghanis are under the age of 24 and good jobs are rare because job creation has been overtaken by population growth.\r\nThe initiative aims to provide educational opportunities for Afghan women, who face far greater barriers than men to education and employment.\r\n\r\n“Making sure girls and women get quality education is a key priority for the EU and at the core of the new EU Central Asia Strategy and the EU Afghanistan Strategy. We should recognize now and always, that gender equality and empowerment of women and girls are not only fundamental human rights but also smart policy,” said Raffaella Iodice, Head of Unit, Middle East, Central Asia, South Asia, European Commission. These young women are determined to make the most of their new chances. “This scholarship is a rebirth to take my life into my own hands and achieve the ambitious goals I set for myself. I’m sure that if I graduate from this university or any other university in Kazahkstan I will become someone who will have an ability to work anywhere,” said Freshta.'),
(3, 1, 'Young Libyan entrepreneurs help children learn online', 'As in most of the Arab world, the Libyan government shut schools to combat the coronavirus COVID-19, and teachers, parents, and students are scrambling not to lose the rest of the school year.\r\n\r\nVery few schools in the Arab world were focussed on online education pre-COVID-19, but in Libya, entrepreneurs Aziza Al-Hassi, Tufaha Suhaim and Amine Kashroud began taking the first steps in 2018.\r\n\r\nThat year, with the support of the European Union, UNDP and Tatweer Research launched the Tatweer Entrepreneurship Development Centre (TEC) to promote Libyan entrepreneurship. Programmes include business incubators, joint workspaces, business and technology training, and startup funding.\r\n\r\nImproving children\'s education\r\n\r\nBecause of it Aziza Al-Hassi, Tufahah Suhaim and Amine Kashroud created, “School Connect,” which aimed at connecting teachers and parents to follow up on the children’s education.\r\n\r\nWith funds from the European Union, UNDP and Tatweer Research awarded the team a grant to empower women in conflict-affected regions to create sustainable businesses. With this support, “School Connect” became “Panda” and has registered nearly 10,000  students and parents of 30 schools.\r\n\r\n“We were attracted to the idea of building a small company that could create job opportunities in this harsh environment,\" said Aziza.\r\n\r\nThe team was aware of the challenges that students, parents and teachers were facing with educational in Libya,  they realized that communication was key. In many cases, information regarding a student’s behavioural and academic performance was not reaching their parents, so Panda created a bridge. And they’ve come up with other ways that schools can cut down on unnecessary costs and tasks.\r\n\r\nThe shared vision and goals of Panda’s founders were the main impetus towards its establishment in the Libyan market. “This was a very new business concept and we were not totally sure that the school administrations and parents would endorse this method, we were concerned that they might resist Panda’s advanced technological solutions,” Aziza said.\r\n\r\nPractical solutions\r\n\r\nHeadmaster Mustafa Belhassan was one of the first supporters of Panda. After several meetings with the team he decided to start officially integrating the programme at his school. “I was impressed by the idea from the beginning and was surprised to find young people possessing such capabilities with practical technical solutions to the problems of education,” he says.\r\n\r\n\"Mr Mustafa is a passionate person who loves developing technologies,” Aziza says. “Despite the complicated circumstances, he runs an excellent and very well-organized institution, but he was suffering from the difficulty of transferring information effectively. Traditional methods simply could not keep up with the amount of information that had to be sent, which meant parents lacked the whole picture of their children’s progress.”\r\n\r\nBecause Panda is a new concept in Libya, the founders launched an awareness campaigns on the importance of communication between parents of students and schools, and the tremendous role that technology can play. Their efforts however met great challenges because people in Libya are unaccustomed to online platforms other than the typical social media, such as Facebook and Instagram and they were afraid the new system would be too complicated. To meet their needs Panda team started holding seminars in schools to familiarize parents with their service.\r\n\r\nAdapting to COVID-19\r\n\r\nAs the COVID-19 epidemic spread in Libya, several educational institutions switched to online teaching and the Panda team had to work intensively to adapt.\r\n\r\n\"We had to take a new step to automate our service so it can become suitable for transferring the academic content,” Aziza said. “We started organizing the process of sending educational content to the schools we work with, in order to reach students at home. We also opened the door for any student; they can download the content even when the school is not register with Panda.\"\r\n\r\nThe Panda team has expanded considerably since it began, creating job opportunities for young women and men. They have organized 40 workshops and provided 65 training sessions to schools.\r\n\r\nThey are committed to maintain their goal of reaching 60 schools this year.\r\n\r\nA technology curriculum\r\n\r\n\"We do not stop here,” says Amine. “We\'ve created a mini curriculum that focuses on technology and we are giving it to all schools involved with Panda. Each school puts forward a team to participate in our trainings and compete against each other”.\r\n\r\nThe founders of the Panda continue to provide students with a greater number of lessons to avoid the interruption of their learning process. “Our company hopes, in the long run, to become a standard for educational technology in the country and the region,\" said Tufaha.\r\n\r\nTEC has inspired many young men and women to establish their own businesses, adopt technology and keep pace with global developments, with the overall objective of raising the private sector in Libya, especially in the light of the new challenges presented by a global pandemic.\r\n\r\n“The role of the TEC Incubator team in providing support and guidance was crucial for Panda to adjust to the challenges of COVID-19 in the field of education, and we continue counting on its support to achieve all our business goals,” said Amine.'),
(4, 2, 'GROUNDBREAKING DATA TACKLES CHILD MALNUTRITION IN HONDURAS', 'When young mother Silvia Barrera brings her son to the community health centre in Tomalá, Honduras, she is one of many parents who pay close attention to her child’s growth. “The last time he weighed five kilos, now he weighs six,” she says.\r\nTomalá is in Lempira in western Honduras, which has the highest rate of chronic child malnutrition in the country and well above average for Latin America. The region is also experiencing increased and longer-lasting droughts from rising temperatures, making it harder for people to grow and sell crops to feed their families.\r\nChild malnutrition is a complex issue rooted in social, economic and environmental factors. “The challenge for us as a community is to join forces,” says Dr. Teresa de Jesus, who works at the health centre. “Focusing only on health will not work, family income and housing conditions also limit a child’s development and increase the risk for undernourishment.”\r\n\r\nTo support families like Silvia’s, Honduras is partnering with the UN to design integrated development solutions that tackle the many issues which contribute to malnutrition, boosting progress across the Sustainable Development Goals (SDGs).\r\nIntegrated data analysis\r\nUNDP provides a key contribution with the ‘SDG Combo’ — that address all aspects of a multi-dimensional development challenge like child malnutrition.\r\nGroundbreaking ways of collecting and combining data underpin this work. Feedback from people on services, data from NGOs, satellite data and the so-called geo-referenced administrative registries that collect hundreds of exclusion indicators to help map the needs of millions of people.\r\nWith this comprehensive view, the ‘combo’ zooms in on the deepest pockets of poverty where people are at risk of being left behind. In Lempira, this analysis uncovers how education, land degradation, infrastructure, housing and job opportunities are connected and how they lead to undernourishment.\r\n\r\nThis is how Honduras has put in place social protection policies for children and their families. The systems monitor the child’s health and respond to their needs, for example through improving housing conditions and supporting families with essential resources like refrigerators to preserve food.\r\nThis is how Olga’s house was selected to be equipped with a new floor and ceiling. “I was so worried the roof would fall. But with this new home, I can save on maintenance and spend more on my children,” she says.\r\nEsperanza López, mayor of Tomalá, believes in this integrated approach to fighting child malnutrition. Her municipality has adopted a strategic development plan that is aligned with the 2030 Agenda and works with a ‘combo’ of actions to make sure every child is well nourished.\r\n“What is our dream? It is to free our people from the poverty trap, because if we do that, we can change their lives forever,” she says.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `admin_id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `admin_id`, `username`, `password`) VALUES
(1, 1, 'syahirah1', '123'),
(2, 0, 'wulan2', '456');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_fk` FOREIGN KEY (`admin_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
