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
            while ($data = $posts->fetch())
            {
        ?>
        
        <div class="news">
        
            <h3>
            
                <?= echo htmlspecialchars($data['title']) ?>
                <em>le <?= $data['creation_date_fr'] ?></em>
                
            </h3>
    
        <p>
        
        <?= nl2br(htmlspecialchars($data['content'])) ?>
        
        <br/>
        
            <em><a href="#">Commentaires</a></em>
        
        </p>
        
        </div>
        
        <?php
            } 
        $posts->closeCursor();
        ?>
    
    </body>
    
</html>