<?php 

// Copyright 2014 yAzZiE Labs
//
// This file is part of php-admin-login.
//
// php-admin-login is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// any later version.
//
// php-admin-login is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with php-admin-login. If not, see <http://www.gnu.org/licenses/>.

include 'auth.php'; // "auth.php" include() needed to password protect this page. ?>

<html>
<title>This page is password protected | php-admin-login</title>
</head>
<body>
<p>This page is password protected.<br><br>
<a href="login.php?action=logout">Log Out</a></p>
</body>
</html>
