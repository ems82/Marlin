
<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'shopEMS');

$mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_errno) exit('Ошибка соединения с БД');
$mysqli->set_charset('utf8');

$getcategory = $_GET['category'];

$sql = mysqli_query($mysqli, '
SELECT `id`, `name` , `status` , `category`
FROM `shopems_product` 
WHERE `status`= 1 AND `category` = "'.$getcategory.'"  
');

while ($result = mysqli_fetch_array($sql)) {
    echo
        "
         <a href='card_product.php?name={$result['name']}&category={$result['category']}' title={$result['name']}>" . $result['name']. "</a> </br>";
}

$mysqli->close();

require('footer.php');