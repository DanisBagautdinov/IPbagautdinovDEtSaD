<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "detsad";
$conn = mysqli_connect($servername, $username, $password, $dbname) 
    or die("Ошибка " . mysqli_error($link));
   mysqli_set_charset($conn, 'utf8');

$sql = "INSERT INTO gallery (comment, img) VALUES ('Утренник', './images/1.jpg'),
('Новая детская площадка', './images/2.jpg'),
('Открытие иностранного кружка', './images/3.jpg'),
('Праздник <<Лягушка>>', './images/4.jpg')
";

if ($conn->query($sql) === TRUE) {
   echo "Успешно создана новая запись";
} else {
   echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

// Закрыть подключение
$conn->close();
?>
 

