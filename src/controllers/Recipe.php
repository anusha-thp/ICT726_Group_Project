<?php
namespace Controllers;

class Recipe
{
    public function home()
    {
      view('recipes');
    }

    public function addRecipe()  {
        view('admin/addRecipes');
    }
}