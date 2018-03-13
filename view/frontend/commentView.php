<?php $title = htmlspecialchars($post['title']); ?>

    <?php ob_start(); ?>    
    
    <!-- Menu de navigation -->
       
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top mb-5">
    
        <div class="container">
    
            <a class="navbar-brand order-1 mr-0" href="index.php" >Billet simple pour l'Alaska</a>
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        
                <span class="navbar-toggler-icon"></span>
            
            </button>
        
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        
                <div class="navbar-nav">
        
                    <a class="nav-item nav-link text-white" href="index.php?action=admin">Retour à l'espace d'administration</a>                
                
                </div>
            
            </div>
        
        </div>
        
    </nav>
    
    <!-- Chapitre du blog -->
    
    <div class="container">
    
        <div class="row">
        
            <div class="col-sm-12 my-5">
            
                <h3 class="my-5 pl-5 text-center">Billet simple pour l'Alaska</h3>
                
                <div class="bg-success rounded">
    
                    <h3 class="text-center text-white chapitre py-2">
                    
                        <?= htmlspecialchars($post['title']) ?>            
            
                    </h3>
    
                    <p class="text-white text-center py-2 border">
        
                        <?= nl2br(htmlspecialchars($post['content'])) ?>
            
                    </p>
        
                    <p class="text-white text-center py-2">
                    
                        <em>le <?= $post['creation_date_fr'] ?></em>
                        
                    </p>
        
                </div>
                
            </div>
            
        </div>
        
    </div>
       
    
    <?php
    
        while ($comment = $comments->fetch())
            
        {
            
    ?>
    
    <div class="container">
    
        <div class="row">
        
            <div class="col-sm-12">        
        
                <div class="bg-info rounded my-4 text-white">
                
                    <br/>
                
                    <a href="index.php?action=changeComment&amp;id=<?= $comment['id'] ?>" class="btn btn-warning mx-auto d-flex justify-content-center mb-3 font-weight-bold font-italic text-dark" style="width: 300px;">modifier le commentaire</a>
        
                    <h3 class="text-center text-white chapitre py-2"><?= htmlspecialchars($comment['author']) ?></h3>
            
                    <p class="text-white text-center py-2 border"><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
            
                    <p class="text-white text-center py-2"><em>le <?= $comment['comment_date_fr'] ?></em></p>
                    
                    <p class="text-white text-center py-2"><em>
                    
                    <?php 
        
                    if ($comment['report_comment'] > 0 ) {
                    
                        echo 'Nombre de signalements : ' . $comment['report_comment'];
                        
                    }
            
                    else {
                    
                    }
            
                    ?>
                    
                    </em></p>
                    
                    <a href="index.php?action=unreportComment&amp;id=<?= $comment['id'] ?>" class="btn btn-light mx-auto d-flex justify-content-center mb-3 font-weight-bold font-italic text-dark" style="width: 300px;">désignaler le commentaire</a>
                    
                    <a href="index.php?action=delComment&amp;id=<?= $comment['id'] ?>" class="btn btn-danger mx-auto d-flex justify-content-center mb-3 font-weight-bold font-italic text-dark" style="width: 300px;">supprimer le commentaire</a>
                    
                    <br/>     
        
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