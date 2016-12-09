===========================================================
RPIRPG
===========================================================

This is the Readme for Group 2 of Web Systems Development Fall 2016:
David Ivey, Asad Mehdi, Joseph Noel, Connor Stalker, Chris Valmas

===========================================================
INSTALLATION
===========================================================

Github Repo: https://github.com/iveyd/Websys-Group2-Projects

Clone the repo first (obviously).
Run resources/php/install.php to create the database and insert game_content.
Inside install.php are $dbuser and $dbpass which must be set to the correct values to get access to your server.
Default for both is 'root'.

===========================================================
STRUCTURE
===========================================================

<root>
	index.html 
	admin.php
	character.php
	char_create.php
	main.php
	settings.php
	<resources>
		<images>
			Image files here
		</images>
		<javascript>
			Javascript Files
		</javascript>
		<php>
			Pure PHP files (not HTML and PHP)
		</php>
		<stylesheets>
			CSS files
		</stylesheets>
		story.txt
		storyEvents.txt
	</resources>
	LICENSE
	README.md
</root>

===========================================================
IDEA
===========================================================

RPI RPI is a text based browser choice/adventure RPG.
This game was intended to be a fun time waster, not a hardcore gaming or money making scheme.

===========================================================
TARGET AUDIENCE
===========================================================

Likely only RPI students or faculty will get the references, so anyone with RPI know-how wanting to have fun.

===========================================================
IMPLEMENTATION
===========================================================

The majority of the game's functionality comes from a MySQL database running on an Apache server,
using PHP and PDO to communicate with HTML pages. Javascript and jQuery are used to send POST requests and for minor cosmetic functions, while CSS is used to style all pages.

===========================================================
KNOWN ISSUES
===========================================================

The appearance. While we started with a basic bootstrap template, every member of the group was unexperienced with bootstrap and as such the final product is very different from page to page.

It is also possible to play without a character, as one's account is made after the account creation page, but is then redirected to the character creation page to select an avatar and character name. We noticed this bug too late, but we figured one could check on login for a character entry with the proper user ID (uid) and redirect to the character creation page if one was not found. Unfortunately we did not have enough time upon realizing this issue.

Another simple yet important issue is graphics and story content. None of us are writers or graphic designer so both are rather lackluster for a video game. Good thing it's text based!

As for admin functionality, there is an admin page where an admin can remove users, but we never implemented a way to add admin users from the website. This can currently only be done from the server directly.

===========================================================
PROJECT REQUIREMENTS
===========================================================

HTML5 		 									 - check
CSS3			 									 - check
Javascript 									 - check
PHP				 									 - check
Database 	 									 - check

Authentication/Authorization:
	Implemented when following proper website flow (start from index, login, etc).
	The website is not entirely secure in that if one knew the file names/directory structure they can navigate directly to files. All queries and php code will fail to alter the database due to a lack of user id in the $_SESSION array. As such the website has the potential to be seen in an undesirable state, but no data will be corrupted for others.

Admin Panel:
	There is an admin panel which only shows up for admins, but could be accessed by anyone who knows the file path... an oversight not realized until too late to fix unfortunately, but something that would be easy to fix with more time (simply add a check for admin in the session before displaying admin page, redirect to main if the user is not an admin).
	This admin panel allows an admin to delete users, but unforunately does not allow one to create new admins. As such we have partially satisfied this requirement due to one needing to access the database directly to add new admins, although we have all understood how one would go about doing this now (we simply ran out of time).

Easy to install/extend:
	Certainly easy to install.
	The ease of which one can extend the projecct depends on their experience with PHP and web development, but adding content and admins, functionality would all require knowledge of MySQL and/or PHPmyAdmin.
	Extending the stories is as simple as writing them and adding them to the installer, while other content we considered like happiness, money, items, etc would require more work.

7 Facets of User Experience:
	Useful - one can have fun with our project, what's better than fun and happiness?
	Usable - RPIRPG is functional, albeit limited in its original intended potential
	Findable - installation and github repo are provided
	Credible - we're RPI students, so we're all geniuses of course!
	Desirable - who doesn't want a free and new video game?
	Accessible - same as findable, github address and installation are simple
	Valuable - ways to waste time and gain happiness are all users want

===========================================================
FUTURE PLANS
===========================================================

If we were to have more time to develop this amazing project, we had planned for things such as inventory and history pages, with more character customization such as clothes, accessories, etc.
Another obvious addition would be a longer and more in depth story than dying from Sodexo's Mystery Meat.
A more ambitious expansion would be multi player functionality where one could start a game with their friends, and the group has to democratically decide what to do, resulting in their ultimate triumph or tragic downfall.

Another big aspect we wished there was more time for would be unifying the theme and appearance of each page, as the current visual appeal is... lacking.  It is apparent that we split work by pages, and better knowledge of bootstrap and the template we used would have helped immensely earlier on.

===========================================================
LESSONS LEARNED
===========================================================

First and foremost, this project required more PHP than any of us every wanted.
Next, better time management and more group meetings to unify the project would have been useful.
There were probably half of the meetings we scheduled and then one or two people couldn't make it, so we would just cancel the whole meeting. This hurt our end product in its appearance and scattered theme.
Another aspect that would have likely helped would have been hard deadlines. Work was mostly given out in pages, with a "we'll put it all together at the end" attitude which came to bite us later on.