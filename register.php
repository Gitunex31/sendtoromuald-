<?php 
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>S'inscrire</title>
</head>
<body>
    <div class="container">
            <div class="box form-box">
                <?php 
                    if(isset($_POST['submit'])){
                        $errormsg = array();
                        if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['age'])){
                            $nom=htmlspecialchars($_POST['nom']);
                            $email=htmlspecialchars($_POST['email']);
                            $password=htmlspecialchars($_POST['password']);
                            $age= int() ($_POST['age']);
                        }
                        else{
                            $errormsg['error']="Veuillez remplir tous les champs ! ";
                        }
                    }
                ?>
                <header>S'inscrire</header>
                <form action="" method="post">
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
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" autocomplete="off" required>
                    </div>
                
                    <div class="field">
                        <input type="submit" class="btn" name="submit" id="submit" value="Login" required>
                    </div>
                    <div class="links">
                        Vous êtes déja membre? <a href="index.php">Se connecter</a>
                    </div>
                </form>
            </div>
    </div>
</body>
</html>