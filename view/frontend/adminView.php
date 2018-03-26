<?php $title = 'Billet simple pour L\'Alaska, le blog de Jean Forteroche'; ?>

    <?php ob_start(); ?>
    
    <?php

    session_start();
    $connects = $connection->fetch(); 

    $storedUsername = $connects['username'];
    $storedPassword = $connects['password'];        
    
    if (isset($_POST['username']) && htmlspecialchars($_POST['username']) == $storedUsername && isset($_POST['password']) && password_verify(htmlspecialchars($_POST['password']), $storedPassword))
        
    {
        
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
        
        if(isset($_POST['case'])) {
            setcookie('username', $_POST['username'], time() + 2*24*3600, null, null, false, true);
            setcookie('password', $_POST['password'], time() + 2*24*3600, null, null, false, true);
            
        }
    
    ?>
    
    <!-- Menu de navigation -->
       
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top mb-5">
    
        <div class="container">
    
            
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        
                <span class="navbar-toggler-icon"></span>
            
            </button>
        
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        
                <div class="navbar-nav">
        
                    <a class="nav-item nav-link text-white" href="index.php">Retour au blog</a>
                    <a class="nav-item nav-link text-white ml-5" href="#">Bienvenue, <?= $_SESSION['username'] ?></a>
                    <a href="index.php?action=adminLogout" class="btn btn-danger float-right mb-3 font-weight-bold font-italic ml-5" style="width: 200px;">Se déconnecter</a> 
               
                
                </div>
            
            </div>
        
        </div>
        
    </nav>
    
    <!-- Chapitre du blog -->
    
    <br/>
    
    <h3 class="my-5 pl-5 text-center">Espace d'administration</h3>
    
    <?php

        while ($data = $listAll->fetch())
        
        {
        
    ?>
    
    <div class="container">
    
        <div class="row">
        
            <div class="col-sm-12 my-5">                
                
                <div class="bg-success rounded">
                
                    <p>
                    
                    <a href="index.php?action=changePost&amp;id=<?= $data['id'] ?>" class="btn btn-warning mx-auto d-flex justify-content-center mb-3 font-weight-bold font-italic mt-3" style="width: 200px;">modifier le billet</a>
                    
                    </p>
    
                    <h3 class="text-center text-white chapitre py-2">
                    
                        <?= htmlspecialchars($data['title']) ?>            
            
                    </h3>
    
                    <p class="text-white text-center py-2">
        
                        <?php  echo '<div class="text-white text-center py-2" style="font-family: \'Lobster\',cursive;font-size: 25px;">' . $data['content'] . '</div>' ?>
    
            
                    </p>
        
                    <p class="text-white text-center py-2">
                    
                        <em>le <?= $data['creation_date_fr'] ?></em>
                        
                    </p>
                                   
                        <a href="index.php?action=commentPannel&amp;id=<?= $data['id'] ?>" class="btn btn-light mx-auto d-flex justify-content-center mb-3 font-weight-bold font-italic" style="width: 200px;">gérer les commentaires</a>                       
                    
                        <a href="index.php?action=delPost&amp;id=<?= $data['id'] ?>" class="btn btn-danger mx-auto d-flex justify-content-center mb-3 font-weight-bold font-italic text-dark" style="width: 200px;">supprimer le billet</a>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
        
    <?php
        
        }

        $listAll->closeCursor();

    ?>
    
    <!-- Ajouter un billet -->
            
    <div class="container">
    
        <div class="row">
        
            <div class="col-sm-12">
            
                <h3 class="my-5 pl-5 text-center">Ajouter un billet</h3>
                
                <div class="bg-primary rounded font-weight-bold border border-light mb-3">
       
                    <form class="col-sm-6 mx-auto" action="index.php?action=addPost" method="post">
                    
                        <div class="form-group">
                        
                            <label for="title" class="text-white">Titre :</label>
                            
                            <input type="text" class="form-control border border-dark" id="title" name="title" aria-describedby="emailHelp">
                            
                        </div>
                        
                        <div class="form-group">
                        
                            <label for="content" class="text-white">Message :</label>
                            
                            <textarea class="form-control border border-dark tinymce" id="content" name="content" rows="3"></textarea>
                            
                        </div>
  
                        <button type="submit" class="btn btn-light font-weight-bold d-flex justify-content-center mb-3">Envoyer</button>
                        
                    </form>
        
                </div>
                
            </div>
            
        </div>
        
    </div>
    
    <?php
        
    }

    else if (isset($_COOKIE['username']) && $_COOKIE['username'] == $_SESSION['username'] 
                   && isset($_COOKIE['password']) && $_COOKIE['password'] == $_SESSION['password']) {
        
    ?>
        <!-- Menu de navigation -->
       
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top mb-5">
    
        <div class="container">
    
            
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        
                <span class="navbar-toggler-icon"></span>
            
            </button>
        
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        
                <div class="navbar-nav">
        
                    <a class="nav-item nav-link text-white" href="index.php">Retour au blog</a>
                    <a class="nav-item nav-link text-white ml-5" href="#">Bienvenue, <?= $_SESSION['username'] ?></a>
                    <a href="index.php?action=adminLogout" class="btn btn-danger float-right mb-3 font-weight-bold font-italic ml-5" style="width: 200px;">Se déconnecter</a>               
                
                </div>
            
            </div>
        
        </div>
        
    </nav>
    
    <!-- Chapitre du blog -->
    
    <br/>
    
    <h3 class="my-5 pl-5 text-center">Espace d'administration</h3>
    
    <?php

        while ($data = $listAll->fetch())
        
        {
        
    ?>
    
    <div class="container">
    
        <div class="row">
        
            <div class="col-sm-12 my-5">                
                
                <div class="bg-success rounded">
                
                    <p>
                    
                    <a href="index.php?action=changePost&amp;id=<?= $data['id'] ?>" class="btn btn-warning mx-auto d-flex justify-content-center mb-3 font-weight-bold font-italic mt-3" style="width: 200px;">modifier le billet</a>
                    
                    </p>
    
                    <h3 class="text-center text-white chapitre py-2">
                    
                        <?= htmlspecialchars($data['title']) ?>            
            
                    </h3>
    
                    <p class="text-white text-center py-2">
        
                        <?php  echo '<div class="text-white text-center py-2" style="font-family: \'Lobster\',cursive;font-size: 25px;">' . $data['content'] . '</div>'  ?>
            
                    </p>
        
                    <p class="text-white text-center py-2">
                    
                        <em>le <?= $data['creation_date_fr'] ?></em>
                        
                    </p>
                                   
                        <a href="index.php?action=commentPannel&amp;id=<?= $data['id'] ?>" class="btn btn-light mx-auto d-flex justify-content-center mb-3 font-weight-bold font-italic" style="width: 200px;">gérer les commentaires</a>                       
                    
                        <a href="index.php?action=delPost&amp;id=<?= $data['id'] ?>" class="btn btn-danger mx-auto d-flex justify-content-center mb-3 font-weight-bold font-italic text-dark" style="width: 200px;">supprimer le billet</a>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
        
    <?php
        
        }

        $listAll->closeCursor();

    ?>
    
    <!-- Ajouter un billet -->
            
    <div class="container">
    
        <div class="row">
        
            <div class="col-sm-12">
            
                <h3 class="my-5 pl-5 text-center">Ajouter un billet</h3>
                
                <div class="bg-primary rounded font-weight-bold border border-light mb-3">
       
                    <form class="col-sm-6 mx-auto" action="index.php?action=addPost" method="post">
                    
                        <div class="form-group">
                        
                            <label for="title" class="text-white">Titre :</label>
                            
                            <input type="text" class="form-control border border-dark" id="title" name="title" aria-describedby="emailHelp">
                            
                        </div>
                        
                        <div class="form-group">
                        
                            <label for="content" class="text-white">Message :</label>
                            
                            <textarea class="form-control border border-dark tinymce" id="content" name="content" rows="3"></textarea>
                            
                        </div>
  
                        <button type="submit" class="btn btn-light font-weight-bold d-flex justify-content-center mb-3">Envoyer</button>
                        
                    </form>
        
                </div>
                
            </div>
            
        </div>
        
    </div>
    
    <?php
    }
        else {
    ?>
        
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
            
                <h3 class="my-5 pl-5 text-center">Vous n'avez pas accès à la page d'administration</h3>
                
                <div class="bg-primary rounded font-weight-bold border border-light mb-3">       
  
                        <a href="index.php" class="btn btn-light font-weight-bold d-flex justify-content-center my-3" style="width: 200px; margin:auto;">Retour à l'accueil</a>
                        
                        <a href="index.php?action=adminConnect" class="btn btn-success font-weight-bold d-flex justify-content-center my-3" style="width: 200px; margin:auto;">Se reconnecter</a>                    
        
                </div>
                
            </div>
            
        </div>
        
    </div> 
    
    
    <?php $content = ob_get_clean(); ?>

    <?php require('template.php'); ?>
    
    <?php 
            
    }   

    ?>
 
    <?php $content = ob_get_clean(); ?>

    <?php require('template.php'); ?>
