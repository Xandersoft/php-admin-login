php-admin-login
=============

php-admin-login is a series of 4 PHP files that can be used to easily password protect text files on a PHP compatible server. This script uses PHP md5() encryption, which is enough to protect moderately confidential information. However, this script IS NOT meant to handle extremely confidential information such as Bank account or Social Security numbers. The plain-text password (which by default is “Facepunch”) is kept on line 18 of functions.php (functions.php:18) by default for easy setup, but can be deleted in alternative for a md5 hash being stored as a variable on functions.php:19. The plain-text or hashed password can only be seen by someone accessing the server via FTP. The plain-text or hashed password could be stored on a MySQL database with the proper script modifications.

Implication
------------

To password protect a file add the following line to LINE 1 of the document, before anything else. Also make sure the file’s extension is allowed to be executed by PHP on your server.

```
<?php include 'auth.php' ?>
```

To create a login form, use the following HTML code to create the login form.
NOTE: If the name of your login form is not "login.php", you must chance that in the HTML code.

```
<?php include 'functions.php'; loginErrorMessage(); ?>
<form action="login.php?action=login" method="POST" accept-charset="UTF-8"/>
<input type="password" name="password" placeholder="Enter your Password"/><br>
<input type="submit" value="Submit"/>
```

Lastly, use “login.php?action=logout” as the URL for any hyperlink that should log out the user. Again, if the name of your login form is not "login.php", you must chance that in this code as well.

Notes
-----

- If a user who is not logged in tries to access a password protected file, they are redirected to the address specified by functions.php:45 with the GET variable “action” set as “denied”. Someone who enters a password wrong is redirected to the address specified by functions.php:45 with the GET variable “action” set as “invalid”.
- The user is kept logged in by storing the correct md5 hash using a PHP Session (which by default is “php-admin-login”). The user is logged out by clearing the variable and destroying the Session. The Session name can be changed by editing functions.php:20 to avoid interference with other websites that may use this same login code. The transaction can be further secured by the use of HTTPS.
- These files are all written to be in the same directory on a server. Any password protected files need to be in the same directory as these files, as well.
