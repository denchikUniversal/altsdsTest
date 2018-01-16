<?php

$db = mysqli_connect('localhost', 'root', '', 'test') or die('No connect to DB');
mysqli_set_charset($db, 'utf8') or die("Can't set charset");

?>