<?php

class Mysql{
    //该属性用来保存实例
    private static $conn;

    //私有构造方法，防止创建对象
    private function __construct()
    {
        self::$conn = mysqli_connect('127.0.0.1','root','password','mysql');
    }

    //获取该类实例的静态方法
    public static function getInstance(){
        if (!(self::$conn instanceof self)){
            self::$conn = new self;
        }
        return self::$conn;
    }

    //禁止复制对象
    public function __clone()
    {
        trigger_error('clone is not allowed!');
    }

    //禁止反序列化后创建对象
    public function __wakeup()
    {
        trigger_error('unserialize is not allowed!');
    }
}