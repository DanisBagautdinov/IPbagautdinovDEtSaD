<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "detsad";
$link = mysqli_connect($servername, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($link));
 
$query ="CREATE Table gallery
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    comment varchar(255) NOT NULL,
    img TEXT NOT NULL
)
ENGINE = InnoDB DEFAULT CHARSET=utf8";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "Создание таблицы прошло успешно";
}
 
mysqli_close($link);
?>