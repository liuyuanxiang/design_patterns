<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17-11-7
 * Time: 上午9:06
 */

interface PhoneFactorys{
    public function createPhone();
}

class AndroidFactory implements PhoneFactorys{
    public function createPhone()
    {
        return new Android();
    }
}
