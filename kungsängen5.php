<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sabatsberg</title>
    <link rel="stylesheet" href="style.css">
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <a href="./startsida.html"><img class="loga" src="./bilder/dadoslogo.png" alt=""></a>
        <div class="mail">
            <a href="./kontakt.php">
                <i class='fa fa-envelope-o'></i>
                <p class="p-kontakt">Kontakt</p>
            </a>
        </div>
    </header>
    <main class="sabatsberg">
        <h2 class="lunchmenyh2">Lunchmeny</h2>
        <h3 class="lunchmenyh3">Kungsängens Ålderdomshem</h3>
        <div class="pilar">
        <a href="./kungsängen4.php" class="pil-vänster-5"><i class='fas fa-arrow-left'></i></a>
        <?php
            
            echo "<h4 class=\"veckonummer\">Vecka " . date("W", strtotime("+4 week")) . "</h4>";
        ?>
    </div>
        <div class="matmeny">
            <div class="måndag">
                <h4 class="dag">Måndag</h4>
                <p class="lunch-p">Nötfärsbiffar med morot och grädde serveras med potatis och purjolökpuré. Stekt gösfilé serveras med frästa bönor, kokt potatis samt kall citron/dillsås, pepparrot och räkor. Dagens vegetariska: Sötpotatis och morotsoppa</p>
            </div>
            <div class="tisdag">
                <h4 class="dag">Tisdag</h4>
                <p class="lunch-p">Nötfärsbiffar med morot och grädde serveras med potatis och purjolökpuré. Stekt gösfilé serveras med frästa bönor, kokt potatis samt kall citron/dillsås, pepparrot och räkor. Dagens vegetariska: Sötpotatis och morotsoppa</p>
            </div>
            <div class="onsdag">
                <h4 class="dag">Onsdag</h4>
                <p class="lunch-p">Nötfärsbiffar med morot och grädde serveras med potatis och purjolökpuré. Stekt gösfilé serveras med frästa bönor, kokt potatis samt kall citron/dillsås, pepparrot och räkor. Dagens vegetariska: Sötpotatis och morotsoppa</p>
            </div>
            <div class="torsdag">
                <h4 class="dag">Torsdag</h4>
                <p class="lunch-p">Nötfärsbiffar med morot och grädde serveras med potatis och purjolökpuré. Stekt gösfilé serveras med frästa bönor, kokt potatis samt kall citron/dillsås, pepparrot och räkor. Dagens vegetariska: Sötpotatis och morotsoppa</p>
            </div>
            <div class="fredag">
                <h4 class="dag">Fredag</h4>
                <p class="lunch-p">Nötfärsbiffar med morot och grädde serveras med potatis och purjolökpuré. Stekt gösfilé serveras med frästa bönor, kokt potatis samt kall citron/dillsås, pepparrot och räkor. Dagens vegetariska: Sötpotatis och morotsoppa</p>
            </div>
        </div>


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
            <div>
                <h2 class="tiderh2">Öppettider Kungsängen</h2>
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
                            zoom: 8.5,
                            center: [18.037525, 59.438519],

                        });
                        var marker1 = new mapboxgl.Marker().setLngLat([18.047525, 59.338519]).addTo(map)
                        var marker2 = new mapboxgl.Marker().setLngLat([17.723015, 59.492018]).addTo(map)

                        var popup1 = new mapboxgl.Popup()
                            .setLngLat([18.047525, 59.338519])
                            .setHTML("<p>Sabbatsbergs sjukhus</p>")
                            .addTo(map);
                        var popup2 = new mapboxgl.Popup()
                            .setLngLat([17.723015, 59.492018])
                            .setHTML("<p>Kungsängen Ålderdomshem</p>")
                            .addTo(map);

                            map.addControl(new mapboxgl.NavigationControl());
                    </script>
            </div>
        </div>
    </footer>
</body>
</html>