<?php $title = 'Billet simple pour L\'Alaska, le blog de Jean Forteroche';  ?>

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
        
                    <a class="nav-item nav-link text-white" href="index.php">Retour à l'accueil</a>                
                
                </div>
            
            </div>
        
        </div>
        
    </nav> 
    
    <?php $content = ob_get_clean(); ?>

    <?php require('template.php'); ?>