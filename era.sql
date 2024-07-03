-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mer. 03 juil. 2024 à 19:39
-- Version du serveur : 8.0.37
-- Version de PHP : 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `era`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `title` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `slug` varchar(128) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`title`, `user_mail`, `content`, `slug`, `id`) VALUES
('10 destinations pour digital nomades', 'mariotti.camille.alexandre@gmail.com', '<h2 dir=\"ltr\">Explore les meilleurs pays pour travailler &agrave; distance</h2>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\"><strong>En 2024</strong>, le mode de vie des <strong>digital nomade</strong>s continue de gagner en popularit&eacute;. Travailler &agrave; distance tout en explorant le monde est devenu une r&eacute;alit&eacute; pour de nombreux professionnels. Voici les <strong>10 destinations incontournables</strong> pour les <strong>digital nomades en 2024</strong>, avec des conseils sur les visas, les co&ucirc;ts de la vie et les communaut&eacute;s de nomades.</p>\r\n<p dir=\"ltr\"><strong>Mouv\'up</strong> t&rsquo;accompagne quelle que soit ta <strong>destination</strong>.</p>\r\n<p dir=\"ltr\">Nous sommes &agrave; tes c&ocirc;t&eacute;s partout dans le monde, &agrave; tout instant du jour ou de la nuit.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">D&eacute;couvre les 10 destinations incontournables pour les digital nomades en 2024 :</h2>\r\n<p dir=\"ltr\">1. Bali, Indon&eacute;sie :</p>\r\n<p dir=\"ltr\">Visa : Visa de touriste de 30 jours renouvelable ou visa de travail.</p>\r\n<p dir=\"ltr\">Co&ucirc;t de la vie : Environ 1 200 &euro; par mois.</p>\r\n<p dir=\"ltr\">Communaut&eacute; de nomades : Ubud et Canggu sont des hotspots avec de nombreux espaces de coworking.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">2. Lisbonne, Portugal :</p>\r\n<p dir=\"ltr\">Visa : Visa de travail ind&eacute;pendant ou visa de r&eacute;sidence temporaire.</p>\r\n<p dir=\"ltr\">Co&ucirc;t de la vie : Environ 1 500 &euro; par mois.</p>\r\n<p dir=\"ltr\">Communaut&eacute; de nomades : Forte pr&eacute;sence de digital nomades, nombreux &eacute;v&eacute;nements et meetups.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">3. Chiang Mai, Tha&iuml;lande :</p>\r\n<p dir=\"ltr\">Visa : Visa de touriste de 60 jours renouvelable ou visa de travail.</p>\r\n<p dir=\"ltr\">Co&ucirc;t de la vie : Environ 800 &euro; par mois.</p>\r\n<p dir=\"ltr\">Communaut&eacute; de nomades : L&rsquo;une des plus grandes communaut&eacute;s de nomades au monde.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">4. Medell&iacute;n, Colombie :</p>\r\n<p dir=\"ltr\">Visa : Visa de touriste de 90 jours renouvelable ou visa de travail.</p>\r\n<p dir=\"ltr\">Co&ucirc;t de la vie : Environ 1 000 &euro; par mois.</p>\r\n<p dir=\"ltr\">Communaut&eacute; de nomades : Espaces de coworking et &eacute;v&eacute;nements r&eacute;guliers.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">5. Mexico City, Mexique :</p>\r\n<p dir=\"ltr\">Visa : Visa de touriste de 180 jours ou visa de travail.</p>\r\n<p dir=\"ltr\">Co&ucirc;t de la vie : Environ 1 200 &euro; par mois.</p>\r\n<p dir=\"ltr\">Communaut&eacute; de nomades : Nombreux espaces de coworking et une sc&egrave;ne culturelle dynamique.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">6. Tbilissi, G&eacute;orgie :</p>\r\n<p dir=\"ltr\">Visa : Visa de touriste de 365 jours.</p>\r\n<p dir=\"ltr\">Co&ucirc;t de la vie : Environ 700 &euro; par mois.</p>\r\n<p dir=\"ltr\">Communaut&eacute; de nomades : Croissante, avec de nombreux &eacute;v&eacute;nements et espaces de coworking.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">7. Budapest, Hongrie :</p>\r\n<p dir=\"ltr\">Visa : Visa de travail ind&eacute;pendant ou visa de r&eacute;sidence temporaire.</p>\r\n<p dir=\"ltr\">Co&ucirc;t de la vie : Environ 1 200 &euro; par mois.</p>\r\n<p dir=\"ltr\">Communaut&eacute; de nomades : Forte pr&eacute;sence de digital nomades, nombreux &eacute;v&eacute;nements et meetups.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">8. Ho Chi Minh City, Vietnam :</p>\r\n<p dir=\"ltr\">Visa : Visa de touriste de 30 jours renouvelable ou visa de travail.</p>\r\n<p dir=\"ltr\">Co&ucirc;t de la vie : Environ 900 &euro; par mois.</p>\r\n<p dir=\"ltr\">Communaut&eacute; de nomades : Espaces de coworking et une sc&egrave;ne dynamique.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">9. Barcelone, Espagne :</p>\r\n<p dir=\"ltr\">Visa : Visa de travail ind&eacute;pendant ou visa de r&eacute;sidence temporaire.</p>\r\n<p dir=\"ltr\">Co&ucirc;t de la vie : Environ 1 800 &euro; par mois.</p>\r\n<p dir=\"ltr\">Communaut&eacute; de nomades : Nombreux &eacute;v&eacute;nements et espaces de coworking.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">10. Cape Town, Afrique du Sud :</p>\r\n<p dir=\"ltr\">Visa : Visa de touriste de 90 jours renouvelable ou visa de travail.</p>\r\n<p dir=\"ltr\">Co&ucirc;t de la vie : Environ 1 200 &euro; par mois.</p>\r\n<p dir=\"ltr\">Communaut&eacute; de nomades : Croissante, avec de nombreux &eacute;v&eacute;nements et espaces de coworking.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Pour conclure, ces destinations offrent un &eacute;quilibre parfait entre travail et exploration.</h2>\r\n<p dir=\"ltr\">Que tu sois &agrave; la recherche de plages paradisiaques, de villes dynamiques ou de paysages &eacute;poustouflants, il y a une <strong>destination</strong> pour chaque <strong>digital nomade en 2024</strong>.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">D&eacute;couvre notre article sur Comment organiser un <strong>voyage</strong> d&rsquo;affaires efficace en tant que <strong>digital nomade</strong>.</p>\r\n<p>&nbsp;</p>', '10-destinations-pour-digital-nomades', 6),
('Black Friday Digital Nomades', 'mariotti.camille.alexandre@gmail.com', '<h1 dir=\"ltr\">Black Friday Voyage : Les meilleures promotions pour partir &agrave; l&rsquo;aventure</h1>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Un article sur les meilleures offres de voyage pendant le Black Friday :</h2>\r\n<p dir=\"ltr\">Le <strong>Black Friday</strong> est une excellente occasion de trouver des <strong>promotions</strong> sur les <strong>voyages</strong>. Cet article pr&eacute;sente les <strong>meilleures</strong> <strong>offres </strong>de <strong>voyage</strong> pendant le <strong>Black Friday</strong>, avec des astuces pour trouver les <strong>meilleures promotions</strong> et partir &agrave; l&rsquo;aventure &agrave; moindre co&ucirc;t.</p>\r\n<p dir=\"ltr\"><strong>Mouv\'up</strong> offre &eacute;galement des promotions &agrave; l&rsquo;occasion du <strong>Black Friday</strong>, ne manquez pas le prochain <strong>Black Friday</strong> le <em>Vendredi 29 Novembre 2024</em>.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Les meilleures promotions de voyage pendant le Black Friday :&nbsp;</h2>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Vols : De nombreuses compagnies a&eacute;riennes proposent des r&eacute;ductions importantes sur les billets d&rsquo;avion pendant le Black Friday. Surveillez les offres de compagnies comme Air France, Emirates et Qatar Airways.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">H&ocirc;tels : Les cha&icirc;nes h&ocirc;teli&egrave;res et les plateformes de r&eacute;servation comme Booking.com et Expedia offrent des r&eacute;ductions sur les s&eacute;jours dans des h&ocirc;tels du monde entier.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">S&eacute;jours tout compris : Les agences de voyage et les plateformes comme Lastminute.com et Voyage Priv&eacute; proposent des <strong>offres all inclusive</strong> &agrave; des prix r&eacute;duits.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Circuits touristiques : Les op&eacute;rateurs de circuits touristiques comme G Adventures et Intrepid Travel offrent des r&eacute;ductions sur leurs circuits pendant le Black Friday.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Astuces pour trouver les meilleures promotions :&nbsp;</h2>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Pr&eacute;parer &agrave; l&rsquo;avance : Faites une liste des destinations et des services que tu souhaites r&eacute;server et surveillez les <strong>offres</strong> &agrave; l&rsquo;avance.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">S&rsquo;inscrire aux newsletters : Abonne-toi aux newsletters des compagnies a&eacute;riennes, des h&ocirc;tels et des agences de voyage pour &ecirc;tre inform&eacute; des promotions en avant-premi&egrave;re.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Utiliser des comparateurs de prix : Utilise des comparateurs de prix comme Kayak et Skyscanner pour trouver les meilleures offres sur les vols et les h&ocirc;tels.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">&Ecirc;tre flexible : Sois flexible sur les dates et les destinations pour profiter des meilleures promotions.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Pour conclure :</h2>\r\n<p dir=\"ltr\">Le <strong>Black Friday</strong> est une opportunit&eacute; id&eacute;ale pour trouver des promotions sur les <strong>voyages </strong>et partir &agrave; l&rsquo;aventure &agrave; moindre co&ucirc;t.</p>\r\n<p dir=\"ltr\">En suivant les astuces ci-dessus, tu peux maximiser tes &eacute;conomies et profiter de <strong>voyages </strong>inoubliables.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">D&eacute;couvre notre article sur <strong>Comment organiser</strong> un <strong>voyage surprise</strong> pour un <strong>digital nomade</strong>.</p>\r\n<p>&nbsp;</p>', 'black-friday-digital-nomades', 11),
('Circuits touristiques Digital Nomades', 'mariotti.camille.alexandre@gmail.com', '<h1 dir=\"ltr\">Les circuits touristiques &agrave; ne pas manquer pour les digital nomades</h1>\r\n<p dir=\"ltr\">&nbsp;</p>\r\n<h2 dir=\"ltr\">Une s&eacute;lection des meilleurs circuits touristiques adapt&eacute;s digital nomades :</h2>\r\n<p dir=\"ltr\">Les <strong>digital nomades</strong> aiment explorer de nouvelles destinations tout en travaillant &agrave; distance. Voici une s&eacute;lection des <strong>meilleurs circuits touristiques</strong> adapt&eacute;s aux <strong>digital nomades</strong>, avec des recommandations de <strong>destinations</strong> et d&rsquo;activit&eacute;s.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Mouv\'up t\'accompagne o&ugrave; que tu sois dans le monde, il n&rsquo;y a aucune limite.</h2>\r\n<p dir=\"ltr\">1. Circuit en Asie du Sud-Est :</p>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Destinations : Tha&iuml;lande, Vietnam, Cambodge, Laos.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Activit&eacute;s : Visites de temples, plages paradisiaques, randonn&eacute;es, exploration de march&eacute;s locaux.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Avantages : Co&ucirc;t de la vie abordable, communaut&eacute;s de nomades actives, paysages vari&eacute;s.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">2. Circuit en Europe de l&rsquo;Est :</p>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Destinations : Hongrie, R&eacute;publique Tch&egrave;que, Pologne, Roumanie.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Activit&eacute;s : Visites de villes historiques, ch&acirc;teaux, parcs nationaux, festivals culturels.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Avantages : Richesse culturelle, infrastructures modernes, co&ucirc;t de la vie raisonnable.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">3. Circuit en Am&eacute;rique du Sud :</p>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Destinations : Colombie, P&eacute;rou, Argentine, Chili.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Activit&eacute;s : Randonn&eacute;es dans les Andes, visites de sites arch&eacute;ologiques, d&eacute;gustation de vins, exploration de villes color&eacute;es.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Avantages : Diversit&eacute; des paysages, accueil chaleureux, co&ucirc;t de la vie abordable.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">4. Circuit en Oc&eacute;anie :</p>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Destinations : Australie, Nouvelle-Z&eacute;lande, Fidji.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Activit&eacute;s : Surf, plong&eacute;e, randonn&eacute;es, exploration de parcs nationaux.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Avantages : Beaut&eacute; naturelle, infrastructures de qualit&eacute;, nombreuses activit&eacute;s de plein air.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">5. Circuit en Afrique :</p>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Destinations : Afrique du Sud, Kenya, Tanzanie, Maroc.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Activit&eacute;s : Safaris, visites de villes historiques, plages, randonn&eacute;es.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Avantages : Richesse culturelle, diversit&eacute; des paysages, exp&eacute;riences uniques.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Pour conclure :</h2>\r\n<p dir=\"ltr\">Ces<strong> circuits touristiques</strong> offrent aux<strong> digital nomades</strong> l&rsquo;opportunit&eacute; de d&eacute;couvrir de nouvelles cultures et paysages tout en continuant &agrave; travailler &agrave; distance.</p>\r\n<p dir=\"ltr\">Choisis le circuit qui correspond le mieux &agrave; tes int&eacute;r&ecirc;ts et pr&eacute;pares-toi &agrave; vivre des aventures inoubliables.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">D&eacute;couvre notre article sur Les <strong>h&ocirc;tels les plus accueillants</strong> pour les <strong>digital nomades</strong> : Notre <strong>top 10</strong>.</p>\r\n<p>&nbsp;</p>', 'circuits-touristiques-digital-nomades', 13),
('Comparatif / Avis : Meilleures agences', 'mariotti.camille.alexandre@gmail.com', '<h1 dir=\"ltr\">Les meilleures agences de voyage pour digital nomades : Comparatif et avis</h1>\r\n<p dir=\"ltr\">&nbsp;</p>\r\n<h2 dir=\"ltr\">Analyse des agences de voyage sp&eacute;cialis&eacute;es pour les digital nomades :</h2>\r\n<p dir=\"ltr\">Les <strong>digital nomades </strong>ont des besoins sp&eacute;cifiques en mati&egrave;re de <strong>voyage</strong>. Voici une analyse des <strong>meilleures agences de voyage </strong>sp&eacute;cialis&eacute;es pour les <strong>digital nomades</strong>, avec des recommandations et des <strong>retours d&rsquo;exp&eacute;rience</strong>.</p>\r\n<p dir=\"ltr\">L&rsquo;offre de <strong>Mouv\'up </strong>est diff&eacute;rente de celles propos&eacute;es par les entreprises suivantes, dans le sens o&ugrave; <strong>Mouv\'up</strong> propose un accompagnement in&eacute;dit et compl&eacute;mentaire des offres ci-dessous.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Voici les offres :</h2>\r\n<p dir=\"ltr\">1. NomadList :</p>\r\n<p dir=\"ltr\">Description : Une plateforme qui offre des informations sur les meilleures destinations pour les digital nomades.</p>\r\n<p dir=\"ltr\">Avantages : Communaut&eacute; active, nombreuses ressources.</p>\r\n<p dir=\"ltr\">Inconv&eacute;nients : Abonnement payant.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">2. Remote Year :</p>\r\n<p dir=\"ltr\">Description : Une agence qui organise des programmes de voyage pour les digital nomades.</p>\r\n<p dir=\"ltr\">Avantages : Programmes tout compris, communaut&eacute; soud&eacute;e.</p>\r\n<p dir=\"ltr\">Inconv&eacute;nients : Co&ucirc;t &eacute;lev&eacute;.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">3. Hacker Paradise :</p>\r\n<p dir=\"ltr\">Description : Une agence qui propose des voyages en groupe pour les digital nomades.</p>\r\n<p dir=\"ltr\">Avantages : Flexibilit&eacute;, diversit&eacute; des destinations.</p>\r\n<p dir=\"ltr\">Inconv&eacute;nients : Groupes de taille variable.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">4. WiFi Tribe :</p>\r\n<p dir=\"ltr\">Description : Une communaut&eacute; de digital nomades qui voyage ensemble.</p>\r\n<p dir=\"ltr\">Avantages : Communaut&eacute; forte, destinations vari&eacute;es.</p>\r\n<p dir=\"ltr\">Inconv&eacute;nients : Co&ucirc;t &eacute;lev&eacute;.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">5. Selina :</p>\r\n<p dir=\"ltr\">Description : Une cha&icirc;ne d&rsquo;h&ocirc;tels et d&rsquo;espaces de coworking pour les digital nomades.</p>\r\n<p dir=\"ltr\">Avantages : Infrastructures adapt&eacute;es, &eacute;v&eacute;nements r&eacute;guliers.</p>\r\n<p dir=\"ltr\">Inconv&eacute;nients : Disponibilit&eacute; variable selon les destinations.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">6. Outsite :</p>\r\n<p dir=\"ltr\">Description : Une agence qui propose des logements et des espaces de coworking pour les digital nomades.</p>\r\n<p dir=\"ltr\">Avantages : Logements de qualit&eacute;, communaut&eacute; active.</p>\r\n<p dir=\"ltr\">Inconv&eacute;nients : Co&ucirc;t &eacute;lev&eacute;.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Pour conclure :</h2>\r\n<p dir=\"ltr\">Chaque <strong>agence</strong> de <strong>voyage </strong>pour <strong>digital nomades </strong>a ses propres <strong>avantages</strong> et <strong>inconv&eacute;nients</strong>.</p>\r\n<p dir=\"ltr\">En fonction de tes besoins et de ton budget, tu peux choisir celle qui te convient le mieux pour optimiser ton exp&eacute;rience de digital nomade.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">D&eacute;couvre notre article sur <strong>Voyager seul</strong> : Les <strong>avantages </strong>et les <strong>d&eacute;fis</strong> pour les <strong>digital nomades</strong>.</p>', 'comparatif-avis-meilleures-agences', 8),
('Mouv\'up : Outil du Digital Nomade', 'mariotti.camille.alexandre@gmail.com', '<h1 dir=\"ltr\">Mouv\'up, l&rsquo;outil indispensable pour organiser ton voyage de digital nomade</h1>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Un guide sur l&rsquo;utilisation de Mouv\'up :</h2>\r\n<p dir=\"ltr\"><strong>Mouv\'up</strong> est un outil essentiel pour les <strong>digital nomades</strong> qui souhaitent organiser leurs <strong>voyages</strong> de mani&egrave;re efficace et <strong>sans stress</strong>. Ce guide explique comment utiliser <strong>Mouv\'up</strong> pour planifier tes d&eacute;placements et optimiser ton exp&eacute;rience de <strong>digital nomade</strong>.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">D&eacute;couvre les diff&eacute;rentes &eacute;tapes :</h2>\r\n<p dir=\"ltr\">1. Cr&eacute;er un compte :</p>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Inscription : Inscris-toi sur la plateforme Mouv\'up en cr&eacute;ant un compte avec votre adresse e-mail.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Profil : Compl&egrave;te ton profil avec tes informations personnelles et tes pr&eacute;f&eacute;rences de voyage.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">2. Souscrire &agrave; un abonnement &amp; Rechercher des destinations :</p>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Filtres : Utilise les filtres de recherche pour trouver des destinations adapt&eacute;es &agrave; tes besoins (Wi-Fi, espaces de coworking, co&ucirc;t de la vie).</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Recommandations : Consulte les recommandations de la communaut&eacute; <strong>Mouv\'up</strong> pour d&eacute;couvrir les meilleures destinations pour les <strong>digital nomades</strong>.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">3. R&eacute;server des services :</p>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Vols : R&eacute;serve tes billets d&rsquo;avion directement sur la plateforme, avec des options de comparaison de prix.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>H&eacute;bergement</strong> : Trouve et r&eacute;servez des h&eacute;bergements adapt&eacute;s aux <strong>digital nomades</strong>, avec des avis et des notes de la communaut&eacute;.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Espaces de<strong> coworking</strong> : R&eacute;serve des espaces de coworking dans tes destinations pour travailler efficacement.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">4. Planifier votre itin&eacute;raire :</p>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Agenda : Utilise l&rsquo;agenda int&eacute;gr&eacute; pour planifier tes d&eacute;placements et tes activit&eacute;s.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Notifications : Re&ccedil;ois des notifications pour tes r&eacute;servations et tes rappels de voyage.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">5. Participer &agrave; la communaut&eacute; :</p>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">&Eacute;v&eacute;nements : Participe &agrave; des &eacute;v&eacute;nements organis&eacute;s par <strong>Mouv\'up</strong> pour rencontrer d&rsquo;autres <strong>digital nomades</strong> et &eacute;largir ton r&eacute;seau.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Forums</strong> : Participe aux discussions sur les <strong>forums</strong> pour obtenir des conseils et partager tes exp&eacute;riences.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Pour conclure :</h2>\r\n<p dir=\"ltr\"><strong>Mouv\'up</strong> est un outil indispensable pour les <strong>digital nomades</strong> qui souhaitent organiser leurs voyages de mani&egrave;re efficace et <strong>sans stress</strong>.&nbsp;</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">En utilisant <strong>Mouv\'up</strong>, tu peux optimiser ton exp&eacute;rience de <strong>digital nomade</strong> et profiter pleinement de tes aventures &agrave; travers le monde.</p>\r\n<p dir=\"ltr\">&nbsp;</p>\r\n<p dir=\"ltr\">Pour plus de<strong> conseils</strong>, consulte nos autres articles dans la rubrique <strong>Blog</strong>.</p>', 'mouvup-outil-du-digital-nomade', 15),
('Offres All inclusive : Digital Nomades', 'mariotti.camille.alexandre@gmail.com', '<h1 dir=\"ltr\">Les offres all inclusive pour digital nomades : Est-ce vraiment rentable ?</h1>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Une analyse des offres tout compris pour les digital nomades :</h2>\r\n<p dir=\"ltr\">Les <strong>offres all inclusive</strong> sont de plus en plus populaires parmi les <strong>digital nomades</strong>. Mais sont-elles vraiment rentables ? Cet article analyse les avantages et les inconv&eacute;nients des offres tout compris pour les <strong>digital nomades</strong>, avec des exemples de s&eacute;jours et des <strong>conseils</strong> pour<strong> &eacute;conomiser</strong>.</p>\r\n<p dir=\"ltr\"><strong>Mouv\'up</strong> propose une offre d&rsquo;abonnements compl&eacute;mentaire des <strong>offres all inclusive</strong>.</p>\r\n<p dir=\"ltr\">Avec <strong>Mouv\'up</strong>, tu es accompagn&eacute; en tous pays, tous lieux, &agrave; toute heure, et quelle que soit votre demande.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<h3 dir=\"ltr\">Les avantages des offres all inclusive :</h3>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Simplicit&eacute; : Tout est inclus dans le prix, ce qui facilite la planification et &eacute;vite les mauvaises surprises.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">&Eacute;conomies : Les offres all inclusive peuvent &ecirc;tre plus &eacute;conomiques que de payer s&eacute;par&eacute;ment pour chaque service, surtout si tu profites de toutes les commodit&eacute;s offertes.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Confort : tu b&eacute;n&eacute;ficie de services de qualit&eacute;, tels que les repas, les boissons, les activit&eacute;s et parfois m&ecirc;me les espaces de coworking.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<h3 dir=\"ltr\">Les inconv&eacute;nients des offres all inclusive :</h3>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Co&ucirc;t initial &eacute;lev&eacute; : Le prix des offres all inclusive peut sembler &eacute;lev&eacute; au d&eacute;part, ce qui peut &ecirc;tre un frein pour certains nomades.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Manque de flexibilit&eacute; : tu es souvent limit&eacute; aux services et aux activit&eacute;s propos&eacute;s par l&rsquo;offre, ce qui peut restreindre votre libert&eacute; de choix.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Qualit&eacute; variable : La qualit&eacute; des services peut varier d&rsquo;une offre &agrave; l&rsquo;autre, il est donc important de bien se renseigner avant de r&eacute;server.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<h3 dir=\"ltr\">Conseils pour &eacute;conomiser sur les offres all inclusive :</h3>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Comparer les offres : Fais des recherches et comparez les diff&eacute;rentes offres all inclusive pour trouver celle qui correspond le mieux &agrave; tes besoins et &agrave; votre budget.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Profiter des promotions : Surveille les promotions et les offres sp&eacute;ciales, notamment pendant les p&eacute;riodes de soldes comme le Black Friday.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">R&eacute;server &agrave; l&rsquo;avance : R&eacute;server &agrave; l&rsquo;avance peut permettre de b&eacute;n&eacute;ficier de tarifs r&eacute;duits et de meilleures offres.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Pour conclure :</h2>\r\n<p dir=\"ltr\">Les <strong>offres all inclusive</strong> peuvent &ecirc;tre une option int&eacute;ressante pour les <strong>digital nomades</strong>, &agrave; condition de bien choisir et de profiter des <strong>promotions</strong>.</p>\r\n<p dir=\"ltr\">En suivant ces <strong>conseils</strong>, tu peux maximiser les avantages des s&eacute;jours tout compris tout en &eacute;conomisant.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">D&eacute;couvre notre article sur <strong>Black Friday Voyage</strong> : Les meilleures <strong>promotions</strong> pour partir &agrave; l&rsquo;aventure.</p>', 'offres-all-inclusive-digital-nomades', 10),
('Organiser Voyages : Digital Nomades', 'mariotti.camille.alexandre@gmail.com', '<h1 dir=\"ltr\">Comment organiser un voyage d&rsquo;affaires efficace en tant que digital nomade</h1>\r\n<p dir=\"ltr\">&nbsp;</p>\r\n<h2 dir=\"ltr\">Des astuces pour planifier des voyages d&rsquo;affaires&nbsp;</h2>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">Organiser un <strong>voyage</strong> d&rsquo;affaires en tant que <strong>digital nomade</strong> peut &ecirc;tre un d&eacute;fi, mais avec une bonne planification, il est possible de maintenir un mode de vie nomade tout en &eacute;tant productif. Voici des astuces pour planifier des <strong>voyages</strong> d&rsquo;affaires efficaces.</p>\r\n<p dir=\"ltr\"><strong>Mouv\'up</strong> te livre ses conseils dans cet article.</p>\r\n<p dir=\"ltr\">Pour des conseils plus adapt&eacute;s &agrave; ton projet personnel de <strong>voyage</strong>, nous t&rsquo;invitons &agrave; consulter nos diff&eacute;rentes offres d&rsquo;abonnement &agrave; partir de 10&euro; par mois.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">D&eacute;couvre comment organiser un <strong>voyage</strong> d&rsquo;affaires efficace :</h2>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">1. Planification pr&eacute;alable :</p>\r\n<p dir=\"ltr\">Calendrier : Planifie tes voyages en fonction de tes engagements professionnels.</p>\r\n<p dir=\"ltr\">R&eacute;servations : R&eacute;servez tes billets d&rsquo;avion et h&ocirc;tels &agrave; l&rsquo;avance pour obtenir les meilleures offres.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">2. Choix de la destination :</p>\r\n<p dir=\"ltr\">Accessibilit&eacute; : Choisis des destinations avec de bonnes connexions de transport.</p>\r\n<p dir=\"ltr\">Infrastructures : Assure-toi que la destination dispose de bonnes infrastructures pour les affaires (espaces de coworking, Wi-Fi fiable).</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">3. Gestion du temps :</p>\r\n<p dir=\"ltr\">Agenda : Utilise des outils de gestion du temps pour organiser tu r&eacute;unions et t&acirc;ches.</p>\r\n<p dir=\"ltr\">Fus horaires : Prenez en compte les diff&eacute;rences de fuseaux horaires pour planifier tu appels et r&eacute;unions.</p>\r\n<p dir=\"ltr\">4. Outils et technologies :</p>\r\n<p dir=\"ltr\">Applications : Utilise des applications de voyage pour organiser tes d&eacute;placements (Kayak, TripIt).</p>\r\n<p dir=\"ltr\">&Eacute;quipements : Emporte les &eacute;quipements n&eacute;cessaires pour travailler efficacement (ordinateur portable, chargeurs, adaptateurs).</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">5. R&eacute;seautage :</p>\r\n<p dir=\"ltr\">&Eacute;v&eacute;nements : Participe &agrave; des &eacute;v&eacute;nements professionnels et meetups pour &eacute;largir votre r&eacute;seau.</p>\r\n<p dir=\"ltr\">Communaut&eacute;s : Rejoindre des communaut&eacute;s de digital nomades pour obtenir des conseils et du soutien.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">6. Bien-&ecirc;tre :</p>\r\n<p dir=\"ltr\">Sant&eacute; : Prendre soin de votre sant&eacute; en voyage (assurance voyage, vaccinations).</p>\r\n<p dir=\"ltr\">&Eacute;quilibre : Trouve un &eacute;quilibre entre travail et d&eacute;tente pour &eacute;viter le burn-out.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Pour conclure, avec une bonne organisation :</h2>\r\n<p dir=\"ltr\">Il est possible de mener des <strong>voyages </strong>d&rsquo;affaires efficaces tout en maintenant un mode de vie <strong>nomade</strong>.</p>\r\n<p dir=\"ltr\">Suis les astuces ci-dessus pour optimiser tes d&eacute;placements professionnels.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">D&eacute;couvre notre article sur Les meilleures agences de <strong>voyage</strong> pour <strong>digital nomades</strong> : <strong>Comparatif</strong> et <strong>avis</strong>.</p>\r\n<p>&nbsp;</p>', 'organiser-voyages-digital-nomades', 7),
('Top 10 hôtels Digital Nomades', 'mariotti.camille.alexandre@gmail.com', '<h1 dir=\"ltr\">Les h&ocirc;tels les plus accueillants pour les digital nomades : Notre top 10</h1>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Un classement des h&ocirc;tels offrant les meilleures commodit&eacute;s :</h2>\r\n<p dir=\"ltr\">Les <strong>digital nomades</strong> ont des besoins sp&eacute;cifiques en mati&egrave;re d&rsquo;<strong>h&eacute;bergement</strong>. Voici un <strong>classement des h&ocirc;tels</strong> offrant les meilleures commodit&eacute;s pour les travailleurs &agrave; distance, avec des avis et des conseils.</p>\r\n<p dir=\"ltr\">En souscrivant &agrave; <strong>Mouv\'up</strong>, nous t\'aidons &agrave; trouver le <strong>meilleur h&ocirc;tel </strong>ou logement o&ugrave; que tu souhaites aller dans le monde.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">D&eacute;couvre les meilleures h&ocirc;tels :</h2>\r\n<p dir=\"ltr\">1. Selina (plusieurs destinations) :</p>\r\n<p dir=\"ltr\">Avantages : Espaces de coworking, &eacute;v&eacute;nements r&eacute;guliers, ambiance conviviale.</p>\r\n<p dir=\"ltr\">Inconv&eacute;nients : Disponibilit&eacute; variable selon les destinations.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">2. Outsite (plusieurs destinations) :</p>\r\n<p dir=\"ltr\">Avantages : Logements de qualit&eacute;, espaces de coworking, communaut&eacute; active.</p>\r\n<p dir=\"ltr\">Inconv&eacute;nients : Co&ucirc;t &eacute;lev&eacute;.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">3. Zoku (Amsterdam, Copenhague) :</p>\r\n<p dir=\"ltr\">Avantages : Chambres adapt&eacute;es au travail, espaces de coworking, design moderne.</p>\r\n<p dir=\"ltr\">Inconv&eacute;nients : Disponibilit&eacute; limit&eacute;e &agrave; certaines villes.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">4. Roam (Bali, Tokyo, Miami) :</p>\r\n<p dir=\"ltr\">Avantages : Espaces de coworking, communaut&eacute; internationale, activit&eacute;s organis&eacute;es.</p>\r\n<p dir=\"ltr\">Inconv&eacute;nients : Co&ucirc;t &eacute;lev&eacute;.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">5. The Student Hotel (plusieurs destinations en Europe) :</p>\r\n<p dir=\"ltr\">Avantages : Espaces de coworking, ambiance jeune et dynamique, &eacute;v&eacute;nements r&eacute;guliers.</p>\r\n<p dir=\"ltr\">Inconv&eacute;nients : Disponibilit&eacute; limit&eacute;e &agrave; certaines villes.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">6. WeLive (New York, Washington D.C.) :</p>\r\n<p dir=\"ltr\">Avantages : Espaces de coworking, communaut&eacute; active, &eacute;v&eacute;nements r&eacute;guliers.</p>\r\n<p dir=\"ltr\">Inconv&eacute;nients : Co&ucirc;t &eacute;lev&eacute;.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">7. Generator Hostels (plusieurs destinations en Europe) :</p>\r\n<p dir=\"ltr\">Avantages : Espaces de coworking, ambiance conviviale, prix abordables.</p>\r\n<p dir=\"ltr\">Inconv&eacute;nients : Disponibilit&eacute; limit&eacute;e &agrave; certaines villes.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">8. Kasa Living (plusieurs destinations aux &Eacute;tats-Unis) :</p>\r\n<p dir=\"ltr\">Avantages : Logements de qualit&eacute;, espaces de coworking, flexibilit&eacute;.</p>\r\n<p dir=\"ltr\">Inconv&eacute;nients : Disponibilit&eacute; limit&eacute;e &agrave; certaines villes.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">9. Hobo Hotel (Stockholm) :</p>\r\n<p dir=\"ltr\">Avantages : Espaces de coworking, design moderne, ambiance conviviale.</p>\r\n<p dir=\"ltr\">Inconv&eacute;nients : Disponibilit&eacute; limit&eacute;e &agrave; Stockholm.</p>\r\n<p dir=\"ltr\">10. The Hoxton (plusieurs destinations) :</p>\r\n<p dir=\"ltr\">Avantages : Espaces de coworking, design moderne, ambiance conviviale.</p>\r\n<p dir=\"ltr\">Inconv&eacute;nients : Co&ucirc;t &eacute;lev&eacute;.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Pour conclure :</h2>\r\n<p dir=\"ltr\">Les <strong>h&ocirc;tels</strong> offrent des commodit&eacute;s adapt&eacute;es aux besoins des <strong>digital nomades</strong>, avec des espaces de travail, des &eacute;v&eacute;nements et une ambiance conviviale.</p>\r\n<p dir=\"ltr\">Choisis l&rsquo;h&ocirc;tel qui correspond le mieux &agrave; tes besoins et profite d&rsquo;un s&eacute;jour productif et agr&eacute;able.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">D&eacute;couvre notre article sur <strong>Mouv\'up</strong>, l&rsquo;<strong>outil indispensable</strong> pour organiser ton <strong>voyage</strong> de <strong>digital nomade</strong>.</p>', 'top-10-hotels-digital-nomades', 14),
('Voyage Surprise Digital Nomades', 'mariotti.camille.alexandre@gmail.com', '<h1 dir=\"ltr\">Comment organiser un voyage surprise pour un digital nomade</h1>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Des id&eacute;es et des conseils pour planifier un voyage surprise inoubliable :</h2>\r\n<p dir=\"ltr\">Organiser un voyage surprise pour un digital nomade peut &ecirc;tre une exp&eacute;rience excitante et m&eacute;morable. Voici des id&eacute;es et des conseils pour planifier un voyage surprise inoubliable pour un ami ou un partenaire nomade.</p>\r\n<p dir=\"ltr\">&nbsp;</p>\r\n<h2 dir=\"ltr\">Consultez les offres Mouv\'up pour trouver la plus adapt&eacute;e :</h2>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">1. Choisir la <strong>destination</strong> :</p>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Pr&eacute;f&eacute;rences : Tiens compte des pr&eacute;f&eacute;rences de la personne pour choisir une<strong> destination</strong> qui lui plaira.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Accessibilit&eacute; : Assure-toi que la <strong>destination</strong> est facilement accessible et dispose de bonnes infrastructures pour les digital nomades (<strong>Wi-Fi</strong>, espaces de <strong>coworking</strong>).</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">2. Planifier les d&eacute;tails :</p>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Billets d&rsquo;avion : R&eacute;serve les billets d&rsquo;avion &agrave; l&rsquo;avance pour obtenir les meilleures offres.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>H&eacute;bergement </strong>: Choisis un h&eacute;bergement adapt&eacute; aux besoins des digital nomades, avec une connexion Internet fiable et des espaces de travail.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Activit&eacute;s : Planifie des activit&eacute;s et des visites qui correspondent aux int&eacute;r&ecirc;ts de la personne.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">3. Garder la surprise :</p>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Communication : Sois discret dans tes communications pour ne pas &eacute;veiller les soup&ccedil;ons.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Coordination : Coordonne-toi avec les <strong>amis </strong>ou la <strong>famille</strong> pour organiser les d&eacute;tails sans que la personne ne s&rsquo;en rende compte.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">4. Pr&eacute;parer les aspects pratiques :</p>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Bagages : Aidez la personne &agrave; pr&eacute;parer ses bagages sans r&eacute;v&eacute;ler la destination.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Documents : Assure-toi que tu as tous les documents n&eacute;cessaires (passeport, visas, etc.).</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">5. R&eacute;v&eacute;ler la surprise :</p>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Moment : Choisissez un moment sp&eacute;cial pour r&eacute;v&eacute;ler la surprise, comme un anniversaire ou une occasion sp&eacute;ciale.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">M&eacute;thode : Utilisez une m&eacute;thode cr&eacute;ative pour annoncer le voyage, comme une carte, une vid&eacute;o ou un jeu de piste.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\"><strong>Pour conclure :</strong></p>\r\n<p dir=\"ltr\"><strong>Organiser un voyage surprise</strong> pour un <strong>digital nomade</strong> demande de la planification et de la discr&eacute;tion, mais cela peut cr&eacute;er des souvenirs inoubliables.&nbsp;</p>\r\n<p dir=\"ltr\">Suivez ces<strong> conseils</strong> pour r&eacute;ussir votre surprise et offrir une <strong>exp&eacute;rience unique </strong>&agrave; votre <strong>ami</strong> ou <strong>partenaire</strong>.</p>\r\n<p><strong id=\"docs-internal-guid-8f2516a5-7fff-1e0f-6aa1-0d00889173e6\"><br></strong>D&eacute;couvre notre article sur <strong>Les circuits touristiques </strong>&agrave; ne pas manquer pour les <strong>digital nomades</strong>.</p>', 'voyage-surprise-digital-nomades', 12),
('Voyager seul : Digital Nomades', 'mariotti.camille.alexandre@gmail.com', '<h1 dir=\"ltr\">Voyager seul : Les avantages et les d&eacute;fis pour les digital nomades</h1>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Un guide sur les b&eacute;n&eacute;fices et les obstacles de voyager en solo :</h2>\r\n<p dir=\"ltr\">Voyager seul en tant que digital nomade peut &ecirc;tre une exp&eacute;rience enrichissante et lib&eacute;ratrice. Cependant, cela comporte &eacute;galement des d&eacute;fis uniques. Ce guide explore les avantages et les obstacles de voyager en solo, avec des conseils pour rester en s&eacute;curit&eacute; et connect&eacute;.</p>\r\n<p dir=\"ltr\">Mouv\'up t&rsquo;accompagne donc dans tous tes voyages, que tu sois seul ou accompagn&eacute;, nos conseils qui r&eacute;pondent pr&eacute;cis&eacute;ment &agrave; tes demandes te permettront de ne jamais te sentir seul ou perdu.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<h3 dir=\"ltr\">Les avantages de voyager seul :</h3>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Libert&eacute; et flexibilit&eacute; : tu peux planifier ton itin&eacute;raire selon tes pr&eacute;f&eacute;rences sans avoir &agrave; t&rsquo;adapter aux besoins des autres.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">D&eacute;veloppement personnel : Voyager seul te permet de sortir de ta zone de confort, de gagner en confiance et de d&eacute;velopper ton ind&eacute;pendance.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Rencontres : tu es plus ouvert aux rencontres et aux nouvelles amiti&eacute;s, car tu n\'es pas constamment entour&eacute; de compagnons de voyage.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Productivit&eacute; : tu peux organiser ton emploi du temps de travail et de loisirs comme bon tu semble, ce qui peut am&eacute;liorer ta productivit&eacute;.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<h3 dir=\"ltr\">Les d&eacute;fis de voyager seul :</h3>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Solitude : Voyager seul signifie parfois &ecirc;tre isol&eacute;, surtout si tu es dans un endroit o&ugrave; tu ne connais personne.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">S&eacute;curit&eacute; : tu dois &ecirc;tre plus vigilant en mati&egrave;re de s&eacute;curit&eacute;, car tu n&rsquo;avez pas de compagnon pour t\'aider en cas de probl&egrave;me.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Organisation : Tout repose sur toi, de la planification des voyages &agrave; la gestion des impr&eacute;vus.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<h3 dir=\"ltr\">Conseils pour rester en s&eacute;curit&eacute; et connect&eacute; :</h3>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Recherchez les destinations : Informe-toi sur la s&eacute;curit&eacute; des destinations que tu souhaites visiter et &eacute;vitez les zones &agrave; risque.</p>\r\n</li>\r\n</ul>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Utilisez des applications de s&eacute;curit&eacute; : T&eacute;l&eacute;chargez des applications comme bSafe ou Noonlight pour rester en s&eacute;curit&eacute;.</p>\r\n</li>\r\n</ul>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Rejoignez des communaut&eacute;s de nomades : Participez &agrave; des &eacute;v&eacute;nements et des meetups pour rencontrer d&rsquo;autres digital nomades et cr&eacute;er un r&eacute;seau de soutien.</p>\r\n</li>\r\n</ul>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Restez en contact : Utilise des applications de messagerie et de vid&eacute;o pour rester en contact avec tes proches et partager tes exp&eacute;riences.</p>\r\n</li>\r\n</ul>\r\n<p><strong>&nbsp;</strong></p>\r\n<h2 dir=\"ltr\">Pour conclure :</h2>\r\n<p dir=\"ltr\"><strong>Voyager seul </strong>en tant que <strong>digital nomade</strong> offre de nombreux<strong> avantages</strong>, mais il est important de se pr&eacute;parer aux <strong>d&eacute;fis</strong>.</p>\r\n<p dir=\"ltr\">En suivant ces <strong>conseils</strong>, tu peux profiter pleinement de ton aventure en solo tout en restant en s&eacute;curit&eacute; et connect&eacute;.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">D&eacute;couvre notre article sur Les<strong> offres all inclusive</strong> pour <strong>digital nomades</strong> : Est-ce vraiment rentable ?</p>', 'voyager-seul-digital-nomades', 9);

