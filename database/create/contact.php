<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "detsad";
$link = mysqli_connect($servername, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($link));
 
$query ="CREATE Table contact
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   fio varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    message varchar(255) NOT NULL
)
ENGINE = InnoDB DEFAULT CHARSET=utf8";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "Создание таблицы прошло успешно";
}
 
mysqli_close($link);
?>