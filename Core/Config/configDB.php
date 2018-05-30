<?php
namespace Config;

class configDB{
   public static function getConfig(){
       return [
           'database'=>[
               'name'=>'cmsPHP',
               'username'=>'root',
               'password'=>'44865710',
               'connection' =>'mysql:host=127.0.0.1',
               'options'=>[
                   \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
               ]
           ]
       ];
   }
}

