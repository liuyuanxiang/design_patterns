<?php
require './Extra.php';
require './Adapter.php';

//按照规定接口实例化的类
$database = new Mysql();

//按照规定接口实例化的类
$database = new Pdo();

//没有按照规定接口实例化的类，需要通过适配器转换
$Oracle = new Oracle();
$adapter = new Adapter($Oracle);
$database = $adapter;


$database->connect();
$database->query();
$database->close();