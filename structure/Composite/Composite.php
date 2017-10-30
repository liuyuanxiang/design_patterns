<?php

interface renderInterface{
    public function render();
}

class Form implements  renderInterface{
    protected $elements = [];

    public function render()
    {
        $form ='<form>';
        foreach ($this->elements as $element){
            $form .= $element->render();
        }

        $form.='</form>';
        return $form;
    }

    public function addElement(renderInterface $element){
        $this->elements[] = $element;
    }

}