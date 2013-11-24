<?php 

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