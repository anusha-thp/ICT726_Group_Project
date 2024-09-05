<?php
namespace Models;

use \Models\Database;

class Instructions
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function createInstructions($recipeId,$instruction){
    $this->db -> query("INSERT INTO instructions (recipe_id, instruction) VALUES (:recipe_id, :instruction)");
    $this -> db -> bind(":recipe_id",$recipeId);
    $this -> db -> bind(":instruction",$instruction);
    if($this->db -> execute())
        return true;
    return false;
  }

  public function updateInstruction($recipeId,$instruction){
    $this->db -> query("UPDATE instructions SET instruction = :instruction WHERE recipe_id = :recipe_id");
    $this -> db -> bind(":recipe_id",$recipeId);
    $this -> db -> bind(":instruction",$instruction);
    if($this->db -> execute())
        return true;
    return false;
  }

}