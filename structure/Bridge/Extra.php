<?php

//interface

/**
 * Interface FormatterInterface
 */
interface FormatterInterface{
    public function format(string $text);
}

//实现类

/**
 * Class HtmlFormatter
 */
class HtmlFormatter implements FormatterInterface {
    public function format(string $text)
    {
        return sprintf('<p>%s</p>',$text);
    }
}

/**
 * Class PlainFormatter
 */
class PlainFormatter implements FormatterInterface{
    public function format(string $text)
    {
        return $text;
    }
}