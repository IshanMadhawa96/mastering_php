<?php
declare(strict_types=1);// enable type checking

function divideTwoNumbers(int $number1,int $number2):int{
    return $number1/$number2;
}

echo "Interger Output";
echo "</br>";
var_dump(divideTwoNumbers(10,2));
echo "</br>";
echo "Foalt Output";
echo "</br>";
var_dump(divideTwoNumbers(10,3));