<!--<!DOCTYPE html>
<html>
<head>
	<title>Чат на PHP</title>
</head>
<body>-->

<div align="center">
    <p><h1>Чат на PHP</h1></p>
    <form action="index.php" method="post">
        <p>Введите имя:</p>
        <input name="name" type="text">
        <br />
        <p>Введите текст:</p>
        <textarea name="text" cols="50" ></textarea>
        <input type="submit" value="Отправить">
    </form>   
    <hr />
    <?php foreach($message as $md):?>
    <strong><?=$md['name']?></strong>
    <?=$md['data']?><br />
    <?=$md['text']?><br />
    <?php endforeach ?>
</div>

<!--</body>
</html>-->
