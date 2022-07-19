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
<h2> Дабавить данные</h2>
<form  class="login" action="" method="post" enctype="multipart/form-data" name="form1" >
    <labe></labe>Тип:</labe>
    <select name="type" required>
        <option value="" selected></option>
        <option value="Приход">Приход</option>
        <option value="Расход">Расход</option>
    </select>
    <label>Дата:</label>
    <input name="date" type="date" required id="date" >
    <label>Наименование:</label>
    <input name="name" type="text" required id="name" >
    <label>Сумма:</label>
    <input name="summ" type="number" id="summ">
    <label>Количество:</label>
    <input name="amout" type="number"  id="model" >
    <label align="left">
    <input name="go" type="hidden" id="go" form="form1" value="1">
    <input type="submit" name="but" id="submit" value="Отправить"></label>
    <label align="right"><input type="reset" name="reset" id="reset" value="Сброс"></label>
</form>
<br/>
  <a href='/portfolio' class = 'button' > Переход  на  странцу  </a>
</body>
</html>
<?php
    require "lib/db.php";
    
        if(isset($_POST['but'])) { 

            $type=$_POST['type'];
            $date=$_POST['date'];
            $name=$_POST['name'];
            $summ=$_POST['summ'];
            $amout=$_POST['amout'];



    $sql_i = "INSERT INTO uchet (type, date, name, summ, amout) VALUES ('$type','$date', '$name', '$summ','$amout')";
    $sth = $conn->query($sql_i);
    
  if ($sql_i) {
        echo '<p> "Успешно!Информация занесена в базу данных"
    </p>';

} else {
  echo"Ошика при создании записи в базу данных:" .mysqli_error($conn);

  }
}
?>
