
<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'shopEMS');

$mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_errno) exit('Ошибка соединения с БД');
$mysqli->set_charset('utf8');

$sql = mysqli_query($mysqli, 'SELECT `id`, `category` FROM `shopems_category` ');
echo "<h2>Категории товара</h2><br>";
while ($result = mysqli_fetch_array($sql)) {
   // echo "{$result['id']}. {$result['category']}<br>";
    echo "<a href='product.php?category={$result['category']}' title={$result['category']}>" . $result['category']. "</a> </br>";
}

$mysqli->close();

require('footer.php');