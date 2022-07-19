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
  <br/>
  <a href='/portfolio' class = 'button' > Переход  на  странцу  </a>
</body>
</html>
  <?php
	require "lib/db.php";
  if(isset($_GET['del'])) {
  $del_res = $conn->query ("DELETE FROM uchet WHERE id= '{$_GET['del']}'");}
    if(!$del_res) exit('Ошибка удаления');

