<?php $title = 'Billet simple pour L\'Alaska, le blog de Jean Forteroche'; ?>

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
        
                    <a class="nav-item nav-link text-white" href="index.php#blog">Retour à la liste des billets</a>                
                
                </div>
            
            </div>
        
        </div>
        
    </nav>
    
    <!-- Espace Connexion Admin -->
            
    <div class="container">
    
        <div class="row">
        
            <div class="col-sm-12">
            
                <br/>
            
                <h3 class="my-5 pl-5 text-center">Connexion à l'administration</h3>
                
                <div class="bg-primary rounded font-weight-bold border border-light mb-3">
       
                    <form class="col-sm-6 mx-auto" action="index.php?action=addPost" method="post">
                    
                        <div class="form-group">
                        
                            <label for="title" class="text-white">Pseudo :</label>
                            
                            <input type="text" class="form-control border border-dark" id="title" name="title" aria-describedby="emailHelp">
                            
                        </div>
                        
                        <div class="form-group">
                        
                            <label for="content" class="text-white">Mot de passe :</label>
                            
                            <input type="text" class="form-control border border-dark" id="title" name="title" aria-describedby="emailHelp">
                            
                        </div>
  
                        <button type="submit" class="btn btn-light font-weight-bold d-flex justify-content-center mb-3">Connexion</button>
                        
                    </form>
        
                </div>
                
            </div>
            
        </div>
        
    </div>    

    <?php $content = ob_get_clean(); ?>

    <?php require('template.php'); ?>
