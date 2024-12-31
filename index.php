<?php 
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php if(!empty($errormsg)): ?>
            <div class="alert alert-danger">
                <ul>
                <?php foreach($errormsg as $error): ?> 
                    <li><?=$error?></li>
                    <?php endforeach?>
                </ul>
            </div>
        <?php endif?>
        <form action="" method="post">
            <div class="box form-box">
                <header>Se connecter</header>
                <div class="field input">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" autocomplete="off" required>
                </div>
                <div class="field input">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                
                <div class="field">
                        <input type="submit" class="btn" name="submit" id="submit" value="Login" required>
                </div>
                <div class="links">
                    <p>Vous n'avez pas de compte? <a href="register.php">Créer un compte</a> </p>
                </div>
            </div>
        </form>
    </div>
</body>
</html>