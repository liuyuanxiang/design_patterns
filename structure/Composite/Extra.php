<?php

class TextElement implements renderInterface{
    private $text;
    public function __construct(String $text)
    {
        $this->text = $text;
    }

    public function render()
    {
        return $this->text;
    }
}

class InputElement implements renderInterface{
    public function render()
    {
        return '<input type="text" />';
    }
}