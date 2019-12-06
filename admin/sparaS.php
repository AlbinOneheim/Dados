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

    $menyS = "sabatsberg.txt";
    
    $veckomeny = filter_input(INPUT_POST, 'veckomeny', FILTER_SANITIZE_STRING);
    

    if ($veckomeny) {

        $handtag = fopen($menyS, 'w');
        fwrite($handtag, "$veckomeny");
        fclose($handtag);
        echo "<h1>Matmenyn har sparats för Sabatsberg</h1>";
        echo "<a href=\"./Asabatsberg.php\">Gå tillbaka</a>";
        echo "<a href=\"./logout.php\">Logga ut</a>";
    }

    ?>
</body>
</html>