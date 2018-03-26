<?php $title = 'Billet simple pour L\'Alaska, le blog de Jean Forteroche'; ?>

    <?php ob_start(); ?>
    
        
    <?php
    
        while ($comment = $comments->fetch())
            
        {
            
    ?>    
    
    <!-- Menu de navigation -->
       
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top mb-5">
    
        <div class="container">
    
            <a class="navbar-brand order-1 mr-0" href="index.php" >Billet simple pour l'Alaska</a>
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        
                <span class="navbar-toggler-icon"></span>
            
            </button>
        
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        
                <div class="navbar-nav">
        
                    <a class="nav-item nav-link text-white" href="index.php?action=commentPannel&amp;id=<?= $comment['post_id'] ?>">Retour aux commentaires</a>                
                
                </div>
            
            </div>
        
        </div>
        
    </nav>
    
    <!-- Commentaire selectionné -->
    
    <div class="container">
    
        <div class="row">
        
            <div class="col-sm-12 my-5">
            
                <h3 class="my-5 pl-5 text-center">Billet simple pour l'Alaska</h3>
                
                <div class="bg-info rounded my-4 text-white">
    
                    <h3 class="text-center text-white chapitre py-2">
                    
                        <?= htmlspecialchars($comment['author']) ?>            
            
                    </h3>
    
                    <p class="text-white text-center py-2">
        
                        <?php echo '<div class="text-white text-center py-2" style="font-family: \'Lobster\',cursive;font-size: 25px;">' . $comment['comment'] . '</div>' ?>
            
                    </p>
        
                    <p class="text-white text-center py-2">
                    
                        <em>le <?= $comment['comment_date_fr'] ?></em>
                        
                    </p>
        
                </div>
                
            </div>
            
        </div>
        
    </div>
    

    
    <!-- Module de messagerie -->
            
    <div class="container">
    
        <div class="row">
        
            <div class="col-sm-12">
            
                <h3 class="my-5 pl-5 text-center">Modifier le commentaire</h3>
                
                <div class="bg-primary rounded font-weight-bold border border-light mb-3">
       
                    <form class="col-sm-6 mx-auto" action="index.php?action=updateComment&amp;id=<?= $comment['id'] ?>" method="post">
                    
                        <div class="form-group">
                        
                            <label for="author" class="text-white">Pseudo :</label>
                            
                            <input type="text" class="form-control" id="author" name="author" aria-describedby="emailHelp">
                            
                        </div>
                        
                        <div class="form-group">
                        
                            <label for="comment" class="text-white">Commentaire :</label>
                            
                            <textarea class="form-control tinymce" id="comment" name="comment"  rows="3"><?= $comment['comment'] ?></textarea>
                            
                        </div>
  
                        <button type="submit" class="btn btn-light font-weight-bold d-flex justify-content-center mb-3">Envoyer</button>
                        
                    </form>
        
                </div>
                
            </div>
            
        </div>
        
    </div>
    
    <?php
        
        }

        $comments->closeCursor();
            
    ?>   
    
    <?php $content = ob_get_clean(); ?>

    <?php require('template.php'); ?>