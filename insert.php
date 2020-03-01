<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'shopEMS');

$mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_errno) exit('Ошибка соединения с БД');
$mysqli->set_charset('utf8');

$getname = $_POST['name'];
$getdescription = $_POST['description'];
$getfull_description = $_POST['full_description'];
$getcategory = $_POST['category'];
$getstatus = $_POST['status'];
if ($getstatus!==1) {
    $getstatus = 0;
}

$sql = "INSERT INTO `shopems_product` (`name`, `description`, `full_description`, `image`, `category`, `status`) 
VALUES ('".$getname."' , '".$getdescription."' , '".$getfull_description."' , '".ссылка."', '".$getcategory."' , '".$getstatus."')";


if (mysqli_query($mysqli, $sql)) {
      echo "Новая запись создана";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}

$mysqli->close();
require('footer.php');