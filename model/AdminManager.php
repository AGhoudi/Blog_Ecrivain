<?php

    namespace OpenClassrooms\Blog\Model;

    require_once("model/Manager.php");

    class AdminManager extends Manager
        
    {
        
        public function adminSpace()
            
        {
            
            $db = $this->dbConnect();
            $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date ASC LIMIT 0, 10');

            return $req;            
            
        }
        
        public function adminConnection()
            
        {
            
            $db = $this->dbConnect();
            $connect = $db->prepare('SELECT username, password FROM members');
            $connect->execute(array('username', 'password'));
            
            return $connect; 
        
        }
        
        public function deleteComment($commentId)
            
        {
            
            $db = $this->dbConnect();
            $delete = $db->prepare('DELETE FROM comments WHERE id=?');
            $suppressComment = $delete->execute(array($commentId));                   

            return $suppressComment;
            
        }
        
        public function uncheckComment($commentId)
            
        {
            
            $db = $this->dbConnect();
            $updateStatus = $db->prepare('UPDATE comments SET report_comment = 0 WHERE id=?');
            $safeComment = $updateStatus->execute(array($commentId));                   

            return $safeComment;
            
        }
        
        public function checkComment($report, $commentId)
            
        {
            
            $db = $this->dbConnect();
            $updateStatus = $db->prepare('UPDATE comments SET report_comment = ? WHERE id=?');
            $unsafeComment = $updateStatus->execute(array($report, $commentId));                   

            return $unsafeComment;
            
        }
        
        public function searchComments($commentId)
            
        {
            
            $db = $this->dbConnect();
            $comments = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, report_comment FROM comments WHERE id = ? ORDER BY comment_date DESC LIMIT 0, 5');
            $comments->execute(array($commentId));            

            return $comments;
            
        }
        
        public function changedComment($commentId, $author, $comment)
            
        {
            
            $db = $this->dbConnect();
            $comments = $db->prepare('UPDATE comments SET author = ? , comment = ? , comment_date = NOW() WHERE id = ? ');
            $modifiedComment = $comments->execute(array($author, $comment, $commentId));                   

            return $modifiedComment;
            
        }        
    
    }