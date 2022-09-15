<?php

class TestClass{}
interface TheInterface{}
trait TheTrait{};
//creating anonymouse class
$object = new class('A','B','C') extends TestClass implements TheInterface{
    use TheTrait;

    public $A;
    private $B;
    protected $C;
    //constructor
    public function __construct($A,$B,$C){
        $this->A=$A;
        $this->B=$B;
        $this->C=$C;
    }
};
var_dump($object);
