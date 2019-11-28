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
    
    $måndag = filter_input(INPUT_POST, 'måndag', FILTER_SANITIZE_STRING);
    $tisdag = filter_input(INPUT_POST, 'tisdag', FILTER_SANITIZE_STRING);
    $onsdag = filter_input(INPUT_POST, 'onsdag', FILTER_SANITIZE_STRING);
    $torsdag = filter_input(INPUT_POST, 'torsdag', FILTER_SANITIZE_STRING);
    $fredag = filter_input(INPUT_POST, 'fredag', FILTER_SANITIZE_STRING);

    if ($måndag && $tisdag && $onsdag && $torsdag && $fredag) {

        $handtag = fopen($menyS, 'w');
        fwrite($handtag, "$måndag\n");
        fwrite($handtag, "$tisdag\n");
        fwrite($handtag, "$onsdag\n");
        fwrite($handtag, "$torsdag\n");
        fwrite($handtag, "$fredag\n");
        fclose($handtag);
        echo "<h1>Matmenyn har sparats för Sabatsberg</h1>";
        echo "<a href=\"./Asabatsberg.php\">Gå tillbaka</a>";
    }

    ?>
</body>
</html>