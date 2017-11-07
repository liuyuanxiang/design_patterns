<?php

//属性和方法都是静态的，不用实例化便可访问
class Register{
    protected static $objects;

    public static function set($alias,$object){
        if (!isset($objects[$alias])){
            self::$objects[$alias] = $object;
        }
    }

    public static function get($alias){
        return self::$objects[$alias];
    }

     public function __unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}

Register::set('rand',stdClass::class);
var_dump(Register::get('rand'));
