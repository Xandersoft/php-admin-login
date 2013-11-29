<?php

// This file is part of php-admin-login.

// php-admin-login is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// any later version.

// php-admin-login is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.

// You should have received a copy of the GNU General Public License
// along with php-admin-login.  If not, see <http://www.gnu.org/licenses/>.

include 'functions.php';
$action = $_GET['action'];
if ($action == "logout") {logOut(); };
if ($md5LoginPasswordSession == $md5LoginPassword) {loginSuccess(); };
if ($action == "login") {logIn(); };

?>

<html>
<head>
<title>Log In | php-admin-login</title>
</head>
<body>
<?php loginErrorMessage(); // Displays Login Error Explanation if there is one ?>
<form action="login.php?action=login" method="POST" accept-charset="UTF-8"/>
<input type="password" name="password" placeholder="Enter your Password"/><br>
<input type="submit" value="Submit"/>
</body>
</html>
