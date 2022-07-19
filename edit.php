<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Дамашная бухгалтерия</title>
<link rel="stylesheet" type="text/css" href="/css/main1.css" />  
</head>
<body>
 <h2> Редактировать</h2>
    <br>
    <form class="login" action="" method="POST">
      <br>
        <div>
            <label for="id">Выберите №  строки :</label>
            <input type="number" id="id" name="id" required>
        </div>
        <br>
        <div>
            <label for="type">Тип:</label>
            <input type="text"  name="type">
        </div>
        <br>
        <div>
            <label for="date">Дата:</label>
            <input type="date"  name="date">
        </div>
        <br>
        <div>
            <label for="name">Наимеование:</label>
            <input type="text" id="name" name="name" >
        </div>
        <br>
        <div>
            <label for="summ">Стоимость,сум:</label>
            <input type="number"  id="summ" name="summ">
        </div>
        <br>
        <div>
            <label for="amount">Количество:</label>
            <input type="number" id="amout" name="amout">
        </div>
        <input type="submit" class= "button"name=but2 value="Сохранить">
    </form>
    <br/>
<a href='/portfolio' class = 'button' > Переход  на  странцу  </a>
    </body>
</html>
<?php
	require "lib/db.php";
  if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
{
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    $sql = "SELECT * FROM uchet WHERE id = '$id'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            foreach($result as $row){
              $type = $row["type"];
              $date = $row["date"];
              $name = $row["name"];
              $summ = $row["summ"];
              $amout = $row["amout"];
            }
              }
        else{
            echo "<div>Пользователь не найден</div>";
        }
        mysqli_free_result($result);
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
}
else if (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["summ"]) ) {
      
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $summ = mysqli_real_escape_string($conn, $_POST["summ"]);
    $amout = mysqli_real_escape_string($conn, $_POST["amout"]);
      
    $sql = "UPDATE uchet SET type = '$type', date = '$date', name ='$name', summ = '$summ', amout = '$amout' WHERE id = '$id'";
    if($result = mysqli_query($conn, $sql)){
        echo "Данные успешно обновлени";
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
}
else{
    echo "Некорректные данные";
}
mysqli_close($conn);
?>
  