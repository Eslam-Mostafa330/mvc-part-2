<?php
namespace Eraasoft311\Mvc\Storage;

use Eraasoft311\Mvc\Contracts\Storage\StorageInterface;
use Eraasoft311\Mvc\Contracts\Storage\TypeInterface;
use Eraasoft311\Mvc\Cookies\CookiesDash;
use Eraasoft311\Mvc\Env\EnvDash;
use Eraasoft311\Mvc\Session\SessionDash;

class StorageDash extends TypeInterface implements StorageInterface
{
    
    public function type(){
       return  EnvDash::env("STORAGE_DRIVER");
    }


    public  function set(string $key,mixed $value,int $time,$path):void
    {
        $type = "Eraasoft311\Mvc\\".$this->type()."\\".$this->type()."Dash";
        $type = new $type();

        $type->set($key,$value,$time,$path);
    }

    public  function get(string $key):mixed
    {

    }
    public  function destroy($key):void
    {

    }

}