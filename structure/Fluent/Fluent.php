<?php

class Employee{
    private $name;
    private $surName;
    private $salary;

    public function setName($name){
        $this->name = $name;
        return $this;
    }

    public function setSurname($surname){
        $this->surName = $surname;
        return $this;
    }

    public function setSalary($salary){
        $this->salary = $salary;
        return $this;
    }

    public function __toString()
    {
        $employeeinfo = 'Name:'.$this->name.PHP_EOL;
        $employeeinfo .= 'SurName:'.$this->surName.PHP_EOL;
        $employeeinfo .= 'Salary:'.$this->salary.PHP_EOL;
        return $employeeinfo;
    }
}

// test

$employee = (new Employee())->setName('Tom')->setSurname('Smith')->setSalary('8000');
echo $employee;