<?php

namespace Models;

use \Models\Database;

class Comments
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCommentsByRecipe($id)
    {
        $this->db->query("SELECT 
                            comments.id,
                            comments.recipe_id, 
                            comments.user_id, 
                            comments.comment, 
                            comments.created_at,
                            users.username
                        FROM 
                            comments 
                        JOIN 
                            users ON comments.user_id = users.id
                        WHERE 
                            comments.recipe_id = :id ORDER BY comments.created_at DESC");
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }

    public function createComments($recipeId, $userId, $comment): bool
    {
        $this->db->query("INSERT INTO comments (recipe_id, user_id, comment) VALUES (:recipe_id, :user_id, :comment)");
        $this->db->bind(':recipe_id', $recipeId);
        $this->db->bind(':user_id', $userId);
        $this->db->bind(':comment', $comment);

        if ($this->db->execute())
            return true;

        return false;
    }

    public function removeComment($id){
        $this->db -> query("DELETE FROM comments WHERE id = :id");
        $this->db->bind(':id', $id);
        if ($this->db->execute())
            return true;

        return false;
    }
    public function removeCommentByRecipe($id){
        $this->db -> query("DELETE FROM comments WHERE recipe_id = :id");
        $this->db->bind(':id', $id);
        if ($this->db->execute())
            return true;

        return false;
    }
}
