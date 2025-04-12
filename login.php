<?php
$pageTitle = "Вход";
include("includes/header.php");
?>
<main>
  <h1>Вход</h1>
  <form method="post">
    <label for="username">Имя пользователя:</label><input type="text" id="username" name="username"><br>
    <label for="password">Пароль:</label><input type="password" id="password" name="password"><br>
    <button type="submit">Войти</button>
  </form>
</main>
<?php
include("includes/footer.php");
?>