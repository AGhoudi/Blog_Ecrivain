<?php

    namespace OpenClassrooms\Blog\Model;

    require_once("model/Manager.php");

    class PostManager extends Manager
        
    {
        
        public function getPosts()
            
        {
            
            $db = $this->dbConnect();
            $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date ASC LIMIT 0, 5');

            return $req;
            
        }
        
        public function getPost($postId)
            
        {
            
            $db = $this->dbConnect();
            $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
            $req->execute(array($postId));
            $post = $req->fetch();

            return $post;
            
        }
        
        public function newPost($title, $content)
            
        {
            
            $db = $this->dbConnect();
            $createPost = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES(?, ?, NOW())');
            $addedPost = $createPost->execute(array($title, $content));

            return $addedPost;
            
        }
        
        public function changedPost($postId, $title, $content)
            
        {
            
            $db = $this->dbConnect();
            $posts = $db->prepare('UPDATE posts SET title = ? , content = ? , creation_date = NOW() WHERE id = ? ');
            $modifiedPost = $posts->execute(array($title, $content, $postId));                   

            return $modifiedPost;
            
        }
        
        public function deletePost($postId)
            
        {
            
            $db = $this->dbConnect();
            $delete = $db->prepare('DELETE FROM posts WHERE id=?');
            $suppressPost = $delete->execute(array($postId));                   

            return $suppressPost;
            
        }
    
    }