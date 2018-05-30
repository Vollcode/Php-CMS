<?php

 namespace Controllers;
 use Models\usersModel;
 use Core\BootStrap;

  class registerController extends firstController{
    public function getView(){
         //$userModel = new usersModel($this->app['database']);
        // $userModel->selectAll();
        require'Views/register.view.php';
    }

    public function register(){
      $email= $_POST['email'];
      $firstName = $_POST['firstname'];
      $lastName = $_POST['lastname'];
      $passwd = $_POST['passwd'];
      $userModel =new usersModel();
      $userModel->insert($firstName,$lastName,$email,$passwd);
    }
  }
