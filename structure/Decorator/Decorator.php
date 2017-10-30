<?php

class plainCoffee{
    private $decoraters = [];
    public function addDecorater($decorater){
        $this->decoraters[] = $decorater;
    }
    public function before(){
        foreach($this->decoraters as $decorater){
            $decorater->before();
        }
    }
}