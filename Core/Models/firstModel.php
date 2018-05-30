<?php
namespace Models;
use Core\Helpers\App;

class firstModel
{
  protected $pdo;

  public function __construct()
  {
      $app = new App();
      $this->pdo=$app->getApp();
   }
}
