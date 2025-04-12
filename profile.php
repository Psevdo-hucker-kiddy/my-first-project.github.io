<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}
$pageTitle = "Профиль";
include("includes/header.php");
?>
<main>
  <h1>Профиль</h1>
  <p>Добро пожаловать, <?php echo $_SESSION['username']; ?></p>
</main>
<?php
include("includes/footer.php");
?>