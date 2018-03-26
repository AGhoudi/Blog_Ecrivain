<?php $title = 'Billet simple pour L\'Alaska, le blog de Jean Forteroche'; ?>

    <?php ob_start(); ?>
    
    <?php session_start(); ?>
    
    <!-- Menu de navigation -->
       
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top mb-5">
    
        <div class="container">
    
            <a class="navbar-brand order-1 mr-0" href="#" >Billet simple pour l'Alaska</a>
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        
                <span class="navbar-toggler-icon"></span>
            
            </button>
        
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        
                <div class="navbar-nav">
            
                    <a class="nav-item nav-link text-white" href="#">Accueil</a>
                
                    <a class="nav-item nav-link text-white" href="#presentation">Présentation</a>
                
                    <a class="nav-item nav-link text-white" href="#blog">Blog</a>
                
                    <a class="nav-item nav-link text-white" href="#administration">Administration</a>
                
                </div>
            
            </div>
        
        </div>
        
    </nav>
    
    <!-- Espace d'accueil du blog -->
    
    <div class="jumbotron text-sm-center pt-5 mb-0">
    
        <h1 class="display-5 my-5">Blog de Jean Forteroche</h1>
        
        <p class="lead my-5">Bienvenue cher visiteur sur mon blog, celui-ci me servira à publier mon nouveau roman: "Billet simple pour l'Alaska".
        </p>
  
        <div class="card" style="width: 18rem;">
        
            <img class="card-img-top" src="../../../projet4/public/image/logo.jpg" alt="Card image cap">
            
            <div class="card-body">
            
                <h5 class="card-title">L'Alaska</h5>
                
                <p class="card-text text-dark font-weight-bold">L'Alaska est une contrée glacée, se situant en Amérique du nord. Elle est caractérisé par un climat rude.
                </p>
    
            </div>
            
        </div>
  
        <div class="btn-group my-5 d-flex justify-content-center" role="group" aria-label="buttons">
            
                <a class="btn btn-light btn-lg" href="#presentation">Présentation</a>
                
                <a class="btn btn-light btn-lg" href="#blog">Blog</a>
                               
        </div>
  
    </div>
    
    <!-- Carrousel sur le thème de l'Alaska -->
    
    <div class="container">
      
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        
            <ol class="carousel-indicators">
            
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                
            </ol>
            
        <div class="carousel-inner">
        
            <div class="carousel-item active">
            
                <img class="d-block w-100 rounded" src="../../../projet4/public/image/image1.jpg" alt="First slide">
                
            </div>
            
            <div class="carousel-item">
            
                <img class="d-block w-100 rounded" src="../../../projet4/public/image/image2.jpg" alt="Second slide">
                
            </div>
            
            <div class="carousel-item">
            
                <img class="d-block w-100 rounded" src="../../../projet4/public/image/image3.jpg" alt="Third slide">
                
            </div>
            
            <div class="carousel-item">
            
                <img class="d-block w-100 rounded" src="../../../projet4/public/image/image4.jpg" alt="Four slide">
                
            </div>
    
        </div>
        
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            
            <span class="sr-only">Previous</span>
            
        </a>
        
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            
            <span class="sr-only">Next</span>
            
        </a>
        
        </div>
  
    </div>    
        
    <!-- Liste des romans et présentation -->
    
    <div class="container" id="presentation">
    
        <div class="row">
        
            <div class="col-sm-4 my-5">
            
                <h3 class="my-5">Liste de mes précédents romans</h3>
                
                <div class="list-group">
                
                    <a class="list-group-item list-group-item-action">Une nuit d'hiver</a>
                    
                    <a class="list-group-item list-group-item-action">Le calme avant la tempête</a>
                    
                    <a class="list-group-item list-group-item-action">La lutte</a>
                    
                    <a class="list-group-item list-group-item-action">Voyage merveilleux</a>
                    
                    <a class="list-group-item list-group-item-action">Du plus haut des sommets</a>
                    
                    <a class="list-group-item list-group-item-action">Le fond des océans</a>                    
                    
                </div>
                
            </div>
            
            <div class="col-sm-8 my-5">
            
                <h3 class="my-5 pl-5 text-center">Qui suis-je?</h3>
                
                <div class="bg-light rounded">
                
                    <p class="text-dark text-center">Je tiens à me présenter, pour ceux qui ne me connaîtrais pas encore. Je suis Jean Forteroche, acteur et écrivain, qui prends plaisir à voyager à travers mes romans, et partager avec mes lecteurs mon goût pour l'aventure</p>
                
                    <p class="text-dark text-center">J'adore voyager et découvrir de nouvelles cultures et personnes. Même si j'ai été un acteur pendant des années, je m'investis désormais beaucoup plus dans mes écrits</p>
                
                    <p class="text-dark text-center">Ainsi je suis heureux de partager mon nouveau roman "billet simple pour l'Alaska", avec vous cher lecteurs sur mon blog, et je vous souhaite une bonne lecture, amicalement, Jean.</p>
                
                </div>
                
            </div>
            
        </div>
            
    </div>
    
    <!-- Liste des chapitres et blog -->    
   
    <div class="container" id="blog">
    
        <div class="row">
        
            <div class="col-sm-12 my-5">
            
            <h3 class="my-5 pl-5 text-center" >Billet simple pour l'Alaska</h3>
            
                <?php

                    while ($data = $posts->fetch())
        
                    {
        
                ?>                   
      
                <div class=" container bg-success rounded mb-5">                                    
                
                    <h3 class="text-center text-white chapitre py-2">
           
                        <?= htmlspecialchars($data['title']) ?>            
            
                    </h3>
        
                    <p  class="text-white text-center py-2 border">
           
                        <?= $data['content'] ?>            
            
                    </p>
                    
                    <p class="text-white text-center py-2">
                    
                        <em>le <?= $data['creation_date_fr'] ?></em>
                        
                    </p>
        
                    <a href="index.php?action=post&amp;id=<?= $data['id'] ?>" class="btn btn-light mx-auto d-flex justify-content-center mb-3 font-weight-bold font-italic" style="width: 200px;">Ajouter un commentaire</a>
                                
                </div>
        
            </div>
    
        </div>
    
    </div>
    
    <?php
        
        }

        $posts->closeCursor();

    ?>
            
    <!-- Accès à l'espace d'administration -->
    
    <div class="container" id="administration">
    
        <div class="row">
                   
            <div class="col-sm-12 my-5" style="height: 700px;">
            
                <h3 class="my-5 text-center">Administration du blog</h3>
                                       
                    <a href="index.php?action=adminConnect" class="btn btn-light  mx-auto d-flex justify-content-center mb-3 font-weight-bold font-italic mb-5 " style="width: 300px;">Espace Administration</a>                                
                
            </div>
           
        </div>
        
    </div>        
    
    <?php $content = ob_get_clean(); ?>

    <?php require('template.php'); ?>