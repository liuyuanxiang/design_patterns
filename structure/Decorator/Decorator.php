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
    public function after(){
        foreach($this->decoraters as $decorater){
            $decorater->after();
        }
    }
    public function makeCoffce(){
        $this->before();
        $this->addCoffce();
        $this->after();
    }
    public function addCoffce(){
        echo "add coffce<br/>";
    }
}