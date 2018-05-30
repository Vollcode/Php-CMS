<?php
  namespace Core;
  use Helpers\Connection;
  use Controllers\indexController;
  use Controllers\aboutController;
  use Controllers\registerController;
  use Controllers\loginController;
  use Controllers\noLocalizadoController;
  use Router\Router;
  use Router\Request;

  class BootStrap{
    public  $app=[];
    function __construct(){
      /*$this->app['config'] = require'Config/config.php';
      $this->app['database'] = Connection::make(
        $this->app['config']['database']);
*/
    }

    function init(){
        //Inicio de la sesión.
        session_start();

      $Controller= Router::load('routes.php')
      ->direct(Request::uri(), Request::getMethod());

      if($Controller === "indexController"){
        $contr = new indexController();
        $contr->getView();
      }
      if($Controller === "aboutController"){
        $contr = new aboutController();
        $contr->getView();
      }
      // if($Controller === "registerController"){
      //   $contr = new registerController($this->app);
      //   $contr->getView();
      // }

      if($Controller ==="registerController" && Request::getMethod() ==="GET")
      {

        $contr = new registerController();
        $contr->getView();
      }
      if($Controller ==="registerController" && Request::getMethod() ==="POST")
      {
        $contr = new registerController();
        $contr->register();
      }
      if($Controller ==="loginController" && Request::getMethod() ==="GET")
      {
        $contr = new loginController();
        $contr->register();
      }

      if($Controller === "noLocalizadoController"){
        $contr = new noLocalizadoController();
        $contr->getView();
      }



    }

  }
