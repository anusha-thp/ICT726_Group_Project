<?php
namespace Controllers;

class Dashboard
{
  public function __construct() {
      $this->checkAdmin();
  }

  private function checkAdmin() {
      if (!isset($_SESSION["user"]['role']) || $_SESSION["user"]['role'] !== 'admin') {
        header('location: ' . URLROOT . '/', true,302);
        exit();
      }
  }
  public function home()
  {
    view('admin/dashboard');
  }
}