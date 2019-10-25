<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontakt</title>
    <link rel="stylesheet" href="style.css">
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
    <script src="./javascript.js" defer></script>
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
    <main>
        <div class="kontakta">
            <h1>Kontaka oss</h1>
            <hr>
            <p>Har du frågor eller funderingar? Vill du lämna en förfrågan på catering?</p>
            <p>Gäller ditt meddelande catering? Glöm inte att lämna information om tema och antal gäster!</p>
        </div>
        <div class="kontaktaformulär">
            <div>
                <label>Ditt namn</label>
                <input type="text" name="namn">    
                <label>Telefon</label>
                <input type="tel" name="tel"> 
                <p>Obligatoriskt om det gäller catering</p>     
                <label>Epostadress</label>
                <input type="email" name="email">
                <label>Ämne</label>
                <select>
                    <option value="Catering">Catering</option>
                    <option value="Övrigt">Övrigt</option>
                </select>
                <p>Specifiera vad ditt meddelande gäller</p>
                <label>Meddelande</label>
                <input class="meddelande" type="text">
                <button>Skicka</button>
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