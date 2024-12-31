<?php 
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Menu</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p>Logo</p>
        </div>

        <div class="right-links">
            <a href="edit.php">Modifier le profil</a>
            <a href="logout.php"> <button class="btn">Se déconnecter</button></a>
        </div>
    </div>
    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b>Gilles</b>, Bienvenu</p>
                </div>
                <div class="box">
                    <p>Votre email est <b>123@gmail.com</b></p>
                </div>
                <div class="buttom">
                    <div class="box">
                        <p>Et vous avez <b>20ans</b> . </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>