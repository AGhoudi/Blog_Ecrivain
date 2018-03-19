<?php

    require('controller/frontend.php');

    try {

    if (isset($_GET['action'])) {
        
        if ($_GET['action'] == 'listPosts') {            
            listPosts();            
        }
        
        elseif ($_GET['action'] == 'post') {
            
            if (isset($_GET['id']) && $_GET['id'] > 0) {                
                post();                
            }
            
            else {                
                throw new Exception('Aucun identifiant de billet envoyé');                
            }
            
        }
        
        elseif ($_GET['action'] == 'addPost') {
            
            if (!empty($_POST['title']) && !empty($_POST['content'])) {                    
                addPost(htmlspecialchars($_POST['title']), htmlspecialchars($_POST['content']));                    
            }
            
            else {                    
                throw new Exception('Tous les champs ne sont pas remplis !');                
            }
            
        }
        
        elseif ($_GET['action'] == 'changePost') {
            
            if (isset($_GET['id']) && $_GET['id'] > 0) {                
                changePost();
            }
            
            else {                
                throw new Exception('Aucun identifiant de billet envoyé');
            }
            
        }
        
        elseif ($_GET['action'] == 'updatePost') {
            
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                
                if (!empty($_POST['title']) && !empty($_POST['content'])) {                    
                    updatePost($_GET['id'], htmlspecialchars($_POST['title']), htmlspecialchars($_POST['content']));                    
                }
                
                else {                    
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
                
            }
            
            else {                
                throw new Exception('Aucun identifiant de billet envoyé');
            }
            
        }
        
        elseif ($_GET['action'] == 'delPost') {
            
            if (isset($_GET['id']) && $_GET['id'] > 0) {                
                delPost($_GET['id']);
            }
            
            else {                
                throw new Exception('Aucun identifiant de billet envoyé');
            }
            
        }
        
        elseif ($_GET['action'] == 'addComment') {
            
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {                    
                    addComment($_GET['id'], htmlspecialchars($_POST['author']), htmlspecialchars($_POST['comment']));                    
                }
                
                else {                    
                    throw new Exception('Tous les champs ne sont pas remplis !');                    
                }
                
            }
            
            else {                
                throw new Exception('Aucun identifiant de billet envoyé');                
            }
            
        }
        
        elseif ($_GET['action'] == 'reportComment') {
            
            if (isset($_GET['id']) && (int)$_GET['id'] > 0 ) {                    
                reportComment($_GET['id']);                
            }
            
            else {
                throw new Exception('Aucun identifiant de commentaire envoyé');                
            }
                    
        }        
        
        elseif ($_GET['action'] == 'admin') {
            
            adminPannel();
            
        }
        
        elseif ($_GET['action'] == 'adminConnect') {
            
            adminConnect();
            
        }
        
        elseif ($_GET['action'] == 'adminLogout') {
            
            adminLogout();
            
        }
        
        elseif ($_GET['action'] == 'commentPannel') {
            
            if (isset($_GET['id']) && $_GET['id'] > 0) {                
                commentPannel();
            }
            
            else {                
                throw new Exception('Aucun identifiant de billet envoyé');
            }
            
        }
        
        elseif ($_GET['action'] == 'changeComment') {
            
            if (isset($_GET['id']) && $_GET['id'] > 0) {                
                changeComment();
            }
            
            else {                
                throw new Exception('Aucun identifiant de commentaire envoyé');                
            }
            
        }
        
        elseif ($_GET['action'] == 'updateComment') {
            
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {                    
                    updateComment($_GET['id'], htmlspecialchars($_POST['author']), htmlspecialchars($_POST['comment']));                    
                }
                
                else {                    
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
                
            }
            
            else {                
                throw new Exception('Aucun identifiant de billet envoyé');
            }
            
        }
        
        elseif ($_GET['action'] == 'delComment') {
            
            if (isset($_GET['id']) && $_GET['id'] > 0) {                
                delComment($_GET['id']);
            }
            
            else {                
                throw new Exception('Aucun identifiant de commentaire envoyé');
            }
            
        }
        
        elseif ($_GET['action'] == 'unreportComment') {
            
            if (isset($_GET['id']) && $_GET['id'] > 0) {                    
                unreportComment($_GET['id']);                
            }
            
            else {                
                throw new Exception('Aucun identifiant de commentaire envoyé');                
            }
            
        }     

    }

    else {        
        listPosts();
    }
        
    }

    catch(Exception $e) { 
        
        echo 'Erreur : ' . $e->getMessage();
        
    }

