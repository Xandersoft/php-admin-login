php-admin-login (v1.1)
=============

php-admin-login is a series of 3 PHP files (auth.php, functions.php, and login.php; demo.php is just an example of a password protected page and is not critical) that can be used to easily password protect web documents on a PHP enabled server using the PHP md5() library. The md5() library is enough to protect moderately confidential information, but should not be used to handle extremely confidential information, such as Bank account or Social Security numbers.

The plain-text password, which by default is “Facepunch”, is kept on line 20 of the functions.php file (functions.php:20) for easy setup. Alternatively, the plain-text password could be removed so that only the md5 hash is stored on the server's filesystem. The plain-text, or hashed password, can only be seen by someone accessing the server's filesystem directly.

To specify the URL that php-admin-login should redirect a user to when they log in, modify functions.php:53. By default, the specificed location is "demo.php" located on the same directory as the supplied PHP files.

Implication
------------

To password protect a web document, add the following line to line 1 of the document, before anything else. Also make sure that the file’s extension is allowed to be executed by PHP on your server.

```
<?php include 'auth.php' ?>
```

Use the following HTML code to create the login form.

```
<?php include 'functions.php'; loginErrorMessage(); ?>
<form action="login.php?action=login" method="POST" accept-charset="UTF-8"/>
<input type="password" name="password" placeholder="Enter your Password"/><br>
<input type="submit" value="Submit"/>
```

Lastly, use “login.php?action=logout” as the URL for any hyperlink that should log out the user. If you decide to change the name of any of the supplied PHP files, make sure to reflect those changes throughout all of the supplied PHP files.

Notes
-----

- If a user who is not logged in tries to access a password protected file, they are redirected to the address specified by functions.php:47 with the GET variable “action” set as “denied”. Someone who enters a password wrong is redirected to the address specified by functions.php:47 with the GET variable “action” set as “invalid”.
- The user is kept logged in by storing the correct md5 hash using a PHP Session, which by default is “php-admin-login”. The user is logged out by clearing the variable, and destroying the Session. The Session name can be changed by editing functions.php:22 to avoid interference with other websites that may use this same login code. The transaction can be further secured by the use of HTTPS.
- The supplied PHP files are written to be used on the same directory on a PHP enabled web server. Any password protected files need to be in the same directory as the supplied PHP files, as well.

Update Log
-----------
- v1.1: Updated copyright year and replaced "==" operators with "==="
