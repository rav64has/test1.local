<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "bux";
 
 // Создаем соединение
$conn = new mysqli($servername, $username, $password, $database);
 // обнаруживаем соединение
if (!$conn) {
        die ("Ошибка подключения:". mysqli_connect_error());
} else {
echo "Подключено! <br>";
}

?>
	
