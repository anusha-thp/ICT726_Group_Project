<?php
namespace Controllers;

use Models\Users;

class Register
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
            view('auth/register', $data);
        }
    }

    public function registerUser(){
      if ($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_POST['username'], $_POST['password'], $_POST['repassword'])){
          $username = $_POST['username'];
          $password = $_POST['password'];
          $rePassword = $_POST['repassword'];
          
          if(empty($username) || empty($password) || empty($rePassword)){
              $data = ['message' => 'Input cannot be empty'];
              view("auth/register", $data);
              return;
          }
          if(strlen($username) < 6 || strlen($password) < 6 || strlen($rePassword)<6){
              $data = ['message' => 'Please enter more than 6 characters for input'];         
              view("auth/register", $data);
              return;           
          }
          if($password != $rePassword){
              $data = ['message' => 'Passwords do not match'];         
              view("auth/register", $data);
              return;   
          } 
          if (preg_match('/^[a-zA-Z0-9]+$/', $username) == 0 || preg_match('/^[a-zA-Z0-9]+$/', $password) == 0  || preg_match('/^[a-zA-Z0-9]+$/', $rePassword) == 0) {
              $data = ['message' => 'Content contains invalid characters'];         
              view("auth/register", $data);
              return; 
          }
          $gu = $this -> userModel ->  getUserByUsername($username);
          if($gu){
              $data = ['message' => 'This account has been registered'];  
              view("auth/register", $data);
              return; 
          }
          if($this -> userModel -> createUsers($username,$password)){                   
              $_SESSION['user'] = [
                  'username' => $username,
                  'is_login' => true,
                  "role" => "user",
                  'login_time' => time()
              ];
              header('location: ' . URLROOT . '/', true,302);
          }else{
              $data = ['message' => 'An error occurred please try again'];         
              view("auth/register", $data);
              return; 
          }             
      }else{
          header('location: ' . URLROOT . '/register', true,302);
      }
  }
}