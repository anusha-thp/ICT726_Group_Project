<?php
namespace Controllers;

use Models\Users;

class Login
{
  private $userModel; 
  public function __construct()
  {
    $this->userModel = new Users;
  }
    public function home()
    {
      if(isset($_SESSION['user'])){
        header('location: ' . URLROOT . '/', true,302);
      }else{
          $data = ['message' => ''];
          view('auth/login', $data);
      }
    }

    public function loginUser(){
      if ($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_POST['username'], $_POST['password'])){
          $username = $_POST['username'];
          $password = $_POST['password'];
          
          if(empty($username) || empty($password) ){
              $data = ['message' => 'Account and password cannot be empty'];
              view("auth/login", $data);
              return;
          }
          if(strlen($username) < 6 || strlen($password) < 6){
              $data = ['message' => 'Please enter at least 6 characters'];         
              view("auth/login", $data);               
              return;           
          }

          if (preg_match('/^[a-zA-Z0-9]+$/', $username) == 0 || preg_match('/^[a-zA-Z0-9]+$/', $password) == 0) {
              $data = ['message' => 'Content contains invalid characters'];         
              view("auth/login", $data);        
              return; 
          }
         
          if($this -> userModel -> login($username,$password)){      
              $gu = $this -> userModel ->  getUserByUsername($username);        
              $_SESSION['user'] = [
                  'username' => $username,
                  'is_login' => true,
                  "role" => $gu -> role,
                  'login_time' => time()
              ];
              header('location: ' . URLROOT . '/', true, 302);
          }else{
              $data = ['message' => 'Incorrect account or password'];  
              view("Auth/login", $data);  
              return; 
          }
          
      }else{
          header('location: ' . URLROOT . '/login', true,302);
      }
  }

  public function logOut(){
      if(isset($_SESSION['user'])){
          session_destroy();
          session_unset();
          header('location: ' . URLROOT . '/', true,302);
      }else{
          header('location: ' . URLROOT . '/', true,302);
      }
  }
}