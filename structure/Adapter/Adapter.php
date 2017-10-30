<?php

/**
 * Class Adapter
 */
class Adapter implements Database{
    private $adaptee;
    public function __construct(Oracle $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function connect()
    {
        $this->adaptee->oracleConnect();
    }

    public function query()
    {
        $this->adaptee->oracleQuery();
    }

    public function close()
    {
        $this->adaptee->oracleClose();
    }

}