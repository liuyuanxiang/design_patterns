<?php
//原来的三个功能类
class CPU{
public function freeze() {  }
public function jump() { }
public function execute() { }
}
class HardDrive {
public function read($boot_sector, $sector_size){ }
}
class Memory {
public function load($boot_address, $hd_data) { }
}

//经过门面整合
class Facade {
    private $cpu;
    private $hard_drive;
    private $memory;
    public function __construct(){
        $this->cpu = new CPU();
        $this->hard_drive = new HardDrive();
        $this->memory = new Memory();
    }
    public function start(){
        $this->cpu->freeze();
        $this->memory->load(BOOT_ADDRESS,$this->hard_drive->read(BOOT_SECTOR,SECTOR_SIZE));
        $this->cpu->jump();
        $this->cpu->execute();
    }
}

//test
$facade = new Facade();
$facade->start();
