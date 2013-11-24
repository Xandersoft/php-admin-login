php-admin-login
=============

php-admin-login is a series of PHP files that can be used to easily password protect text files on a PHP compatible server. This script uses PHP md5() encryption, which is enough to protect moderately confidential information. However, this script IS NOT meant to handle extremely confidential information such as Bank account or Social Security numbers. The plain-text password (which by default is “Facepunch”) is kept on line 3 of functions.php (functions.php:3) by default for easy setup, but can be deleted in alternative for a MD5 hash being stored as a variable on functions.php:4. The plain-text or hashed password can only be seen by someone accessing the server via FTP. The plain-text or hashed password could be stored on a MySQL database with the proper script modifications.

Implication
------------

To password protect a file add the following line to LINE 1 of the document, before anything else. Also make sure the file’s extension is allowed to be executed by PHP on your server.

…
<?php include 'auth.php' ?>
…

To create a login form, add the following PHP code at the very top of the page,

…
<?php 

include 'functions.php';
$action = $_GET['action'];
if ($action == "logout") {logOut(); };
if ($md5LoginPasswordSession == $md5LoginPassword) {loginSuccess(); };
if ($action == "login") {logIn(); };

?>
…

and use the following HTML code to create the login form.

…
<?php loginErrorMessage(); ?>
<form action="login.php?action=login" method="POST" accept-charset="UTF-8"/>
<input type="password" name="password" placeholder="Enter your Password"/><br>
<input type="submit" value="Submit"/>
…

Lastly, use “login.php?action=logout” as the URL for any hyperlink that should log out the user.

Notes
-----

- If a user who is not logged in tries to access a password protected file, they are redirected to the address specified by functions.php:27 with the GET variable “action” set as “denied”. Someone who enters a password wrong is redirected to the address specified by functions.php:27 with the GET variable “action” set as “invalid”.
- The user is kept logged in by the use of storing the correct md5 hash using a PHP Session called “php-admin-login”. The user is logged out by clearing the variable and destroying the Session. The transaction can be further secured by the use of HTTPS.
- These files are all written to be in the same directory on a server. Any password protected files need to be in the same directory as these files, as well.
