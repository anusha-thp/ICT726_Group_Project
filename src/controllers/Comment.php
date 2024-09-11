<?php

namespace Controllers;

use Models\Comments as ModelsComments;
use Models\Users;

class Comments
{
    private $comment;
    private $user;
    public function __construct()
    {
        $this -> user = new Users;
        $this->comment = new ModelsComments;
    }
    public function addComment()
    {
        if (isset($_POST["id"], $_POST["comment"])) {
            $id = $_POST["id"];
            $comment = $_POST["comment"];
            $u = $this->user->getUserByUsername($_SESSION["user"]["username"]);
            $this->comment->createComments($id,$u -> id, $comment);
            header('location: ' . URLROOT . '/recipe/'.$id , true, 302);

        }
    }

    public function removeComment($param){
        $id = $param["id"];
        $this->comment->removeComment($id);
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
}
