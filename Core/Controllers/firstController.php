<?php
 namespace Controllers;
 use Models\usersModel;
 use Core\BootStrap;

  abstract class firstController{
    protected $app = [];
    function __construct(){

    }
    abstract public function getView();
  }
