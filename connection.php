<?php



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
        <div id="form">
            <form action="index.php" method="post">
                <table>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" placeholder="exemple@exemple.com" /></td>
                    </tr>
                    <tr>
                        <td>Mot de passe</td>
                        <td><input type="password" name="password" placeholder="********" /></td>
                    </tr>
                </table>
                <div id="button">
                    <button>Connexion</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>