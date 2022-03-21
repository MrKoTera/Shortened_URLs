<?php
$host = 'localhost';
$username = 'root';
$password = '1234rfvC';
$db = 'short_url';

$connector = mysqli_connect($host, $username, $password, $db);
if (!$connector) die("Ошибка подключения к БД! \n Error:" . mysqli_connect_error());