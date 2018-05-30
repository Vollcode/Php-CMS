<?php

 namespace Controllers;
 use Models\usersModel;
 use Core\BootStrap;

  class indexController extends firstController{
      public function getView(){
         //$userModel = new usersModel($this->app['database']);
         //$userModel->selectAll();
        require'Views/index.view.php';
    }
  }
