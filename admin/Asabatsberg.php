<?php
session_start();
if (!$_SESSION['login']) {
    $_SESSION['login'] = false;
    header("location: ./admin.php?från=Asabbatsberg");
}
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
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <a href="./startsida.html"><img class="loga" src="./bilder/dadoslogo.png" alt=""></a>
        <div class="mail">
            <a href="./kontakt.html">
                <i class='fa fa-envelope-o'></i>
                <p class="p-kontakt">Kontakt</p>
            </a>
        </div>
    </header>
    <main class="sabatsberg">
        <h2 class="lunchmenyh2">Lunchmeny</h2>
        <h3 class="lunchmenyh3">Sabatsbergs sjukhus</h3>
        <a class="plats1" href="./Akungsängen.php">Gå till kungängens matmeny</a>
        <a href="./logout.php">Logga ut</a>
        <?php
            
            echo "<h4 class=\"veckonummer\">Vecka" . date("W") . "</h4>";
        ?>
        <form action="sparaS.php" class="matmeny" method="POST">
            <div class="veckomeny">
                <label class="dag">Vecko meny</label>
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