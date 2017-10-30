<?php
require './Composite.php';
require './Extra.php';

$form = new Form();

$form->addElement(new TextElement('姓名：'));
$form->addElement(new InputElement());
$form->addElement(new TextElement('密码：'));
$form->addElement(new InputElement());

echo $form->render();