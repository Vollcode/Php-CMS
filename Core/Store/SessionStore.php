<?php

namespace Core\Store;

class SessionStore
{
  public static function exist($varaible){
    return isset($_SESSION[$varaible]);
  }

  public static function put($variable,$value){
    if(self::exist($variable)){
      //ERROR
    }
    $_SESSION[$variable]=serialize($value);
    return self::exist($variable);
  }

  public static function get()
  {
    if(self::exist($variable)){
      return unserialize($_SESSION[$variable]);
    }
  }
}
