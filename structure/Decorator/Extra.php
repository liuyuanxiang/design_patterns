<?php
class sweetCoffce{
    public function before(){

    }

    public function after(){
        $this->addSweetCoffce();
    }
    public function addSweetCoffce(){
        echo "add sweet<br/>";
    }
}
class milkCoffce{
    public function before(){
        $this->addMilkCoffce();
    }

    public function after(){

    }
    public function addMilkCoffce(){
        echo "add milk<br/>";
    }
}