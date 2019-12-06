<?php
session_start();
if (!$_SESSION['login']) {
    $_SESSION['login'] = false;
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
    <form action="#" method="POST">
    <h1>Inloggning</h1>
    <label for="">Användarnamn</label>
    <input name="namn" type="text" required>
    <label for="">Lösenord</label>
    <input name="losenord" type="password" required>
    <button>Logga in</button>
    </div>
    <?php
        $namn = filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);
        $losenord = filter_input(INPUT_POST, "losenord", FILTER_SANITIZE_STRING);
        
        if ($namn && $losenord) {
            $rader = file("info.txt") or die("Kan inte öppna filen");
            foreach ($rader as $rad) {
                $delar = explode(" ", $rad);
                $nyNamn = $delar[0];
                $hash = $delar[1];  
        
                if ($namn == $nyNamn) {
        
                    if (password_verify($losenord, $hash)) {
                        if ($_SESSION['login'] = true) {
                            header("location: ./Astartsida.php");
                        } 
                    } else {
                        echo "<p>Fel användarnamn eller lösenord!</p>";
                    }
                }
            }
            echo "<p>Fel användarnamn eller lösenord!</p>";
        }
        $från = filter_input(INPUT_GET, "från", FILTER_SANITIZE_STRING);
        if ($från) {
            echo "<p>Du måste logga in för att se hemsidan!</p>";
        }
    ?>
    </form>
</body>
</html>