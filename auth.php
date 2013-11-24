<?php

include 'functions.php';
if ($md5LoginPasswordSession !== $md5LoginPassword) {loginFailed("denied"); };

?>