<?php
error_reporting(E_ALL);
ini_set('disply_errors', 1);
include_once "./admin/konfig-db.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sabatsberg</title>
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="./index.html"><img class="loga" src="./bilder/dadoslogo.png" alt=""></a>
        </div>
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
        <h3 class="lunchmenyh3">Sabatsbergs sjukhus</h3>
        <?php 
            echo "<div id=\"tider-div\">
            <p id=\"tider-p\">ÖPPET TIDER</p>
            <p id=\"tider-p\">(Måndag - fredag <strong>07.00-16.00</strong>)</p>
            <p id=\"tider-p\"><strong>Lunch (10.30-13.30)</strong> Inkl. smör, bröd, sallad, läsk och kaffe <strong>100:-</strong></p>
            <p id=\"tider-p\"><strong>OBS!</strong> Häfte på 10 st luncher inkl. allt <strong>850:-</strong></p>
            </div>";

            echo "<h4 class=\"veckonummer\">Vecka " . date("W") . "</h4>";
            
            $conn = new mysqli($host, $användare, $lösenord, $databas);
        
            if ($conn->connect_error) {
                die("Kunde inte ansluta till databasen: " . $conn->connect_error);
            }
        
            $query = "SELECT * FROM sabatsberg";
            $result = $conn->query($query);
        
            if (!$result) {
                die("Något blev fel med SQL-statsen.");
            }

            while ($rad = $result->fetch_assoc()) {
                $rad = $rad[meny];
                preg_replace( "/[\r\n]+/", "<br>", $rad);
                $rad = nl2br($rad, false);
                
                echo "<div>";
                echo "<p class=\"lunch-p\">$rad</p>";
                echo "</div>";
            }
        ?>
    </main>
    <footer>
        <div class="information">
            <div>
                <h2 class="lokalh2">här finns vi</h2>
                <ul>
                    <li class="lokal"><i class="fa fa-home"></i>Olivecronas väg 5, 113 61 Stockholm</li>
                    <li class="lokal"><i class="fa fa-envelope"></i>sabb.lunch@live.se</li>
                </ul>
            </div>
            <div>
                <h2 class="tiderh2">Öppettider Sabbatsberg</h2>
                <ul>
                    <li class="tider">Måndag-Fredag: 07.00-16.00</li>
                    <li class="tider">Lördag-Söndag: Stängt</li>
                </ul>
            </div>
            <div class="karta">
            <div id='map' style='width: 400px; height: 300px;'></div>
                    <script>
                        mapboxgl.accessToken =
                            'pk.eyJ1IjoicG9udHVzY2FybHN0ZWR0IiwiYSI6ImNqcGRxNmFuZTM5bWszcXBocmcwdWcwdGEifQ.leQVSDz6ohBcC-Ac_DbhqA';
                        var map = new mapboxgl.Map({
                            container: 'map',
                            style: 'mapbox://styles/mapbox/streets-v11',
                            zoom: 14,
                            center: [18.047525, 59.338519],

                        });
                        var marker1 = new mapboxgl.Marker().setLngLat([18.047525, 59.338519]).addTo(map);    

                        var popup1 = new mapboxgl.Popup()
                            .setLngLat([18.047525, 59.338519])
                            .setHTML("<p>Sabbatsbergs sjukhus</p>")
                            .addTo(map);

                            map.addControl(new mapboxgl.NavigationControl());
                    </script>
            </div>
        </div>
    </footer>
</body>
</html>