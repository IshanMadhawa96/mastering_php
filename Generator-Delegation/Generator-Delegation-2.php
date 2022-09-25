<?php

function gen(){
    yield 'A';
    yield 'B';
    yield 'C';

    return 'gen-return';
}

$genarator = gen();

var_dump($genarator);

if ($genarator->valid() === false) {
    var_dump($genarator->getReturn());
}

foreach ($genarator as $letter){
    echo $letter;
}

var_dump($genarator->getReturn());