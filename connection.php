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
<h1>Connexion</h1>
<p>Bienvenue sur mon site, si vous n'êtes pas inscrit, <a href="index.php">inscrivez-vous</a>.</p>

<form action="index.php" method="post">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" placeholder="exemple@exemple.com"/></td>
        </tr>
        <tr>
            <td>Mot de passe</td>
            <td><input type="password" name="password" placeholder="********"/></td>
        </tr>
    </table>
    <button>Connexion</button>



    
    

</form>

</body>
<script src='text/javascript' href='App.js'></script>
</html>
