<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sabatsberg</title>
    <link rel="stylesheet" href="style.css">
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <a href="./startsida.html"><img class="loga" src="./bilder/dadoslogo.png" alt=""></a>
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
            <p id=\"tider-p\">Vardag 07.00-16.00</p>
            <p id=\"tider-p\"><strong>Lunch(10.30-14.00)</strong> Inkl. smör, bröd, sallad, läsk och kaffe 95:-</p>
            <p id=\"tider-p\">Häfte på 10 st luncher inkl. allt 800:-</p>
            </div>";

            echo "<h4 class=\"veckonummer\">Vecka " . date("W") . "</h4>";
            

            $rader = file("./admin/sabatsberg.txt");
            echo "<div class=\"matmeny\">";
            foreach ($rader as $rad) {
                
                echo "<div><p class=\"lunch-p\">$rad</p></div>";   
            }
           echo "</div>";
        ?>
        


    </main>
    <footer>
        <div class="information">
            <div>
                <h2 class="lokalh2">här finns vi</h2>
                <ul>
                    <li class="lokal"><i class="fa fa-home"></i>Olivecronas väg 5, 113 61 Stockholm</li>
                    <li class="lokal"><i class="fa fa-home"></i>Kungsängens Ålderdomshem</li>
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