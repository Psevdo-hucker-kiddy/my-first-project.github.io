<?php
$pageTitle = "Регистрация";
include("includes/header.php");
?>
<main>
  <h1>Регистрация</h1>
  <form method="post">
    <label for="username">Имя пользователя:</label><input type="text" id="username" name="username"><br>
    <label for="password">Пароль:</label><input type="password" id="password" name="password"><br>
    <label for="email">Email:</label><input type="email" id="email" name="email"><br>
    <button type="submit">Зарегистрироваться</button>
  </form>
</main>
<?php
include("includes/footer.php");
?>