<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17-11-7
 * Time: 上午8:50
 */

class bicycle
{
    public function action()
    {

    }
}

class SimpleFactory{
    public function createBicycle(){
        return new bicycle();
    }
}