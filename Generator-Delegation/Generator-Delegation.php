<?php
// A generator in PHP is a function that allows us to iterate over data 
//without needing to build an array in memory. Unlike a standard function, which can return only a single value,
//a generator can yield as many values as it needs to.

// What is iteration with example?
// Iteration is the process of repeating steps. For example, a very simple algorithm for eating breakfast cereal might 
// consist of these steps: put cereal in bowl. add milk to cereal. spoon cereal and milk into mouth.
function gen1(){
    yield '1';
    yield '2';
    yield '3';
}
function gen2(){
    yield '4';
    yield '5';
    yield '6';
}

function gen3(){
    yield '7';
    yield '8';
    yield from gen1();
    yield '9';
    yield from gen2();
    yield '10';
}

// foreach (gen1() as $number){
//     echo $number;
// }
foreach (gen3() as $number){
    echo $number;
}
//https://iwconnect.com/understanding-php-generators-memory-performance/
// https://alanstorm.com/php-generators-from-scratch/

// function getFibonacci()
// {
//     $i = 0;
//     $k = 1; //first fibonacci value
//     yield $k;
//     while(true)
//     {
//         $k = $i + $k;
//         $i = $k - $i;
//         yield $k;       
//     }
// }

// $y = 0;

// foreach(getFibonacci() as $fibonacci)
// {
//     echo $fibonacci . "\n";
//     $y++;   
//     if($y > 30)
//     {
//         break; // infinite loop prevent
//     }
// }