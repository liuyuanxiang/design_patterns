<?php

//interface

/**
 * Database interface
 */
interface Database{
    public function connect();

    public function query();

    public function close();
}

//class

/**
 * Class Mysql
 */
class Mysql implements Database{

    public function connect()
    {
        // TODO: Implement connect() method.
    }

    public function query()
    {
        // TODO: Implement query() method.
    }

    public function close()
    {
        // TODO: Implement close() method.
    }
}

/**
 * Class Pdo
 */
class Pdo implements Database{

    public function connect()
    {
        // TODO: Implement connect() method.
    }

    public function query()
    {
        // TODO: Implement query() method.
    }

    public function close()
    {
        // TODO: Implement close() method.
    }
}

/**
 * Class Oracle
 */
class Oracle{

    public function oracleConnect()
    {
        // TODO:
    }

    public function oracleQuery()
    {
        // TODO:
    }

    public function oracleClose()
    {
        // TODO:
    }
}