<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "detsad";
$link = mysqli_connect($servername, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($link));
 
$query ="CREATE Table sotrudnik
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL,
    img TEXT NOT NULL,
    exp varchar(255) NOT NULL
)
ENGINE = InnoDB DEFAULT CHARSET=utf8";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "Создание таблицы прошло успешно";
}
 
mysqli_close($link);
?>