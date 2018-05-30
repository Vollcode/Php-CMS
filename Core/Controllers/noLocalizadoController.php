<?php
 namespace Controllers;
 use Models\usersModel;
 use Core\BootStrap;

  class noLocalizadoController extends firstController{
      public function getView(){
         //$userModel = new usersModel($this->app['database']);
         //$userModel->selectAll();
        require'Views/404.view.php';
    }
  }
