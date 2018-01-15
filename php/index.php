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

        $reponse = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY id DESC LIMIT 0,5');

        while ($donnees = $reponse->fetch())
        {
            
        ?>
        
        <div class="news">
        
            <h3>
            <?php echo htmlspecialchars($donnees['titre']); ?>
            <em>le <?php echo $donnees['date_creation_fr']; ?></em>
            </h3>
    
        <p>
        
        <?php
    
        echo nl2br(htmlspecialchars($donnees['contenu']));
            
        ?>
        
        <br/>
        <em><a href="commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
        </p>
        
        </div>
        <?php
        } 
        $reponse->closeCursor();
        ?>
    
    </body>
    
</html>