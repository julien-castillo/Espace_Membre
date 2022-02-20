<?php
session_start();
if(isset($_SESSION['connect'])) {
    header('location: index.php');
            exit();
}
require('db_connection.php');
if (!empty($_POST['email']) && !empty($_POST['password'])) {

    // Variables
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = 1;

    // Crypter le password
    $password = "aq1" . sha1($password . "1254") . "25";

    $req = $db->prepare('SELECT * FROM users WHERE email = ?');
    $req->execute(array($email));

    while ($user = $req->fetch()) {
        if ($password == $user['password']) {
            $error = 0;
            $_SESSION['connect'] = 1;
            $_SESSION['pseudo'] = $user['pseudo'];

            if(isset($_POST['connect'])) {
                setcookie('log', $user['secret'], time() + 365*24*3600, '/', null, false, true);
            }

            header('location: connection.php?success=1');
            exit();
        }
    }
    if ($error == 1) {
        header('location: connection.php?error=1');
        exit();
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
    <title>Connexion</title>
</head>

<body>
    <header>
        <h1>Connexion</h1>
    </header>
    <div class="container">
        <p id="info">Bienvenue sur mon site, si vous n'êtes pas inscrit, <a href="index.php">inscrivez-vous</a>.</p>
        <?php
        if (isset($_GET['error'])) {
            echo '<p id="error">Nous ne pouvons pas vous authentifier.</p>';
        } else if (isset($_GET['success'])) {
            echo '<p id="success">Vous êtes maintenant connecté.</p>';
        }




        ?>


        <div id="form">
            <form action="connection.php" method="post">
                <table>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" placeholder="exemple@exemple.com" required></td>
                    </tr>
                    <tr>
                        <td>Mot de passe</td>
                        <td><input type="password" name="password" placeholder="********" required></td>
                    </tr>
                </table>
                <p><label><input type="checkbox" name="connect" checked> Connexion automatique</label></p>
                <div id="button">
                    <button>Connexion</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>