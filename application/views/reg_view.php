<h3>Регистрация</h3>
    <form class="login" action="" method="POST">
        <label>ФИО</label>
        <input type="text" name="full_name"required placeholder="Введите свое полное имя">
        <label>Логин</label>
        <input type="text" name="login" required placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email"required placeholder="Введите адрес своей почты">
        <label>Пароль</label>
        <input type="password" name="password" required placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" required placeholder="Подтвердите пароль">
        <button type="submit" name="register">Зарегистрироваться</button>
        <br>
        <p>У вас уже есть аккаунт?, тогда нажмите <a href="/login">здесь</a>.</p>
        <p>Вернуться на <a href="/">главную</a>.</p>
    </form>
<?php
require "lib/db.php";

if (isset($_POST['register']))  {

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
if($password == $password_confirm){
    
     $password = md5($password);
}

    
 $sql = "INSERT INTO users (full_name, login, email, password) VALUES ('$full_name','$login', '$email', '$password')";
  if ($conn->query($sql)) {
        echo '<h4> "Вы успешно зарегистировались!"
    </h4>';
} else {
   echo "Ошика при регистраций:" .mysqli_error($conn);
}
}
?>
