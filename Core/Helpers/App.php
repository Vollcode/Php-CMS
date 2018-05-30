<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 21/05/18
 * Time: 10:19
 */

namespace Core\Helpers;
use Config\configDB;
use Helpers\Connection;


class App
{
    protected $app=[];

    public function __construct()
    {
        $this->app['config'] = configDB::getConfig();
        $this->app['database'] = Connection::make(
            $this->app['config']['database']);
    }

    public function getApp(){
        var_dump($this->app);
        die();
        //return $this->app;
    }

}