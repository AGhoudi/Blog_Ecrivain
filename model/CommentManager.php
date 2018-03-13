<?php

    namespace OpenClassrooms\Blog\Model;

    require_once("model/Manager.php");

    class CommentManager extends Manager
        
    {
        
        public function getComments($postId)
            
        {
            
            $db = $this->dbConnect();
            $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, report_comment FROM comments WHERE post_id = ? ORDER BY comment_date DESC LIMIT 0, 5');
            $comments->execute(array($postId));            

            return $comments;
            
        }

        public function postComment($postId, $author, $comment)
            
        {
            
            $db = $this->dbConnect();
            $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date, report_comment) VALUES(?, ?, ?, NOW(), 0)');
            $affectedLines = $comments->execute(array($postId, $author, $comment));

            return $affectedLines;
            
        }
        
        public function signaledComment($reportComment)
            
        {
            
            $db = $this->dbConnect();            
            $comments = $db->prepare('UPDATE comments SET report_comment = ? WHERE id = ? ');
            $reportComment++;
            $reportedComment = $comments->execute(array($reportComment, $comments));

            return $reportedComment;
            
        }
        
    }