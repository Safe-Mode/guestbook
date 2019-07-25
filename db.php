<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'guestbook');

$link = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die('Ошибка подключения к базе данных!');

if (!$link) {
  die(mysqli_connect_error());
}

mysqli_set_charset($link, 'utf8');
