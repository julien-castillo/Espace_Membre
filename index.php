<?php
require('db_connection.php');

if (!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm'])) {

    // Variables

    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    // Test si password = password_confirm
    if($password != $password_confirm){
        header('location: index.php?error=1&pass=1');
    }

    // Test si email déjà utilisé

    $req = $db->prepare("SELECT count(*) as numberEmail FROM users WHERE email = ?");
    $req->execute(array($email));

    while($email_verification = $req->fetch()) {
        if($email_verification['numberEmail'] != 0) {
            header('location: index.php?error=1&email=1');
            exit();
        }
    }





}


?>

<!DOCTYPE html>
<html lang='fr'>

<head>
    <meta charset='UTF-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <link rel='stylesheet' href='design/style.css' />
    <title>Espace Membre</title>
</head>

<body>
    <header>
        <h1>Inscription</h1>
    </header>

    <div class="container">
        <p id="info">Bienvenue sur mon site, pour en voir plus, inscrivez-vous. Sinon, <a href="connection.php">Connectez-vous</a>.</p>

        <?php
        if(isset($_GET['error'])) {
            if(isset($_GET['pass'])) {
                echo'<p id="error">Les mots de passe ne sont pas identiques.</p>';
            } else if(isset($_GET['email'])) {
                echo'<p id="error">Cette adresse email est déjà utilisée</p>';

            }
        }
        
        
        ?>
        <div id="form">
            <form action="index.php" method="post">
                <table>
                    <tr>
                        <td>Pseudo</td>
                        <td><input type="text" name="pseudo" placeholder="Juju" /></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" placeholder="exemple@exemple.com" /></td>
                    </tr>
                    <tr>
                        <td>Mot de passe</td>
                        <td><input type="password" name="password" placeholder="********" /></td>
                    </tr>
                    <tr>
                        <td>Confirmez le mot de passe</td>
                        <td><input type="password" name="password_confirm" placeholder="********" /></td>
                    </tr>
                </table>
                <div id="button">
                    <button>Inscription</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>