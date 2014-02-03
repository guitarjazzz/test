<?php 
// Подключение к БД
function connect()
{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "user";
    mysql_connect($host, $user,$pass) or die(mysql_error());
    mysql_query('SET NAMES utf-8');
    mysql_select_db($dbname) or die (mysql_error());





}
?>