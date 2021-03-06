<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sabatsberg</title>
    <link rel="stylesheet" href="../style.css">
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <a href="./startsida.html"><img class="loga" src="./bilder/dadoslogo.png" alt=""></a>
    </header>
    <main class="sabatsberg">
        <h2 class="lunchmenyh2">Lunchmeny</h2>
        <h3 class="lunchmenyh3">Kungsängen</h3>
        <a class="plats1" href="./Asabatsberg.php">Gå till sabatsbergs matmeny</a>
        <a href="./logout.php">Logga ut</a>
        <?php
            echo "<h4 class=\"veckonummer\">Vecka" . date("W") . "</h4>";
        ?>
        <form action="./sparaK.php" class="matmeny" method="POST">
            <?php
            $vecka = date("W");
            for ($i = 0; $i < 5; $i++) { 
                if ($i == 0) {
                    echo "<input type=\"radio\" name=\"vecka\" value=\"$vecka\" checked> v$vecka<br>";
                } else {
                    echo "<input type=\"radio\" name=\"vecka\" value=\"$vecka\"> v$vecka<br>";
                }
                
                if ($vecka == 52) {
                    $vecka = 1;
                }else {
                    $vecka++;
                }
                
            }
            ?>
        <form action="sparaS.php" class="matmeny" method="POST">
            <div class="veckomeny">
                <label class="dag">veckomeny</label>
                <textarea rows="30" cols="70" class="lunch-p" name="veckomeny"></textarea>
            </div>
            <button>Spara</button>
        </form>


    </main>
    <footer>
        <div class="informationStart">
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
                            zoom: 13,
                            center: [17.723015, 59.492018],

                        });
                        var marker1 = new mapboxgl.Marker().setLngLat([17.723015, 59.492018]).addTo(map);
                
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