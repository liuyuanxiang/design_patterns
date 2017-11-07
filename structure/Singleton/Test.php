<?php
require './Singleton.php';

// error
//$conn = new Mysql();

//只能通过静态方法取得实例 不能new和clone
$mysql1 = Mysql::getInstance();
