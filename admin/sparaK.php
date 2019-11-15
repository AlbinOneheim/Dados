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
    $måndag = filter_input(INPUT_POST, 'måndag', FILTER_SANITIZE_STRING);
    $tisdag = filter_input(INPUT_POST, 'tisdag', FILTER_SANITIZE_STRING);
    $onsdag = filter_input(INPUT_POST, 'onsdag', FILTER_SANITIZE_STRING);
    $torsdag = filter_input(INPUT_POST, 'torsdag', FILTER_SANITIZE_STRING);
    $fredag = filter_input(INPUT_POST, 'fredag', FILTER_SANITIZE_STRING);

    if ($måndag && $tisdag && $onsdag && $torsdag && $fredag && $vecka) {
        $filnamn = "meny-k-$vecka.txt";
        $handtag = fopen("../menyer/$filnamn", 'w');
        fwrite($handtag, "$måndag\n");
        fwrite($handtag, "$tisdag\n");
        fwrite($handtag, "$onsdag\n");
        fwrite($handtag, "$torsdag\n");
        fwrite($handtag, "$fredag\n");
        fclose($handtag);
        
    }

    ?>
</body>
</html>