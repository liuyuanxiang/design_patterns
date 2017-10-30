<?php

require './Bridge.php';
require './Extra.php';

$service = new PrintServer(new PlainFormatter());
echo $service->get();
//切换实现
$service->changeImplementation(new HtmlFormatter());
echo $service->get();