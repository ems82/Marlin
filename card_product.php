<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'shopEMS');

$mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_errno) exit('Ошибка соединения с БД');
$mysqli->set_charset('utf8');

$getname = $_GET['name'];
$getcategory = $_GET['category'];

$sql = mysqli_query($mysqli, '
SELECT `id`, `name` , `description`, `full_description`
FROM `shopems_product` 
WHERE `name` =  "'.$getname.'" AND `category` = "'.$getcategory.'"
');

//var_dump($sql);

while ($result = mysqli_fetch_array($sql)) {
    echo
        "<h1>{$result['name']}</h1> </br>
         {$result['description']} </br></br>
         {$result['full_description']} </br>
 ";
}

$mysqli->close();

require('footer.php');