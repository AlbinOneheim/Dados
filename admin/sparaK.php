<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sparaphp</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
    
    $vecka = filter_input(INPUT_POST, 'vecka', FILTER_SANITIZE_STRING);
    $veckomeny = filter_input(INPUT_POST, 'veckomeny', FILTER_SANITIZE_STRING);

    if ($veckomeny && $vecka) {
        $filnamn = "meny-k-$vecka.txt";
        $handtag = fopen("../menyer/$filnamn", 'w');
        fwrite($handtag, "$veckomeny");
        fclose($handtag);
        echo "<h1>vecka $vecka har sparats</h1>";
        echo "<a href=\"./Akungsängen.php\">Gå tillbaka</a>";
        echo "<a href=\"./logout.php\">Logga ut</a>";
    }

    ?>
</body>
</html>