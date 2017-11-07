<?php
require './Decorator.php';
require './Extra.php';

$make_coffce = new plainCoffee();
$make_coffce->addDecorater(new sweetCoffce());
$make_coffce->addDecorater(new milkCoffce());
$make_coffce->makeCoffce();