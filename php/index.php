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

        $reponse = $bdd->query('SELECT titre, contenu, date_creation FROM billets ORDER BY id DESC LIMIT 0,5');

        while ($donnees = $reponse->fetch())
        {
        
        
            echo '<h3>' . $donnees['titre'] . '   Le ' . $donnees['date_creation'] . '</h3>';
        
        
            echo '<p>' . $donnees['contenu'] . '</p>';    
        
	        
	        
	    
        }

        $reponse->closeCursor();

        ?>
    
    </body>
    
</html>