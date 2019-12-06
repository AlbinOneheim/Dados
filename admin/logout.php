<?php
session_start();
if (!$_SESSION['login']) {
    $_SESSION['login'] = false;
    header("location: ./admin.php?från=logout.php");
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logga ut</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $_SESSION['login'] = false;
    echo "<h1>Du är utloggad</h1>";
    ?>
    <a href="./admin.php">Logga in</a>
</body>
</html>