<?php
  $host = "localhost";
  $db = "rpirpg";
  $username = "root";
  $password = "root";

  // Creating our database
  $sql1 = "CREATE DATABASE IF NOT EXISTS `$db`;
             USE `$db`;
             CREATE TABLE IF NOT EXISTS `users` (
               `uid` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
               `contid` int(3) NOT NULL DEFAULT '1',
               `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
               `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
               `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
               `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
               `isAdmin` int(1) NOT NULL DEFAULT '0'
             ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
            CREATE TABLE IF NOT EXISTS `game_content` (
             `contid` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
             `body` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
             `item` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
             `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
             `choice1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
             `choice2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
             `choice3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
             `choice1Address` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
             `choice2Address` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
             `choice3Address` varchar(10) COLLATE utf8_unicode_ci NOT NULL
             ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
            CREATE TABLE IF NOT EXISTS `character` (
             `charid` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
             `charname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
             `img` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
             `major` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
             `semester` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
             `courses` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
             `year` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
             `passed` int(50) NOT NULL,
             `failed` int(50) NOT NULL
             ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
            CREATE TABLE IF NOT EXISTS `settings` (
             `credits` varchar(100) COLLATE utf8_unicode_ci NOT NULL
             ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
            INSERT INTO `game_content` (`contid`, `body`, `item`, `image`, `choice1`, `choice2`, `choice3`, `choice1Address`, `choice2Address`, `choice3Address`) VALUES
            (1, 'What is your major?', '', '', 'Computer Science', 'ITWS', 'CSE', '2', '3', '4'),
            (2, 'You got your schedule and your classes for this semester are: Data Structures, General Psychology, Calculus II, and Physics. You have Data Structures tommorrow at 8am and it is nearing midnight. What do you do?', '', '', 'Stay up all night and play video games', 'Stay up all night and drink', 'Go to sleep so you can wake up early', '5', '9', '12'),
            (3, 'You got your schedule and your classes for this semester are: Intro to Information Technology, General Psychology, Calculus II, and Physics. You have Intro to Information Technology tommorrow at 8am and it is nearing midnight. What do you do?', '', '', 'Story line stil being written', '', '', '', '', ''),
            (4, 'You got your schedule and your classes for this semester are: Intro to Engineering Analysis, General Psychology, Calculus II, and Physics. You have Intro to Engineering Analysis tommorrow at 8am and it is nearing midnight. What do you do?', '', '', 'Story line still being written', '', '', '', '', ''),
            (5, 'You decide to stay up all night and play League of Legends. As you lose game after game you get madder at madder. What do you do?', '', '', 'Throw your laptop out your window', 'Uninstall League and go to sleep', 'Continue playing and yelling', '6', '7', '8'),
            (6, 'In a fit of rage you throw your laptop out the window. As it flys through the sky and hits the ground you realize that was probably a bad idea. You''ll have to order a new laptop soon', '', '', 'Go to bed (-$1000)', '', '', '13', '', ''),
            (7, 'You''re done with that game, you immediately leave the game you''re losing and uninstall League. It''s almost 5:00am now you should go to bed.', '', '', 'Go to bed', '', '', '13', '', ''),
            (8, 'You continue to play and scream at your computer screen. Your roommate finally has had enough and throws his glass of water on your laptop.', '', '', 'Go to bed (-$1000)', '', '', '13', '', ''),
            (9, 'You decide to stay up all night and drink. Do you choose to drink alone or with your friend?', '', '', 'Drink alone', 'Drink with friend', '', '10', '11', ''),
            (10, 'You decide to drink alone and cry yourself to sleep. You''re off to a strong start at RPI.', '', '', 'Go ahead to tomorrow', '', '', '13', '', ''),
            (11, 'You decide to drink with a friend. You both drink way too much, lose your wallet, and pass out.', '', '', 'Go ahead to tomorrow (-$100)', '', '', '13', '', ''),
            (12, 'You decide to go to sleep so you can wake up early for your class tomorrow', '', '', 'Go ahead to tomorrow', '', '', '15', '', ''),
            (13, 'Your alarm has been going off for the past half hour. It''s 7:50 and you have class at 8... you feel physically horrible and now need to rush to class in order to make it.', '', '', 'Run off to class', 'Turn off your alarm and go back to sleep', '', '15', '14', ''),
            (14, 'You roll over and go back to sleep. You don''t wake up until your Calc II class at noon.', '', '', 'Story still being made', '', '', '', '', ''),
            (15, 'You run off to class in your pajamas and bed head and make it there just in time, you take the seat closest to the door.', '', '', 'Proceed to take notes and answer iClicker question', '', '', '16', '', ''),
            (16, 'What is the access time for lists?', '', '', 'O(1)', 'O(logn)', 'O(n)', '17', '17', '18'),
            (17, 'Wrong!', '', '', 'Leave for lunch', '', '', '19', '', ''),
            (18, 'Correct!', '', '', 'Leave for lunch', '', '', '19', '', ''),
            (19, 'You leave class for Lunch and decide to go commons, what do you decide to eat?', '', '', 'Mystery meat', 'Salad', '', '20', '21', ''),
            (20, 'You''ve died from Sodexo''s Mystery Meat', '', '', 'Thanks for playing', '', '', '', '', ''),
            (21, 'It''s bland, but at least you feel alright', '', '', 'Demo done', '', '', '', '', '');";
  try {
  	$dbh = new PDO("mysql:host=$host", $username, $password);
  	$dbh->exec($sql1);	  	
  } catch(PDOException $e) {
  	echo 'ERROR: ' . $e->getMessage();
  }

  if ($dbh)
  {
  	echo "Created database!";
  	echo "<br>";
  }
?>