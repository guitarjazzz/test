<?php
function insert($name, $text)
{
    //Отображаем время
    $data = date('Y.m.d H:i:s');
    if($name == "" || $text == "")
        return false;
    //Вставляем сообщение в таблицу
    $query = "INSERT INTO user(data, name, text) VALUES('$data', '$name', '$text')";
    $result = mysql_query($query);
    if(!$result)
    {
        echo "Ошибка добавления";
    }
    return true;
}

function select()
{
    // Сортируем сообщения по дате
    $query = "SELECT * FROM user ORDER BY data DESC";
    $result = mysql_query($query);
    if(!$result)
        die(mysql_error());
    $m = mysql_num_rows($result);
    $message = array();
    for($i = 0; $i < $m; $i++)
    {
        $row = mysql_fetch_assoc($result);
        $message[] = $row;
    }
    return $message;
}
?>