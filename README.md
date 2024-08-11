# Easy-Team-Document-Software-And-Code-Snippets-Storage-for-all-ORGs

Summary:

Management of Team Documents, Tasks, Guides, Scripts, Code Snippets, Collaborations, Knowledge Bases, Tech Supports

Description:

This is a Free & Open Source, Team Document & Team Code Snippets Storage Software, Written in PHP & Mysql. In its Default Configuration, nearly 1,000 Teams can work Parallely, documenting everything that they do, with a very easy to use interface. The speed & accessability of this application, will only depend on your Hosting Provider's Server & Network Speed. Please see the Features below for more information.

Features:

1. Unlimited Number of Documents, Categories, Records, Versions etc.
2. Category Names can include sub, sub-sub names with a / ( slash seperator )
3. Subject Names can have Version Numbers, Tags like Solved etc.
4. Every Field is Filterable, Searchable, Sortable as well.
5. Quick Search & Detailed Filter Builder is also available.
6. Export & Print Facilities are also available.
7. File Upload, Image Upload, Audio Upload, Video Upload & Video Embed are available as well. Please see the screenshot below. The Maximum size of attachments will depend on your Hosting Provider's php.ini settings.
8. Each Team ID is totally independent of the other.

Instructions:

1. Run the two sql files, viz. teamdocs_first.sql and teamdocs_second.sql on a mysql / mariadb database, to create the teamdocs user and database respectively.
2. Copy the entire application folder to your Public Html / htdocs folder
3. Access the index.php on your internet browser
4. The default login / team id(s) are team1 upto team1000 and the default password for all accounts is change_this
5. Enable GD Support in your php.ini file
6. Ensure Write Permissions for the Background Service User ( like www-data , daemon etc. ) on all the upload folders

Some Hints : If you are deploying this software, on a dedicated server ( as opposed to a shared one ), then follow this simple guide, for alloting more memory, to the Mysql / MariaDB database server, for enhancing its performance ( open this link in a new tab ) : https://sourceforge.net/projects/my-project-files/files/mysql_mariadb_performance_enhancements_guide.txt/download If needed, you can increase it even more, for a 64 Bit Version of your database server.

Also, disable directory browsing on your webserver, by following this forum article here : https://stackoverflow.com/questions/2530372/how-do-i-disable-directory-browsing

if you need a complete and ready to use Virtual Machine, for Intranet Usage, you can get it here: ( Direct download link, Right Click to Open in New Tab )

https://sourceforge.net/projects/easy-team-document-software/files/latest/download

if you are new to Virtual Machines OR if you need more instructions on this project, then please watch the youtube video below: ( Right Click to Open in New Tab )

https://youtu.be/Crxr8X9bGn8

Hope you find this software very useful in your day to day work. If you do, please give a Star Rating to it, so that others get to know about it.

Some screenshot below:

![Screenshot 1](https://i.imgur.com/WOnyYjg.png "Screenshot 1")




