<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kungsängen</title>  
    <link rel="stylesheet" href="style.css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet'/>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
</head>
<body>
    <header>
        <a href="./index.html"><img class="loga" src="./bilder/dadoslogo.png" alt=""></a>
        <div class="platser">
                <ul>
                    <li><a href="./sabatsberg.php">Sabbatsbergs Sjukhus</a></li> 
                    <li><a href="./catering.html">Catering</a></li> 
                    <li><a href="kungsängen.php">Kungsängens Äldreboende</a></li>   
                </ul>
            </div>
    </header>
    <main class="sabatsberg">
        <h2 class="lunchmenyh2">Lunchmeny</h2>
        <h3 class="lunchmenyh3">Kungsängens Äldreboende</h3>
        <div id="tider-div">
            <p id="tider-p">ÖPPET TIDER</p>
            <p id="tider-p">Vardag 07.00-16.00</p>
            <p id="tider-p"><strong>Lunch(10.30-14.00)</strong> Inkl. smör, bröd, sallad, läsk och kaffe 95:-</p>
            <p id="tider-p">Häfte på 10 st luncher inkl. allt 800:-</p>
        </div>
        <div class="pilar">
            
        <?php

        $vecka = filter_input(INPUT_GET, 'vecka', FILTER_SANITIZE_STRING);
        if (!$vecka) {
            $vecka = date("W");
        }
        
        $nästaVecka = $vecka + 1;
        if ($nästaVecka > 52) {
            $nästaVecka = 1;
        }
        $tillbakaVecka = $vecka - 1;
        if ($tillbakaVecka < 1) {
            $tillbakaVecka = 52;
        }
        echo "<a href=\"./kungsängen.php?vecka=$tillbakaVecka\"         class=\"pil-vänster-1\"><i class='fas fa-arrow-left'></i></a>";
        echo "<h4 class=\"veckonummer\">Vecka $vecka</h4>";
        echo "<a href=\"./kungsängen.php?vecka=$nästaVecka\" class=\"pil-höger-1\"><i class='fas fa-arrow-right'></i></a>";
        echo "</div>";

        $filnamn = "meny-k-$vecka.txt";
        if (is_readable("./menyer/$filnamn")) {
            $rader = file("./menyer/$filnamn");
            echo "<div class=\"matmeny\">";
            foreach ($rader as $rad) {
                echo "<div><p class=\"lunch-p\">$rad</p></div>";
                
            }
            echo "</div>";
        } else {
            echo "<p>Veckan finns inte!</p>";
        }
        ?>

    </main>
    <footer>
    <div class="information">
    <div>
        <h2 class="lokalh2">här finns vi</h2>
        <ul>
            <li class="lokal"><i class="fa fa-home"></i>Kungsängens Ålderdomshem</li>
            <li class="lokal"><i class="fa fa-envelope"></i>sabb.lunch@live.se</li>
        </ul>
    </div> 
    <div>
        <h2 class="tiderh2">Öppettider Kungsängen</h2>
        <ul>
            <li class="tider">Måndag-Fredag: 07.00-16.00</li>
            <li class="tider">Lördag-Söndag: Stängt</li>
        </ul>
    </div>
        <div class="karta">
        <div id='map' style='width: 400px; height: 300px;'>
    </div>
    <script>
        mapboxgl.accessToken =
        'pk.eyJ1IjoicG9udHVzY2FybHN0ZWR0IiwiYSI6ImNqcGRxNmFuZTM5bWszcXBocmcwdWcwdGEifQ.leQVSDz6ohBcC-Ac_DbhqA';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            zoom: 13,
            center: [17.723015, 59.492018],

        });
        var marker1 = new mapboxgl.Marker().setLngLat([18.047525, 59.338519]).addTo(map);
        
        var popup1 = new mapboxgl.Popup()
            .setLngLat([17.723015, 59.492018])
            .setHTML("<p>Kungsängen Älderboende</p>")
            .addTo(map);

        map.addControl(new mapboxgl.NavigationControl());
    </script>
    </div>
    </div>
    </footer>
</body>
</html>