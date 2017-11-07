<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17-11-7
 * Time: 上午8:54
 */

require './Extra.php';

$simple_factory = new SimpleFactory();
$bicycle = $simple_factory->createBicycle();//通过工厂方法new对象
$bicycle->action();