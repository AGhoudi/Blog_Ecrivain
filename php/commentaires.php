<!DOCTYPE html>

<html lang="fr">

    <head>
    
        <meta charset="UTF-8">
        <title>Projet de Blog</title>
        <link rel="stylesheet" href="blog.css">
        
    </head>
    
    <body>
    
        <h1>Mon super blog !</h1>
        
        <p>Derniers billets du blog:</p>
        
        <?php
        
        try
        {
	       $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
        }
        
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        $reponse = $bdd->query('SELECT nom FROM jeux_video');

        while ($donnees = $reponse->fetch())
        {
	       echo $donnees['nom'] . '<br />';
        }

        $reponse->closeCursor();

        ?>
    
    </body>
    
</html>