<?php
$object = new Class{
    public function message($msg){
        return "Hello $msg";
    }
};

echo $object->message("PHP");
