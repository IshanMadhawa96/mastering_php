<?php
class Customer{
    public function __construct(){
        echo '__construct';
    }

    public function __destruct(){
        echo '__destruct';
    }

    public function __toString(){
        echo '__toString';
        return '__toString';
    }

    public function __call($name,$argumnts){
        echo '__call';
    }
}

$customer = new Customer();

$s = serialize($customer);
$u = unserialize($s);

echo get_class($u);

echo '<br>';
$u = unserialize($s,['allowed_classes'=>false]);

echo get_class($u);