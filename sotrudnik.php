<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divide-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/style5.css">
    <title>
        Сотрудники
    </title>
        <script src="js.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="" ="wrapper">
        <div class="header">
            <div class="nav">
                   <div class = "hblock"> <a href="index.html">О детском саде</a></div>
                <div class = "hblock"> <a href="docs.html">Документы</a></div>
                <div class = "hblock"> <a href="sotrudnik.php">Сотрудники</a></div>
                <div class = "hblock"> <a href="gallery.php">Галерея</a></div>
                <div class = "hblock"> <a href="page2.html">Связаться</a></div>
            </div>
        </div>
<div class = "content">
        <h1>Список сотрудников детского сада:</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "detsad";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
   mysqli_set_charset($conn, 'utf8');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    
  $result = $conn->query('SELECT * FROM `sotrudnik`'); // запрос на выборку
?>

<?php
while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
{
    ?>

 <div class="sotrudnik">
    <div class = "image">
     <?php
    echo "<img src='" . $row['img'] . "' alt='' />";
    ?>
    </div>
    <div class = "text">
    <?php
    echo '<p>Опыт работы:    '.$row['exp'].'</p>';
    ?>
    <?php
    echo '<p class="fio">Ф.И.О:    '.$row['name'].'</p>';
    ?>
    </div>
   
 </div>
    <?php
}
        ?>
           
</div>      

            
        <div class="footer">
            <p>2021, "Солнышко", all rights reserved<p>
            <div class="wrapper2">
                  <ul>

                    <li><a href="https://ru-ru.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
                    <li><a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                    <li><a href="https://vk.com"><i class="fa fa-vk" aria-hidden="true"></i> </a></li>
                    <li><a href="https://telegram.org"><i class="fa fa-telegram" aria-hidden="true"></i> </a></li>
                    <li><a href="https://www.whatsapp.com"><i class="fa fa-whatsapp" aria-hidden="true"></i> </a></li>
                  </ul>
            </div>
        </div>
        
    </div><!-- враппер-->
</body>
</html>
