<!DOCTYPE html>
<html>
<head>
	<title>Чат на PHP</title>
</head>
<body>
<?php
include_once('config.php');
include_once('db.php');

connect();


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['name'];
    $text = $_POST['text'];
    insert($name, $text);
}

$message = select();

include_once('tpl.php');


//mysql_connect("localhost","root","") or die(mysql_error());
//mysql_select_db("user") or die(mysql_error());
//mysql_query(
//	"CREATE TABLE user1(
//		id INT AUTO_INCREMENT,
//		PRIMARY KEY(id),
//		data DATE,
//		name VARCHAR(255),
//		text TEXT
//		)")
//    or die(mysql_error());
//
//mysql_close();

?>
<!--
 <div align="center">
    <p><h3>Чат на php</h3></p>
    <form action="index.php" method="post">
        <p>Введите имя:</p>
        <input name="name" type="text">
        <br />
        <p>Введите текст:</p>
        <textarea name="text" cols="50" ></textarea>
        <input type="submit" value="Отправить">
    </form>
    <hr />
</div>-->
</body>
</html>
