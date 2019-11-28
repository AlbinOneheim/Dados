<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
    <form action="./Akungsängen.php" method="POST">
    <h1>Inloggning</h1>
    <label for="">Användarnamn</label>
    <input name="name" type="text" required>
    <label for="">Lösenord</label>
    <input name="password" type="password" required>
    <button>Logga in</button>
    </div>
    <?php
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
        
        if ($name && $password) {
            if ($name == "a" && $password == "a") {
               echo "<p>Rätt inloggning</p>"; 
              
            }
            else {
            echo "<p>Fel inloggning</p>";
            }   
        }   
    
    ?>
    </form>
</body>
</html>