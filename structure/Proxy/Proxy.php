<?php

//代理模式真实对象和代理对象都必须继承同一个接口
interface image{
    public function getwitdh();
}

//真实对象
class RawImage implements image{
    public function getwitdh()
    {
        return "100*100";
    }
}

//代理对象
class ProxyImage implements image {
    private $img;
    public function __construct()
    {
        $this->img = new RawImage();
    }

    public function getwitdh()
    {
        return $this->img->getwitdh();
    }
}