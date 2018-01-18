<!DOCTYPE html>

<html lang="fr">

    <head>
    
        <meta charset="UTF-8">
        <title>Projet de Blog</title>
        <link rel="stylesheet" href="css/blog.css">
        
    </head>
    
    <body>
    
        <h1>Mon super blog !</h1>
        
        <p>Derniers billets du blog:</p>
        
        <?php
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