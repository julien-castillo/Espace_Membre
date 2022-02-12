<?php



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
<h1>Inscription</h1>
<p>Bienvenue sur mon site, pour en voir plus, inscrivez-vous. Sinon, <a href="connection.php">Connectez-vous</a>.</p>

<form action="index.php" method="post">
    <table>
        <tr>
            <td>Pseudo</td>
            <td><input type="text" name="pseudo" placeholder="Juju"/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" placeholder="exemple@exemple.com"/></td>
        </tr>
        <tr>
            <td>Mot de passe</td>
            <td><input type="password" name="password" placeholder="********"/></td>
        </tr>
        <tr>
            <td>Confirmez le mot de passe</td>
            <td><input type="password" name="password_confirm" placeholder="********"/></td>
        </tr>
    </table>
    <button>Inscription</button>



    
    

</form>
</body>
<script src='text/javascript' href='App.js'></script>
</html>
