<h1>Авторизации</h1>

<form class="login" action="" method="POST">
        
        <label>Логин</label>
        <input type="text" name="login" required placeholder="Введите свой логин">
        
        <label>Пароль</label>
        <input type="password" name="password" required placeholder="Введите пароль">
        
        <button type="submit" value="Войти" name="btn">Войти</button>
        <p>
            У вас  нет есть аккаунт? - <a href="/reg">регистрация</a>!
        </p>
        
    </form>
<?php
	require "lib/db.php";
  if(isset($_POST['btn']))   

$login = $_POST['login'];
$password = md5($_POST['password']);

$check_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

    echo 'Авторизация прошла успешно'; 

} else {

 	$errors[] = 'Пользователь с таким логином не найден!';
 }

if(!empty($errors)) {

		echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';
}
?>






	




