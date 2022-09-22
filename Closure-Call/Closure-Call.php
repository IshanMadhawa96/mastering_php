<?php

class Customer {
    private $fristname;
    private $lastname;

    public function __construct($fristname,$lastname){
        $this->fristname = $fristname;
        $this->lastname = $lastname;
    }
}

$customer = new Customer('John','Doe');

$greeting =  function($msg){
    return  "$msg $this->fristname $this->lastname";
};

echo $greeting->call($customer,'Hi');
