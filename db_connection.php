<?php
try {
    $db = new PDO('mysql:host=localhost; dbname=espace_membre; charset=utf8', 'root', 'root');
} catch(Exception $e) {
    die('Erreur: '.$e->getMessage());
}


?>