-- --------------------------------------------------------

--
-- Structure de la table `article_tags`
--

CREATE TABLE `article_tags` (
  `article_title` varchar(50) NOT NULL,
  `tag_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article_tags`
--

INSERT INTO `article_tags` (`article_title`, `tag_name`) VALUES
('10 destinations pour digital nomades', 'Digital Nomade'),
('10 destinations pour digital nomades', 'Mouv\'up'),
('10 destinations pour digital nomades', 'Top 10'),
('10 destinations pour digital nomades', 'Voyage'),
('Black Friday Digital Nomades', 'Black Friday'),
('Black Friday Digital Nomades', 'Conseils'),
('Black Friday Digital Nomades', 'Digital Nomade'),
('Black Friday Digital Nomades', 'Mouv\'up'),
('Black Friday Digital Nomades', 'Voyage'),
('Circuits touristiques Digital Nomades', 'Conseils'),
('Circuits touristiques Digital Nomades', 'Digital Nomade'),
('Circuits touristiques Digital Nomades', 'Mouv\'up'),
('Circuits touristiques Digital Nomades', 'Top 10'),
('Circuits touristiques Digital Nomades', 'Voyage'),
('Comparatif / Avis : Meilleures agences', 'Digital Nomade'),
('Comparatif / Avis : Meilleures agences', 'Mouv\'up'),
('Comparatif / Avis : Meilleures agences', 'Offres / Abonnements'),
('Comparatif / Avis : Meilleures agences', 'Voyage'),
('Mouv\'up : Outil du Digital Nomade', 'Conseils'),
('Mouv\'up : Outil du Digital Nomade', 'Digital Nomade'),
('Mouv\'up : Outil du Digital Nomade', 'Mouv\'up'),
('Mouv\'up : Outil du Digital Nomade', 'Voyage'),
('Offres All inclusive : Digital Nomades', 'Conseils'),
('Offres All inclusive : Digital Nomades', 'Digital Nomade'),
('Offres All inclusive : Digital Nomades', 'Mouv\'up'),
('Offres All inclusive : Digital Nomades', 'Offres / Abonnements'),
('Offres All inclusive : Digital Nomades', 'Voyage'),
('Organiser Voyages : Digital Nomades', 'Conseils'),
('Organiser Voyages : Digital Nomades', 'Digital Nomade'),
('Organiser Voyages : Digital Nomades', 'Mouv\'up'),
('Organiser Voyages : Digital Nomades', 'Voyage'),
('Top 10 hôtels Digital Nomades', 'Conseils'),
('Top 10 hôtels Digital Nomades', 'Digital Nomade'),
('Top 10 hôtels Digital Nomades', 'Mouv\'up'),
('Top 10 hôtels Digital Nomades', 'Top 10'),
('Top 10 hôtels Digital Nomades', 'Voyage'),
('Voyage Surprise Digital Nomades', 'Conseils'),
('Voyage Surprise Digital Nomades', 'Digital Nomade'),
('Voyage Surprise Digital Nomades', 'Mouv\'up'),
('Voyage Surprise Digital Nomades', 'Voyage'),
('Voyager seul : Digital Nomades', 'Conseils'),
('Voyager seul : Digital Nomades', 'Digital Nomade'),
('Voyager seul : Digital Nomades', 'Mouv\'up'),
('Voyager seul : Digital Nomades', 'Offres / Abonnements'),
('Voyager seul : Digital Nomades', 'Voyage');

-- --------------------------------------------------------

--
-- Structure de la table `destination`
--

CREATE TABLE `destination` (
  `country` varchar(64) NOT NULL,
  `description` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `features`
--

CREATE TABLE `features` (
  `id` int NOT NULL,
  `name` varchar(128) NOT NULL,
  `price` int NOT NULL,
  `description` text NOT NULL,
  `position` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `features`
--

INSERT INTO `features` (`id`, `name`, `price`, `description`, `position`) VALUES
(1, 'Générateur de train de vie', 200, 'Le Générateur de Train de Vie est un outil innovant et puissant conçu pour vous aider à concevoir et à visualiser votre mode de vie idéal. En prenant en compte une variété de critères personnels, cet outil vous guide dans la création d\'un plan de vie sur mesure, adapté à vos préférences, vos besoins et vos aspirations.\n\nGrâce à une interface intuitive, vous pouvez entrer des informations sur vos préférences culturelles, vos habitudes alimentaires, vos loisirs, et bien plus encore. Le générateur analyse ces données pour fournir des recommandations personnalisées sur les meilleures destinations, styles de vie, et activités quotidiennes qui vous conviennent.\n\nQue vous soyez un digital nomad cherchant le parfait équilibre entre travail et aventure, une famille désirant trouver le meilleur endroit pour s\'installer, ou simplement quelqu\'un souhaitant optimiser son quotidien, le Générateur de Train de Vie vous offre des solutions adaptées. Il propose des conseils sur les endroits où vivre, les types de logement, les activités locales, et les options de transport, en tenant compte de votre budget et de vos priorités en matière de bien-être et de sécurité.\n\nEn utilisant cet outil, vous pouvez planifier une vie qui reflète vos valeurs et vos passions, tout en vous assurant que vos besoins pratiques sont satisfaits. Le Générateur de Train de Vie vous aide à découvrir des lieux et des modes de vie auxquels vous n\'aviez peut-être pas pensé, ouvrant de nouvelles perspectives pour une vie plus enrichissante et épanouissante.', 1),
(2, 'Création d\'itinéraires personnalisés', 100, 'Notre outil de création d\'itinéraires personnalisés vous permet de planifier votre voyage en fonction de vos préférences et intérêts spécifiques. Que vous aimiez les aventures en plein air, les visites culturelles ou les expériences gastronomiques, vous pouvez sélectionner vos destinations et activités préférées. L\'outil génère un itinéraire complet et optimisé, incluant des suggestions pour chaque jour de votre voyage.', 2),
(3, 'Recommandations d\'hébergement, de transport et d\'activités', 150, 'Recevez des recommandations personnalisées pour les hébergements, les options de transport et les activités à faire dans chaque destination. Nos suggestions sont basées sur des avis vérifiés et les préférences que vous avez indiquées. Que vous cherchiez un hôtel de luxe, une auberge économique, des vols abordables ou des activités uniques, notre système vous guide vers les meilleures options disponibles.', 3),
(4, 'Guides de conversation complets', 50, 'Pour faciliter votre communication à l\'étranger, nous fournissons des guides de conversation complets. Ces guides incluent des phrases courantes, des expressions utiles et des conseils de prononciation pour diverses langues. Que vous ayez besoin de demander votre chemin, de commander un repas ou de discuter avec les habitants, ces guides vous aideront à vous faire comprendre et à enrichir votre expérience de voyage.', 4),
(5, 'Fiches d\'information sur les pays détaillées', 25, 'Accédez à des fiches d\'information détaillées pour chaque pays que vous souhaitez visiter. Ces fiches incluent des informations sur la culture locale, les coutumes, les lois, les conseils de sécurité, le climat, les principales attractions, et bien plus encore. Elles vous fournissent tout ce que vous devez savoir pour bien préparer votre voyage et vous immerger pleinement dans chaque destination.', 5),
(6, 'Assistance 24h/24 et 7j/7', 150, 'Voyagez l\'esprit tranquille grâce à notre assistance disponible 24h/24 et 7j/7. En cas de besoin, notre équipe de support est à votre disposition pour répondre à vos questions, résoudre vos problèmes ou vous aider dans les situations d\'urgence. Vous pouvez nous contacter à tout moment, de jour comme de nuit, pour obtenir une aide rapide et efficace.', 6),
(7, 'Connexion avec des communautés locales de digital nomads', 100, 'Rencontrez et connectez-vous avec des communautés locales de digital nomads partout dans le monde. Notre plateforme facilite les rencontres avec d\'autres voyageurs et travailleurs à distance partageant les mêmes intérêts. Échangez des conseils, partagez des expériences et participez à des événements locaux pour enrichir votre réseau et votre expérience de nomadisme digital.', 7),
(8, 'Outils de budgétisation et de gestion des finances', 100, 'Gérez vos finances de voyage efficacement grâce à nos outils de budgétisation. Vous pouvez planifier et suivre vos dépenses, définir des budgets pour chaque aspect de votre voyage (hébergement, transport, nourriture, etc.), et obtenir des rapports détaillés sur vos dépenses. Ces outils vous aident à rester dans votre budget et à optimiser vos ressources financières pendant votre voyage.', 8),
(9, 'Nomads close to you', 125, 'Découvrez d\'autres digital nomads se trouvant à proximité de votre position actuelle. Cette fonctionnalité vous permet de voir qui est autour de vous, de vous connecter avec eux, et de planifier des rencontres ou des activités ensemble. Que vous soyez à la recherche de compagnons de voyage, de partenaires de travail ou simplement de nouvelles amitiés, cette fonctionnalité facilite les connexions avec des personnes partageant les mêmes intérêts.', 9);

-- --------------------------------------------------------

--
-- Structure de la table `language`
--

CREATE TABLE `language` (
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `language`
--

INSERT INTO `language` (`name`) VALUES
('allemand'),
('anglais'),
('arabe'),
('chinois'),
('coréen'),
('danois'),
('espagnol'),
('français'),
('hongrois'),
('italien'),
('japonais'),
('néerlandais'),
('norvégien'),
('polonais'),
('portugais'),
('russe'),
('slovaque'),
('slovène'),
('suédois'),
('tchèque');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `mail` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`mail`, `firstname`, `lastname`) VALUES
('gheribi.marouane77@gmail.com', 'marwan', 'gheribi'),
('paul.serrano08374@gmail.com', 'Serrano', 'Paul');

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tag`
--

INSERT INTO `tag` (`name`) VALUES
('Black Friday'),
('Conseils'),
('Digital Nomade'),
('Mouv\'up'),
('Offres / Abonnements'),
('Top 10'),
('Voyage');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `mail` varchar(128) NOT NULL,
  `pass` varchar(128) NOT NULL,
  `firstname` varchar(64) NOT NULL,
  `lastname` varchar(64) NOT NULL,
  `job` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `img_path` varchar(64) NOT NULL,
  `admin` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`mail`, `pass`, `firstname`, `lastname`, `job`, `description`, `img_path`, `admin`) VALUES
('admin@test.com', '$2y$10$y5LghqEXH7q3qHttmNqR3e.3022flSb4NlomHSeUICvhm1GzWngtq', 'Admin', 'Test', 'Testeur d\'Admin', 'Un bel admin de test', '', 1),
('mariotti.camille.alexandre@gmail.com', '$2y$10$0RVactDr756kPb..Rm0s0Ow4zkuLLmTgQpoCSp7PvIcGtX5hs8CCq', 'Cam', 'Kam', 'DIGITAL', 'ADMIN', '', 1),
('paul.serrano08374@gmail.com', '$2y$10$zkNWYo5DCWcM2QxZWga0SuRWnzhG163HzdQFOYoWFXR7gyAGFzJZS', 'Paul', 'Serrano', 'Développeur', 'DEV', '', 1),
('test@gmail.com', '$2y$10$iz27z6qi6p1Std4b/RhDUu9GG3FS7emVY25x3K4HhOf8fURIZvPMS', 'John', 'Doe', 'Mystère', 'Insaisissable', '', 1),
('user@test.com', '$2y$10$NETJbLFfMXFw.OpRyLY98OzxANA9stkNAP6DpTn0JfZIILpFNhTia', 'User', 'Test', 'Testeur d\'User', 'Un très beau testeur de User', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user_features`
--

CREATE TABLE `user_features` (
  `user_mail` varchar(128) NOT NULL,
  `feature_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user_features`
--

INSERT INTO `user_features` (`user_mail`, `feature_id`) VALUES
('paul.serrano08374@gmail.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user_language`
--

CREATE TABLE `user_language` (
  `user_mail` varchar(128) NOT NULL,
  `language_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user_language`
--

INSERT INTO `user_language` (`user_mail`, `language_name`) VALUES
('user@test.com', 'arabe'),
('user@test.com', 'coréen'),
('mariotti.camille.alexandre@gmail.com', 'français'),
('admin@test.com', 'hongrois'),
('admin@test.com', 'norvégien'),
('paul.serrano08374@gmail.com', 'portugais'),
('user@test.com', 'suédois');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`title`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user_mail` (`user_mail`);

--
-- Index pour la table `article_tags`
--
ALTER TABLE `article_tags`
  ADD PRIMARY KEY (`article_title`,`tag_name`),
  ADD KEY `article_title` (`article_title`),
  ADD KEY `tag_name` (`tag_name`);

--
-- Index pour la table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`country`);

--
-- Index pour la table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`name`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`mail`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`name`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`mail`);

--
-- Index pour la table `user_features`
--
ALTER TABLE `user_features`
  ADD KEY `user_mail` (`user_mail`),
  ADD KEY `feature_id` (`feature_id`);

--
-- Index pour la table `user_language`
--
ALTER TABLE `user_language`
  ADD PRIMARY KEY (`language_name`,`user_mail`),
  ADD KEY `user_mail` (`user_mail`),
  ADD KEY `language_name` (`language_name`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `features`
--
ALTER TABLE `features`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
