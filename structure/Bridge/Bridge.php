<?php

/**
 * Class Service(抽象类)
 */
abstract class Service{

    //存实现类
    protected $implementation;

    public function __construct(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    /**
     * 切换实现
     */
    public function changeImplementation(FormatterInterface $printer){
        $this->implementation =$printer;
    }

    /**
     * @return mixed
     */
    abstract public function get();

}

class PrintServer extends Service{
    public function get()
    {
        return $this->implementation->format('hello');
    }
}