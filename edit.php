<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modifier le profil</title>
</head>
<body>
    
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Logo </a></p>
        </div>

        <div class="right-links">
            <a href="#">Modifier le profil</a>
            <a href="logout.php"> <button class="btn">Se déconnecter</button></a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">
            <header>Modifier le profil</header>
            <form action="" method="">
                <div class="field input">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" autocomplete="off" required>
                    <!--autocomplete="off" permet de ne pas afficher les données déja remplies auparavant-->
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>
            
                <div class="field">
                    <input type="submit" class="btn" name="envoyer" id="envoyer" value="Envoyer" required>
                </div>
            </form>
        </div>
</div>
</body>
</html>