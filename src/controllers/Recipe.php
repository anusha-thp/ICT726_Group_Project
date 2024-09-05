<?php

namespace Controllers;

use Models\Instructions;
use Models\RecipeModel;
use Models\Users;

class Recipe
{
  private $recipeModel;
  private $instructions;
  private $user;
  public function __construct()
  {
    $this->recipeModel = new RecipeModel;
    $this->instructions = new Instructions;
    $this->user = new Users;
  }
  public function home()
  {
    $popularRecipes = $this -> recipeModel -> getAllRecipePopular();
    $getRecipesRecommend = $this -> recipeModel -> getRecipesRecommend();
    $data = [
      "popularRecipes" => $popularRecipes,
      "getRecipesRecommend" => $getRecipesRecommend
    ];
    view('recipes',$data);
  }

  private function checkAdmin()
  {
    if (!isset($_SESSION["user"]['role']) || $_SESSION["user"]['role'] !== 'admin') {
      header('location: ' . URLROOT . '/', true, 302);
      exit();
    }
  }

  public function recipeAdmin(){
    $this -> checkAdmin();
    $recipes = $this -> recipeModel -> getAllRecipe();
    $data = [
      "newRecipe" => 0,
      "visitor" => 0,
      "totalRecipe" => count($recipes),
      "recipes" => $recipes
    ];
    view('admin/recipe',$data);
  }

  public function viewAddRecipe()
  {
    $this->checkAdmin();
    view('admin/addRecipes');
  }

  public function uploadFileCkEditor()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_FILES['image'])) {
      $file = $_FILES['upload'];
      $target_dir = "img/";
      $target_file = $target_dir . basename($file["name"]);
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $data = [
          "uploaded" => 0,
          "url" => ''
        ];
        header('Content-Type: application/json');
        echo json_encode($data);
        exit();
      }

      if (move_uploaded_file($file["tmp_name"], $target_file)) {
        $data = [
          "uploaded" => 1,      
          'url' => URLROOT."/".$target_file,
        ];
        // header('Content-Type: application/json');
        // echo json_encode($data);
        $url = URLROOT."/".$target_file;
        $funcNum = $_GET['CKEditorFuncNum'];
        $message = "Image uploaded successfully.";
        echo "<script>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
        exit();
      } else {
        $data = [
          "uploaded" => 0,
          "url" => ''
        ];
        header('Content-Type: application/json');
        echo json_encode($data);
        exit();
      }
    }
  }

  public function addRecipe()
  {
    $this->checkAdmin();
    if ($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_POST['title'], $_POST['description'],$_POST['recommend'], $_FILES['image'], $_POST["editor"])) {
      if(empty($_POST['title'])|| empty( $_POST['description']) || empty( $_FILES['image']) || empty($_POST["editor"])){
          $data = [
            "status" => "error",
            "message" => "Please enter complete data"
          ];
          view('admin/addRecipes', $data);
          exit();
      }
      $recommend  = $_POST['recommend'] == 2 ? 1 : 0;
      $target_dir = "img/";
      $target_file = $target_dir . basename($_FILES["image"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $data = [
          "status" => "error",
          "message" => "Incorrect file format"
        ];
        view('admin/addRecipes', $data);
        exit();
      }
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $u = $this->user->getUserByUsername($_SESSION["user"]["username"]);
        $addRecipe = $this->recipeModel->createRecipe($_POST['title'], "img/" . $_FILES["image"]["name"], $_POST['description'],$recommend, $u->id);
        if ($addRecipe) {
          $this->instructions->createInstructions($addRecipe, $_POST["editor"]);
          $data = [
            "status" => "success",
            "message" => "add successfully",
            "addRecipe" => $addRecipe
          ];
          view('admin/addRecipes', $data);
          exit();
        } else {
          $data = [
            "status" => "error",
            "message" => "add failed"
          ];
          view('admin/addRecipes', $data);
          exit();
        }
      } else {
        $data = [
          "status" => "error",
          "message" => "add file failed"
        ];
        view('admin/addRecipes', $data);
        exit();
      }
    } else {
      $data = ["status" => "error", "message" => "Please enter complete data"];
      view('admin/addRecipes', $data);
    }
  }
}
