<?php
  function checkTime()
  {
      return number_format((microtime(true) - LARAVEL_START),4);
  }

  function serviceController($class,$method,$param = null,$construct = null){
      $object = null;
      if($construct !== null)
          $object = new $class($construct);
      else
          $object = new $class;

      if($param !== null){
          return call_user_func_array([$object,$method],$param);
      }
      return call_user_func_array([$object,$method],[]);
  }
