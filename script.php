<?php

interface IMachine {
    public function moveForward();
    public function moveBack();
    public function moveLeft();
    public function moveRight();
    public function stop();
    public function honk();
    public function windshieldWipers();
}

abstract class Machine implements IMachine {
    public $color;
    protected $speed;
    protected $windshieldWipersStatus;

    public function moveForward() {}
    public function moveBack() {}
    public function moveLeft() {}
    public function moveRight() {}
    public function stop() {}
    public function honk() {}
    public function windshieldWipers() {}
}

class Car extends Machine {
    public $color;
    protected $speed;
    protected $windshieldWipersStatus;
    public $interiorTrim;

    public function nitro() {}
}

class Tank extends Machine {
    public $color;
    protected $speed;
    protected $windshieldWipersStatus;
    public $shell;
    protected $shellCount;

    public function fire() {}
}

class Bulldozer extends Machine {
    public $color;
    protected $speed;
    protected $windshieldWipersStatus;
    public $bladeType;

    public function bladeСontrol() {}
}

function startMachine(Machine $machine) {
    $machine->moveForward();
    $machine->honk();

    if ($machine instanceof Car) {
        $machine->moveLeft();
        $machine->nitro();
    } elseif ($machine instanceof Tank) {
        $machine->moveBack();
        $machine->fire();
    } elseif ($machine instanceof Bulldozer) {
        $machine->moveRight();
        $machine->bladeСontrol();
    }

    $machine->stop();
}

startMachine(new Car());
startMachine(new Tank());
startMachine(new Bulldozer());
