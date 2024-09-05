<?php
namespace Models;

use \Models\Database;

class RecipeModel
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }
  
  public function createRecipe($title,$image,$description,$recommend,$created_by){
    $this->db->query("INSERT INTO recipes (`title`,`image`,`description`,`isRecommend`,`created_by`) VALUES (:title,:image ,:description,:recommend,:created_by)");
    $this->db->bind(':title', $title);
    $this->db->bind(':image', $image);
    $this->db->bind(':description', $description);
    $this->db->bind(':recommend', $recommend);
    $this->db->bind(':created_by', $created_by);
    return $this->db->lastInsertId();
  }

  public function increaseNumberVisitors($id){
    $this->db->query("UPDATE recipes SET number_visitors = number_visitors + 1 WHERE id = :id");
    $this->db->bind(':id', $id);
    if ($this->db->execute())
      return true;
    return false;
  }

  public function getAllRecipe(){
    $this->db->query("SELECT * FROM recipes ORDER BY id DESC");
    return $this -> db -> resultSet();
  }

  public function getRecipesRecommend(){
    $this->db->query("SELECT * FROM recipes WHERE isRecommend = 1 ORDER BY id DESC LIMIT 10");
    return $this -> db -> resultSet();
  }

  public function getAllRecipePopular(){
    $this->db->query("SELECT * FROM recipes ORDER BY number_visitors");
    return $this -> db -> resultSet();
  }

  public function updateRecipe($title,$image,$description,$recommend, $id){
    $this->db->query("UPDATE recipes SET title = :title, image = :image, description = :description, isRecommend = :recommend WHERE  id = :id");
    $this->db->bind(':title', $title);
    $this->db->bind(':image', $image);
    $this->db->bind(':description', $description);
    $this->db->bind(':recommend', $recommend);
    $this->db->bind(':id', $id);
    if ($this->db->execute())
      return true;
    return false;
  }

  public function removeRecipe($id){
    $this->db->query("DELETE FROM recipes WHERE id = :id");
    $this->db->bind(':id', $id);
    if ($this->db->execute())
    return true;
  return false;
  }
}