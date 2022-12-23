<?php

define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'bd-sql');

$conn = new PDO('mysql:host=' . HOST. ';dbname=' . DB .';', USER, PASSWORD);